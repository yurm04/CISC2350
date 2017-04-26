<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MySQL and PHP</title>
</head>
<body>
	<?php
		// mysql credentials
		$db_hostname = 'localhost'; // we are connecting to our own computers
		$db_database = 'school';
		$db_username = 'root'; // probably "root" for now
		$db_password = 'root'; // probably "root" for now

		// connect to the database using the MySQLi extension and create a db connection
		$db_conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

		// check to see if successfully connected to database
		if (!$db_conn) {
			echo "Error: Unable to connect to MySQL." . PHP_EOL;
			echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
			echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
			exit; // stops all other code from running - KILLS THE PROGRAM
		}

		echo "Success: A proper connection to MySQL was made!" . PHP_EOL;
		echo "Host information: " . mysqli_get_host_info($db_conn) . PHP_EOL;

		// close the connection to the database
		mysqli_close($db_conn);

		/**
		 * RUN DB QUERY
		 */

		// create the query string and save to a variable
		// $query = "SELECT * FROM students";

		// use mysqli_query to run the query you created, and save results to variable
		// $result = mysqli_query($db_conn, $query);

		// check for records in the result
		/*if (mysqli_num_rows($result) > 0) {
			// loop through the results with a while loop
			while ( $row = mysqli_fetch_assoc($result)) {
				echo "</br>";
				// row is an associative array, with the columns acting as the keys
				echo "ID: ${row['id']} </br> ";
				echo "First Name: ${row['firstname']} </br> ";
				echo "last name: ${row['lastname']} </br> ";
			}
		} else {
			echo "No results found.";
		}*/

		// close the connection
		// mysqli_close($db_conn);

		/**
		 * UPDATE A RECORD
		 */

		// create update query
		/*$update_query = "UPDATE students SET firstname='Yurm' WHERE lastname='Estevez'";
		$result = mysqli_query($db_conn, $update_query);

		echo "<br/>";

		// check to see if successful
		if ($result) {
			echo "Record updated successfully";
		} else {
			echo "Error updating: " . mysqli_error($db_conn);
		}*/

		// close the connection to the database
		// mysqli_close($db_conn);
	?>
</body>
</html>




