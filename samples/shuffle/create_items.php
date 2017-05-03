<?php
require_once('functions.php');
$list_items;
$list_id = $_POST['list_id'];

if (!empty($_POST['list_items'])) {
	$list_items = $_POST['list_items'];
	$result = create_list_items($db_conn, $list_items, $list_id);

	// automatically redirects to list page
	header('Location: /list.php?id=' . $list_id);
	die();
}
