<?php
$conn = mysqli_connect("localhost", "root", 134330);
mysqli_select_db($conn, "homepage");
$result = mysqli_query($conn, "SELECT * FROM latelyaddedcar ORDER BY No DESC");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width", initial-scale="1">
	<title>이 차 어떨Car?</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/codingBooster.css">
</head>
	<body>
		<style type="text/css">
			.jumbotron {
				background-image: url('images/jumbotronbackgroundimage.jpg');
				background-size: cover;
				text-shadow: black 0.2em 0.2em 0.2em;
				color: white;
			}
		</style>
		<nav class="navbar navbar-default">
			<div class="containter-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapsed" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">이 차 어떨Car?</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php">소개<span class="sr-only"></span></a></li>
						<li class="dropdown">
						   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">목록<span class="caret"></span></a>
						   <ul class="dropdown-menu">
						   	<li><a href="Morning.php">국산차</a></li>
						   	 	<li><a href="AudiR8.php">외제차</a></li>
						   </ul>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="jumbotron">
				<h1 class="text-center">이 차 어떨Car에 오신 것을 환영합니다.</h1>
				<p class="text-center">이 차 어떨Car는 원하시는 차량에 대한 정보를 확인 및 평가하실 수 있는 사이트입니다. 다양한 차량에 관한 정보를 구비해 놓았습니다.</p>
				<p class="text-center"><a class="btn btn-primary btn-lg" href="Morning.php" role="button">국산차 페이지로 가기</a></p>
				<p class="text-center"><a class="btn btn-primary btn-lg" href="AudiR8.php" role="button">외제차 페이지로 가기</a></p>
			</div>
			<div class="row">
				<div class="col-md-4">
					<h4>사이트의 특징</h4>
					<p>이 사이트는 누구나 쉽고 간편하게 차량에 관해 평가 및 정보를 확인할수 있도록 구성되어 있습니다.</p>
				</div>
				<div class="col-md-4">
					<h4>국산 차량</h4>
					<p>국산 차량에 관한 여러 정보를 구비해놓았습니다.</p>
					<p><a class="btn btn-default" href="Morning.php">자세히 알아보기</a></p>
				</div>
				<div class="col-md-4">
					<h4>외제 차량</h4>
					<p>외제 차량에 관한 여러 정보를 구비해놓았습니다.</p>
					<p><a class="btn btn-default" href="AudiR8.php">자세히 알아보기</a></p>
				</div>
			</div>
			<hr>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><span class="glyphicon glyphicon-pencil"></span>
					&nbsp;&nbsp;최근 추가된 차량 목록</h3>
				</div>
				<div class="panel-body">
					<div class="media">
						<div class="media-left">
							<a href="BugattiVeyron.php"><img class="media-object" src="images/BugattiVeyron.jpg" alt="BugattiVeyron 이미지"></a>
						</div>
						<div class="media-body">
							<h4 class="media-heading"><a href="BugattiVeyron.php">
							<?php
							$row = mysqli_fetch_assoc($result);
	            echo $row['Name'];
							 ?>
							</a>&nbsp;<span class="badge">New</span></h4>
							<?php
							echo '<p>'.$row['description'];
							 ?>
							</div>
					</div>
					<hr>
					<div class="media">
						<div class="media-left">
							<a href="Porter2.php"><img class="media-object" src="images/Porter2.jpg" alt="Porter2 이미지"></a>
						</div>
						<div class="media-body">
							<h4 class="media-heading"><a href="Porter2.php"><?php
									$row = mysqli_fetch_assoc($result);
			            echo $row['Name'];
									 ?></a>&nbsp;<span class="badge">New</span></h4>
									 <?php
											 echo $row['description'];
										?>
							</div>
					</div>
					<hr>
					<div class="media">
						<div class="media-left">
							<a href="Tico.php"><img class="media-object" src="images/tico.jpg" alt="Tico 이미지"></a>
						</div>
						<div class="media-body">
							<h4 class="media-heading"><a href="Tico.php"><?php
									$row = mysqli_fetch_assoc($result);
			            echo $row['Name'];
									 ?></a>&nbsp;<span class="badge">New</span></h4>
									 <?php
									 echo $row['description'];
										?>
							</div>
					</div>
				</div>
			</div>
		</div>
		<footer style="background-color: #000000; color: #ffffff">
			<div class="container">
				<br>
				<div class="row">
					<div class="col-sm-2" style="text-align: center;"><h5>Copyright &copy; 2018</h5><h5>김지민(Kim ji-min)</h5>
					</div>
						<div class="col-sm-4"><h4>대표자 소개</h4><p>대표인 김지민이라고 합니다.</p>
					</div>
						<div class="col-sm-2"><h4 style="text-align: center;">내비게이션</h4><div class="list-group">
							<a href="Morning.php" class="list-group-item">국산차</a>
								<a href="AudiR8.php" class="list-group-item">외제차</a>
						</div>
					</div>
		<div class="col-sm-2"><h4 style="text-align: center;">SNS</h4><div class="list-group">
							<a href="https://www.facebook.com" class="list-group-item">페이스북</a>
								<a href="https://www.youtube.com" class="list-group-item">유투브</a>
						</div>
					</div>
					<div class="col-sm-2"><h4 style="text-align: center;"><span class="glyphicon glyphicon-ok"></span>&nbsp;by 김지민</h4></div>
				</div>
			</div>
		</footer>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>
