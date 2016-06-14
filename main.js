$(function() {
	// Sprachen Zeugs
	$(document).ready(function() {
		if (document.URL.indexOf("/de/") != -1) {
			$("#enbtn").attr("class","link item");
			$("#gerbtn").attr("class","active link item");
		}
		else if (document.URL.indexOf("/en/") != -1) {
			$("#gerbtn").attr("class","link item");
			$("#enbtn").attr("class","active link item");
		}
	});
	$('#gerbtn').click(function() {
		var url = document.URL;
		if(url.indexOf("/de") == -1) {
			var lastSlash = url.lastIndexOf("/");
			var page = url.substring(lastSlash);
			var newurl = "http://thues.eu/de" + page;
			window.location.href = newurl;
		}
		else {
			alert("Dies ist bereits die deutsche Version der Seite.");
		}
	});
	$('#enbtn').click(function() {
		var url = document.URL
;		if(url.indexOf("/en") == -1) {
			var lastSlash = url.lastIndexOf("/");
			var page = url.substring(lastSlash);
			var newurl = "http://thues.eu/en" + page;
			window.location.href = newurl;
		}
		else {
			alert("This is the english version.");
		}
	});
	// Sprachen Zeugs Ende
});

/*$('.ui.form').form({
	on: 'blur', 
	fields: {
		name: {
			identifier: 'name',
			rules: [
				{
				type	: 'empty',
				prompt	: 'Please enter your name'
				}
			]
		},
		gender: {
			identifier: 'gender',
			rules: [
				{
					type	: 'empty',
					prompt	: 'Please select a gender'
				}
			]
		},
		email: {
			identifier: 'email',
			rules: [
				{
					type	: 'empty',
					prompt	: 'Please enter a username'
				},
				{
					type	: 'email',
					prompt	: 'Please enter an e-mail address'
				}
			]
		}
	}
});*/