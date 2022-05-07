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
				return_json(array('error' => true, 'message' => 'Debes cargar una canción'));
			} else {
				$_POST['music'] = json_decode($_POST['music']);
				if($_POST['music'] == "")
					return_json(array('error' => true, 'message' => 'Debes cargar una canción'));
			}

			if(!isset($_POST['name']) || trim($_POST['name']) ==""){
				return_json(array('error' => true, 'message' => 'Debes ingresar el nombre de la canción'));
			}

			if(!isset($_POST['album']) || trim($_POST['album']) ==""){
				return_json(array('error' => true, 'message' => 'Debes ingresar el nombre del album'));
			}

			if(!isset($_POST['artist']) || trim($_POST['artist']) ==""){
				return_json(array('error' => true, 'message' => 'Debes ingresar el nombre del artista'));
			}

			$_POST['photo'] = json_decode($_POST['photo']);
			$_POST['photo'] = ($_POST['photo']!="")?$_POST['photo']:'default/vinilo.png';

			$user->addSong($_POST);

			// return
			return_json(array('success' => 'console.log("Canción agregada")'));
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
