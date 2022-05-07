<?php
/* Smarty version 3.1.40, created on 2022-05-06 19:04:15
  from 'C:\xampp\htdocs\reproductor\content\themes\default\templates\sign.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6275712f870113_92101233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc5f409a03b5126d5bee4da3a3e282f9fa5398ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reproductor\\content\\themes\\default\\templates\\sign.tpl',
      1 => 1651863835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head_radio.tpl' => 1,
    'file:_signin_form.tpl' => 1,
    'file:_signup_form.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_6275712f870113_92101233 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head_radio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="center">

	<?php if ($_smarty_tpl->tpl_vars['do']->value == 'in') {?>
		<?php $_smarty_tpl->_subTemplateRender('file:_signin_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php } elseif ($_smarty_tpl->tpl_vars['do']->value == 'up') {?>
		<?php $_smarty_tpl->_subTemplateRender('file:_signup_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php }?>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
