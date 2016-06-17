<?php include 'head.php'; ?>
<body>
<header>
	<?php include 'header.php'; ?>
</header>

<div class="ui stackable grid container">
	<div class="row">
		<div class="column">
			<!--Abstand zur Navigation-->
		</div>
	</div>
	<div class="eleven wide column">
		<div id="content" class="ui very padded raised green segment">
			<?php 
			$url = $_SERVER["REQUEST_URI"];
			if (strpos($url, "/de/") !== false):?>
				<h3 class="header">Über diese Seite</h3>
				<p>Mein Name ist Robin Thüs, ich bin Student der Informatik und dies ist mein erster Versuch einer persönlichen Homepage. Die Seite entstand aus meinen ersten Experimenten mit html, css, php und dem css-Framework semantic-ui.</p>
				<h3 class="header">Was Sie hier vorfinden</h3>
				<p>Ein kurz zusammengefasster Lebenslauf</p>
				<p>Eine Liste mit Kursen der Informatik und Mathematik, welche ich an der HHU Düsseldorf absolviert habe.</p>
				<p>Ein Überblick über kleinere private Projekte.</p>
				<p>Was ich neben der Uni und Arbeit so mache.</p>
				<p>Kontaktinformationen via sozialer Netzwerke, E-Mail, Telefon, Skype und über ein Kontaktformular.</p>
				<h3 class="header">Was ich suche</h3>
				<p>Praktika in der IT Branche, neue Kontakte, interessante Gespräche über Themen der IT, Gesellschaft und anderer Interessen.</p>
			<?php else:?>
				<h3 class="header">About this homepage</h3>
				<p>My name is Robin Thüs, I am a computer science student and this is my very first personal website. It developed from my first experiments with html, css, php and the semantic-ui framework.</p>
				<h3 class="header">This homepage contains</h3>
				<p>A short CV.</p>
				<p>A list of university courses I have completed at the Heinrich-Heine-University Düsseldorf.</p>
				<p>Some minor private projects.</p>
				<p>What I do besides university.</p>
				<p>Contact information via social media, e-mail, phone, Skype and a contact form.</p>
				<h3 class="header">What I am looking for</h3>
				<p>Internships, Contacts, Discussions about IT, society and other interesets. Feel free to contact me.</p>
			<?php endif;?>
		</div>
	</div>
	<div class="five wide column">
		<aside>
			<?php include 'asidebox.php'; ?>
		</aside>
	</div>
</div>

<footer>
	<?php include 'footer.php' ?>
</footer>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$("#homebtn").attr("class","active item");
	});
</script>
</html>