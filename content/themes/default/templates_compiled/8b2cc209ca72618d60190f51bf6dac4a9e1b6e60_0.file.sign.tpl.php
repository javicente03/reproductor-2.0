<?php
/* Smarty version 3.1.40, created on 2022-05-18 15:04:20
  from 'C:\xampp\htdocs\nuevo reproductor\content\themes\default\templates\sign.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62850af483e042_42377240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b2cc209ca72618d60190f51bf6dac4a9e1b6e60' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo reproductor\\content\\themes\\default\\templates\\sign.tpl',
      1 => 1652886258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head_radio.tpl' => 1,
    'file:_menu.tpl' => 1,
    'file:_signin_form.tpl' => 1,
    'file:_signup_form.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_62850af483e042_42377240 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head_radio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section id="player">
	<div class="contact">
		<?php if ($_smarty_tpl->tpl_vars['do']->value == 'in') {?>
			<?php $_smarty_tpl->_subTemplateRender('file:_signin_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php } elseif ($_smarty_tpl->tpl_vars['do']->value == 'up') {?>
			<?php $_smarty_tpl->_subTemplateRender('file:_signup_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php }?>
	</div>
</section>

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
