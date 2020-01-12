<section id="body">
	<section class="contUp">
		<section class="subMenu">
			<?php echo $sub?>
		</section>
	</section>
	<section class="content">
		<section class="nowPage">
			<?php echo $now?>
		</section>
		<?php 
			if($_GET['controller']=='intro' && $_GET['method'] == 'intro'){
				include '/attachment/intro.html';
			}else{
				include $url;
			}?>
	</section>
</section>