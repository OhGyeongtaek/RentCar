<?php
header('content-type:text/html; charset=utf-8');
error_reporting(E_ALL);
$path = $_SERVER['DOCUMENT_ROOT'].'/';
session_start();
if(empty($_GET['mode'])){
	header('Location:/view');
	exit();
}
require $path.'core/init.php';
$view = $_GET['mode'] == 'view';
if(is_file(CON.$_GET['controller'].'.php')){
	include CON.$_GET['controller'].'.php';
	$con = new $_GET['controller']();

	if(method_exists($con,'init')) $con->init();
	if(method_exists($con,'_'.$_GET['method'])){
		$con -> {'_'.$_GET['method']}();
	}else if($view){
		if(method_exists($con->view,'_'.$_GET['controller'])){
			$con->view->{'_'.$_GET['controller']}();
		}
	}
}else if($view){
	$con = new controller();
	if(method_exists($con,'_'.$_GET['method'])){
		$con->{'_'.$_GET['controller']}();
	}
}

if($view && isset($con)){
	$con->view->execute();	
}