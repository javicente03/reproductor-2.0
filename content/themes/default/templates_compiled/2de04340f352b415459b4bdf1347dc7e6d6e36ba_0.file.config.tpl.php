<?php
/* Smarty version 3.1.40, created on 2022-05-18 15:47:11
  from 'C:\xampp\htdocs\nuevo reproductor\content\themes\default\templates\config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_628514ffb0bf46_16292860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2de04340f352b415459b4bdf1347dc7e6d6e36ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo reproductor\\content\\themes\\default\\templates\\config.tpl',
      1 => 1652888830,
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
function content_628514ffb0bf46_16292860 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head_radio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_menu_panel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<section id="player">

	<div class="contact">
		<h2>Settings</h2>
		<br>
		<form id="form_about" class="js_ajax-form-data form-panel" data-url="core/config.php?do=about">
			<h4>Modify About section</h4>
			<textarea placeholder="Contenido" name="about"><?php echo $_smarty_tpl->tpl_vars['config']->value['about_text'];?>
</textarea>
			
			<div class="container-uploader" data-id="photo-about">
			<?php $_smarty_tpl->_subTemplateRender('file:_form_upload_image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			</div>

			<button type="submit">Guardar</button>
			<div class="error-panel"></div>
			<div class="success-panel"></div>
		</form>
	</div>
</section>

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
