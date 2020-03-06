<html>
<head>
<link href="css1.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<title>
2020 Lil Ark: Home
</title>
</head>
<body>
	<div class="logo">
	<img src="logo.png" width="100vw" height="100vw">
	</div>
		<div class="NavBar">
			<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="work1.php">Works</a></li>
			<li><a href="About.php">About</a></li>
			</ul>
			<input style="margin-left:5vw;" type="range" min="0" max="100" value="50" id="volume_range" oninput="document.getElementById('myaudio').volume = this.value/100" onchange="this.oninput()">

		</div>
<div class="fullscreen-bg">
    <div class="overlay">	
		<div class="text">
			<p>Hellow! Welcome to the Team Black$White</p>
		</div>
		
		<div class="text2">
		<a> AMV (сокр. от англ. anime music video) — любительский музыкальный клип, создание AMV -
		это вид творчества людей, которые увлекаются японской анимацией, их цель передать
		какие-то чувства, эмоции, сюжет, либо же просто сделать красивую
		нарезку под музыку</a>
		</div>
    </div>
    <video loop="" muted="" autoplay="" poster="video/plane.jpg" class="fullscreen-bg__video">
        <source src="video/c17430493c.1080.mp4" type="video/mp4">
        <source src="video/c17430493c.1080.webm" type="video/webm">
    </video>
</div>

   
   <audio audio.volume="0.2" autoplay="" loop="" id="myaudio">
    <source src="video/1.ogg" type='audio/ogg; codecs=vorbis'>
    <source src="video/1.mp3" type="audio/mp3">
   
   </audio>

</body>
</html>