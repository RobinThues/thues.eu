<div class="ui attached stackable inverted menu" id="footy">
	<div class="ui container">
		<div class="fitted item">
			<div class="item">
				<?php
				$url = $_SERVER["REQUEST_URI"];
				if (strpos($url, "/de/") !== false) {
					echo 'Sprache wählen:';
				}
				else {
					echo 'Select your language:';
				}?>
				<div class="link item" id="gerbtn">
					<i class="de flag"></i>
				</div>
				<div class="link item" id="enbtn">
					<i class="us flag"></i>
				</div>
			</div>
		</div>
		<div class="right menu">
			<div class="ui fitted item">
				<a href="https://de.linkedin.com/in/RobinThues" target="_blank">
					<i class="huge linkedin square link icon"></i>
				</a>
				<a href="https://twitter.com" target="_blank">
					<i class="huge twitter square link icon"></i>
				</a>
				<a href="https://facebook.com" target="_blank">
					<i class="huge facebook square link icon"></i>
				</a>
				<a href="https://www.xing.com/profile/Robin_Thues" target="_blank">
					<i class="huge xing square link icon"></i>
				</a>
				<a href="https://github.com/RobinThues" target="_blank">
					<i class="huge github square link icon"></i>
				</a>
			</div>
		</div>
	</div>
</div>