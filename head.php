<?php
header('X-Frame-Options: SAMEORIGIN');
header('Content-Security-Policy: default-src https:');
header('X-Content-Type-Options: nosniff');
header('X-Xss-Protection: 1; mode=block');
if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off") {
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
    exit();
}
else {
	header("strict-transport-security: max-age=10886401; includeSubDomains; preload");
}
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Robin Thüs</title>
	<meta name="author" content="Robin Thüs">
	<meta name="description" content="I am a computer science student. On this site are ome of my qualifications and contact information.">
	<meta charset="UTF-8">
	<meta name="robots" content="index, nofollow">
	<meta name="keywords" content="computer science student robin thues thüs HHC CV university courses informatik">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="https://thues.eu/res/rt.png">
	<link rel="stylesheet" type="text/css" href="https://thues.eu/styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<!--semantic-ui-->
	<link rel="stylesheet" type="text/css" href="https://thues.eu/semantic/dist/semantic.min.css">
	<script src="https://thues.eu/semantic/dist/semantic.min.js"></script>
	<script type="text/javascript" src="https://thues.eu/main.js"></script>
	<?php include_once('analyticstracking.php'); ?>
</head>