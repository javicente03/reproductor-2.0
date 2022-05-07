<?php

/**
 * index
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootloader
require('bootloader.php');

try {

	page_header("DoubleSound");

    $playlist = $user->get_playlist();
    $smarty->assign('playlist', $playlist);

} catch (Exception $e) {
	_error(__("Error"), $e->getMessage());
}

// page footer
page_footer("index");