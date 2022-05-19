<?php
/* Smarty version 3.1.40, created on 2022-05-18 15:54:29
  from 'C:\xampp\htdocs\nuevo reproductor\content\themes\default\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_628516b54bb3d5_13649293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd173e7745d47448c4709dced67af091393c9c0c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo reproductor\\content\\themes\\default\\templates\\messages.tpl',
      1 => 1652889267,
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
function content_628516b54bb3d5_13649293 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head_radio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_menu_panel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<section id="player">
	<div class="wrapper">
	<div class="table-container">

		<?php if ($_smarty_tpl->tpl_vars['view']->value == "pending") {?>
			<h2>Pending Messages</h2>

			<table class="table">
				<thead>
					<th>Email</th>
					<th>Subject</th>
					<th>Date</th>
					<th>See</th>
					<th>Mark as read</th>
				</thead>
				<tbody>

					<?php if ($_smarty_tpl->tpl_vars['messages']->value) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['message_email'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['message_subject'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['message_date'];?>
</td>
								<td><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/messages/<?php echo $_smarty_tpl->tpl_vars['row']->value['message_id'];?>
"><i class="material-icons">visibility</i></a></td>
								<td><button class="js_button-send" data-url="data/contact.php?do=read" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['message_id'];?>
"><i class="material-icons">edit</i></button></td>
							</tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php } else { ?>
						<tr>
			                <td colspan="5" class="text-center">
		                    "There are no pending messages"
		                    </td>
		                </tr>
					<?php }?>
				</tbody>
			</table>
		<?php } else { ?>
			<h2>Read Messages</h2>
			<table class="table">
				<thead>
					<th>Email</th>
					<th>Subject</th>
					<th>Date</th>
					<th>See</th>
					<th>Remove</th>
				</thead>
				<tbody>
				
					<?php if ($_smarty_tpl->tpl_vars['messages']->value) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['message_email'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['message_subject'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['message_date'];?>
</td>
								<td><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/messages/<?php echo $_smarty_tpl->tpl_vars['row']->value['message_id'];?>
"><i class="material-icons">visibility</i></a></td>
								<td><button class="js_button-send" data-url="data/contact.php?do=delete" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['message_id'];?>
"><i class="material-icons">delete</i></button></td>
							</tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php } else { ?>
						<tr>
			                <td colspan="5" class="text-center">
		                    "There are no pending messages"
		                    </td>
		                </tr>
					<?php }?>
				</tbody>
			</table>
		<?php }?>
		</div>

		<!-- error -->
              <div class="error-panel"></div>
          <!-- error -->
	</div>

</section>

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
