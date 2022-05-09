<?php
/* Smarty version 3.1.40, created on 2022-05-09 15:21:43
  from 'C:\xampp\htdocs\reproductor\content\themes\default\templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6279318790b599_16734333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a2e82c7a2f9ab22e87221669c658e944c30d00b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reproductor\\content\\themes\\default\\templates\\contact.tpl',
      1 => 1652109697,
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
function content_6279318790b599_16734333 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head_radio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="center">
    <?php $_smarty_tpl->_subTemplateRender('file:_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<div class="right">
		<div class="contact">
			<h2>Contacto</h2>

			<form class="js_ajax-forms form-panel" data-url="data/contact.php?do=create">
				<input type="email" name="email" placeholder="Ingrese su correo" />
				<input type="text" name="subject" placeholder="Motivo" />
				<textarea placeholder="Ingrese su mensaje" name="message"></textarea>
				<button type="submit">Enviar</button>
				<div class="error-panel">Error</div>
				<div class="success-panel">Success</div>
			</form>
		</div>
	</div>	
</div>

<?php $_smarty_tpl->_subTemplateRender('file:modal_login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:modal_signup.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
