<?php

/**
 * index
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootloader
require('bootloader.php');

// check user logged in
if (!$user->_logged_in) {
    redirect();
}

try {

	page_header("DoubleSound - Dashboard");

    $playlist = $user->get_playlist();
    $smarty->assign('playlist', $playlist);

} catch (Exception $e) {
	_error(__("Error"), $e->getMessage());
}

// page footer
page_footer("dashboard");