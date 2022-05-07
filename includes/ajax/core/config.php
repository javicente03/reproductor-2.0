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


// check user logged in
if (!$user->_logged_in) {
	return_json(array('callback' => 'window.location.reload();'));
}

if(!isset($_POST['photo']) || json_decode($_POST['photo']) =="")
	return_json(array('error' => true, 'message' => 'Error al procesar'));

try {
	$_POST['photo'] = json_decode($_POST['photo']);
	// signup
	$user->set_config($_POST);
	return_json(array('callback' => 'window.location.reload();'));
} catch (Exception $e) {
	return_json(array('error' => true, 'message' => $e->getMessage()));
}
