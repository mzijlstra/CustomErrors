<?php 
#Hooked up through httpd.conf ErrorDocument directive 
# and php.ini auto_prepend_file of error_include.php 
?>
<!DOCTYPE html>
<html>
	<head>
		<title>500</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="/error/style.css" />
	</head>
	<body>
		<div class="error">
			500 Internal Server Error
		</div>
		<div class="emoticon">
			
(╯°□°）╯︵ ┻━┻
		</div>

		<div class="msg">
			Something bad happened during the execution of this file.<br />
			Check your log/error.log on the server for more details!
		</div>
	</body>
</html>
