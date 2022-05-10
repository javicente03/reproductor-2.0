<?php
/* Smarty version 3.1.40, created on 2022-05-10 07:57:01
  from 'C:\xampp\htdocs\reproductor\content\themes\default\templates\message_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_627a1acd021f59_94914320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cebce671db6fd30143e1971e529e632187e7defc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reproductor\\content\\themes\\default\\templates\\message_content.tpl',
      1 => 1652169419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head_radio.tpl' => 1,
    'file:_menu_panel.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_627a1acd021f59_94914320 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head_radio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="center">
<?php $_smarty_tpl->_subTemplateRender('file:_menu_panel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<div class="right">
		<div class="mail-box">
			<span class="subject">Subject: <?php echo $_smarty_tpl->tpl_vars['message']->value['message_subject'];?>
</span>
			<?php if (!$_smarty_tpl->tpl_vars['message']->value['message_status']) {?>
				<button class="js_button-send" data-url="data/contact.php?do=read" data-id="<?php echo $_smarty_tpl->tpl_vars['message']->value['message_id'];?>
">Mark as read</button>
			<?php } else { ?>
				<button class="js_button-send" data-url="data/contact.php?do=delete" data-id="<?php echo $_smarty_tpl->tpl_vars['message']->value['message_id'];?>
">Remove</button>
			<?php }?>
			<span class="mail">From: <?php echo $_smarty_tpl->tpl_vars['message']->value['message_email'];?>
</span>
			<span class="mail-date"><?php echo $_smarty_tpl->tpl_vars['message']->value['message_date'];?>
</span>

			<span class="mail-text"><?php echo $_smarty_tpl->tpl_vars['message']->value['message_text'];?>
</span>
		</div>
	</div>

</div>

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
