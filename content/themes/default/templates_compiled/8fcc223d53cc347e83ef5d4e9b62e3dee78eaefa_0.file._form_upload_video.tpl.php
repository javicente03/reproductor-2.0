<?php
/* Smarty version 3.1.40, created on 2022-05-09 13:10:26
  from 'C:\xampp\htdocs\reproductor\content\themes\default\templates\_form_upload_video.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_627912c2ead495_44871742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fcc223d53cc347e83ef5d4e9b62e3dee78eaefa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reproductor\\content\\themes\\default\\templates\\_form_upload_video.tpl',
      1 => 1652101805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627912c2ead495_44871742 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="x-uploader">  
    <input name="file" class="file_video" type="file" accept=".mp4, .mkv, .flv, .avi, .mov, .wmv">
    <label for="file_video" class="label-file">Suba un video</label>
    <i class="material-icons js_x-uploader" data-handle="publisher" data-type="video">movie</i>
			    <progress value="0" max="100" class="progress_video"></progress>
</div><?php }
}
