<?php
	class DB{
		private $db;
		public function __construct(){
			$this->db = new PDO('mysql:host=127.0.0.1;dbname=rent;charset=utf8','root','');
			$this->db-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$this->db-> setAttribute(PDO::ATTR_STATEMENT_CLASS,array('Statement'));
		}
		public function query($sql,$arr = array()){
			try{
				$stmt = $this->db->prepare($sql);
				$stmt->execute($arr);
				return $stmt;
			}catch(PDOException $error){
				echo (nl2br($error));
			}
		}
	}