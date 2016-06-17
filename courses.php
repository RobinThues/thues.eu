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
					<h2>Liste von abgeschlossenen Kursen</h2>
					<h3>Informatik, Master</h3>
					<ul class="ui list">
						<li>Peer-To-Peer-Systeme</li>
						<li>Architektur verteilter Systeme</li>
						<li>Algorithmen für Ad-hoc und Sensornetzwerke</li>
						<li>Algorithmen für schwere Probleme</li>
						<li>Sicherheitskritsche Systeme</li>
						<li>Netzwerksicherheit</li>
					</ul>
					<h3>Informatik, Bachelor</h3>
					<ul class="ui list">
						<li>Informatik I-IV</li>
						<li>Programmierpraktikum</li>
						<li>Rechnernetze</li>
						<li>Betriebssysteme</li>
						<li>Grundlagen verteilter Systeme</li>
					</ul>
					<h3>Mathematik</h3>	
					<ul class="ui list">
						<li>Lineare Algebra I-II</li>
						<li>Analysis I-II</li>
						<li>Einführung in die Stochastik</li>
						<li>Numerik I</li>
						<li>Einführung in die angewandte Statistik</li>
					</ul>
					<h3>Studium Universale</h3>
					<ul class="ui list">
						<li>Grundlagen der Online-Partizipation</li>
					</ul>
				<?php else:?>
					<h2>List of completed courses</h2>
					<h3>Computer Science, Master</h3>
					<ul class="ui list">
						<li>Peer-To-Peer-Systems</li>
						<li>Architektur verteilter Systeme</li>
						<li>Algorithmen für Ad-hoc und Sensornetzwerke</li>
						<li>Algorithmen für schwere Probleme</li>
						<li>Sicherheitskritsche Systeme</li>
						<li>Netzwerksicherheit</li>
					</ul>
					<h3>Computer Science, Bachelor</h3>
					<ul class="ui list">
						<li>Informatik I-IV</li>
						<li>Programmierpraktikum</li>
						<li>Rechnernetze</li>
						<li>Operating Systems</li>
						<li>Grundlagen verteilter Systeme</li>
					</ul>
					<h3>Mathematics</h3>	
					<ul class="ui list">
						<li>Lineare Algebra I-II</li>
						<li>Analysis I-II</li>
						<li>Einführung in die Stochastik</li>
						<li>Numerik I</li>
						<li>Einführung in die angewandte Statistik</li>
					</ul>
					<h3>Studium Universale</h3>
					<ul class="ui list">
						<li>Grundlagen der Online-Partizipation</li>
					</ul>
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
		$("#coursesbtn").attr("class","active item");
	});
</script>
</html>


