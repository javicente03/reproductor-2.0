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


try {

	switch($_GET['do']){

		case 'wallpaper':
			if(!isset($_POST['upload']) || json_decode($_POST['upload']) =="")
				return_json(array('error' => true, 'message' => 'Error processing'));
			$_POST['upload'] = json_decode($_POST['upload']);
			$user->set_config($_POST, $_GET['do']);
			return_json(array('callback' => 'window.location.reload();'));
			break;

		case 'about':
			if($_POST['about'] =="")
				return_json(array('error' => true, 'message' => 'You must enter the description'));

			$_POST['upload'] = json_decode($_POST['upload']);
			$user->set_config($_POST, $_GET['do']);
			return_json(array('callback' => "success.html('Modificación exitósa');
												success.css('display', 'block');
												setTimeout(function(){
	                        					success.css('display', 'none')
                    						}, 5000);"));
			break;
	}
	
} catch (Exception $e) {
	return_json(array('error' => true, 'message' => $e->getMessage()));
}
