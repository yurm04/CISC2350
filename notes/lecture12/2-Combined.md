# Combining MySQL & PHP
By using both MySQL and PHP together, we now have the ability to work with persistent data in our PHP programs.  Our programs should follow a specific process for working with MySQL and PHP together:

1. Connect to MySQL.
2. Select the database to use.
3. Build a query string.
4. Perform the query.
5. Retrieve the results and output them to a web page.
6. Repeat Steps 3 through 5 until all desired data has been retrieved. 7. Disconnect from MySQL.

## Create login credentials
In order for PHP to connect to the MySQL database it needs to have the credentials that will grant it access to the database server.

**NOTE** Keeping our credentials in our local PHP files for *development purposes only* is ok.  However, **NEVER** commit **ANY** sensitive information in your repo and push it up to GitHub.

The credentials we need to setup to connect to the database:

```php
$db_hostname = 'localhost'; // we are connecting to our own computers
$db_database = 'database_name';
$db_username = 'username'; // probably "root" for now
$db_password = 'password'; // probably "root" for now
```

## Connecting to the database
To connect to the database from our PHP program, we will be using PHP's MySQLi extension.  MySQLi supports connecting to databases and executing queries in a procedural manner (using functions).  To start, use the `mysqli_connect` function to creat a _database connection_ and save it to a variable.

```php
// connect to the database using the MySQLi extension and create a db connection
$db_conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
```

The `$db_conn` will be used in all of the MySQLi functions used.  Before going any further, make sure to check for errors in the connection:

```php
// if $db_conn is empty, show some errors
if (!$db_conn) {
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	exit; // stops all other code from running - KILLS THE PROGRAM
}
```

## Querying for data
Now that we are connected to the database, let's run a query to get some records from a table.

```php
// create the query string and save to a variable
		$query = "SELECT * FROM students";

// use mysqli_query to run the query you created, and save results to variable
$result = mysqli_query($db_conn, $query);

// check for records in the result
if (mysqli_num_rows($result) > 0) {
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
}

```

## Disconnect
When we no longer need to communicate with the database, always disconnect using  the `mysqli_close` function

```php
mysqli_close($db_conn);
```

## Inserting data and sanitization
When collecting information from users, it is incredibly important that we do not introduce any malicious data into our programs.  Before saving anything collected to the database **ALWAYS** sanitize the data to make sure we weren't passed anything that could harm us.  A malicious user has the ability to execute unwanted scripts, expose private information, and introduce damaging code if your data is not properly handled.

Use the following `mysqli` functions to properly sanitize data and execute queries safely.

- [`mysqli_prepare`](http://php.net/manual/en/mysqli.prepare.php) - prepares a query for execution
- [`mysqli_stmt_bind_param`](http://php.net/manual/en/mysqli-stmt.bind-param.php) - binds variables to a prepared statement as parameters
- [`mysqli_stmt_execute`](http://php.net/manual/en/mysqli-stmt.execute.php) - executes a prepared Query
- [`mysqli_affected_rows`](http://php.net/manual/en/mysqli.affected-rows.php) - gets the number of affected rows in a previous MySQL operation
- [`mysqli_stmt_close`](http://php.net/manual/en/mysqli-stmt.close.php) - closes a prepared statement


___

[« Back - Intro to MySQL](1-MySQL.md)
