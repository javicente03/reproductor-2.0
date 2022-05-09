<?php
/* Smarty version 3.1.40, created on 2022-05-09 15:56:06
  from 'C:\xampp\htdocs\reproductor\content\themes\default\templates\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6279399686b8d0_34552051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fc7a941a21c8950ed86d52f1f304d65c52ad4e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reproductor\\content\\themes\\default\\templates\\about.tpl',
      1 => 1652111764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head_radio.tpl' => 1,
    'file:_menu.tpl' => 1,
    'file:modal_login.tpl' => 1,
    'file:modal_signup.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_6279399686b8d0_34552051 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head_radio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="center">
    <?php $_smarty_tpl->_subTemplateRender('file:_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<div class="right">
		<div class="about">
			<h2>About</h2>

				<p><?php echo $_smarty_tpl->tpl_vars['config']->value['about_text'];?>
</p>


				<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/content/uploads/<?php echo $_smarty_tpl->tpl_vars['config']->value['about_image'];?>
">
		</div>
	</div>	
</div>

<?php $_smarty_tpl->_subTemplateRender('file:modal_login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:modal_signup.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
