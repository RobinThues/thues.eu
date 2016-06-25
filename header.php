<nav class="ui stackable green menu">
	<div class="ui container">
		<a href="home" class="header item"  id="headerbtn">
			<h1 class="ui green header">Robin Thüs</h1>
		</a>
		<?php
		$url = $_SERVER["REQUEST_URI"];
		if (strpos($url, "/de/") !== false):?>
			<a class="item" href="home" id="homebtn">Home</a>
			<a class="item" href="cv" id="cvbtn">Lebenslauf</a>
			<a class="item" href="courses" id="coursesbtn">Kurse</a>
			<a class="item" href="projects" id="projectsbtn">Projekte</a>
			<a class="item" href="hobbies" id="hobbiesbtn">Hobbies</a>
			<a class="item" href="contact" id="contactbtn">Kontakt</a>
		<?php else:?>
			<a class="item" href="home" id="homebtn">Home</a>
			<a class="item" href="cv" id="cvbtn">CV</a>
			<a class="item" href="courses" id="coursesbtn">Courses</a>
			<a class="item" href="projects" id="projectsbtn">Projects</a>
			<a class="item" href="hobbies" id="hobbiesbtn">Hobbies</a>
			<a class="item" href="contact" id="contactbtn">Contact</a>
		<?php endif;?>
		</div>
	</div>
</nav>