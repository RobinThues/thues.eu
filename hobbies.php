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
				<h3>Was ich neben der Uni und Arbeit so tue</h3>
				<div class="ui list">
					<div class="item">
						<h4 class="ui header">Ins Fitnessstudio gehen</h4>
						<p>In den letzten Jahre der Oberstufe habe ich angefangen ins Fitnessstudio zu gehen. Seitdem gehe ich wann immer ich Zeit habe.</p>
					</div>
					<div class="item">
						<h4 class="ui header">Backen</h4>
						<p>Ich liebe Kuchen, besonders wenn er Schokolade enthält. Da es jedoch schwer ist guten Kuchen zu finden fing ich an ihn selbst zu backen. Zuerst eher simple Kuchen, später wurden es Torten.</p>
					</div>
					<div class="item">
						<h4 class="ui header">Nachrichten über IT und Gesellschaft lesen</h4>
						<p>Ich lese gern was es neues in der IT-Welt gibt.</p>
					</div>
					<div class="item">
						<h4 class="ui header">Videospiele</h4>
						<p>Seit meiner Kindheit spiele ich mit Freunden Videospiele. Inzwischen sind dies hauptsächlich Online-Titel, aber auch gut erzählten Geschichten verschließe ich mich nicht.</p>
					</div>
				</div>
			<?php else:?>
				<h3>Things I do besides university and work</h3>
				<div class="ui list">
					<div class="item">
						<h4 class="ui header">Going to the gym</h4>
						<p>I started going to the gym in the last years of school and never stopped since then.
							Whenever possible I am going there with a good friend.</p>
					</div>
					<div class="item">
						<h4 class="ui header">Baking</h4>
						<p>I love cake, especially chocolate cake! So I started baking my own cake and came to the conclusion the best cakes are selfmade cakes.</p>
					</div>
					<div class="item">
						<h4 class="ui header">IT and generell News</h4>
						<p>Reading whats happening in the world nearly every day with a special focus on IT news. Reading something about dumb security issues is the most fun.</p>
					</div>
					<div class="item">
						<h4 class="ui header">Videogames</h4>
						<p>I'm playing videogames with my friends since I was a kid. Mostly online titles, but will not say no to a good story either.</p>
					</div>
				</div>
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
		$("#hobbiesbtn").attr("class","active item");
	});
</script>
</html>