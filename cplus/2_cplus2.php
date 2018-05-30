<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width", initial-scale="1">
		<title>RNC C++ Coding</title>
		<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="./style.css">
		<style>
		@font-face {
				    font-family: BM JUA;
				    src: url('./fonts/BM-JUA.eot');
				    src: url('./fonts/BM-JUA?#iefix') format('embedded-opentype'),
				         url('./fonts/BM-JUA.woff') format('woff'),
				         url('./fonts/BM-JUA.ttf') format('truetype');
				    font-weight: normal;
				    font-style: normal;
					}
		* {font-family:'BM JUA','배달의민족 주아',sans-serif;}
		h3{
			line-height : 2.1;
			}
</style>
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>					
					<a class="navbar-brand" href="./index.php">RNC C++</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="./index.php">소개<span class="sr-only"></span></a></li>
						<li><a href="#"> 강사진</a></li>
						<li class="active" class="dropdown">
							<a href="./index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">강의 <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="./1_cplus1.php">1학년C++</a></li>
								<li><a href="./2_cplus1.php">2학년C++</a></li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="내용을 입력하세요.">
						</div>
						<button type="submit" class="btn btn-default">검색</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="./resourceCenter.php"> 자료실 </a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">접속하기 <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">로그인</a></li>
								<li><a href="#">회원가입</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div class="container">
    	<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h1 class="panel-title">강의목록</h1>
						<div class="pull-right">
						</div>
					</div>
					<div class="panel-body">
						<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="강의 제목을 입력하세요." />
					</div>
					<table class="table table-hover" id="dev-table">
						<thead>
							<tr>
								<th>number</th>
								<th>Title</th>
							</tr>
						</thead>
						<tbody class="lecture-table">
							<tr>
								<td><a href="./2_cplus1.php">1</a></td>
								<td><a href="./2_cplus1.php">제1강 클래스란 무엇인가?</a></td>
							</tr>
							<tr>
								<td><a href="./2_cplus2.php">2</a></td>
								<td><a href="./2_cplus2.php">제2강 클래스란 무엇인가? -2- </a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
			<div class="row">
				<div class="col-sm-12">
					<h1>클래스란 무엇인가? -2- </h1>
					<hr>
				</div>
				<div class="col-sm-12">
				</div>
				<div class="col-sm-12">
					<h3>1번 극장 예약하기</h3>
					<hr>
					<h3>
						배열을 이용하여 간단한 극장 예약 시스템을 만들어 보자.<br>
						작은 극장이라 좌석이 5개밖에 안된다.<br>
						사용자가 예약을 하려하면 먼저 좌석 배치표를 보여준다.<br>
						예약이 끝난 좌석은 1로, 예약이 안 된 좌석은 0으로 나타낸다.<br>
						예약을 종료하려면 -1을 입력한다.<br>
						모든 자리가 예약이 되면 "모든 자리가 예매되었습니다."라고 출력하고 종료한다.<br><br>

						출력예제
						<img class="img-responsive" src="./images/4.png">
					</h3>

					<div class="colorscripter-code" style="color:#010101; font-family:Consolas, 'Liberation Mono', Menlo, Courier, monospace !important; position:relative !important; overflow:auto"><table class="colorscripter-code-table" style="margin:0; padding:0; border:none; background-color:#fafafa; border-radius:4px;" cellspacing="0" cellpadding="0"><tr><td style="padding:6px; border-right:2px solid #e5e5e5"><div style="margin:0; padding:0; word-break:normal; text-align:right; color:#666; font-family:Consolas, 'Liberation Mono', Menlo, Courier, monospace !important; line-height:130%"><div style="line-height:130%">1</div><div style="line-height:130%">2</div><div style="line-height:130%">3</div><div style="line-height:130%">4</div><div style="line-height:130%">5</div><div style="line-height:130%">6</div><div style="line-height:130%">7</div><div style="line-height:130%">8</div><div style="line-height:130%">9</div><div style="line-height:130%">10</div><div style="line-height:130%">11</div><div style="line-height:130%">12</div><div style="line-height:130%">13</div><div style="line-height:130%">14</div><div style="line-height:130%">15</div><div style="line-height:130%">16</div><div style="line-height:130%">17</div><div style="line-height:130%">18</div><div style="line-height:130%">19</div><div style="line-height:130%">20</div><div style="line-height:130%">21</div><div style="line-height:130%">22</div><div style="line-height:130%">23</div><div style="line-height:130%">24</div><div style="line-height:130%">25</div><div style="line-height:130%">26</div><div style="line-height:130%">27</div><div style="line-height:130%">28</div><div style="line-height:130%">29</div><div style="line-height:130%">30</div><div style="line-height:130%">31</div><div style="line-height:130%">32</div><div style="line-height:130%">33</div><div style="line-height:130%">34</div><div style="line-height:130%">35</div><div style="line-height:130%">36</div><div style="line-height:130%">37</div><div style="line-height:130%">38</div><div style="line-height:130%">39</div><div style="line-height:130%">40</div><div style="line-height:130%">41</div><div style="line-height:130%">42</div><div style="line-height:130%">43</div><div style="line-height:130%">44</div><div style="line-height:130%">45</div><div style="line-height:130%">46</div><div style="line-height:130%">47</div><div style="line-height:130%">48</div><div style="line-height:130%">49</div><div style="line-height:130%">50</div><div style="line-height:130%">51</div><div style="line-height:130%">52</div><div style="line-height:130%">53</div></div></td><td style="padding:6px 0"><div style="margin:0; padding:0; color:#010101; font-family:Consolas, 'Liberation Mono', Menlo, Courier, monospace !important; line-height:130%"><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#0086b3">#include</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>iostream<span style="color:#039C43"></span><span style="color:#ff3399">&gt;</span></div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;</div><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#ff3399">using</span>&nbsp;<span style="color:#ff3399">namespace</span>&nbsp;<span style="color:#0099cc">std</span>;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;</div><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#ff3399">class</span>&nbsp;TheaterReservation&nbsp;{</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#0099cc">bool</span>&nbsp;iSeat;</div><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#ff3399">public</span>:</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;TheaterReservation();</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#ff3399">void</span>&nbsp;reserveSeat(<span style="color:#0099cc">bool</span>&nbsp;r)&nbsp;{</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iSeat&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">=</span>&nbsp;r;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;}</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#0099cc">bool</span>&nbsp;isReserved()&nbsp;{</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#ff3399">return</span>&nbsp;iSeat;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;}</div><div style="padding:0 6px; white-space:pre; line-height:130%">};</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;</div><div style="padding:0 6px; white-space:pre; line-height:130%">TheaterReservation::TheaterReservation()&nbsp;{</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;iSeat&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">=</span>&nbsp;<span style="color:#ff3399">false</span>;</div><div style="padding:0 6px; white-space:pre; line-height:130%">}</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;</div><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#0099cc">int</span>&nbsp;main()&nbsp;{</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#0099cc">int</span>&nbsp;CntSeat&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">=</span>&nbsp;<span style="color:#308ce5">5</span>;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#0099cc">int</span>&nbsp;isFull&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">=</span>&nbsp;<span style="color:#308ce5">0</span>;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#999999">//&nbsp;객체배열을&nbsp;이용한&nbsp;코드&nbsp;작성</span></div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#ff3399">while</span>&nbsp;(<span style="color:#308ce5">1</span>)&nbsp;{</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#0099cc">cout</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;<span style="color:#993333">"----Screen----"</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;<span style="color:#0099cc">endl</span>;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#ff3399">for</span>&nbsp;(<span style="color:#0099cc">int</span>&nbsp;i&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">=</span>&nbsp;<span style="color:#308ce5">0</span>;&nbsp;i&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;CntSeat;&nbsp;i<span style="color:#039C43"></span><span style="color:#ff3399">+</span><span style="color:#039C43"></span><span style="color:#ff3399">+</span>)&nbsp;{</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#0099cc">cout</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;i&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">+</span>&nbsp;<span style="color:#308ce5">1</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;<span style="color:#993333">"&nbsp;"</span>;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#0099cc">cout</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;<span style="color:#0099cc">endl</span>;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#0099cc">cout</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;<span style="color:#993333">"--------------"</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;<span style="color:#0099cc">endl</span>;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#999999">//예약현황을&nbsp;출력&nbsp;코드&nbsp;작성</span></div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#0099cc">cout</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;<span style="color:#0099cc">endl</span>;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#0099cc">cout</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;<span style="color:#993333">"--------------"</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;<span style="color:#0099cc">endl</span>;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#0099cc">cout</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;<span style="color:#993333">"원하시는&nbsp;좌석번호를&nbsp;입력하세요(원하시는&nbsp;번호가&nbsp;없으면&nbsp;-1)&nbsp;:&nbsp;"</span>;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#0099cc">int</span>&nbsp;WantiSeat;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#0099cc">cin</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&gt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&gt;</span>&nbsp;WantiSeat;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#ff3399">if</span>&nbsp;(WantiSeat&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">=</span><span style="color:#039C43"></span><span style="color:#ff3399">=</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">-</span><span style="color:#308ce5">1</span>)&nbsp;{</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#ff3399">break</span>;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#ff3399">if</span>&nbsp;(<span style="color:#999999">/*코드&nbsp;작성*/</span>)&nbsp;{</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#999999">//코드&nbsp;작성</span></div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#0099cc">cout</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;<span style="color:#0099cc">endl</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;<span style="color:#993333">"예매되엇습니다."</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;<span style="color:#0099cc">endl</span>;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#ff3399">else</span>&nbsp;{</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#0099cc">cout</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;<span style="color:#0099cc">endl</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;<span style="color:#993333">"이미&nbsp;예매된&nbsp;자리입니다."</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;<span style="color:#0099cc">endl</span>;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#ff3399">if</span>&nbsp;(<span style="color:#999999">/*코드&nbsp;작성*/</span>)&nbsp;{</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#0099cc">cout</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;<span style="color:#0099cc">endl</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;<span style="color:#993333">"모든&nbsp;자리가&nbsp;예매되었습니다."</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;<span style="color:#0099cc">endl</span>;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#ff3399">break</span>;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</div><div style="padding:0 6px; white-space:pre; line-height:130%">}</div></div><div style="text-align:right; margin-top:-13px; margin-right:5px; font-size:9px; font-style:italic"><a href="http://colorscripter.com/info#e" target="_blank" style="color:#e5e5e5; text-decoration:none">Colored by Color Scripter</a></div></td><td style="vertical-align:bottom; padding:0 2px 4px 0"><a href="http://colorscripter.com/info#e" target="_blank" style="text-decoration:none; color:white"><span style="font-size:9px; word-break:normal; background-color:#e5e5e5; color:white; border-radius:10px; padding:1px">cs</span></a></td></tr></table></div>
					
					
					<hr>
				</div>
				<div class="col-sm-12">
					<hr>
				</div>
				<div class="col-sm-12">
					<h3>2번 배열 문제</h3>
					<hr>
					<h3>
						사용자로부터 배열을 입력받아, 배열을 출력하고 배여의 최대, 최소 값, 평균, 분산을 구하는 소스코드를 작성할 것입니다.<br>
						(1) 생성자에 사용자로부터 배열의 크기를 입력받아 동적으로 배열을 생성하는 코드 작성.<br>
						(2) 생성된 배열을 출력한다.<br>
						(3) 배열의 최대, 최소 값을 구한다.<br>
						(4) 배열의 평균, 분산 값을 구한다.<br><br>

						출력예제 
						<img class="img-responsive" src="./images/5.png">
					</h3>

					<div class="colorscripter-code" style="color:#010101; font-family:Consolas, 'Liberation Mono', Menlo, Courier, monospace !important; position:relative !important; overflow:auto"><table class="colorscripter-code-table" style="margin:0; padding:0; border:none; background-color:#fafafa; border-radius:4px;" cellspacing="0" cellpadding="0"><tr><td style="padding:6px; border-right:2px solid #e5e5e5"><div style="margin:0; padding:0; word-break:normal; text-align:right; color:#666; font-family:Consolas, 'Liberation Mono', Menlo, Courier, monospace !important; line-height:130%"><div style="line-height:130%">1</div><div style="line-height:130%">2</div><div style="line-height:130%">3</div><div style="line-height:130%">4</div><div style="line-height:130%">5</div><div style="line-height:130%">6</div><div style="line-height:130%">7</div><div style="line-height:130%">8</div><div style="line-height:130%">9</div><div style="line-height:130%">10</div><div style="line-height:130%">11</div><div style="line-height:130%">12</div><div style="line-height:130%">13</div><div style="line-height:130%">14</div><div style="line-height:130%">15</div><div style="line-height:130%">16</div><div style="line-height:130%">17</div><div style="line-height:130%">18</div><div style="line-height:130%">19</div><div style="line-height:130%">20</div><div style="line-height:130%">21</div><div style="line-height:130%">22</div><div style="line-height:130%">23</div><div style="line-height:130%">24</div><div style="line-height:130%">25</div><div style="line-height:130%">26</div><div style="line-height:130%">27</div><div style="line-height:130%">28</div><div style="line-height:130%">29</div><div style="line-height:130%">30</div><div style="line-height:130%">31</div><div style="line-height:130%">32</div><div style="line-height:130%">33</div><div style="line-height:130%">34</div><div style="line-height:130%">35</div><div style="line-height:130%">36</div><div style="line-height:130%">37</div><div style="line-height:130%">38</div><div style="line-height:130%">39</div><div style="line-height:130%">40</div><div style="line-height:130%">41</div><div style="line-height:130%">42</div><div style="line-height:130%">43</div><div style="line-height:130%">44</div></div></td><td style="padding:6px 0"><div style="margin:0; padding:0; color:#010101; font-family:Consolas, 'Liberation Mono', Menlo, Courier, monospace !important; line-height:130%"><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#0086b3">#include</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>iostream<span style="color:#039C43"></span><span style="color:#ff3399">&gt;</span></div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;</div><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#ff3399">using</span>&nbsp;<span style="color:#ff3399">namespace</span>&nbsp;<span style="color:#0099cc">std</span>;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;</div><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#ff3399">class</span>&nbsp;Array&nbsp;{</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#999999">//&nbsp;소스작성</span></div><div style="padding:0 6px; white-space:pre; line-height:130%">};</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;</div><div style="padding:0 6px; white-space:pre; line-height:130%">Array::Array()&nbsp;{</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#999999">//&nbsp;소스작성</span></div><div style="padding:0 6px; white-space:pre; line-height:130%">}</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;</div><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#0099cc">int</span>&nbsp;getMax(<span style="color:#0099cc">int</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">*</span>p,&nbsp;<span style="color:#0099cc">int</span>&nbsp;<span style="color:#0099cc">size</span>)&nbsp;{</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#999999">//&nbsp;소스작성</span></div><div style="padding:0 6px; white-space:pre; line-height:130%">}</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;</div><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#0099cc">int</span>&nbsp;getMin(<span style="color:#0099cc">int</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">*</span>p,&nbsp;<span style="color:#0099cc">int</span>&nbsp;<span style="color:#0099cc">size</span>)&nbsp;{</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#999999">//&nbsp;소스작성</span></div><div style="padding:0 6px; white-space:pre; line-height:130%">}</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;</div><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#0099cc">double</span>&nbsp;getMean(<span style="color:#0099cc">int</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">*</span>p,&nbsp;<span style="color:#0099cc">int</span>&nbsp;<span style="color:#0099cc">size</span>)&nbsp;{</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#999999">//&nbsp;소스작성</span></div><div style="padding:0 6px; white-space:pre; line-height:130%">}</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;</div><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#0099cc">double</span>&nbsp;getVariance(<span style="color:#0099cc">int</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">*</span>p,&nbsp;<span style="color:#0099cc">int</span>&nbsp;<span style="color:#0099cc">size</span>)&nbsp;{</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#999999">//&nbsp;소스작성</span></div><div style="padding:0 6px; white-space:pre; line-height:130%">}</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;</div><div style="padding:0 6px; white-space:pre; line-height:130%"><span style="color:#0099cc">int</span>&nbsp;main()&nbsp;{</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;Array&nbsp;my;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;my.printArray();</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#0099cc">int</span>&nbsp;iMax&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">=</span>&nbsp;getMax(my.pArray,&nbsp;my.CntArray);</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#0099cc">int</span>&nbsp;iMin&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">=</span>&nbsp;getMin(my.pArray,&nbsp;my.CntArray);</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#0099cc">cout</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;<span style="color:#993333">"Maximum&nbsp;=&nbsp;"</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;iMax&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;<span style="color:#0099cc">endl</span>;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#0099cc">cout</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;<span style="color:#993333">"Minimum&nbsp;=&nbsp;"</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;iMin&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;<span style="color:#0099cc">endl</span>;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#0099cc">double</span>&nbsp;dMean&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">=</span>&nbsp;getMean(my.pArray,&nbsp;my.CntArray);</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#0099cc">double</span>&nbsp;dVariance&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">=</span>&nbsp;getVariance(my.pArray,&nbsp;my.CntArray);</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#0099cc">cout</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;<span style="color:#993333">"Mean&nbsp;=&nbsp;"</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;dMean&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;<span style="color:#0099cc">endl</span>;</div><div style="padding:0 6px; white-space:pre; line-height:130%">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#0099cc">cout</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;<span style="color:#993333">"Variance&nbsp;=&nbsp;"</span>&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;dVariance&nbsp;<span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span><span style="color:#039C43"></span><span style="color:#ff3399">&lt;</span>&nbsp;<span style="color:#0099cc">endl</span>;</div><div style="padding:0 6px; white-space:pre; line-height:130%">}</div></div><div style="text-align:right; margin-top:-13px; margin-right:5px; font-size:9px; font-style:italic"><a href="http://colorscripter.com/info#e" target="_blank" style="color:#e5e5e5; text-decoration:none">Colored by Color Scripter</a></div></td><td style="vertical-align:bottom; padding:0 2px 4px 0"><a href="http://colorscripter.com/info#e" target="_blank" style="text-decoration:none; color:white"><span style="font-size:9px; word-break:normal; background-color:#e5e5e5; color:white; border-radius:10px; padding:1px">cs</span></a></td></tr></table></div>
					
					
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="disqus_thread"></div>
						<script>
						/**
						*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
						*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
						/*
						var disqus_config = function () {
						this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
						this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
						};
						*/
						(function() { // DON'T EDIT BELOW THIS LINE
						var d = document, s = d.createElement('script');
						s.src = 'https://webeopeulrikeisyeonmandeulgisueob-17.disqus.com/embed.js';
						s.setAttribute('data-timestamp', +new Date());
						(d.head || d.body).appendChild(s);
						})();
						</script>
						<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			</div>
		</div>                            
                                                    
		<footer style="background-color: #22303b; color:#ffffff"> 
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<h3>CONTACT US</h3>
						<hr>
						<h4><span class="glyphicon glyphicon-earphone"></span> &nbsp;&nbsp; 010-3601-4260 </h4>
						<h4><span class="glyphicon glyphicon-envelope"></span> &nbsp;&nbsp; itlockit@gmail.com</h4>
					</div>
					<div class="col-sm-2">
						<h3>TOPIC</h3>
						<hr>
						<h4>C++</h4>
					</div>
					<div class="col-sm-3">
						<h3>LINK</h3>
						<hr>
						<h4> <a href="https://www.acmicpc.net/" target="_blank"><span class="glyphicon glyphicon-pencil"></span>  &nbsp;&nbsp; Beak Joon Online Judge</a></h4>
					</div>
					<div class="col-sm-3">
						<h3 style="text-align: right;">COPYRIGHT &nbsp; <span class="glyphicon glyphicon-copyright-mark" style="font-size: 20px"></span></h3>
						<h4 style="text-align: right;"">Sungho, Yun</h4>
					</div>
				</div>
				<br>
			</div>
		</footer>
		<!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    	<!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
    	<script src="js/bootstrap.js"></script>
    	<script id="dsq-count-scr" src="//cpluscoding2.disqus.com/count.js" async></script>
    	<!--Start of Tawk.to Script-->
		<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/5a5bccdc4b401e45400c151b/default';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
		</script>
		<!--End of Tawk.to Script-->
		<script type="text/javascript">
			(function(){
    'use strict';
	var $ = jQuery;
	$.fn.extend({
		filterTable: function(){
			return this.each(function(){
				$(this).on('keyup', function(e){
					$('.filterTable_no_results').remove();
					var $this = $(this), 
                        search = $this.val().toLowerCase(), 
                        target = $this.attr('data-filters'), 
                        $target = $(target), 
                        $rows = $target.find('tbody tr');
                        
					if(search == '') {
						$rows.show(); 
					} else {
						$rows.each(function(){
							var $this = $(this);
							$this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();
						})
						if($target.find('tbody tr:visible').size() === 0) {
							var col_count = $target.find('tr').first().find('td').size();
							var no_results = $('<tr class="filterTable_no_results"><td colspan="'+col_count+'">No results found</td></tr>')
							$target.find('tbody').append(no_results);
						}
					}
				});
			});
		}
	});
	$('[data-action="filter"]').filterTable();
})(jQuery);

$(function(){
    // attach table filter plugin to inputs
	$('[data-action="filter"]').filterTable();
	
	$('.container').on('click', '.panel-heading span.filter', function(e){
		var $this = $(this), 
			$panel = $this.parents('.panel');
		
		$panel.find('.panel-body').slideToggle();
		if($this.css('display') != 'none') {
			$panel.find('.panel-body input').focus();
		}
	});
	$('[data-toggle="tooltip"]').tooltip();
})
		</script>
	</body>
</html>