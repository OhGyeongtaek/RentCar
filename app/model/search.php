<?php
	$_SESSION['listNum'] = isset($_SESSION['listNum'])? $_SESSION['listNum'] : 5;
	class searchModel extends DB{
		
		public function search(){
			$sql = 'select * from car limit '.$_SESSION['listNum'];
			$query = $this->query($sql)->resultAll();
			return $query;
		}

		public function listAdd(){
			if($_SESSION['listNum'] >= 72) return '';
			$_SESSION['listNum'] += 3;
			return $this->search();
		}

		public function searchKey(){
			$sql = 'SELECT * FROM `car`
					WHERE
					carname like binary(?) OR
					carnum	like binary(?) OR
					color	like binary(?) OR
					fuel	like binary(?) OR
					limit '.$_SESSION['listNum'];

			$arr = array($_POST["key"],$_POST["key"],$_POST["key"],$_POST["key"]);
			return $this->query($sql,$arr)->resultAll();
		}
	}