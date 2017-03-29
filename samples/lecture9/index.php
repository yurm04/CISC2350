<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lecture 9</title>
	<style>
		section {
			margin-bottom: 3rem;
		}
	</style>
</head>
<body>
	<h1>PHP Features</h1>
	<p>This file contains sample code to go along with lecture 9.</p>
	<hr>

	<!-- STRINGS -->
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

	<!-- INTEGERS -->
	<section style="display:none">
		<h2><?php echo 'Integers' ?></h2>
		<hr>
		<?php
		$age = 26;
		$student_loan_debt = -1000000;

		echo "At $age years old I only have $$student_loan_debt!"; // notice how PHP doesn't care that these are integers in strings.  It will do the conversion for you.
		?>
	</section>

	<!-- FLOATS -->
	<section style="display:none">
		<h2><?php echo 'Floats' ?></h2>
		<hr>
		<?php
		$price = 10.77; // cheese pizza and a large soda from Panucci's pizza, same as my pin number
		$pi_precise = 3.14159265359;

		echo $price;
		?>
	</section>

	<!-- BOOLEANS -->
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

	<!-- NULL -->
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

	<!-- INDEXED ARRAYS -->
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

	<!-- ASSOCIATIVE ARRAYS -->
	<section style="display: none;">
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

	<!-- MODULO OPERATOR -->
	<section style="display:none;">
		<h2><?php echo 'Modulo Operator (%)' ?></h2>
		<hr>
		<?php
		$remainder = 5 % 2; // 1
		echo "5 % 2 = $remainder";
		?>
	</section>

	<!-- INC. ASSIGNMENT OPERATOR -->
	<section style="display:none;">
		<h2><?php echo 'Increment Assignment Operator (+=)' ?></h2>
		<hr>
		<?php
		$value = 5;
		$value += 2; // same as $value = $value + 2
		?>
		<p>$value = 5;</p>
		<p>$value += 2;</p>
		<p>$value is now <?php echo $value; ?></p>
	</section>

	<!-- INCREMEMENT OPERATOR -->
	<section style="display:none;">
		<h2><?php echo 'Increment Operator (++)' ?></h2>
		<h3>Post Increment</h3>
		<hr>
		<?php
		$value_inc = 5;
		?>
		<p><?php echo 'Returns the value, then increments:  ' . $value_inc++; // 5 ?></p>
		<p><?php echo 'Value after incremented:  ' . $value_inc; // 6 ?></p>

		<h3>Pre Increment</h3>
		<hr>
		<?php
		$value_inc = 5;
		?>
		<p><?php echo 'Increments the value, then returns it:  ' . ++$value_inc; // 6 ?></p>
		<p><?php echo 'Value after incremented:  ' . $value_inc; // 6 ?></p>
	</section>

	<!-- IF STATEMENTS -->
	<section style="display:block;">
		<h2><?php echo 'if Statements' ?></h2>
		<?php
		$age = 21;

		if ($age >= 21) {
			echo "You can legally Drink!";
		}
		?>
	</section>

	<!-- ELSE STATEMENTS -->
	<section style="display:none;">
		<h2><?php echo 'else Statements' ?></h2>
		<?php
		$age = 19;

		if ($age >= 21) {
			echo "You can legally Drink!";
		} else {
			echo "Sorry, no beer for you";
		}
		?>
	</section>

	<!-- ELSEIF STATEMENTS -->
	<section style="display:none;">
		<h2><?php echo 'elseif Statements' ?></h2>
		<?php
		$age = 21;
		$citizen = false;

		if ($age >= 18 && $citizen) {
			echo "You can legally vote!";
		} elseif ($age >= 18 && $citizen === FALSE) {
			echo "Sorry, you must be a citizen to vote";
		} else {
			echo "Sorry, even though you are a citizen you must be 18 years old or over to vote";
		}
		?>
	</section>

</body>
</html>
