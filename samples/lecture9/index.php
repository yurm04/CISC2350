<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lecture 9</title>
</head>
<body>
	<h1>PHP Features</h1>
	<hr>
	<section style="display: none">
		<h2><?php echo 'Strings' ?></h2>
		<hr>
		<?php
		/**
		 * String Data types
		 */

		$name = "Yuraima";
		$city = "New York";

		// concatenation with the '.' operator
		echo 'My name is ' . $name . ', I live in ' . $city;

		echo '<br>'; // don't forget, you can use HTML in PHP too

		// double quotes will interpret variable
		echo "My name is $name, I live in $city";
		?>
	</section>

	<section style="display:none">
		<h2><?php echo 'Integers' ?></h2>
		<hr>
		<?php
		$age = 26;
		$student_loan_debt = -1000000;

		echo "At $age years old I only have $$student_loan_debt!"; // notice how PHP doesn't care that these are integers in strings.  It will do the conversion for you.
		?>
	</section>

	<section style="display:none">
		<h2><?php echo 'Floats' ?></h2>
		<hr>
		<?php
		$price = 10.77; // cheese pizza and a large soda from Panucci's pizza, same as my pin number
		$pi_precise = 3.14159265359;

		echo $price;
		?>
	</section>

	<section style="display: none">
		<h2><?php echo 'Booleans' ?></h2>
		<hr>
		<?php
		$php_is_cool = TRUE; // NO QUOTES! booleans are not strings
		$puppies_arent_that_cute = FALSE; // literally equates to the value FALSE
		?>
		<h3>TRUE and FALSE equate to 1 and 0 respectively:</h3>
		<p>PHP is cool => <?php echo $php_is_cool ?></p>
		<p>Puppies aren't that cute => <?php echo $puppies_arent_that_cute ?></p>
		<small>^^^ (a boolean FALSE in PHP is actually just an empty value)</small>
	</section>

	<section style="display: none;">
		<h2><?php echo 'NULL' ?></h2>
		<hr>
		<?php
		$leo_oscars = null;
		?>
		<p>Oscars for Leo pre 2016: <?php echo $leo_oscars ?></p>

		<?php
		$leo_oscars = 1; // finally
		?>
		<p>Oscars for Leo in 2016: <?php echo $leo_oscars; ?></p>
	</section>

	<section style="display: none;">
		<h2><?php echo 'Indexed Arrays' ?></h2>
		<hr>
		<h3>Languages we've learned so far:</h3>
		<?php
		// this is how you declare and initialize an array
		$languages_learned = array("HTML", "CSS", "PHP");

		// you can access your array element using the index number
		echo $languages_learned[0]; // arrays start at 0
		echo '<br>';
		echo $languages_learned[1];
		echo '<br>';
		echo $languages_learned[2];

		// you can also add to arrays by adding to the next array index
		$languages_learned[3] = "MySQL";
		echo $languages_learned[3];
		echo '<br>';

		// to add an element to the end of an array
		$languages_learned[] = "JavaScript";
		echo $languages_learned[4];
		 ?>
	</section>

	<section style="display: block;">
		<h2><?php echo 'Associative Arrays' ?></h2>
		<hr>
		<h3>Types of Languages we've learned so far:</h3>
		<?php
		// this is how you declare and initialize an array
		$language_types = array("markup" => "HTML", "stylesheet" => "CSS", "programming" => "PHP");

		// you can access your array element using the index number
		echo "The markup language we learned was <strong>${language_types["markup"]}</strong>."; // arrays start at 0

		echo '<br>';

		echo '<strong>' . $language_types['stylesheet'] . '</strong> is our stylesheet language.';

		echo '<br>';

		echo 'Our programming language for this semester is <strong>' . $language_types['programming'] . '</strong>.';

		echo '<br>';

		// you can also add to associative arrays by creating the key and value
		$language_types["database"] = "MySQL";
		echo "The database langauage we will learn is <strong>${language_types["database"]}</strong>.";
		 ?>
	</section>
</body>
</html>
