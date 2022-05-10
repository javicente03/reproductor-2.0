<?php
/* Smarty version 3.1.40, created on 2022-05-10 05:56:10
  from 'C:\xampp\htdocs\reproductor\content\themes\default\templates\_form_upload_image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6279fe7ac7acd3_06294573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdf1868fddaed1e00b6a3aec4feab3a28f40a022' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reproductor\\content\\themes\\default\\templates\\_form_upload_image.tpl',
      1 => 1652162130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6279fe7ac7acd3_06294573 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="x-uploader">  
	<input name="file" class="file_photo" type="file" accept=".jpg, .png, .gif">
    <label for="file_photo" class="label-file">Upload an image</label>

	<i class="material-icons js_x-uploader" data-handle="publisher" data-type="photo">photo</i>
    <progress value="0" max="100" class="progress_photo"></progress>
</div><?php }
}
