<?php
/* Smarty version 3.1.40, created on 2022-05-05 02:09:38
  from 'C:\xampp\htdocs\reproductor\content\themes\default\templates\songs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_627331e26da284_12108967',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee4d03427b423ad5f4ba1a8b3a02107a9df11b3b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reproductor\\content\\themes\\default\\templates\\songs.tpl',
      1 => 1651716549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head_radio.tpl' => 1,
    'file:_menu_panel.tpl' => 1,
    'file:_form_song.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_627331e26da284_12108967 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head_radio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="center">
<?php $_smarty_tpl->_subTemplateRender('file:_menu_panel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php if ($_smarty_tpl->tpl_vars['view']->value == "add") {?>
		<?php $_smarty_tpl->_subTemplateRender('file:_form_song.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php }?>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
