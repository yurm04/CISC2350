<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lecture 10</title>

	<style>
		section {
			margin-bottom: 5rem;
		}
	</style>
</head>
<body>
	<!-- SWITCH STATEMENTS -->
	<section style="display:none;">
		<h2>Switch Statements</h2>
		<hr>
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

	<!-- WHILE LOOP -->
	<section style="display:block">
		<h2>While loops</h2>
		<hr>

		<?php
			// start off with a count of 0
			$count = 0;

			// create my while loop and evaluate the condition of my count variable
			while ( $count <= 10) {
				// print out the current count
				echo "$count ";

				// MAKE SURE TO UPDATE THE VALUE THAT I AM EVALUATING TO AVOID AN INFINITE LOOP
				$count++;
			}
		?>
	</section>

	<!-- DO-WHILE LOOP -->
	<section style="display:block">
		<h2>Do-While loops</h2>
		<hr>

		<?php
			// start off with a count of 0
			$count = 0;

			// start my loop, and execute the loop code FIRST
			do {
				// echo out the current count
				echo "$count ";

				// MAKE SURE TO UPDATE THE VALUE THAT I AM EVALUATING TO AVOID AN INFINITE LOOP
				$count++;

				// evaluate the expression.  If condition met, end loop. If not met, continue with loop
			} while ($count <= 10);
		?>
	</section>

	<!-- DO-WHILE LOOP -->
	<section style="display:block">
		<h2>For loops</h2>
		<hr>

		<?php
			/**
			 * 1. Start with the initialization expression that creates the $count variable and sets it to 0
			 * 2. Specify the condition that must be TRUE in order for the loop to continue.
			 * 3. Increment the value being checked in the condition to avoid an infinite loop
			 */
			for ($count = 0; $count <= 10; $count++) {
				echo "$count ";
			}
		?>
	</section>

	<!-- FOREACH LOOP -->
	<section style="display:block">
		<h2>For-Each loops</h2>
		<hr>

		<?php
			$languages = array("HTML", "CSS", "PHP");
		?>

		<h3>Languages we have learned so far:</h3>
		<ul>
			<?php
				// for each element of the $languages array, echo out the language as a list item
				foreach ($languages as $language) {
					echo "<li>$language</li>";
				}
			?>
		</ul>
	</section>

	<!-- ASSOCIATIVE FOREACH LOOP -->
	<section style="display:block">
		<h2>Associative For-Each loops</h2>
		<hr>

		<h3>Languages we have learned so far:</h3>
		<ul>
			<?php
				$languages = array(
					"markup" => "HTML",
					"stylesheet" => "CSS",
					"programming" => "PHP"
				);

				// for each element of the $languages array, echo out the language and language type.
				foreach ($languages as $type => $name) {
					echo "<li>The $type language we learned is $name</li>";
				}
			?>
		</ul>
	</section>

	<!-- CONTINUE KEYWORD -->
	<section style="display:block">
		<h2>Continue</h2>
		<hr>

		<h3>Languages we have learned so far:</h3>
		<ul>
			<?php
				$languages = array(
					"markup" => "HTML",
					"database" => "MySQL",
					"stylesheet" => "CSS",
					"programming" => "PHP"
				);

				// for each element of the $languages array, echo out the language and language type.
				foreach ($languages as $type => $name) {
					// we haven't learned a database language yet, so let's skip with the continue keyword
					if ($type === 'database') {
						// don't execute the rest of the code block, just go on to the next iteration
						continue;
					}

					echo "<li>The $type language we learned is $name</li>";
				}
			?>
		</ul>
	</section>

	<!-- BREAK KEYWORD -->
	<section style="display:block">
		<h2>Break</h2>
		<hr>

		<?php
			$lights = array("green", "green", "green", "red", "green", "green", "green");

			foreach($lights as $light) {
				$command = ($light === 'green') ? 'GO' : 'STOP';

				echo '<p style="color:' . $light . ';">' . $command . '</p>';

				// if the command is equal to 'STOP', break out of the loop and stop iterating
				if ($command === 'STOP') {
					break;
				}
			}
		?>
	</section>

	<!-- USER DEFINED FUNCTIONS -->
	<section style="display:block">
		<h2>User defined functions</h2>
		<hr>

		<?php
			// declare the function
			function say_hello() {
				echo "<p>Hello, World!</p>";
			}

			// call the function
			say_hello();

			// ...Do some other stuff in our code
			echo '...';

			// call the function again
			say_hello();

		?>
	</section>

	<!-- FUNCTION PARAMETERS AND ARGUMENTS  -->
	<section style="display:block">
		<h2>Function Parameters and Arguments</h2>
		<hr>

		<?php
			// Your function can take multiple parameters as a comma separated list.  Order matters for parameters when passed
			function custom_greeting($greeting, $name) {
				echo "<p>$greeting, $name</p>";
			}

			// call the function, and pass it the argument that corresponds with the parameter declared.
			custom_greeting('Hello', 'Yuraima');

			// don't forget, order matters when passing your arguments to your functions
			custom_greeting('Howdy', 'partner');

			custom_greeting('Wassup', 'losers');
		?>
	</section>

	<!-- FUNCTION RETURN VALUES  -->
	<section style="display:block">
		<h2>Function Return Values</h2>
		<hr>

		<?php
			// function returns a value when it is called using the 'return' keyword
			function get_full_name($first_name, $last_name) {
				$full_name = "$first_name $last_name";

				return $full_name;
			}

			// the function return value is then saved to the variable
			$name = get_full_name('Princess Consuela', 'Bananahammock');

			// and we can use the variable elsewhere in our code
			custom_greeting('Hello', $name);
		?>
	</section>

	<!-- BUILT-IN FUNCTIONS  -->
	<section style="display:block">
		<h2>Built in Functions</h2>
		<hr>

		<?php
			// should return the first and last name, with proper casing
			function get_proper_name($first_name, $last_name) {
				$full_name = "$first_name $last_name";

				// using the built-in php function we can upper case the name and get the return value.
				$proper_case = ucwords($full_name);

				// return the proper case when called
				return $proper_case;
			}

			$name = get_proper_name('yuraima', 'estevez');
			echo $name; // Yuraima Estevez
		?>
	</section>

</body>
</html>
