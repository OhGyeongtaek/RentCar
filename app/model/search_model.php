<?php
	class searchModel extends model{

		public function getList(){
			$sql = 'SELECT *
					FROM `car`
					WHERE	`name`	 LIKE "%'.$_GET['key'].'%" OR
							`color`  LIKE "%'.$_GET['key'].'%" OR
							`fuel`	 LIKE "%'.$_GET['key'].'%" OR
							`number` LIKE "%'.$_GET['key'].'%"
					LIMIT '.$_GET['standard'].',5';
			
			return $this->resultAll($sql);
		}

		public function setting($data){
			$sql = 'INSERT INTO `car` SET
						`name`		= ?,
						`color`		= ?,
						`fuel`		= ?,
						`number`	= ?';
			foreach($data as $key){
				$this->query($sql, array(	$key->carname,
											$key->color,
											$key->fuel,
											$key->carnumber));
			}
		}
	}