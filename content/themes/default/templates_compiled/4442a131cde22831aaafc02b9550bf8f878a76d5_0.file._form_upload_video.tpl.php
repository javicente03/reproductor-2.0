<?php
/* Smarty version 3.1.40, created on 2022-05-18 15:45:25
  from 'C:\xampp\htdocs\nuevo reproductor\content\themes\default\templates\_form_upload_video.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_628514955a95c5_77350475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4442a131cde22831aaafc02b9550bf8f878a76d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo reproductor\\content\\themes\\default\\templates\\_form_upload_video.tpl',
      1 => 1652162165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628514955a95c5_77350475 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="x-uploader">  
    <input name="file" class="file_video" type="file" accept=".mp4, .mkv, .flv, .avi, .mov, .wmv">
    <label for="file_video" class="label-file">Upload a video</label>
    <i class="material-icons js_x-uploader" data-handle="publisher" data-type="video">movie</i>
			    <progress value="0" max="100" class="progress_video"></progress>
</div><?php }
}
