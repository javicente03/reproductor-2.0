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


    if(!isset($_GET['do'])){
        page_header("DoubleSound");

        $playlist = $user->get_playlist();
        $smarty->assign('playlist', $playlist);

        // page footer
        page_footer("index");
    } else{

        switch($_GET['do']){

            case 'contact':
                page_header("DoubleSound");

                
                page_footer('contact');
                break;
        }
    }

} catch (Exception $e) {
	_error(__("Error"), $e->getMessage());
}