<?php
/* Smarty version 3.1.40, created on 2022-05-18 15:18:25
  from 'C:\xampp\htdocs\nuevo reproductor\content\themes\default\templates\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62850e41bc4d11_31275460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da5a7afab18cc5d476d768b209e0983cc93b94a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo reproductor\\content\\themes\\default\\templates\\dashboard.tpl',
      1 => 1652887103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head_radio.tpl' => 1,
    'file:_menu_panel.tpl' => 1,
    'file:_playlist_table.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_62850e41bc4d11_31275460 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head_radio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_menu_panel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<section id="player">

<?php $_smarty_tpl->_subTemplateRender('file:_playlist_table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</section>

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
