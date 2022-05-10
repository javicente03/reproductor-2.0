<?php
/* Smarty version 3.1.40, created on 2022-05-10 05:57:48
  from 'C:\xampp\htdocs\reproductor\content\themes\default\templates\config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6279fedc653267_89303719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8887564a9824c4cb150c0420e4633ec97a24c9d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reproductor\\content\\themes\\default\\templates\\config.tpl',
      1 => 1652162263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head_radio.tpl' => 1,
    'file:_menu_panel.tpl' => 1,
    'file:_form_upload_image.tpl' => 2,
    'file:_form_upload_video.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_6279fedc653267_89303719 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head_radio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="center">
<?php $_smarty_tpl->_subTemplateRender('file:_menu_panel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<div class="right">
		<h2>Settings</h2>
		<form id="form_wallpaper" class="js_ajax-form-data form-panel" data-url="core/config.php?do=wallpaper">
			<h4>Change wallpaper</h4>

			<div class="container-uploader" data-id="photo-wallpaper">
			<?php $_smarty_tpl->_subTemplateRender('file:_form_upload_image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			</div>
			
			<div class="container-uploader" data-id="video-wallpaper">
			<?php $_smarty_tpl->_subTemplateRender('file:_form_upload_video.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			</div>

			<button type="submit">Guardar</button>
			<div class="error-panel"></div>
		</form>
		<form id="form_about" class="js_ajax-form-data form-panel" data-url="core/config.php?do=about">
			<h4>Modify About section</h4>
			<textarea placeholder="Contenido" name="about"><?php echo $_smarty_tpl->tpl_vars['config']->value['about_text'];?>
</textarea>
			
			<div class="container-uploader" data-id="photo-about">
			<?php $_smarty_tpl->_subTemplateRender('file:_form_upload_image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
			</div>

			<button type="submit">Guardar</button>
			<div class="error-panel"></div>
			<div class="success-panel"></div>
		</form>
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
