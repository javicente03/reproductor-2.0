<?php
/* Smarty version 3.1.40, created on 2022-05-18 13:53:11
  from 'C:\xampp\htdocs\nuevo reproductor\content\themes\default\templates\_signin_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6284fa47552833_88790428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd33c20e2237c324362664b732b3b8effb405ff04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo reproductor\\content\\themes\\default\\templates\\_signin_form.tpl',
      1 => 1652168661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6284fa47552833_88790428 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="right">
	<h2>Sign in</h2>
	<form class="js_ajax-forms form-panel" data-url="core/signin.php">
		<input type="text" name="username_email" class="form-control" placeholder="Username or Email">
		<input type="password" name="password" class="form-control" placeholder="Password">
	 
		<button type="submit">Enter</button>
		<!-- error -->
	        <div class="error-panel"></div>
	    <!-- error -->
	</form>

</div><?php }
}
