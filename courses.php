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
						<li>Grundlagne der Softwareentwicklung und Programmierung</li>
						<li>Grundlagen der Technischen Informatik</li>
						<li>Grundlagen der Algorithmen und Datenstrukturen</li>
						<li>Grundlagen der Theoretischen Informatik</li>
						<li>Programmierpraktikum</li>
						<li>Rechnernetze</li>
						<li>Betriebssysteme</li>
						<li>Grundlagen verteilter Systeme</li>
					</ul>
					<h3>Mathematik</h3>	
					<ul class="ui list">
						<li>Lineare Algebra I-II</li>
						<li>Analysis I-II</li>
						<li>Modellbildung in der Stochastik</li>
						<li>Numerik I</li>
						<li>Computergestützte Mathematik zur Linearen Algebra und Analysis</li>
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
						<li>Introduction to Programming and Software Development</li>
						<li>Principles of Applied Computer Science</li>
						<li>Fundamentals of Algorithms and Data Structures</li>
						<li>Theoretical Foundations of Computer Science</li>
						<li>Programming Project</li>
						<li>Computer Networks</li>
						<li>Operating Systems</li>
						<li>Foundations of Distributed Systems</li>
					</ul>
					<h3>Mathematics</h3>	
					<ul class="ui list">
						<li>Linear Algebra I-II</li>
						<li>Analysis I-II</li>
						<li>Modelling in Stochastics</li>
						<li>Numerics I</li>
						<li>Computational Mathematics in Linear Algebra and Analysis</li>
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
		<div class="row">
			<div class="column">
				<!--Abstand zum Footer-->
			</div>
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


