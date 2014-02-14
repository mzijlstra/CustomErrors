<?php #Hooked up through httpd.conf ErrorDocument directive ?>
<!DOCTYPE html>
<html>
	<head>
		<title>404</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="/error/style.css" />
	</head>
	<body>
		<div class="error">
			404 Not Found 
		</div>
		<div class="emoticon">
			¯\(°_o)/¯
		</div>
		<div class="msg">
			I'm not sure what page you were looking for. <br />
			But there definitely isn't anything at:<br />
		</div>

		<div class="url">
			http://mumstudents.org<?= $_SERVER['REDIRECT_URL'] ?>
		</div>
	</body>
</html>
