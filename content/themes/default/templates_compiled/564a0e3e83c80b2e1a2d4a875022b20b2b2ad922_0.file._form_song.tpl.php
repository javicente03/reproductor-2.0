<?php
/* Smarty version 3.1.40, created on 2022-05-18 15:27:25
  from 'C:\xampp\htdocs\nuevo reproductor\content\themes\default\templates\_form_song.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6285105dbc84d0_18424140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '564a0e3e83c80b2e1a2d4a875022b20b2b2ad922' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo reproductor\\content\\themes\\default\\templates\\_form_song.tpl',
      1 => 1652887643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_form_upload_music.tpl' => 1,
    'file:_form_upload_image.tpl' => 1,
  ),
),false)) {
function content_6285105dbc84d0_18424140 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="contact">
	<h2>Add Song</h2>

	<div class="js_ajax-music-html form-panel" data-url="core/songs.php?do=create">
			<input type="text" id="name" placeholder="Name of the song">
			<input type="text" id="album" placeholder="Album">
			<input type="text" id="artist" placeholder="Artist">
			<input type="hidden" id="duration">
			<input type="hidden" id="seconds">

			<div class="container-uploader" data-id="audio-song">
			<?php $_smarty_tpl->_subTemplateRender('file:_form_upload_music.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			</div>

			<div class="container-uploader" data-id="photo-song">
			<?php $_smarty_tpl->_subTemplateRender('file:_form_upload_image.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			</div>

			<button type="submit" >Add</button>
			<div class="error-panel">Error</div>
			<div class="success-panel">Success</div>
	<div>
</div><?php }
}
