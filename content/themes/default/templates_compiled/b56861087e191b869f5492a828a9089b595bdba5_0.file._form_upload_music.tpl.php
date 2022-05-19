<?php
/* Smarty version 3.1.40, created on 2022-05-18 15:25:42
  from 'C:\xampp\htdocs\nuevo reproductor\content\themes\default\templates\_form_upload_music.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62850ff6d46871_34907410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b56861087e191b869f5492a828a9089b595bdba5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo reproductor\\content\\themes\\default\\templates\\_form_upload_music.tpl',
      1 => 1652162153,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62850ff6d46871_34907410 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="x-uploader">  
    <input name="file" class="file_audio" type="file" accept=".mp3, .wav, .ogg">
    <label for="file_audio" class="label-file">Upload a song</label>
    <i class="material-icons js_x-uploader" data-handle="publisher" data-type="audio">library_music</i>
			    <progress value="0" max="100" class="progress_audio"></progress>
</div><?php }
}
