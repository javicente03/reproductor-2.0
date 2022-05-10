<?php
/* Smarty version 3.1.40, created on 2022-05-10 05:56:10
  from 'C:\xampp\htdocs\reproductor\content\themes\default\templates\_form_upload_music.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6279fe7ab90ff1_15955728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8c811c80ba15aeaeb181fcf49e20516139a210b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reproductor\\content\\themes\\default\\templates\\_form_upload_music.tpl',
      1 => 1652162153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6279fe7ab90ff1_15955728 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="x-uploader">  
    <input name="file" class="file_audio" type="file" accept=".mp3, .wav, .ogg">
    <label for="file_audio" class="label-file">Upload a song</label>
    <i class="material-icons js_x-uploader" data-handle="publisher" data-type="audio">library_music</i>
			    <progress value="0" max="100" class="progress_audio"></progress>
</div><?php }
}
