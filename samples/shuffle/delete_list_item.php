<?php
require_once('functions.php');

if (!empty($_GET['item_id'])) {

	// delete the list item of passed id
	$item_id = $_GET['item_id'];
	$list_id = $_GET['list_id'];
	$result = delete_list_item($db_conn, $item_id);

	// redirect to list page
	header('Location: /list.php?id=' . $list_id);
	die();
}
