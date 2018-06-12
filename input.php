<!DOCTYPE html>
<?php
	$conn = mysqli_connect("localhost","root","134330","rnc_cplus");
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
		<div class="container">
		<h1>동아리 회원 정보 입력</h1>
			<form action="create.php" method ="POST">
				<div class="form-group">
				<label for="name">이름</label>
				<input type="text" class="form-control" id="Name" name = "NAME" placeholder="이름">
				</div>
				<div class="form-group">
				<label for="id">학번</label>
				<input type="text" class="form-control" id="Id" name="ID" placeholder="학번">
				</div>
				<div class="form-group">
				<label for="phone">전화번호</label>
				<input type="text" class="form-control" id="Phone" name="PHONE" placeholder="연락처">
				</div>
				<button type="submit" class="btn btn-info">Submit Information</button>
			</form>
		</div>
</html>