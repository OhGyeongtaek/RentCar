<?php
	class View{
		public $data = array();
		public $model = array();

		public function init(){
			$this->data['link']		= empty($_GET['controller'])? 'main' : 'sub';
			$this->data['nav']		= $this->model['menu']->getMenu();
			$this->data['logChk']	= $this->model['user']->logChk();
			if($this->data['link'] == 'sub' && $_GET['mode'] == 'view'){
				
				$this->data['data']	= $this->model['menu']->getData();
				$this->data['sub']	=	$this->model['menu']->subMenu();
				
				if($this->data['sub'] == false){
					$this->data['sub'] = '';
				}else{
					$this->data['data']	=	$this->data['data'][$_GET['controller']]['sub'][$_GET['method']];
				}
				$max = empty($this->data['data']['max'])?	3 : $this->data['data']['max'];
				$min = empty($this->data['data']['min'])?	0 : $this->data['data']['min'];
				if($max < $_SESSION['lv']||$min > $_SESSION['lv']){
					alert('접근 할 수 없습니다.','view','/view');
					exit();
				}
				$this->data['url']	=	PAGE.$_GET['controller'].'/'.$_GET['method'];
				$this->data['url'] .=	($_GET['method'] == 'intro')? '.html' : '.php';
				$this->data['now']  =	$this->model['menu']->nowPage();
			}
		}

		public function execute(){
			$this->init();
			extract($this->data);
			if($_GET['mode'] == 'view'){
				include PAGE.'header.php';
				include PAGE.$this->data['link'].'.php';
				include PAGE.'footer.php';
			}
		}
	}