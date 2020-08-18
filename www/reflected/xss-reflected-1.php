<?php

	if (isset($_REQUEST['source'])) {
		$source = file_get_contents(__FILE__);
		$source = highlight_string($source, true);
		die($source);
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>XSS Reflected Challenge 1</title>
	<style type="text/css">
		body{
			font-family: monospace;
		}
	</style>
</head>
<body>
	<h1>XSS Reflected Challenge 1</h1>
	<?php if (isset($_REQUEST['name'])) { echo "<b>Hello ".$_REQUEST['name']."</b><br>"; } ?>
	<form method="GET">
		<input type="text" name="name" autocomplete="false" placeholder="Enter your name">
		<input type="submit" value="Say Hello">
	</form>
	<!-- navigate to ?source to get the source -->
</body>
</html>