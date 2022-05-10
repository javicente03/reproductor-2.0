<?php

/**
 * ajax -> core -> signin
 * 
 * @package Sngine
 * @author Zamblek
 */

// set override_shutdown
$override_shutdown = true;

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// check user logged in
if (!$user->_logged_in) {
	return_json(array('callback' => 'location.href= "'.SYS_URL.'/signin";'));
}

try {
	
	switch($_GET['do']){
		case 'create':
			if(!isset($_POST['music'])){
				return_json(array('error' => true, 'message' => 'You must upload a song'));
			} else {
				$_POST['music'] = json_decode($_POST['music']);
				if($_POST['music'] == "")
					return_json(array('error' => true, 'message' => 'You must upload a song'));
			}

			if(!isset($_POST['name']) || trim($_POST['name']) ==""){
				return_json(array('error' => true, 'message' => 'You must enter the name of the song'));
			}

			if(!isset($_POST['album']) || trim($_POST['album']) ==""){
				return_json(array('error' => true, 'message' => 'You must enter the name of the album'));
			}

			if(!isset($_POST['artist']) || trim($_POST['artist']) ==""){
				return_json(array('error' => true, 'message' => 'You must enter the name of the artist'));
			}

			$_POST['photo'] = json_decode($_POST['photo']);
			$_POST['photo'] = ($_POST['photo']!="")?$_POST['photo']:'default/vinilo.png';

			$user->addSong($_POST);

			// return
			return_json(array('success' => 'console.log("Song added")'));
			break;

		case 'delete':
			if(!isset($_POST['id']) || !is_numeric($_POST['id']) || trim($_POST['id']) == "")
				return_json(array('error' => true, 'message' => 'Error al eliminar'));

			global $db;
			$db->query(sprintf("DELETE FROM songs WHERE song_id = %s", secure($_POST['id']))) or _error("SQL_ERROR_THROWEN");

			return_json(array('callback' => 'window.location.reload();'));
			break;
	}
} catch (Exception $e) {
	return_json(array('error' => true, 'message' => $e->getMessage()));
}
