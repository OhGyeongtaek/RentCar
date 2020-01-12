<?php

	class userModel extends DB{
		public function login(){
			$sql	= 'SELECT id FROM `user`
						WHERE `id`=? AND `pw`=? ';
			$array	= Array($_POST['id'],$_POST['pw']);
			$num = $this->query($sql,$array)->num();
			if($num >= 1){
				return true;
			}else{
				return false;
			}
		}
		
		public function logChk(){
			if(isset($_SESSION['id'])){
				$html = '
					<article class="login">
						<strong>환영합니다.</strong>
						<div>
							<p>'.$_SESSION['id'].'님 환영합니다.</p>
							<div class="btnBox">
								<input type="button" value="예약확인" data-location="/view/reserve/list">
								<input type="button" value="로그아웃" data-location="/action/user/logout">
							</div>
						</div>
					</article>
				';
			}else{
				$html = '<article class="login">
							<strong class="title">로그인</strong>
							<form action="/action/user/login" method="POST">
								<div>
									<dl>
										<dt><label for="id">아이디</label></dt>
										<dd><input type="text" name="id" id="id" /></dd>
									</dl>
									<dl>
										<dt><label for="pw">비밀번호</label></dt>
										<dd><input type="password" name="pw" id="pw" /></dd>
									</dl>
									<div class="btnBox">
										<input type="submit" value="로그인" />
										<input type="button" value="회원가입" data-location="/view/join"/>
									</div>
								</div>
							</form>
						</article>';
			}
			return $html;
		}
	}