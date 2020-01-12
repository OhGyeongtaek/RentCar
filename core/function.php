<?php

function alert($txt, $type='', $url){
		echo '<script>alert("'.$txt.'")</script>';
	if(!empty($type)){
		if($type == 'view'){
			echo '<script>location.href="'.$url.'"</script>';
		}else{
			echo '<script>history.back()</script>';
		}
	}
}