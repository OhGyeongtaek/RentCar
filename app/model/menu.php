<?php
class menuModel extends DB{

	private $menu = array();
	public function __construct(){
		parent::__construct();
		$sql = 'SELECT s.sod, m.mod, mTitle, sTitle, porder, s.maxLv, s.minLv
				FROM `menu` AS s JOIN(
					SELECT `mod`
					FROM `menu`
					WHERE `sod` IS NULL
				) AS m ON s.mod = m.mod
				ORDER BY `mod` ASC,`sod` ASC ';

		$data = $this->query($sql)->resultAll();

		foreach($data as $val){
			if($val['sod'] == null){
				$main = $val['porder'];
				$this->menu[$main] = array(
					'title' => $val['mTitle'],
					'porder'=> $val['porder'],
					'file'	=> $val['sTitle']);
			}else{
				$this->menu[$main]['sub'][$val['sTitle']] = array(
					'title' => $val['mTitle'],
					'porder'=> $val['porder'],
					'file'	=> $val['sTitle'],
					'max'	=> $val['maxLv'],
					'min'	=> $val['minLv'] );
			}
		}
	}

	public function getMenu(){
		$html = '<ul>';
		foreach($this->menu as $key => $val){
			$data  = $this->menu[$val['porder']];
			$html .= '<li>';
			$html .= '<a href="/view/'.$data['porder'].'/'.$data['file'].'">'.$data['title'].'</a>';
			if(isset($val['sub'])){
				$isMenu = sizeof($val['sub']) >= 1;
				$html .= ($isMenu)? '<ul>' : '';
				foreach($val['sub'] as $sData){
					$html .= ' <li><a href="/view/'.$sData['porder'].'/'.$sData['file'].'">'.$sData['title'].'</a></li>';
				}
				$html .= ($isMenu)? '</ul>' : '';
			}
			$html .= '</li>';
		}
		$html .= '</ul>';
		return $html;
	}

	public function getData(){
		return $this->menu;
	}

	public function subMenu(){
		if(empty($this->menu[$_GET['controller']]['sub'])) return '';
		$html = '<div><dl>';
		foreach($this->menu[$_GET['controller']]['sub'] as $key => $data){
			if($data['file'] == $_GET['method']){
				$html .= '<dt>'.$data['title'].'</dt>';
			}else{
				$html .= '<dd><a href="/view/'.$data['porder'].'/'.$data['file'].'">'.$data['title'].'</a></dd>';
			}
		}
		$html .= '</dl></div>';
		return $html;
	}

	public function nowPage(){
		if(empty($this->menu[$_GET['controller']]['sub'])) return false;
		$data = $this->menu[$_GET['controller']]['sub'][$_GET['method']];
		$parent = $this->menu[$_GET['controller']];
		$html = '<ul>';
		$html .= '<li><strong>'.$data['title'].'</strong></li>';
		$html .= '<li>';
		$html .= '<span><a href="/view">HOME</a> &gt;</span>';
		$html .= '<span><a href="/view/'.$parent['porder'].'/'.$parent['file'].'">'.$parent['title'].'</a> &gt;</span>';
		$html .= '<span><a href="/view/'.$data['porder'].'/'.$data['file'].'">'.$data['title'].'</a></span>';
		$html .= '</li>';
		$html .= '</ul>';
		return $html;
	}
}

