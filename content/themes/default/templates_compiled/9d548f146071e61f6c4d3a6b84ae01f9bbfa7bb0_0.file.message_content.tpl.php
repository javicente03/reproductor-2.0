<?php
/* Smarty version 3.1.40, created on 2022-05-18 15:58:55
  from 'C:\xampp\htdocs\nuevo reproductor\content\themes\default\templates\message_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_628517bf9ee8c4_91305294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d548f146071e61f6c4d3a6b84ae01f9bbfa7bb0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo reproductor\\content\\themes\\default\\templates\\message_content.tpl',
      1 => 1652889533,
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
function content_628517bf9ee8c4_91305294 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head_radio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_menu_panel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<section id="player">

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

</section>

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
