<?php
/* Smarty version 3.1.40, created on 2022-05-18 15:25:42
  from 'C:\xampp\htdocs\nuevo reproductor\content\themes\default\templates\_form_upload_image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62850ff6dd6ed4_76224723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f7df94747123429451d87d2b48604b726047257' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo reproductor\\content\\themes\\default\\templates\\_form_upload_image.tpl',
      1 => 1652162130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62850ff6dd6ed4_76224723 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="x-uploader">  
	<input name="file" class="file_photo" type="file" accept=".jpg, .png, .gif">
    <label for="file_photo" class="label-file">Upload an image</label>

	<i class="material-icons js_x-uploader" data-handle="publisher" data-type="photo">photo</i>
    <progress value="0" max="100" class="progress_photo"></progress>
</div><?php }
}
