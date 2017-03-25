<DOCTYPE html>
<html>
	<head>
		<title>Intro to PHP</title>
		<meta charset="utf-8">
	</head>
	<body>
		<!-- html comment -->

		<?php
			// php comment

			# another comment

			/*
				another
				comment
				yay!
			 */

			$name = "Yurm";
			$age = 26;
			$city = $name . 26;
			$blah;
			$constant = 'MY_NAME';
			define("MY_NAME", "Yuraima");
			$name = 'John';
		 ?>
		<h1><?php echo "Hello!" ?></h1>
		<h2><?php echo $name . " " . $city . ' ' . $age; ?></h2>
		<h3><?php echo $age ?></h3>
		<h3><?php echo $city ?></h3>
		<h3><?php echo MY_NAME; ?></h3>
	</body>
</html>
