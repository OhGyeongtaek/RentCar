<?php
	class user extends controller{
		public function _login(){
			if($_POST['id'] === 'admin' && $_POST['pw'] === '1234'){
				$_SESSION['id'] = 'admin';
				header('Location:/view');
			}else{
				script('아이디와 비밀번호를 확인해주세요.','main');
			}
		}

		public function _logout(){
			unset($_SESSION['id']);
		}
	}