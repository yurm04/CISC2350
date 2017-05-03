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

	<?php if ($lists): ?>
		<table>
			<tr>
				<th>List Name</th>
			</tr>
			<?php foreach ($lists as $list): ?>
			<tr>
				<td>
					<a href="list.php?id=<?php echo $list['id']; ?>"><?php echo $list['name']; ?></a>
				</td>
				<td>
					<a href="delete_list.php?id=<?php echo $list['id']; ?>">delete</a>
				</td>
			</tr>
			<?php endforeach ?>
		</table>
	<?php else: ?>
	<p>You have no lists! create one below.</p>
	<?php endif; ?>

	<!-- CREATE LIST FORM -->
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
<?php close_db_connection($db_conn); ?>
