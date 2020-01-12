<?php
	class reserve extends controller{
		public function _reserve_chk(){
			$data = $this->nowModel->chk();
			foreach($data as $key => $val){
				if($_GET['s_date']<=$val['e_date'] && $_GET['e_date']>=$val['s_date']){
					echo 1;
				}
			}
		}

		public function _reserve_post(){
			if(empty($_SESSION['id'])) header('Location:/view');
			 $this->nowModel->post();
			script('예약이 완료되었습니다.','url','/view/return/list');
		}

		public function _list(){
			if(empty($_SESSION['id'])) header('Location:/view');
			$this->view->data['list'] = $this->nowModel->getList();
		}

		public function _return(){
			$this->nowModel->_return();
			script('반납이 완료되었습니다.','return');
		}
	}