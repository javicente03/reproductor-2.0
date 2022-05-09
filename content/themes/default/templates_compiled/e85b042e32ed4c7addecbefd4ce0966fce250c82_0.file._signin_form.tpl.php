<?php
/* Smarty version 3.1.40, created on 2022-05-09 18:39:03
  from 'C:\xampp\htdocs\reproductor\content\themes\default\templates\_signin_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62795fc7700e77_18951776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e85b042e32ed4c7addecbefd4ce0966fce250c82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reproductor\\content\\themes\\default\\templates\\_signin_form.tpl',
      1 => 1652121497,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62795fc7700e77_18951776 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="right">
	<h2>Iniciar sesión</h2>
	<form class="js_ajax-forms form-panel" data-url="core/signin.php">
		<input type="text" name="username_email" class="form-control" placeholder="Usuario">
		<input type="password" name="password" class="form-control" placeholder="Contraseña">
	 
		<button type="submit">Ingresar</button>
		<!-- error -->
	        <div class="error-panel"></div>
	    <!-- error -->
	</form>

</div><?php }
}
