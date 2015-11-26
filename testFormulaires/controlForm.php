<!DOCTYPE HTML> 
<!--
	This file is a test for our forms
	author : Fabio Manuel da Mota Marques
-->
<html>
	<head>
		<!--
		<meta charset="UTF-8">
	-->
		
	</head>
	<body>
	
		<?php
			error_reporting(E_ALL);
			ini_set('display_errors', 'On');
			
			foreach($_POST as $x => $x_value)
				{
				$x_value = test_input($x_value);
				if($x == "mail")
					{
					filter_var($x_value, FILTER_VALIDATE_EMAIL);
					}

				echo $x.' = '.$x_value.'<br/>';
				}
				
			function test_input($data) 
				{
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
				}
		?>
	</body>
</html>