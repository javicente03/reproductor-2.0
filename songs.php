<?php

/**
 * index
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootloader
require('bootloader.php');

if (!$user->_logged_in) {
    redirect();
}

try {

	switch($_GET['view']){
        case 'add':
            page_header("DoubleSound - Add");

            $smarty->assign('view', $_GET['view']);

            break;

        default:
            _error(404);
            break;
    }

} catch (Exception $e) {
	_error(__("Error"), $e->getMessage());
}

// page footer
page_footer("songs");