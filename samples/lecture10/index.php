<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lecture 10</title>
</head>
<body>
	<!-- SWITCH STATEMENTS -->
	<section style="display:none;">
		<?php
			$animal = 'dog';

			switch ($animal) {
				case 'dog':
					echo "A group of dogs is called a pack";
					break;

				case 'otter':
					echo "A group of otters is called a romp";
					break;

				case 'porcupine':
					echo "A group of porcupine is called a prickle";
					break;

				case 'hyena':
					echo "A group of hyenas is called a cackle";
					break;


				default:
					echo "A group of animals is called Rose Hill Students";
					break;
			}
		?>
	</section>
</body>
</html>
