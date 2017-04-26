<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lecture 11 Form Handling</title>
</head>
<body>
	<?php
	// uncomment the line below to see the value of the POST data
	// echo '<pre>' . print_r($_POST, true) . '</pre>';
	 ?>
	<h1>Lecture 11: Form Handling</h1>
	<h2>Student Info Form</h2>
	<form action="data_input.php" method="post">
		<fieldset>
			<label for="first_name">Enter first name</label>
			<input type="text" name="first_name" required>
		</fieldset>

		<fieldset>
			<label for="last_name">Enter last name</label>
			<input type="text" name="last_name" required>
		</fieldset>

		<fieldset>
			<label for="last_name">Enter credits earned</label>
			<input type="number" name="credits" required>
		</fieldset>

		<input type="submit" name="Submit">
	</form>
	<?php
		/**
		 * Connect to database
		 */
		// mysql credentials
		$db_hostname = 'localhost'; // we are connecting to our own computers
		$db_database = 'school';
		$db_username = 'root'; // probably "root" for now
		$db_password = 'root'; // probably "root" for now

		// connect to the database using the MySQLi extension and create a db connection
		$db_conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

		// check to see if successfully connected to database
		if (!$db_conn) {
			echo '<p style="Sorry, a database error occurred. Please try again."';
			exit; // stops all other code from running - KILLS THE PROGRAM
		}
	?>

	<?php /* Handle form submit */ ?>
	<?php if ( !empty($_POST['first_name']) ): ?>
		<?php
			/**
			 * INSERT DATA INTO TABLE
			 */
			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$credits = $_POST['credits'];

			/**
			 * the ?'s are used as a placeholder for the values to be inserted.
			 * Allows mysqli to properly prepare and bind the values
			 */
			$insert_query = "INSERT INTO students (firstname, lastname, credits)
							 VALUES (?, ?, ?)";
			$prepared_insert = mysqli_prepare($db_conn, $insert_query);

			/**
			 * bind the params. The second argument "ssi" is meant to hint
			 * to the function what types are being passed "string, string, int"
			 */
			mysqli_stmt_bind_param($prepared_insert, "ssi", $first_name, $last_name, $credits);

			// execute the prepared statement and check for new rows
			$success = mysqli_stmt_execute($prepared_insert);
			$count = mysqli_affected_rows($db_conn);

			// close the prepared statement
			mysqli_stmt_close($prepared_insert);
		?>

		<?php /* If successfully inserted rows, display confirmation message */ ?>
		<?php if ($success && $count > 0): ?>
		<h3>Thanks for submitting <?php echo $first_name; ?>, below is the updated students table</h3>
		<?php endif; ?>
	<?php endif ?>

	<?php
		// query for any existing students
		$get_students = "SELECT * FROM students";

		// use mysqli_query to run the query you created, and save results to variable
		$students_result = mysqli_query($db_conn, $get_students);

		// empty array of students
		$students = array();

		// check for records in the result
		if (mysqli_num_rows($students_result) > 0) {
			// loop through the results with a while loop
			for ( $i = 0; $row = mysqli_fetch_array($students_result, MYSQLI_ASSOC); $i++) {
				// populate a students array
				$students[$i]['id'] = $row['id'];
				$students[$i]['first_name'] = $row['firstname'];
				$students[$i]['last_name'] = $row['lastname'];
				$students[$i]['credits'] = $row['credits'];
			}
		}
	?>
	<?php if ( !empty($students) ): ?>
		<h3>Students</h3>
		<table>
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Earned Credits</th>
			</tr>

			<?php foreach ($students as $student): ?>
			<tr>
				<td><?php echo $student['id'] ?></td>
				<td><?php echo $student['first_name'] ?></td>
				<td><?php echo $student['last_name'] ?></td>
				<td><?php echo $student['credits'] ?></td>
			</tr>
			<?php endforeach; ?>
		</table>
	<?php else: ?>
		<h3>No students to display.</h3>
	<?php endif ?>
</body>
</html>
