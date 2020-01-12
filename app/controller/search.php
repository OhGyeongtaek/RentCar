<?php
	class search extends controller{
		private $get;

		public function init(){
			$this->loadModel('search');
			$this->get = $this->model['search'];
		}

		public function _search(){
			$data = $this->get->search();
			$html = '';
			foreach($data as $key => $val){
				$list  = $data[$key];
				$html .= '<tr>';
				$html .= '<td>'.$list['carname'].'</td>';
				$html .= '<td>'.$list['color'].'</td>';
				$html .= '<td>'.$list['fuel'].'</td>';
				$html .= '<td>'.$list['carnum'].'</td>';
				$html .= '</tr>';
			}
			$this->view->data['list'] = $html;
		}
		
		public function _listadd(){
			$data = $this->get->listAdd();
			$this->html($data);
		}

		public function _searchKey(){
			if(isset($_POST['key'])){
				$data = $this->get->searchKey();
				$this->html($data);
			}
			echo 'dddd';
		}

		private function html($data){
			$html = '';
			foreach($data as $key => $val){
				$list  = $data[$key];
				$html .= '<tr>';
				$html .= '<td>'.$list['carname'].'</td>';
				$html .= '<td>'.$list['color'].'</td>';
				$html .= '<td>'.$list['fuel'].'</td>';
				$html .= '<td>'.$list['carnum'].'</td>';
				$html .= '</tr>';
			}
			echo $html;
		}
	}