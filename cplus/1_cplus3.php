<!DOCTYPE html>
<?php
	$conn = mysqli_connect("localhost","root","134330","rnc_cplus");
	$lecture_number = 13;
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
					<a class="navbar-brand" href="./index.php">RNC C++</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="./index.php">소개<span class="sr-only"></span></a></li>
						<li class="active"  class="dropdown">
							<a href="./index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">강의 <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="./1_cplus1.php">1학년C++</a></li>
								<li><a href="./2_cplus1.php">2학년C++</a></li>
							</ul>
						</li>
						<li><a href="./member.php">회원현황</a></li>
						<li><a href="./manage.php">관리</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="./resourceCenter.php"> 자료실 </a></li>
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
							<?php
							$count = 1;
							$sql = "SELECT title,rink FROM lecture WHERE grade=1 ORDER BY no";
							$result = mysqli_query($conn,$sql);
							
							while($row = mysqli_fetch_array($result)){
								
								echo"<tr>";	
									echo"<td>";	echo"<a href='"; echo"{$row['rink']}'>"; echo $count; echo"</a></td>"; 
									echo"<td>";	echo"<a href='"; echo"{$row['rink']}'>"; echo"{$row['title']}"; echo"</a></td>";
									$count++;
								echo"</tr>";
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
			<div class="row">
				<div class="col-sm-12">
					<?php
					$count = 1;
					$sql = "SELECT title FROM lecture WHERE lecture_no=$lecture_number";
					$result = mysqli_query($conn,$sql);
					
					while($row = mysqli_fetch_array($result)){
						echo "<h1>"; echo"{$row['title']}"; echo"</h1>";
					}
					?>
					<hr>
				</div>
				<div class="col-sm-12">
							<?php
							$sql = "SELECT link FROM powerpoint WHERE lecture_no =$lecture_number";
							$result = mysqli_query($conn,$sql);
							
							while($row = mysqli_fetch_array($result)){
								echo "{$row['link']}";
							}
							?>
				</div>
				<div class="col-sm-12">
					<h3>제3강 예제 코드</h3>
							<?php
							$sql = "SELECT title,rink FROM code WHERE lecture_no =$lecture_number";
							$result = mysqli_query($conn,$sql);
							
							echo "<hr>";
							while($row = mysqli_fetch_array($result)){
								echo "<li style='font-size : 20px'>"; echo "{$row['title']}"; echo "</li>";
								echo "<br>";
								echo "{$row['rink']}";
								echo "<br>";
								echo "<hr>";
							}
							?>
				</div>
				<div class="col-sm-12">
					<h3>백준 문제 풀러 가기 </h3>
					<hr>
					<h4 class="algorithm"> <a href="https://www.acmicpc.net/problem/9498" target="_blank"><span class="glyphicon glyphicon-pencil"></span>  &nbsp;&nbsp; 9498번 시험성적 출력하기</a></h4>
				</div>
				
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