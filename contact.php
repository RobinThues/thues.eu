<?php include 'head.php'; ?>
<body>
<header>
	<?php include 'header.php'; ?>
</header>

<div class="ui grid container">
	<div class="row">
		<div class="column">
			<!--Abstand zur Navigation-->
		</div>
	</div>
	<div class="eleven wide column">
		<div id="content">
			<div class="ui very padded raised green segment">
				Contact via:<br>
				<a href="mailto:robinthues@blabla.com">
					<i class="green big mail outline link icon"></i>
				</a>
				<a href="skype:testing?userinfo">
					<i class="green big skype link icon"></i>
				</a>
				<a href="tel://0190666666">
					<i class="green big phone link icon"></i>
				</a>
			</div>

			<form class="ui very padded raised form green segment" id="contactform">
				<div class="field">
					<label>Name</label>
					<input type="text" name="name" placeholder="Max Mustermann">
				</div>
				<div class="grouped fields">
					<label for="gender">Select your gender</label>
					<div class="field">
						<div class="ui radio checkbox">
							<input type="radio" name="gender" checked="" tabindex="0" class="hidden">
							<label>female</label>
						</div>
					</div>
					<div class="field">
						<div class="ui radio checkbox">
							<input type="radio" name="gender" tabindex="0" class="hidden">
							<label>male</label>
						</div>
					</div>
				</div>
				<div class="field">
					<label>E-Mail address</label>
					<input type="text" name="email" placeholder="maxmuster@gmx.de">
				</div>
				<div class="field">
					<label>Subject</label>
					<input type="text" name="subject" placeholder="Request">
				</div>
				<div class="field">
					<label>Message</label>
					<textarea placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."></textarea>
				</div>
				<div class="ui success message">
				</div>
				<div class="ui error message">		
				</div>
				<button class="ui submit button" type="submit">Submit</button>
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