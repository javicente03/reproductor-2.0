<?php
/* Smarty version 3.1.40, created on 2022-05-08 03:26:08
  from 'C:\xampp\htdocs\reproductor\content\themes\default\templates\_menu_panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62773850528895_73995286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9925f75c4df6b57f4f40e90cb7bd6726ca0fc95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reproductor\\content\\themes\\default\\templates\\_menu_panel.tpl',
      1 => 1651980364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62773850528895_73995286 (Smarty_Internal_Template $_smarty_tpl) {
?>	<div class="left">
	  	<div class="controls">
	       	<div class="close"></div>
	       	<div class="minimize"></div>
	       	<div class="maximize"></div>
	    </div>
	    <div class="menu">
	        <div class="title">MENU</div>
	        <div class="item item-panel"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/dashboard"><i class="material-icons">home</i><span>Dashboard</span></a></div>
	        <div class="item item-panel"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/song/add"><i class="material-icons">add</i><span>Agregar canción</span></a></div>
	        <div class="item item-panel"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/config"><i class="material-icons">brightness_low</i><span>Opciones</span></a></div>
	        <div class="item item-panel"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/messages/pending"><i class="material-icons">email</i><span>Mensajes Pendientes</span></a></div>
	        <div class="item item-panel"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/messages/read"><i class="material-icons">email</i><span>Mensajes Leídos</span></a></div>
	        <div class="item item-panel"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/signout"><i class="material-icons">close</i><span>Cerrar Sesión</span></a></div>


	    </div>
   	</div><?php }
}
