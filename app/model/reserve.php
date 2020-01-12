<?php
	class reserveModel extends DB{
		public function chk(){
			$sql = 'SELECT * FROM `reserve`
					WHERE	`color`	= ? AND
							`num`	= ? AND
							`fuel`	= ?';

			$arr = Array( $_POST['color'],$_POST['num'],$_POST['fuel'] );

			$query = $this->query($sql,$arr)->resultAll();
			print_R($query);
			return $query;
		}

		public function save(){
			if(!isset($_SESSION['id'])) return false;
			$sql = 'INSERT INTO `reserve` SET
					`color`		=	?,
					`num`		=	?,
					`fuel`		=	?,
					`start`		=	?,
					`end`		=	?,
					`name`		=	?,
					`src`		=	?,
					`carnum`	=	?';
			
			$arr = Array(	$_POST['color'],
							$_POST['num'],
							$_POST['fuel'],
							$_POST['start'],
							$_POST['end'],
							$_SESSION['id'],
							$_POST['src'],
							$_POST['carNum']);

			$this->query($sql,$arr);

			return true;
		}

		public function getList(){
			$sql = 'SELECT * FROM `reserve`	WHERE name=? AND chk = 0';
			$data = $this->query($sql,array($_SESSION['id']))->resultAll();

			if(sizeof($data) <= 0){
				return false;
			}else{
				return $data;
			}

		}

		public function returnCar(){
			print_r($_POST);
			$sql = 'UPDATE `reserve` SET chk =1 WHERE idx=?';
			$this->query($sql,array($_POST['idx']));
		}
	}