<?php
/* Smarty version 3.1.40, created on 2022-05-18 15:27:08
  from 'C:\xampp\htdocs\nuevo reproductor\content\themes\default\templates\songs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6285104c4c68d7_79951257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b5d26b7f401655444221f37d601757d2462824d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo reproductor\\content\\themes\\default\\templates\\songs.tpl',
      1 => 1652887626,
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
function content_6285104c4c68d7_79951257 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head_radio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_menu_panel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<section id="player">

	<?php if ($_smarty_tpl->tpl_vars['view']->value == "add") {?>
		<?php $_smarty_tpl->_subTemplateRender('file:_form_song.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php }?>
</section>

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
