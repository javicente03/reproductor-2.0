<?php
/* Smarty version 3.1.40, created on 2022-05-18 15:21:48
  from 'C:\xampp\htdocs\nuevo reproductor\content\themes\default\templates\_playlist_table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62850f0c029be4_50923028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5401b1f97395959f74c9d79cb0f06f55985aeb30' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo reproductor\\content\\themes\\default\\templates\\_playlist_table.tpl',
      1 => 1652887253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62850f0c029be4_50923028 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="wrapper">
	<div class="table-container">
	<h2>Playlist</h2>

	<table class="table">
		<thead>
			<th>Image</th>
			<th>Name</th>
			<th>Artist</th>
			<th>Album</th>
			<th>Duration</th>
			<th>Delete</th>
		</thead>
		<tbody>
			<?php if ($_smarty_tpl->tpl_vars['playlist']->value) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['playlist']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
					<tr>
						<td><img src="content/uploads/<?php echo $_smarty_tpl->tpl_vars['row']->value['song_image'];?>
" ></td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['song_name'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['song_artist'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['song_album'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['song_duration'];?>
</td>
						<td><button class="btn-panel delete-song" type="submit" data-song="<?php echo $_smarty_tpl->tpl_vars['row']->value['song_id'];?>
"><i class="material-icons">delete</i></button></td>
					</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php } else { ?>
				<tr>
	                <td colspan="6" class="text-center">
                    "No hay data cargada"
                    </td>
                </tr>
			<?php }?>
		</tbody>
	</table>
	</div>
	<div class="error-panel">Error</div>
</div><?php }
}
