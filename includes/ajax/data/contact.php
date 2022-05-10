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

try {

	global $db, $date;

	switch($_GET['do']){
		case 'create':
			if(!isset($_POST['email']) || $_POST['email'] =="" || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
				return_json(array('error' => true, 'message' => 'You must enter a valid email'));

			if(!isset($_POST['subject']) || $_POST['subject'] =="")
				return_json(array('error' => true, 'message' => 'You must enter a subject'));

			if(!isset($_POST['message']) || $_POST['message'] =="")
				return_json(array('error' => true, 'message' => 'You must enter a message'));

			if(strlen($_POST['message']) > 500)
				return_json(array('error' => true, 'message' => 'Message must not exceed 500 characters'));

			$db->query(sprintf("INSERT INTO messages_contact (message_email, message_subject, message_text, message_date) VALUES (%s, %s, %s, %s)", 
								secure($_POST['email']), 
								secure($_POST['subject']), 
								secure($_POST['message']),
								secure($date))) or _error("SQL_ERROR_THROWEN");

			return_json(array('callback' => "success.html('Message sent successfully');
												success.css('display', 'block');
												setTimeout(function(){
	                        					success.css('display', 'none')
                    						}, 5000);
                    						document.querySelector('.js_ajax-forms').reset()"));

			break;

		case 'read':
			// check user logged in
			if (!$user->_logged_in) {
				return_json(array('callback' => 'location.href= "'.SYS_URL.'/signin";'));
			}

			if(!isset($_POST['id']) || !is_numeric($_POST['id']))
				return_json(array('error' => true, 'message' => 'An error has occurred'));

			$db->query(sprintf("UPDATE messages_contact SET message_status = true WHERE message_id = %s", secure($_POST['id']))) or _error(404);

			return_json(array('callback' => "location.href = '".SYS_URL."/messages/pending'"));
			break;

		case 'delete':
			// check user logged in
			if (!$user->_logged_in) {
				return_json(array('callback' => 'location.href= "'.SYS_URL.'/signin";'));
			}

			if(!isset($_POST['id']) || !is_numeric($_POST['id']))
				return_json(array('error' => true, 'message' => 'An error has occurred'));

			$db->query(sprintf("DELETE FROM messages_contact WHERE message_id = %s", secure($_POST['id']))) or _error(404);

			return_json(array('callback' => "location.href = '".SYS_URL."/messages/read'"));
			break;
	}

} catch (Exception $e) {
	return_json(array('error' => true, 'message' => $e->getMessage()));
}