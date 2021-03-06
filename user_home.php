<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
session_start();
if(!isset($_SESSION['status'])||$_SESSION['status']!='authorized'){
	$_SESSION['status']='unauth';
	$_SESSION['user']='Guest';
}
	
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Artists.net</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.dropotron-1.0.js"></script>	
		<script type="text/javascript" src="js/jquery.slidertron-1.0.js"></script>
		<script type="text/javascript" src="js/jquery.poptrox-1.0.js"></script>

	</head>
	<body>
		
		<div id="outer">
		
			<div id="logo">
				<h1><a href="index.php">Artists<span>.net</span></a></h1>
			</div>
		
				
			<ul id="nav">
				<li class="first active">
					<a href="index.php" id="item">Home</a>
				</li>
				<li>
					<a href="browse.php" id="item">Browse</a>
				</li>				
				<li>
					<a href="about.php" id="item">About</a>
				</li>
				<li>
					<a href="about.php" id="item">About</a>
				</li>
				<li>
					<a href="logout.php" id="item">Logout</a>
				</li>
				
				<li style="float:right">
				<?php
				echo 'Hello '.$_SESSION['user'];
//				if($_SESSION['user']=='Guest')
				?>
				</li>
			</ul>


		<!-- ****************************************************************************************************************** -->

			<div id="slider" >
				<div class="viewer">
					<ul class="reel">
						<li class="slide">
							<h2>Painting name</h2>
							<p>Artist name</p>
						  <a class="link" href="images/paintings/monastery.jpg"></a>
							<img src="images/paintings/monastery.jpg" width="1180" height="260" alt="" />
						</li>
						<li class="slide">
							<h2>Painting name</h2>
							<p>Artist name</p>
							<a class="link" href="images/paintings/whale.jpg">Full story ...</a>
							<img src="images/paintings/whale.jpg" width="1180" height="260" alt="" />
						</li>
						<li class="slide">
							<h2>Painting name</h2>
							<p>Artist name</p>
							<a class="link" href="images/paintings/bench.jpg">Full story ...</a>
							<img src="images/paintings/bench.jpg" width="1180" height="260" alt="" />
						</li>
						<li class="slide">
							<h2>Painting name</h2>
							<p>Artist name</p>
							<a class="link" href="images/paintings/horse.jpg">Full story ...</a>
							<img src="images/paintings/horse.jpg" width="1180" height="260" alt="" />
						</li>
						<li class="slide">
							<h2>Painting name</h2>
							<p>Artist name</p>
							<a class="link" href="images/paintings/island.jpg">Full story ...</a>
							<img src="images/paintings/island.jpg" width="1180" height="260" alt="" />
						</li>
						<li class="slide">
							<h2>Painting name</h2>
							<p>Artist name</p>
							<a class="link" href="images/paintings/lane.jpg">Full story ...</a>
							<img src="images/paintings/lane.jpg" width="1180" height="260" alt="" />
						</li>
						<li class="slide">
							<h2>Painting name</h2>
							<p>Artist name</p>
							<a class="link" href="images/paintings/monalisa.jpg">Full story ...</a>
							<img src="images/paintings/monalisa.jpg" width="1180" height="260" alt="" />
						</li>
						<li class="slide">
							<h2>Painting name</h2>
							<p>Artist name</p>
							<a class="link" href="paintings/village.jpg">Full story ...</a>
							<img src="images/paintings/village.jpg" width="1180" height="260" alt="" />
						</li>
					</ul>
				</div>
				
				<ul class="indicator">
					<li class="active">1</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>
					<li>5</li>
					<li>6</li>
					<li>7</li>
					<li>8</li>
				</ul>
				
			</div>
			
			<script type="text/javascript">
				$('#slider').slidertron({
					viewerSelector: '.viewer',
					reelSelector: '.viewer .reel',
					slidesSelector: '.viewer .reel .slide',
					advanceDelay: 3000,
					speed: 'slow',
					navPreviousSelector: '.previous-button',
					navNextSelector: '.next-button',
					indicatorSelector: '.indicator li',
					slideLinkSelector: '.link'
				});
			</script>

		<!-- ****************************************************************************************************************** -->			
			
	</body>
</html>
