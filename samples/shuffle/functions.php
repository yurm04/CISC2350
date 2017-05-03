<?php
/**
 * Helper functions that perform tasks throughout the
 * website.
 */

/**
 * Establishes a database connection, or terminates program
 * on error.
 *
 * @returns {object} mysqli connection object
 */
function get_db_connection() {
	require_once('creds.php');

	/**
	 * connecting to the db without specifying a database name.
	 * We want to make sure we check the db has been created, and if not
	 * then we want to create it.
	 */
	$db_conn = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD);

	if (!$db_conn) {
		fatal_error();
	};

	// set up the database config
	db_config($db_conn);

	return $db_conn;
}


/**
 * Sets up database and associated tables if they don't aready
 * exist
 *
 * @param   {object} $db_conn - the database connection object
 * @returns {boolean} returns true if database already exists or
 *                  everythin set up successfully
 */
function db_config($db_conn) {
	// Query for database
	$query = 'SHOW DATABASES LIKE "' . DB_NAME . '"';
	$result = mysqli_query($db_conn, $query);

	// db exists, don't continue with setup steps
	if (mysqli_num_rows($result) > 0) {
		mysqli_select_db($db_conn, DB_NAME);
		return true;
	}

	// create new database if does not exist
	$create_db_query = 'CREATE DATABASE ' . DB_NAME;
	$db_result = mysqli_query($db_conn, $create_db_query);

	// could not create db
	if ($db_result === false) {
		fatal_error();
	}

	// use newly created database
	mysqli_select_db($db_conn, DB_NAME);

	/**
	 * also create tables along with database
	 */

	// create lists table
	$create_lists_table = 'CREATE TABLE lists (
							  id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
							  name VARCHAR(128)
						  )';

	$lists_result = mysqli_query($db_conn, $create_lists_table);

	if ($lists_result === false) {
		fatal_error();
	}

	// create list_items table
	$create_list_items_table = 'CREATE TABLE list_items (
									id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
									list_id INT UNSIGNED NOT NULL,
									name VARCHAR(128) NOT NULL,
									shuffle_order INT UNSIGNED,
									FOREIGN KEY (list_id)
										REFERENCES lists(id)
										ON DELETE CASCADE
								)';

	$list_items_result = mysqli_query($db_conn, $create_list_items_table);

	if ($list_items_result === false) {
		fatal_error();
	}

	return true;
}


/**
 * Closes a database connection or terminates program on
 * error.
 *
 * @param   object $db_conn - database connection object
 * @returns boolean returns TRUE if connection successfully closed
 */
function close_db_connection($db_conn) {
	$result = mysqli_close($db_conn);

	if (!$result) {
		fatal_error();
	};

	// successfully closed connection
	return true;
}

/**
 * Queries the database for the lists that have
 * been created
 *
 * @param   {object} $db_conn - the database connection object
 * @returns {bool | array} false if no lists available, array of lists if available
 */
function get_lists($db_conn) {
	$query = 'SELECT * FROM lists';
	$result = mysqli_query($db_conn, $query);

	if (!$result) {
		fatal_error();
	}

	if (mysqli_num_rows($result) === 0) {
		return false;
	}

	$lists = array();

	while ($row = mysqli_fetch_assoc($result)) {
		$lists[] = $row;
	}

	return $lists;
}

/**
 * Creates a new list in the lists table
 *
 * @param   {object} $db_conn - database connection object
 * @param   {string} $name - the list name
 * @returns {bool} success of the list creation
 */
function create_list($db_conn, $name) {
	$query = 'INSERT INTO lists (name) VALUES (?)';

	$prepared_query = mysqli_prepare($db_conn, $query);

	mysqli_stmt_bind_param($prepared_query, "s", $name);

	$success = mysqli_stmt_execute($prepared_query);
	$count = mysqli_affected_rows($db_conn);

	// close the prepared statement
	mysqli_stmt_close($prepared_query);

	if (!$success || $count) {
		return false;
	}

	return true;
}

/**
 * Deletes a list from the lists table
 *
 * @param   {object} $db_conn - database connection object
 * @param   {int} $id - list id
 * @returns {bool} success of the deletion
 */
function delete_list($db_conn, $id) {
	$query = 'DELETE FROM lists WHERE id=?';

	$prepared_query = mysqli_prepare($db_conn, $query);

	mysqli_stmt_bind_param($prepared_query, "i", $id);

	$success = mysqli_stmt_execute($prepared_query);
	$count = mysqli_affected_rows($db_conn);

	// close the prepared statement
	mysqli_stmt_close($prepared_query);

	if (!$success || $count) {
		return false;
	}

	return true;
}

/**
 * Gets the list data of a certain id
 *
 * @param   {object} $db_conn - database connection object
 * @param   {int} $id - list id
 * @returns {bool | int} false if failure, or the list data if successful
 */
function get_list($db_conn, $id) {
	$query = "SELECT * FROM lists WHERE id = $id";
	$result = mysqli_query($db_conn, $query);

	if (!$result) {
		fatal_error();
	}

	if (mysqli_num_rows($result) === 0) {
		return false;
	}

	$list_items = array();

	return mysqli_fetch_assoc($result);
}

/**
 * Queries the database for the list items of a list.
 *
 * @param   {object} $db_conn - database connection object
 * @param   {int} $id - int
 * @returns [type] [description]
 */
function get_list_items($db_conn, $id) {
	$query = "SELECT * FROM list_items WHERE list_id = $id ORDER BY shuffle_order ASC";
	$result = mysqli_query($db_conn, $query);

	if (!$result) {
		fatal_error();
	}

	if (mysqli_num_rows($result) === 0) {
		return false;
	}

	$list_items = array();

	while ($row = mysqli_fetch_assoc($result)) {
		$list_items[] = $row;
	}

	return $list_items;
}


function create_list_items($db_conn, $items, $list_id) {
	$items = explode(',', $items);

	foreach ($items as $item) {
		$query = "INSERT INTO list_items (list_id, name) VALUES (?, ?)";
		$prepared_query = mysqli_prepare($db_conn, $query);

		mysqli_stmt_bind_param($prepared_query, "is", $list_id, $item);

		$success = mysqli_stmt_execute($prepared_query);
		if (!$success) {
			echo mysqli_error($db_conn);
		}
		$count = mysqli_affected_rows($db_conn);
		mysqli_stmt_close($prepared_query);
	}
}

function delete_list_item($db_conn, $id) {
	$query = 'DELETE FROM list_items WHERE id=?';

	$prepared_query = mysqli_prepare($db_conn, $query);

	mysqli_stmt_bind_param($prepared_query, "i", $id);

	$success = mysqli_stmt_execute($prepared_query);
	$count = mysqli_affected_rows($db_conn);

	// close the prepared statement
	mysqli_stmt_close($prepared_query);

	if (!$success || $count) {
		return false;
	}

	return true;
}

function shuffle_items($db_conn, $items) {
	foreach ($items as $order => $item) {
		$list_order = $order + 1;
		$item_id = $item['id'];
		$query = "UPDATE list_items SET shuffle_order=$list_order WHERE id=$item_id";
		$result = mysqli_query($db_conn, $query);
		echo mysqli_error($db_conn);
	}
}

/**
 * If a catastrophic error has occurred, echo a
 * message an commence panic.
 */
function fatal_error() {
	echo '<p class="error">Sorry, an error has occurred.  Please try again later.</p>';
	die(); // alias to the 'exit' command - terminates the entire program.
}

$db_conn = get_db_connection();
