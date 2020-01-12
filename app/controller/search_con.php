<?php
	class search extends controller{
		public function _search(){
		}

		public function _getList(){
			$data = $this->nowModel->getList();
			$this->html($data);
		}
		
		public function xml(){
			$url = _STATIC."data/xml.xml";

			$response = file_get_contents($url);

			$object = simplexml_load_string($response);
			
			$this->nowModel->setting($object);
		}

		public function html($html){
			foreach($html as $key => $val){
				echo '	<tr>
							<td>'.str_replace($_GET['key'],'<span style="background:red">'.$_GET['key'].'</span>',$val['name']).'</td>
							<td>'.str_replace($_GET['key'],'<span style="background:red">'.$_GET['key'].'</span>',$val['color']).'</td>
							<td>'.str_replace($_GET['key'],'<span style="background:red">'.$_GET['key'].'</span>',$val['fuel']).'</td>
							<td>'.str_replace($_GET['key'],'<span style="background:red">'.$_GET['key'].'</span>',$val['number']).'</td>
						</tr>
					';
			}
		}
	}