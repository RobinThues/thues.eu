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
			var newurl;
			if(page.length>1) {
				newurl = "http://thues.eu/de" + page;
			}
			else {
				newurl = "http://thues.eu/de/home";
			}
			window.location.href = newurl;
		}
		else {
			//alert("Dies ist bereits die deutsche Version der Seite.");
		}
	});
	$('#enbtn').click(function() {
		var url = document.URL
;		if(url.indexOf("/en") == -1) {
			var lastSlash = url.lastIndexOf("/");
			var page = url.substring(lastSlash);
			var newurl;
			if(page.length>1) {
				newurl = "http://thues.eu/en" + page;
			}
			else {
				newurl = "http://thues.eu/en/home";
			}
			window.location.href = newurl;
		}
		else {
			//alert("This is the english version.");
		}
	});
	// Sprachen Zeugs Ende, Form Validation Beginn
	$('.ui.form').form({
	inline	: true,
	on		: 'blur',
	fields	: {
		name: {
			identifier: 'name',
			rules: [
				{
					type	: 'empty',
					prompt	: 'Please enter your name.'
				},
				{
					type	: 'minLength[2]',
					prompt	: 'That not a name.'
				}
			]
		},
		email: {
			identifier: 'email',
			rules: [
				{
					type	: 'empty',
					prompt	: 'Please enter your e-mail-address.'
				},
				{
					type	: 'email',
					prompt	: 'Please enter an e-mail address.'
				},
				{
					type	: 'minLength[8]',
					prompt	: 'Please enter a valid e-mail address.'
				}
			]
		},
		subject: {
			identifier: 'subject',
			rules: [
				{
					type	: 'empty',
					prompt	: 'Please enter a subject.'
				}
			]
		},
		message: {
			identifier: 'message',
			rules: [
				{
					type	: 'empty',
					prompt	: 'Please enter a message.'
				},
				{
					type	: 'minLength[50]',
					prompt	: 'Your message is a little short.'	
				}
			]
		}
	}
	});
});

