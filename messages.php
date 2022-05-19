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

    if(is_numeric($_GET['view'])){
        page_header("DoubleSound - Messages");
        
        $message = $user->get_message($_GET['view']);
        if(!$message)
            _error(404);

        $smarty->assign('message', $message);

        // page footer
        page_footer("message_content");
    } else {
        switch($_GET['view']){
            case 'pending':
                $messages = $user->get_messages(false);
                break;

            case 'read':
                $messages = $user->get_messages(true);
                break;

            default:
                _error(404);
                break;
        }
        page_header("DoubleSound - Messages");

        $smarty->assign('messages', $messages);
        $smarty->assign('view', $_GET['view']);

        // page footer
        page_footer("messages");
    }


} catch (Exception $e) {
	_error(404);
}