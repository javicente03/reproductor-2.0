<?php
/* Smarty version 3.1.40, created on 2022-05-18 13:25:20
  from 'C:\xampp\htdocs\nuevo reproductor\content\themes\default\templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6284f3c0732693_14483034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c1f958e7f91923099a8846ed065f4ed6eb78a8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo reproductor\\content\\themes\\default\\templates\\contact.tpl',
      1 => 1652880318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head_radio.tpl' => 1,
    'file:_menu.tpl' => 1,
    'file:modal_login.tpl' => 1,
    'file:modal_signup.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_6284f3c0732693_14483034 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head_radio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1>AAAA</h1>
	<section id="player">
		<div class="contact">
			<h2>Contact us</h2>

			<form class="js_ajax-forms form-panel" data-url="data/contact.php?do=create">
				<input type="email" name="email" placeholder="Enter your email" />
				<input type="text" name="subject" placeholder="Subject" />
				<textarea placeholder="Enter your message" name="message"></textarea>
				<button type="submit">Send</button>
				<div class="error-panel">Error</div>
				<div class="success-panel">Success</div>
			</form>
		</div>
	</section>

<?php $_smarty_tpl->_subTemplateRender('file:modal_login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:modal_signup.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
