<?php
	class user extends controller{

		public function init(){
			$this->loadModel('user');
		}

		public function _login(){
			$login = $this->model['user']->login();
			if($login){
				$_SESSION['id'] = $_POST['id'];
				alert('로그인이 완료되었습니다.','view','/view');
			}else{
				alert('일치하는 아이디가 없습니다.','view','/view');
			}
		}
		public function _logout(){
			if(empty($_SESSION['id'])){
				alert('로그인후 이용해주세요.','view','/view');
				exit();
			}
			unset($_SESSION['id']);
			alert('로그아웃이 되었습니다.','view','/view');
		}
	}