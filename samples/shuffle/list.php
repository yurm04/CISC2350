<?php
require_once('functions.php');
$list_id;

// if a new list has been posted, create it
if (!empty($_POST['list_name'])) {
	$list_name = $_POST['list_name'];
	$result = create_list($db_conn, $_POST['list_name']);
	$list_id = mysqli_insert_id($db_conn);
} else if (!empty($_GET['id'])) {
	// or just load the passed list id
	$list_id = $_GET['id'];
}

$list = get_list($db_conn, $list_id);
$list_items = get_list_items($db_conn, $list_id);

if (!empty($_GET['shuffle'])) {
	shuffle($list_items);
	shuffle_items($db_conn, $list_items);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shuffle | List Items</title>
</head>
<body>
	<h1>List Items</h1>
	<h2><?php echo $list['name']; ?></h2>
	<?php if (!empty($list_items)): ?>
		<table>
			<tr>
				<th>Item name</th>
			</tr>
			<?php foreach ($list_items as $item): ?>
			<tr>
				<td><?php echo $item['name']; ?></td>
				<td><a href="delete_list_item.php?item_id=<?php echo $item['id']; ?>&list_id=<?php echo $list_id; ?>">delete</a></td>
			</tr>
			<?php endforeach ?>
		</table>
		<a href="list.php?id=<?php echo $list_id; ?>&shuffle=true">Shuffle items</a>
	<?php else: ?>
		<p>No items created yet.</p>
	<?php endif ?>

	<form action="create_items.php" method="post" name="create-items">
		<h2>Add new items</h2>
		<fieldset>
			<label for="list_items">
				<p>Enter list items</p>
				<p>separate items with commas (,)</p>
				<textarea name="list_items" id="" cols="50" rows="10" placeholder="item1, item2, item3..." required></textarea>
			</label>
		</fieldset>
		<input type="hidden" name="list_id" value="<?php echo $list_id; ?>">
		<input type="submit" value="Submit">
	</form>

	<nav>
		<a href="/">Back to lists</a>
	</nav>
</body>
</html>
<?php close_db_connection($db_conn); ?>
