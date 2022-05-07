<?php
/* Smarty version 3.1.40, created on 2022-05-06 19:52:15
  from 'C:\xampp\htdocs\reproductor\content\themes\default\templates\_form_upload_music.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62757c6f7ae899_74139825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8c811c80ba15aeaeb181fcf49e20516139a210b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reproductor\\content\\themes\\default\\templates\\_form_upload_music.tpl',
      1 => 1651866214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62757c6f7ae899_74139825 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="x-uploader" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/includes/ajax/upload.php" method="post" enctype="multipart/form-data">  
    <input name="file" id="file_audio" type="file" accept=".mp3, .wav, .ogg">
    <label for="file_audio" class="label-file">Suba su canción</label>
    <i class="material-icons js_x-uploader" data-handle="publisher" data-type="audio">library_music</i>
			    <progress value="0" max="100" id="loading_audio"></progress>
</form><?php }
}
