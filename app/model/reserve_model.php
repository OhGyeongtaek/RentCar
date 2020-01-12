<?php
	class reserveModel extends model{
		public function chk(){
			$sql = "SELECT * FROM `reserve` WHERE 
						`car`	= ? AND
						`color` = ? AND
						`fuel`	= ?";

			$data = $this->resultAll($sql,array(	$_GET['car'],
													$_GET['color'],
													$_GET['fuel']));

			return is_array($data)? $data : array();
		}

		public function post(){
			$sql = 'INSERT INTO `reserve` SET
							`car`		= ?,
							`fuel`		= ?,
							`color`		= ?,
							`id`		= ?,
							`s_date`	= ?,
							`e_date`	= ?';
			
			$this->query($sql,array(	$_POST['car'],
										$_POST['fuel'],
										$_POST['color'],
										$_SESSION['id'],
										$_POST['s_date'],
										$_POST['e_date'] ));
		}

		public function getList(){
			$sql = 'SELECT * FROM `reserve` WHERE id = ?';
			return $this->resultAll($sql,array($_SESSION['id']));
		}

		public function _return(){
			$sql = 'UPDATE `reserve` SET `type` = ? WHERE idx = ?';
			$this->query($sql,array(	'return',
										$_GET['idx'] ));
		}
	}
