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
						<h4 class="ui header">Krafttraining</h4>
						<p>Nachdem klassicher Sport nie wirklich etwas für mich war fing ich während der Oberstufe an regelmäßig ins Fitnessstudio zu gehen. Seitdem gehe ich wann immer ich kann mit einem guten Freund trainieren. Machst du irgendeinen Sport? </p>
					</div>
					<div class="item">
						<h4 class="ui header">Backen</h4>
						<p>Ich liebe Kuchen, besonders wenn er Schokolade enthält. Da es jedoch schwer ist guten Kuchen zu finden fing ich an ihn selbst zu backen. Zuerst eher simple Kuchen, später wurden es Torten. Mit Begeisterung versuche ich mich immer wieder an neuen Kreationen. Wem jetzt nach Bildern zumute ist, dem kann ich gern meinen Instagram-Account verlinken.</p>
					</div>
					<div class="item">
						<h4 class="ui header">Nachrichten über IT und Gesellschaft</h4>
						<p>Mich regelmäßig über Geschehnisse in der IT-Welt und Gesellschaft zu informieren gehört für mich zum Alltag und ist meine Entspannung für zwischendurch. Besonders Neuheiten aus der IT sind immer spannend! Was denkst Du von der aktuellen Entwicklung unserer Welt bzw. Gesellschaft? Sind wir auf dem richtigen Weg, oder sollte sich irgendwas ändern?</p>
					</div>
					<div class="item">
						<h4 class="ui header">Videospiele</h4>
						<p>Seit meiner Kindheit spiele ich mit Freunden Videospiele. Inzwischen sind dies hauptsächlich teambasierte Online-Titel, aber auch gut erzählten Geschichten verschließe ich mich nicht. Etwas zusammen spielen ist eine tolle Möglichkeit den Kontakt mit Freunden aus der Ferne aufrecht zu erhalten.  Außerdem fördern die meisten Titel heutzutage Teamgeist und logisches Denken. Was denkst Du von Videospielen? Spielst du selbst? Denkst Du Spiele können sich positiv auf die Spieler auswirken, oder siehst du Probleme und kritische Punkte bei Videospielen?</p>
					</div>
				</div>
			<?php else:?>
				<h3>Things I do besides university and work</h3>
				<div class="ui list">
					<div class="item">
						<h4 class="ui header">Going to the gym</h4>
						<p>I started going to the gym in the last years of school and I have never stopped since then.
							Whenever possible I am exercising there with a good friend. Do you do any sports? </p>
					</div>
					<div class="item">
						<h4 class="ui header">Baking cake</h4>
						<p>I love cake, especially chocolate cake! So I started baking my own cake instead of just buying one. So I came to the conclusion the best cakes are homemade cakes. I bake everything from super simple cheesecake to multi-layer cake and love trying new recipes. So if you got any ideas, feel free to contact me! What cakes or sweets do you like? Is there a special recipe what you think I should try?</p>
					</div>
					<div class="item">
						<h4 class="ui header">IT and other News</h4>
						<p>I am intereseted in what's happening around the world. So most of my days start with reading or watching news. As you might expect my focus is especially on IT. Reading something about dumb security issues is the most fun. What topics are you hyped about? Do you think our world or society is on a way to a good future?</p>
					</div>
					<div class="item">
						<h4 class="ui header">Playing videogames</h4>
						<p>I've been playing videogames with my friends since I was a kid. Mostly online titles, but I won't not say no to a good story either. Despite most stereotypes I think most games have some sort of benefit for the people. There are online games where you have to work together with total strangers and organize some sort of teamwork. Another game may just tell a fascinating story like books do. Yet another could require and encourage reasoning. What do you think of games? Do you play something yourself? Do you think there is a positive influence of videogames on people, or do you see negative influence on people who play alot?</p>
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