<?php

/**
 * config
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

	page_header("DoubleSound - Configuración");


} catch (Exception $e) {
	_error(__("Error"), $e->getMessage());
}

// page footer
page_footer("config");