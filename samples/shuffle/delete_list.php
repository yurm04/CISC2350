<?php
require_once('functions.php');
$list_id;

if (!empty($_GET['id'])) {

	// delete the list of passed id
	delete_list($db_conn, $_GET['id']);

	// automatically redirects to the document root
	header('Location: /');
	die();
}
