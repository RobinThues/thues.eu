<div class="ui card">
	<div class="image">
		<img src="/res/bob.jpg">
	</div>
	<div class="content">
		<div class="ui two column raised stackable grid container">
			<?php
			$url = $_SERVER["REQUEST_URI"];
			if (strpos($url, "/de/") !== false):?>
				<div class="column">
					<p>
						Alter:<br>
						Wohnort:<br>
						Job:
					</p>
				</div>
				<div class="column">
					<p>
						<?php echo (date("Y")-1992) ?><br>
						Düsseldorf<br>
						Student
					</p>
				</div>
			<?php
			else:?>
				<div class="column">
					<p>
						Age:<br>
						Hometown:<br>
						Job:
					</p>
				</div>
				<div class="column">
					<p>
						<?php echo (date("Y")-1992) ?><br>
						Düsseldorf<br>
						Student
					</p>
				</div>
			<?php endif;?>
		</div>
	</div>
</div>