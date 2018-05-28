<!DOCTYPE html>
<?php
	mysqli_connect("localhost","root","134330","rnc_cplus")
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width", initial-scale="1">
		<title>RNC C++ Coding</title>
		<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="./style.css">
		<style type="text/css">
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
					<a class="navbar-brand" href="./index.html">RNC C++</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="./index.html">소개<span class="sr-only"></span></a></li>
						<li><a href="#"> 강사진</a></li>
						<li class="dropdown">
							<a href="./index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">강의 <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="./1_cplus1.html">1학년C++</a></li>
								<li><a href="./2_cplus1.html">2학년C++</a></li>
							</ul>
						</li>
						<li><a href="./member.php">회원현황</a></li>
					</ul>
					<form class="navbar-form navbar-left">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="내용을 입력하세요.">
						</div>
						<button type="submit" class="btn btn-default">검색</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="./resourceCenter.html"> 자료실 </a></li>
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
			<div class="jumbotron">
				<h1 class="text-center">RNC C++ Coding</h1>
				<p class="text-center">이 홈페이지는 신입생들의 C++수업을 원할하게 진행하기 위해 만든 홈페이지 입니다. </p>
				<p class="text-center"><a href="./cplus1.html" class="btn btn-primary btn-lg" role="button">강의 들으러 가기</a></p>
			</div>
		</div>

		<div class="container">
		<blockquote class="default">
		  <h1 style="font-size : 25px"><span class="Cdefault">C++...하....</span></h1>  
		  <p style="font-size : 20px">C++이 쉽다고 하는 사람과 가까이 하지 말아라, 미쳐있거나 미쳐가고 있는 중이다.</p>
		</blockquote>
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
						s.src = 'https://cpluscoding2.disqus.com/embed.js';
						s.setAttribute('data-timestamp', +new Date());
						(d.head || d.body).appendChild(s);
						})();
						</script>
						<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
				</div>
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
	</body>
</html>