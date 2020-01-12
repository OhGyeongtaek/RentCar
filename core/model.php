<?php
	class model{
		public $db;

		public function __construct(){
			$this->db = new PDO('mysql:host=127.0.0.1; dbname=lant; charset=utf8','root','');
			$this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}

		protected function query($sql,$arr=array()){
			try{
				$stmt = $this->db->prepare($sql);
				$stmt->execute($arr);
				return $stmt;
			}catch(PDOException $e){
				exit(nl2br($e));
			}
		}

		private function entity($data){
			if(is_array($data)){
				foreach($data as $key => $val){
					if(is_array($val)) $data[$key] = $this->entity($val);
					else			   $data[$key] = htmlentities(stripslashes($val),ENT_QUOTES,'utf-8');
				}
			}
			return $data;
		}

		protected function result($sql,$arr=array()){
			return $this->entity($this->query($sql,$arr)->fetch());
		}

		protected function resultAll($sql,$arr=array()){
			return $this->entity($this->query($sql,$arr)->fetchAll());
		}
	}