<?php
/* Smarty version 3.1.40, created on 2022-05-06 19:52:15
  from 'C:\xampp\htdocs\reproductor\content\themes\default\templates\_form_upload_image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62757c6f8b1c49_98896911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdf1868fddaed1e00b6a3aec4feab3a28f40a022' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reproductor\\content\\themes\\default\\templates\\_form_upload_image.tpl',
      1 => 1651866217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62757c6f8b1c49_98896911 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="x-uploader" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/includes/ajax/upload.php" method="post" enctype="multipart/form-data">  
	<input name="file" id="file_photo" type="file" accept=".jpg, .png, .gif">
    <label for="file_photo" class="label-file">Suba una imágen</label>

	<i class="material-icons js_x-uploader" data-handle="publisher" data-type="photo">photo</i>
    <progress value="0" max="100" id="loading_photo"></progress>
</form><?php }
}
