<?php
/**
 * ajax -> core -> signup
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

$search = $_POST['search'];

try {
	global $db;
	$result = [];

	switch($_GET['do']){
		case 'search':
			$get_result = $db->query(sprintf('SELECT * FROM songs WHERE song_name LIKE %1$s', secure($search, 'search'))) or _error("SQL_ERROR_THROWEN");
			break;

		case 'all':
			$get_result = $db->query("SELECT * FROM songs") or _error("SQL_ERROR_THROWEN");
			break;	
	}
	

	while ($row = $get_result->fetch_assoc()) {
        $result[] = $row;
    }

	echo json_encode($result);
} catch (Exception $e) {
	return_json(array('error' => true, 'message' => $e->getMessage()));
}