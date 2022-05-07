<?php
/* Smarty version 3.1.40, created on 2022-05-06 19:10:09
  from 'C:\xampp\htdocs\reproductor\content\themes\default\templates\_signup_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62757291b11846_77727644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a23acb53718c7f2cc39ff6740d42789a09fb4962' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reproductor\\content\\themes\\default\\templates\\_signup_form.tpl',
      1 => 1651864205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62757291b11846_77727644 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="right">
<h2>Registro</h2>

<form class="js_ajax-forms form-panel" data-url="core/signup.php" method="POST">
	<input type="text" name="first_name" class="form-control" placeholder="Nombre">
	<input type="text" name="last_name" class="form-control" placeholder="Apellido">
	<input type="text" name="username" class="form-control" placeholder="Usuario">
	<input type="email" name="email" class="form-control" placeholder="Correo">
	<input type="password" name="password" class="form-control" placeholder="Contraseña">
	<button type="submit" class="send-login">Registrarse</button>
	<!-- error -->
        <div class="error-panel"></div>
    <!-- error -->
</form>
</div><?php }
}
