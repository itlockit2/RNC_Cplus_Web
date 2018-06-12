<?php
$conn = mysqli_connect("localhost", "root", 134330);
mysqli_select_db($conn, "homepage");
$result = mysqli_query($conn, "SELECT * FROM foreigncar ORDER BY NAME");
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
						   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">목록
								 <span class="caret">
						   </span></a>
						   <ul class="dropdown-menu">
						   	<li><a href="Morning.php">국산차</a></li>
						   	 	<li><a href="AudiR8.php">외제차</a></li>
						   </ul>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<ul class="list-group">
           <a href="AudiR8.php" class="list-group-item">
            <?php
            $row = mysqli_fetch_assoc($result);
            echo '<p>'.$row['Name'].'</p>';
            ?></a>
            <a href="BugattiVeyron.php" class="list-group-item">
            <?php
             $row = mysqli_fetch_assoc($result);
             echo '<p>'.$row['Name'].'</p>';
             ?></a>
            <a href="EnzoFerrari.php" class="list-group-item">
            <?php
             $row = mysqli_fetch_assoc($result);
             echo '<p>'.$row['Name'].'</p>';
             ?></a>
				</ul>
			</div>
			<img class="media-object" src="images/BugattiVeyron.jpg" alt="BugattiVeyron 이미지">
      <?php
       $result = mysqli_query($conn, "SELECT * FROM foreigncar WHERE foreigncar.Name = 'Bugatti Veyron'");
       $row = mysqli_fetch_assoc($result);
       echo '<h1>'."Adding Person think : ".$row['description'].'</h1>';
       ?>
			<hr>
			<div class="row">
				<p>
				 The approximate specification of the vehicle.
				</p>
				<pre class="pre-scrollable">
          <?php
          $result = mysqli_query($conn, "SELECT * FROM foreigncarspec WHERE foreigncarspec.name = 'Bugatti Veyron'");
          $row = mysqli_fetch_assoc($result);
          echo '<p>'."NAME : ".$row['name'].'</p>';
          echo "KIND : ".$row['kind'].'</p>';
          echo "PRODUCE : ".$row['produce'].'</p>';
          echo "DISPLACEMENT : ".$row['displacement'].'</p>';
          echo "OUTPUT : ".$row['output'].'</p>';
          echo "ZEROBACK : ".$row['zeroback'].'</p>';
          echo "HIGHSPEED : ".$row['highspeed'].'</p>';
            ?>
				</pre>
			</div>
		</div>
		<div class="container">
			<hr>
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
s.src = 'https://firstweb.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

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
							<a href="koreancar.php" class="list-group-item">국산차</a>
								<a href="foreigncar.php" class="list-group-item">외제차</a>
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
