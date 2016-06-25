<?php
$mailsuccess = False;
$captchafailed = False;
if (isset($_POST["btn"])) {
	// Captcha abfragen
	$secret = "6LfYkiITAAAAABnFJlC0Gk2GRR6BwWE94v0RU4kP";
	if (isset($_POST['g-recaptcha-response'])) {
		$captcha = $_POST['g-recaptcha-response'];
		$privatekey = $secret;
		$url = 'https://www.google.com/recaptcha/api/siteverify'; // Data vorbereiten
		$data = array(
			'secret' => $privatekey,
			'response' => $captcha,
			'remoteip' => $_SERVER['REMOTE_ADDR']
		); // CURL vorbereiten
		$curlConfig = array(
			CURLOPT_URL => $url,
			CURLOPT_POST => true,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_POSTFIELDS => $data
		); // CURL'n
		$ch = curl_init();
		curl_setopt_array($ch, $curlConfig);
		$response = curl_exec($ch);
		curl_close($ch);
	}
	$jsonResponse = json_decode($response);

	if ($jsonResponse->success == "true") {
		// E-Mail per Form vorbereiten und absenden
		$mailaddr = 	htmlspecialchars($_POST['email']);
		$mailsubject = 	htmlspecialchars($_POST['subject']);
		$mailsender = 	htmlspecialchars($_POST['name']);
		$mailmsg = 		htmlspecialchars($_POST['message']) . "\r\n" . $mailaddr;
		$mailheaders = 	"From: ".$mailsender." <no-reply@thues.eu>" . PHP_EOL .
			"Reply-To: ".$mailsender." <".$mailaddr.">" . PHP_EOL .
			"X-Mailer: PHP/" . phpversion() . PHP_EOL .
			"MIME-Version: 1.0" . PHP_EOL .
			"Content-Type: text/plain; charset=utf-8";
		// E-Mail fertig
		if(mail("robinthues@gmail.com", $mailsubject, $mailmsg, $mailheaders))
			$mailsuccess = True;
	}
	else
		$captchafailed = True;
}
?>