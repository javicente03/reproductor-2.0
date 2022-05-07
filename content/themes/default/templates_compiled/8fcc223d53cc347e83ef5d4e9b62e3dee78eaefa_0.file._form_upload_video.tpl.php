<?php
/* Smarty version 3.1.40, created on 2022-05-07 17:33:51
  from 'C:\xampp\htdocs\reproductor\content\themes\default\templates\_form_upload_video.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6276ad7fda86f6_41703339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fcc223d53cc347e83ef5d4e9b62e3dee78eaefa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reproductor\\content\\themes\\default\\templates\\_form_upload_video.tpl',
      1 => 1651944802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6276ad7fda86f6_41703339 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="x-uploader" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/includes/ajax/upload.php" method="post" enctype="multipart/form-data">  
    <input name="file" id="file_video" type="file" accept=".mp4, .mkv, .flv, .avi, .mov, .wmv">
    <label for="file_video" class="label-file">Suba un video</label>
    <i class="material-icons js_x-uploader" data-handle="publisher" data-type="video">movie</i>
			    <progress value="0" max="100" id="loading_video"></progress>
</form><?php }
}
