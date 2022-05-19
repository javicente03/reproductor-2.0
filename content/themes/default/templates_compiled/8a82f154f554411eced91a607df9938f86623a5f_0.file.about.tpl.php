<?php
/* Smarty version 3.1.40, created on 2022-05-18 15:51:22
  from 'C:\xampp\htdocs\nuevo reproductor\content\themes\default\templates\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_628515fad12b26_93207800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a82f154f554411eced91a607df9938f86623a5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo reproductor\\content\\themes\\default\\templates\\about.tpl',
      1 => 1652889079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head_radio.tpl' => 1,
    'file:_menu.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_628515fad12b26_93207800 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head_radio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section id="player">

		<div class="about">
			<h2>About</h2>

				<p><?php echo $_smarty_tpl->tpl_vars['config']->value['about_text'];?>
</p>


				<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/content/uploads/<?php echo $_smarty_tpl->tpl_vars['config']->value['about_image'];?>
">
		</div>
</section>

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
