<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shuffle App</title>
</head>
<body>
	<?php
		/**
		 * pulls in the code from the file you require (only once) so
		 * that the code is available/executed in this file.  If the file
		 * cannot be found, an error is thrown and the program will terminate.
		 *
		 * http://php.net/manual/en/function.require-once.php
		 */
		require_once('functions.php');

		$lists = get_lists($db_conn);
	?>

	<h1>Shuffle App</h1>

	<!-- if there are lists, render them onto the screen in a table -->
	<?php if ($lists): ?>
		<table>
			<tr>
				<th>List Name</th>
			</tr>
			<?php foreach ($lists as $list): ?>
			<tr>
				<td>
					<!-- link directs to the individual list page, with its list items -->
					<a href="list.php?id=<?php echo $list['id']; ?>"><?php echo $list['name']; ?></a>
					<!--
						notice the "?id=" part of the url.  This construct is called the "query string"
						of the url.  The query string is used to pass information to a page via the
						GET request/method.

						everything that comes after a "?" in the url is part of the query string.  The query string
						works by having a key/value system for its parameters.  The "key" is assigned a value as follows:

							key=some_value

						There should be no spaces in the keys or values, since they need to be valid urls.  To have several key/value pairs in your query string, delimit them with the "&" character:
							key1=value1&key2=value2&key3=value3

						can be considered as:

							key1 => value1,
							key2 => value2,
							key3 => value3

						The query values in your url query string can be accessed as the $_GET variable (Like $_POST).
					-->
				</td>
				<td>
					<a href="delete_list.php?id=<?php echo $list['id']; ?>">delete</a>
					<!--
						this query string would be something like:
							localhost/delete_list.php?id=9

						With the "id" value of 9 available in the $_GET associative array when
						delete_list.php is loaded
					-->
				</td>
			</tr>
			<?php endforeach ?>
		</table>
	<?php else: ?>
	<!-- otherwise just give a message -->
	<p>You have no lists! create one below.</p>
	<?php endif; ?>

	<!-- CREATE LIST FORM and post to list.php -->
	<form action="list.php" method="post" name="create-post">
		<h2>Create new list</h2>
		<fieldset>
			<label for="list_name">
				<span>Enter list name<span>
				<input type="text" name="list_name" placeholder="List name" required>
			</label>
		</fieldset>

		<input type="submit" value="Submit">
	</form>
</body>
</html>
<!-- make sure we are closing the db connection -->
<?php close_db_connection($db_conn); ?>
