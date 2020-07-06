<!DOCTYPE html>
<html>
<head>
	<title> Live Scores &amp; Updates </title>
	<link rel="shortcut icon" type="image/png" href="./images/download.png"/>
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes"/>
	<meta name="HandheldFriendly" content="true" />
	<meta name="apple-touch-fullscreen" content="YES" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />


	<style type="text/css">
		body{
			padding:0;
			margin: 0;
		}
		nav{
			position: sticky;
			top: 0px;
		}
		
		footer{
			
			width: 100%;
			text-align: center;
			bottom: 0;
		}
		.section{
			background: url("ckt.jpg");
			background-size: cover;
			height: 80vh;
		}
		a:hover{
			color: yellow;
		}
		@media only screen and (max-width: 600px){
			nav a{
				font-size: 12px;
				font-weight: bold;

			}
			nav{
				height: auto;
				
			}
		}
	</style>
</head>
<body >
	<nav class="bg-blue-400 text-white  text-3xl">
		<a class="mx-2 " href="hom.php">Menu</a>
		<a class="mx-2 " href="liveScores.php">Live Score</a>
		<a class="mx-2 " href="league.html">Schedule</a>
		<a class="mx-2 " href="news.html">News</a>
		<a class="mx-2 " href="aboutus.html">Our Team</a>
	</nav>

	<div class="section py-5">
		<div class="match-status bg-white rounded rounded mx-2 shadow-2xl my-2">
			<h1 class="text-xl">Match Status</h1>
			<p> <span class="text-red-400">Sorry !</span> <br>Current now match is live.</p>
		</div>

		<div class="match-status bg-white rounded rounded mx-2 shadow-2xl">
			<h1 class="text-xl">We will come soon with new match</h1>
			<p> <span class="text-red-400">Get your eye here !</span> <br>Date: Pendign</p>
		</div>
	</div>

	<footer class="bg-black text-white text-2xl">
		<p>copyright &copy; Pravesh maurya</p>
	</footer>
</body>
</html>