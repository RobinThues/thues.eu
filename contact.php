<?php include 'head.php'; ?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<body>
<header>
	<?php include 'header.php'; ?>
</header>
<?php include 'processForm.php'; ?>
<div class="ui grid container">
	<div class="row">
		<div class="column">
			<!--Abstand zur Navigation-->
		</div>
	</div>
	<div class="eleven wide column">
		<div id="content" class="ui segements">
			<div class="ui very padded raised green segment">
				<?php
				$url = $_SERVER["REQUEST_URI"];
				if (strpos($url, "/de/") !== false)
					echo 'Kontakt per:';
				else
					echo 'Contact via:';
				?>
				<br>
				<a href="mailto:robinthues at blabla.com">
					<i class="green big mail outline link icon"></i>
				</a>
				<a href="skype:testing?userinfo">
					<i class="green big skype link icon"></i>
				</a>
				<a href="tel://0190666666">
					<i class="green big phone link icon"></i>
				</a>
			</div>
			<?php
			if($mailsuccess):?>
			<form class="ui very padded raised form success green segment" id="contactform" method="POST" action="http://thues.eu/sent">
			<?php elseif($captchafailed):?>
			<form class="ui very padded raised form error green segment" id="contactform" method="POST" action="http://thues.eu/sent">
			<?php else:?>
			<form class="ui very padded raised form green segment" id="contactform" method="POST" action="<?php echo $url;?>">
			<?php endif;?>
				<div class="ui success message">
					<?php
					if (strpos($url, "/de/") !== false):?>
						<div class="hader">Senden erfolgreich</div>
						<p>Deine Nachricht wurde abgeschickt.</p>
					<?php else:?>
						<div class="header">Form completed</div>
						<p>Your message has been sent.</p>
					<?php endif;?>
				</div>
				<div class="ui error message">
					<?php
					if (strpos($url, "/de/") !== false):?>
						<div class="hader">Senden fehlgeschlagen</div>
						<p>Bist Du sicher kein Roboter?</p>
					<?php else:?>
						<div class="header">Form failed</div>
						<p>Could not confirm you are no robot.</p>
					<?php endif;?>
				</div>
				<div class="field">
					<label>Name</label>
					<input type="text" name="name" placeholder="Max Mustermann">
				</div>
				<div class="field">
					<label>
						<?php
						if (strpos($url, "/de/") !== false)
							echo 'E-Mail Adresse';
						else
							echo 'E-Mail address';
						?>
					</label>
					<input type="text" name="email" placeholder="max.mustermann@email.de">
				</div>
				<div class="field">
					<label>
						<?php
						if (strpos($url, "/de/") !== false)
							echo 'Betreff';
						else
							echo 'Subject';
						?>
					</label>
					<input type="text" name="subject" placeholder="Request">
				</div>
				<div class="field">
					<label>
						<?php
						if (strpos($url, "/de/") !== false)
							echo 'Nachricht';
						else
							echo 'Message';
						?>
					</label>
					<textarea name="message" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."></textarea>
				</div>
				<div class="g-recaptcha field" data-sitekey="6LfYkiITAAAAAHmq7wBK6IKrg0luI8Qg2RPRTvFc"></div>
				<button class="ui submit button" type="submit" name="btn" value="formsent">
					<?php
					if (strpos($url, "/de/") !== false)
						echo 'Absenden';
					else
						echo 'Submit';
					?>
				</button>
			</form>
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
		$("#contactbtn").attr("class","active item");
	});
</script>
</html>