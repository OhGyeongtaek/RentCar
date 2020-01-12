<?php

	class reserve extends controller{
		
		public function init(){
			$this->loadModel('reserve');
		}

		public function _chk(){
			$data = $this->model['reserve']->chk();
			if(!$data){
				alert('로그인을 해주세요','view','/view');
				exit();
			}else if(sizeof($data) == 0){
				echo '0';
				exit();
			}

			$chk = 0;
			foreach($data as $key => $val){
				if($_POST['start']<=$data[$key]['end'] && $_POST['end']>=$data[$key]['start']){
					$chk = 1;
				}
			}
			echo $chk;

		}

		public function _save(){
			$this->model['reserve']->save();
			alert('예약이 완료되었습니다.','view','/view/reserve/list');
		}

		public function _list(){
			$data = $this->model['reserve']->getList();
			$html ='';
			foreach($data as $key => $val){ 
				$html .= '<tr>
							<td><img src="'.$data[$key]['src'].'" title="img" alt="img"></td>
							<td>'.$data[$key]['num'].'</td>
							<td>'.$data[$key]['color'].'</td>
							<td>'.$data[$key]['fuel'].'</td>
							<td>'.$data[$key]['start'].'~'.$data[$key]['end'].'</td>
							<td>'.$data[$key]['carnum'].'</td>
							<td><input type="button" value="반납" class="returnCar" data-idx="'.$data[$key]['idx'].'"></input></td>
						 </tr>';
			}
			$this->view->data['list'] = $html;
		}

		public function _returnCar(){
			$this->model['reserve']->returnCar();
			$this->_list();
			echo $this->view->data['list'];
		}
	}