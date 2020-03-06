<html>
<head>
<link href="css1.css" rel="stylesheet">
<link href="vneshcss.css" rel="stylesheet">
<title>
2020 Lil Ark: Works
</title>
</head>
<body style="background:black;">
<div class="logo">

	<img src="logo.png" width="100" height="100">
	</div>
		<div class="NavBar">
			<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="work1.php">Works</a></li>
			<li><a href="About.php">About</a></li>
			</ul>
			<input style="margin-left:5vw;" type="range" min="0" max="100" value="50" id="volume_range" oninput="document.getElementById('myaudio').volume = this.value/100" onchange="this.oninput()">

		</div>
		<div class="videos">
<iframe width="340" height="220" src="https://www.youtube.com/embed/YhdZ95yQxW0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="340" height="220" style="padding-left:5vw" src="https://www.youtube.com/embed/OMu9jLKJrrU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="340" height="220" style="padding-left:5vw" src="https://www.youtube.com/embed/mgvDJp9hUD0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

		<div class="pages">
			<ul>
			<li><a href="work1.php">1</a></li>
			<li><a href="work2.php">2</a></li>
			<li><a href="work3.php">3</a></li>
			<li><a href="work4.php">4</a></li>
			<li><a href="work5.php">5</a></li>
			<li><a href="work6.php">6</a></li>
			<li><a href="work7.php">7</a></li>
			</ul>
		</div>

		<div class="fullscreen-bg">
	
		    <video id="myaudio" loop="" autoplay="" poster="video/plane.jpg" class="fullscreen-bg__video">
        <source src="video/6f434c6470.1080.mp4" type="video/mp4">
        <source src="video/6f434c6470.1080.webm" type="video/webm">
    </video>
</div>
  <audio audio.volume="0.2" autoplay="" muted="" loop="">
    <source src="video/3.ogg" type='audio/ogg; codecs=vorbis'>
    <source src="video/3.mp3" type="audio/mp3">
   
   </audio>
</body>
</html>