<?php
/* Smarty version 3.1.40, created on 2022-05-09 13:10:26
  from 'C:\xampp\htdocs\reproductor\content\themes\default\templates\_form_upload_image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_627912c2e7e3c3_39841511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdf1868fddaed1e00b6a3aec4feab3a28f40a022' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reproductor\\content\\themes\\default\\templates\\_form_upload_image.tpl',
      1 => 1652101801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627912c2e7e3c3_39841511 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="x-uploader">  
	<input name="file" class="file_photo" type="file" accept=".jpg, .png, .gif">
    <label for="file_photo" class="label-file">Suba una imágen</label>

	<i class="material-icons js_x-uploader" data-handle="publisher" data-type="photo">photo</i>
    <progress value="0" max="100" class="progress_photo"></progress>
</div><?php }
}
