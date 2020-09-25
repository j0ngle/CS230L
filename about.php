<?php 
	require 'includes/header.php'
?>

<main>
<link rel="stylesheet" href="css/about.css">
<!-- About Page -->
	<div class="about">
		<h1 style="text-align:center"> About Page</h1> <!-- The larger the number, the larger the size -->
		<p style="text-align:center">Our about page</p> <!-- p is the paragraph tag I think? -->
	</div>

	<h2 style="text-align:center">Our Affiliates</h2>
	<div class="row">
		<div class="column">
			<div class="card">
				<img src="images/FF.jpg" alt="Flint & Flame" style="width:200px; height:200px"> <!-- alt is the text it displays in case it cannot load the image -->
				<div class="container">
					<h1>FnF</h1>
					<p class="title">Brick Oven Pizza</p>
					<p>flintflame@work.site</p>
					<p><button class="button">Contact</button></p>
				</div>
			</div>
		</div>

		<div class="column">
			<div class="card">
				<img src="images/Pitch.jpg" alt="Pitch" style="width:200px; height:200px"> <!-- alt is the text it displays in case it cannot load the image -->
				<div class="container">
					<h1>Pitch</h1>
					<p class="title">Music Streaming</p>
					<p>pitchmusic@str.eam</p>
					<p><button class="button">Contact</button></p>
				</div>
			</div>
		</div>

		<div class="column">
			<div class="card">
				<img src="images/Pioneer.jpg" alt="Pioneer" style="width:200px; height:200px"> <!-- alt is the text it displays in case it cannot load the image -->
				<div class="container">
					<h1>Pioneer</h1>
					<p class="title">Airlines</p>
					<p>Pioneer@airline.net</p>
					<p><button class="button">Contact</button></p>
				</div>
			</div>
		</div>

		<div class="column">
			<div class="card">
				<img src="images/Tazza.jpg" alt="Tazza" style="width:200px; height:200px"> <!-- alt is the text it displays in case it cannot load the image -->
				<div class="container">
					<h1>Tazza</h1>
					<p class="title">Coffee shop</p>
					<p>Tazza@bean.juice</p>
					<p><button class="button">Contact</button></p>
				</div>
			</div>
		</div>
	</div>

</main>