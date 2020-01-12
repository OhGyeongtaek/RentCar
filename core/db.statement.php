<?php 

	class statement extends PDOStatement{
		
		function result($close = true){
			$data = $this->fetch();
			if(is_object($data)){
				foreach($data as $key =>$val){
					$data->{$key} = htmlentities(stripslashes($val),ENT_QUOTES,'UTF-8');
				}
			}
			if($close === true) $this->closeCursor();
			return $data;
		}

		function resultAll(){
			$realdata = array();
			while($data= $this->result(false)){
				$realdata[] = $data;
			}
			$this->closecursor();
			return $realdata;
		}
		public function num(){
			return $this->rowCount();
		}
	}