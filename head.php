<?php 
if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off") {
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
    exit();
}
else {
	header("strict-transport-security: max-age=604800");
}?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Robin Thüs</title>
	<meta name="author" content="Robin Thüs">
	<meta name="description" content="Robin Thüs' first personal web page.">
	<meta charset="UTF-8">
	<meta name="robots" content="noindex, nofollow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="https://thues.eu/res/rt.png">
	<link rel="stylesheet" type="text/css" href="https://thues.eu/styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<!--semantic-ui-->
	<link rel="stylesheet" type="text/css" href="https://thues.eu/semantic/dist/semantic.min.css">
	<script src="https://thues.eu/semantic/dist/semantic.min.js"></script>
	<script type="text/javascript" src="https://thues.eu/main.js"></script>
</head>