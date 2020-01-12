<section id="body">
	<section class="contUp">
			<div class="animation">
				<ul>
					<li class="slide"></li>
					<li></li>
					<li></li>
				</ul>
			</div>
		<section>
			<section class="upCont">
				<span>&lt;</span>
				<?php echo $logChk;?>
				<div class='slideBtn'>
					<span data-slide='1'></span>
					<span data-slide='2'></span>
					<span data-slide='3'></span>
				</div>
				<span>&gt;</span>
			</section>		
		</section>
	</section>
	<!--Cont Up End-->

	<section class="contCenter">
		<section class='wrapCenter'>
			
			<div>
				<figure>
					<a href="mailTo:rudxor97@naver.com"><img src="/img/mail.png" alt="mail"/></a>
					<figcaption><a href="mailTo:rudxor97@naver.com">MAIL</a></figcaption>
				</figure>
				<figure>
					<img src="/img/search.png" alt="search" data-location="/view/search/search"/>
					<figcaption data-location="/view/search/search">SEARCH</figcaption>
				</figure>
				<figure>
					<img src="/img/reserve.png" alt="reserve" data-location="/view/reserve/reserve"/>
					<figcaption data-location="/view/reserve/reserve">RESERVE</figcaption>
				</figure>
			</div>

			<form action="/view/search" method="get">
				<input type="text" name="key" />
				<input type="submit" value="검색"/>
			</form>

		</section>
	</section>
	<section class="content">
		<section class="wrapCont">
			<section class="contLeft">
				<figure>
					<img src="/img/cont_left.png" alt="contLeft" />
					<figcaption>
						<strong>회사소개</strong>
						<p>디자인할 때, 스타일, 색상, 레이아웃 설개, 타이포그래피,다이어그램,이미지, 비디오,멀티미디어 효과, 유저-프랜들리,인터페이지스 등을 고려하여 심미적으로 제작한다.</p>
					</figcaption>
				</figure>
				<input type="button" value="자세히보기" data-location="/view/intro/intro"/>
			</section>
			<section class="contRight">
				<form action="/view/reserve/reserve" method="post">
					<strong>온라인 예약</strong>
					<div class="selectBox">
						<dl>
							<dt><label for="carColor">차량색상</label></dt>
							<dd>
								<select name="carColor" id="carColor">
									<option value="block">	검정색</option>
									<option value="gray">	회색</option>
									<option value="red">	빨강색</option>
									<option value="white">	흰색</option>
								</select>
							</dd>
							<dt><label for="fuel">사용연료</label></dt>
							<dd>
								<select name="fuel" id="fuel" class="">
									<option value="gasoline">	휘발료</option>
									<option value="diesel">		경유</option>
									<option value="hvbrid">		하이브리드</option>
								</select>
							</dd>
						</dl>
						<dl class="start">
							<dt><label for="">예약시작</label></dt>
							<dd>
								<input type="text" name="start" id="start"/>
								<select name="sTime" id="sTime">
									<option value="">시</option>
									<?php
										for($i=0; $i<=24;$i++){
											echo '<option value="'.$i.':00">'.$i.'시</option>';
										}
									?>
								</select>
								<select name="sMinute" id="sMinute">
									<option value="" selected="selected">분</option>
									<?php 
										for($i=0;$i<=60; $i++){
											echo '<option value="'.$i.'">'.$i.'분</option>';
										}
									?>
								</select>
							</dd>
						</dl>
						<dl class="end">
							<dt><label for="end">예약종료</label></dt>
							<dd>
								<input type="text" name="end" id="end" />
								<select name="eTime" id="eTime">
									<option value="" selected="selected">시</option>
									<?php
										for($i=0; $i<=24;$i++){
											echo '<option value="'.$i.':00">'.$i.'시</option>';
										}
									?>
								</select>
								<select name="eMinute" id="eMinute">
									<option value="" selected="selected">분</option>
									<?php 
										for($i=0;$i<=60; $i++){
											echo '<option value="'.$i.'">'.$i.'분</option>';
										}
									?>
								</select>
							</dd>
						</dl>
					</div>
					<div class="okBox">
						<input type="submit" value="예약하기"/>
					</div>
				</form>
			</section>
		</section>
	</section><!--cont Down end-->
	<section class='guide'>
		<strong>차량안내</strong>
		<div>
			<figure data-location="/view/guide/guide">
				<img src="/img/car1.png" alt="rentCar1" />
				<figcaption>그랜드 스타렉스</figcaption>
			</figure>
			<figure data-location="/view/guide/guide">
				<img src="/img/best1.png" alt="bestCar" class="bestImg"/>
				<img src="/img/car2.png" alt="rentCar2" />
				<figcaption>제네시스</figcaption>
			</figure>
			<figure data-location="/view/guide/guide">
				<img src="/img/car3.png" alt="rentCar3" />
				<figcaption>산타페</figcaption>
			</figure>		
		</div>
		<div>
		<figure data-location="/view/guide/guide">
			<img src="/img/car4.png" alt="rentCar4" />
			<figcaption>에쿠스</figcaption>
		</figure>
		<figure data-location="/view/guide/guide">
			<img src="/img/car5.png" alt="rentCar5" />
			<figcaption>그랜져</figcaption>
		</figure>
		<figure data-location="/view/guide/guide">
			<img src="/img/car6.png" alt="rentCar6" />
			<figcaption>소나타</figcaption>
		</figure>
		
		</div>
	</section>
</section><!--body end-->