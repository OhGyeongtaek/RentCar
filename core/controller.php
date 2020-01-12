<?php
class controller{
	public $view;
	private $is_view;
	protected $model = array();

	public function __construct(){
		$this->is_view = $_GET['mode']  == 'view';
		$this->view = new View();
		$this->loadModel('menu');
		$this->loadModel('user');
	}

	public function loadModel($name){
		if(empty($this->model[$name])){
			require MODEL.$name.'.php';
			$model = $name.'Model';
			$this->model[$name] = new $model();
			if($this->is_view) $this->view->model[$name] = $this->model[$name];
		}
	}
}