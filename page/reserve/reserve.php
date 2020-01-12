<section class="reserve">
	<!--draggable-->
	<section class="reserCar">
		<figure>
			<img src="/img/reserve1.jpg" alt="reserve" data-num="1번차" data-carNum="30허4225"/>
			<figcaption>
				<div>
					<dl>
						<dt>차량 색상</dt>
						<dd>검정,흰색,회색,빨간색</dd>
					</dl>
					<dl>
						<dt>연료</dt>
						<dd>하이브리드,휘발유,경유</dd>
					</dl>
					<dl>
						<dt>차량번호</dt>
						<dd>30허4225</dd>
					</dl>
				</div>
			</figcaption>
		</figure>
		<figure>
			<img src="/img/reserve2.jpg" alt="reserve" data-num="2번차" data-carNum="30허4315"/>
			<figcaption>
				<div>
					<dl>
						<dt>차량 색상</dt>
						<dd>검정,흰색,회색,빨간색</dd>
					</dl>
					<dl>
						<dt>연료</dt>
						<dd>하이브리드,휘발유,경유</dd>
					</dl>
					<dl>
						<dt>차량번호</dt>
						<dd>30허4315</dd>
					</dl>
				</div>
			</figcaption>
		</figure>
		<figure>
			<img src="/img/reserve3.jpg" alt="reserve" data-num="3번차" data-carNum="30허1934" />
			<figcaption>
				<div>
					<dl>
						<dt>차량 색상</dt>
						<dd>검정,흰색,회색,빨간색</dd>
					</dl>
					<dl>
						<dt>연료</dt>
						<dd>하이브리드,휘발유,경유</dd>
					</dl>
					<dl>
						<dt>차량번호</dt>
						<dd>30허1934</dd>
					</dl>
				</div>
			</figcaption>
		</figure>
		<figure>
			<img src="/img/reserve4.jpg" alt="reserve" data-num="4번차" data-carNum="30허1531" />
			<figcaption>
				<div>
					<dl>
						<dt>차량 색상</dt>
						<dd>검정,흰색,회색,빨간색</dd>
					</dl>
					<dl>
						<dt>연료</dt>
						<dd>하이브리드,휘발유,경유</dd>
					</dl>
					<dl>
						<dt>차량번호</dt>
						<dd>30허1531</dd>
					</dl>
				</div>
			</figcaption>
		</figure>
		<figure>
			<img src="/img/reserve5.jpg" alt="reserve" data-num="5번차" data-carNum="30허5413" />
			<figcaption>
				<div>
					<dl>
						<dt>차량 색상</dt>
						<dd>검정,흰색,회색,빨간색</dd>
					</dl>
					<dl>
						<dt>연료</dt>
						<dd>하이브리드,휘발유,경유</dd>
					</dl>
					<dl>
						<dt>차량번호</dt>
						<dd>30허5413</dd>
					</dl>
				</div>
			</figcaption>
		</figure>
		<figure>
			<img src="/img/reserve6.jpg" alt="reserve" data-num="6번차" data-carNum="30허5299" />
			<figcaption>
				<div>
					<dl>
						<dt>차량 색상</dt>
						<dd>검정,흰색,회색,빨간색</dd>
					</dl>
					<dl>
						<dt>연료</dt>
						<dd>하이브리드,휘발유,경유</dd>
					</dl>
					<dl>
						<dt>차량번호</dt>
						<dd>30허5299</dd>
					</dl>
				</div>
			</figcaption>
		</figure>
	</section>

	<!--droppable-->

	<section class="dropBox">
		<div class="carBox">드래그 해주세요.</div>
		<form action="/action/reserve/save" method="post">
			<div class="reserveBox">
				<input type="hidden" class="startVal" name="start"/>
				<input type="hidden" class="endVal" name="end"/>
				<input type="hidden" class="carNum" name="carNum" />
				<input type="hidden" class="src" name="src" />
				<input type="hidden" class="num" name="num" />
				<dl>
					<dt>예약일</dt>
					<dd><input type="text" class="start" readonly="readonly" /></dd>
				</dl>
				<dl>
					<dt>예약종료일</dt>
					<dd><input type="text" class="end" readonly="readonly" /></dd>
				</dl>
				<dl>
					<dt>차량색상</dt>
					<dd>
						<select name="color" id="color">
							<option value="black" selected>검정색</option>
							<option value="white">흰색</option>
							<option value="gray">회색</option>
							<option value="red">빨간색</option>
						</select>
					</dd>
				</dl>
				<dl>
					<dt>연료</dt>
					<dd>
						<select name="fuel" id="fuel">
							<option value="hiv" selected>하이브리드</option>
							<option value="diesel">경유</option>
							<option value="gasoline">휘발유</option>
						</select>
					</dd>
				</dl>
				<dl>
					<dd class="chkView"><input type="button" value="차량확인하기" /></dd>
				</dl>
				<dl>
					<dt>가능여부</dt>
					<dd class="okText"></dd>
				</dl>
			</div>
		</form>
	</section>
</section>