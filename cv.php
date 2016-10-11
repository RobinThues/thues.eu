<?php include 'head.php'; ?>
<body>
<header>
	<?php include 'header.php'; ?>
</header>

<div class="ui stackable grid container">
	<div class="row">
		<div class="twelve wide column">
			<!--Abstand zur Navigation-->
		</div>
	</div>
	<div class="eleven wide column">
		<div id="content" class="ui very padded raised green segment">
			<?php 
			$url = $_SERVER["REQUEST_URI"];
			if (strpos($url, "/de/") !== false): ?>
				<p>Ich wurde 1992 in <a href="http://www.duesseldorf.de/de/eng/index.shtml">Düsseldorf</a> geboren und lebe seitdem dort.<br>
				Schon früh in meiner Kindheit weckten Computer und Computerspiele mein Interesse, dazu zog es mich schulisch immer eher Richtung Mathematik. Zur Schule gegangen bin ich beim <a href="http://www.lgbk.de/">Lessing Gymnasium und Berufskolleg</a>. Als es darum ging mich für einen Pfad zum Abitur zu entscheiden fiel meine Entscheidung schnell auf Mathematik und Informatik als Leistungskurse.<br>
				Nach dem Abitur im Jahr 2011 stand der Entschluss für mich fest Informatik zu studieren. Dies fing ich zum folgenden Wintersemester an der <a href="http://www.uni-duesseldorf.de/home/startseite.html">Heinrich-Heine-Universität</a> an und habe vor dort mein Studium mit einem Master Informatik abzuschließen. Dabei liegt der Fokus meines Studiums auf Netzwerk- und Sicherheitstechnologien.<br>
				2016 fing ich außerdem als studentischer IT-Berater an bei <a href="http://hhc-duesseldorf.de/">Heinrich-Heine-Consulting e.V.</a> zu arbeiten.
				</p>
			<?php
			else: ?>
				I was born 1992 in <a href="http://www.duesseldorf.de/de/eng/index.shtml">Düsseldorf</a>, Germany and I am living there ever since.<br>
				I went so school at <a href="http://www.lgbk.de/">Lessing Gymnasium und Berufskolleg</a>. From the beginning on I liked mathematics most. During the last years of school I chose computer science and mathematics as my advanced courses.<br>
				After school I started studying computer science at <a href="http://www.uni-duesseldorf.de/home/startseite.html">Heinrich-Heine-University</a> and I'm planning on graduating as Master of Science in Computer Science there. My focus is on network technologies.<br>
				In 2016 I also started working at <a href="http://hhc-duesseldorf.de/">Heinrich-Heine-Consulting e.V.</a> as an IT Consultant.
				</p>
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
		$("#cvbtn").attr("class","active item");
	});
</script>
</html>