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
if ($user->_logged_in) {
	return_json(array('callback' => 'window.location.reload();'));
}

// check if registration is open
// if (!$system['registration_enabled']) {
// 	return_json(array('error' => true, 'message' => __('Registration is closed right now')));
// }

// check honeypot
// if (!is_empty($_POST['field1'])) {
// 	return_json();
// }

try {

	// signup
	$user->sign_up($_POST);
	return_json(array('callback' => 'location.href = "signin"'));
	//return_json(array('callback' => "window.location = ".$rut));
} catch (Exception $e) {
	return_json(array('error' => true, 'message' => $e->getMessage()));
}
