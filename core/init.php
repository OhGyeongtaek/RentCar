<?php 
	define('APP',$path.'app/');
	define('BASE',$path.'core/');
	define('PAGE',$path.'page/');
	
	define('CON',APP.'controller/');
	define('VIEW',APP.'view/');
	define('MODEL',APP.'model/');

	$_SESSION['lv'] = isset($_SESSION['id'])? 1 : 0;
	if(isset($_SESSION['id'])){
		$_SESSION['lv'] = ($_SESSION['lv'] == 1 && $_SESSION['id'] == 'amdin')? 2 : 1;
	}
	
	include BASE.'function.php';
	include BASE.'db.php';
	include BASE.'db.statement.php';
	include BASE.'view.php';
	include BASE.'controller.php';
