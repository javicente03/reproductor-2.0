<?php

/**
 * sign
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootloader
require('bootloader.php');

switch ($_GET['do']) {
	case 'in':
		// check user logged in
		if ($user->_logged_in) {
			redirect();
		}

		// page header
		page_header("Login");

		// // assign varible
		$smarty->assign('do', $_GET['do']);

		// page footer
		page_footer("sign");
		break;

	case 'up':
		// check user logged in
		if ($user->_logged_in) {
			redirect();
		}
		
		page_header("Signup");

		$smarty->assign('do', $_GET['do']);

		// page footer
		page_footer("sign");

		break;

	case 'out':
		// check user logged in
		if (!$user->_logged_in) {
			redirect();
		}

		// sign out
		$user->sign_out();
		redirect();
		break;
	default:
		_error(404);
		break;
}