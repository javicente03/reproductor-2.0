<?php
/* Smarty version 3.1.40, created on 2022-05-06 21:10:42
  from 'C:\xampp\htdocs\reproductor\content\themes\default\templates\config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62758ed24e9be7_78119229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8887564a9824c4cb150c0420e4633ec97a24c9d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reproductor\\content\\themes\\default\\templates\\config.tpl',
      1 => 1651871326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head_radio.tpl' => 1,
    'file:_menu_panel.tpl' => 1,
    'file:_form_upload_image.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_62758ed24e9be7_78119229 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head_radio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="center">
<?php $_smarty_tpl->_subTemplateRender('file:_menu_panel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<div class="right">
		<h2>Configuración</h2>
		<div class="js_ajax-form-data form-panel" data-url="core/config.php">
			<h4>Cambiar fondo</h4>
			<?php $_smarty_tpl->_subTemplateRender('file:_form_upload_image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<button type="submit">Guardar</button>
			<div class="error-panel"></div>
		</div>
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
