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
				<h3 class="ui header">Einige kleine private Projekte</h3>
				<div class="ui list">
					<div class="item" id="personalwebsite">
						<h4 class="ui header">Diese Seite - thues.eu</h4>
						<p>Mit der Arbeit bei HHC kam auch endgültig der Bedarf mir Web-Technologien anzusehen. Also fing ich an diese Seite zu entwickeln, zuerst pur mit html, css, php und JavaScript bzw. jQuery, wobei ich sehr bald zu dem css-Framework <a href="http://semantic-ui.com/" target="_blank">semantic-ui</a> wechselte. Zuletzt kam die Zweisprachigkeit als Funktion hinzu. Die Seite befindet sich auch weiterhin in der Entwicklung. Über Feedback und Kritik würde ich mich freuen.</p>
					</div>
					<div class="item" id="tinytester">
						<h4 class="ui header">TinyTester</h4>
						<p>Nachdem ich einen Artikel über Sicherheits- bzw. Privacy-Probleme bei TinyURL, bit.ly usw. gelesen hatte kam mir die Idee dem ganzen selbst einmal auf den Grund zu gehen. Außerdem suchte ich schon länger eine Gelegenheit mich einmal mit Python zu beschäftigen. Daraus entstand der TinyTester. Das Programm fragt TinyURL, bit.ly oder ähnliche Seiten mit zufällig ausgewürfelten URLs an und speichert sich die dahinter verlinkte Seite, falls es eine gibt. Die Erfolgsquote lag dabei mit ungefähr 10% bei TinyURL erstaunlich hoch. In Zukunft plane ich das Programm noch auf Umfragedienste wie doodle und strawpoll zu erweitern.</p>
					</div>
				</div>
			<?php else:?>
				<h3 class="ui header">Here you will find a list of some of my private projects</h3>
				<div class="ui list">
					<div class="item" id="personalwebsite">
						<h4 class="ui header">This website</h4>
						<p>With joining HHC I started learning some web stuff. I am experimenting with html, css, jQuery and the css framework semantic-ui on this website. It is still under development. By the way, I like green.</p>
					</div>
					<div class="item" id="tinytester">
						<h4 class="ui header">TinyTester</h4>
						<p>After reading news about a group testing URL shortening sites for their security I thought this could be a good way to start experimenting with python. So I wrote a small program to test random tinyurl links and save the actual link behind them if there is one. I am having about 10 percent hit chance with random links.<br>
						I'm also planing to expand the tool to survey services like strawpoll and doodle.</p>
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
		$("#projectsbtn").attr("class","active item");
	});
</script>
</html>