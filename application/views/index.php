<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.tailwindcss.com"></script>
<body>
	<?php include ("Partials/nav.php"); ?>
	<div id="main-content">
		<?php include ("home_view.php")?>
	</div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	$(document).ready(function() {
		var currentUrl = window.location.href;
		$('#main-content').load(currentUrl + ' #content');

		$('#js-home-link, #js-lists-link, #js-contact-link, #js-login-link').click(function(e) {
			e.preventDefault();
			var url = $(this).attr('href');
			$('#main-content').load(url);
		});
	});
</script>
