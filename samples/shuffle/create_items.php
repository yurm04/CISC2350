<?php
/**
 * Handles the creation of a new list item and then
 * redirects back to the list.php page with the list id
 * that was just used to create the list item
 */
require_once('functions.php');
$list_items;
$list_id = $_POST['list_id'];

if (!empty($_POST['list_items'])) {
	$list_items = $_POST['list_items'];
	$result = create_list_items($db_conn, $list_items, $list_id);

	// automatically redirects to list page with the list id to load
	header('Location: /list.php?id=' . $list_id);
	die();
}
