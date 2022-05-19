<?php
/* Smarty version 3.1.40, created on 2022-05-18 20:50:45
  from 'C:\xampp\htdocs\nuevo reproductor\content\themes\default\templates\_playlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62855c25ba6fa3_16450117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '455704b744334364aac7b24917e36a57c39e4336' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo reproductor\\content\\themes\\default\\templates\\_playlist.tpl',
      1 => 1652906820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62855c25ba6fa3_16450117 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['playlist']->value))) {?>  
  <?php if ($_smarty_tpl->tpl_vars['playlist']->value) {?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['playlist']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
      <a class="stations-item visible js_play" data-song="<?php echo $_smarty_tpl->tpl_vars['row']->value['song_rut'];?>
" data-duration="<?php echo $_smarty_tpl->tpl_vars['row']->value['song_duration_second'];?>
" data-time="<?php echo $_smarty_tpl->tpl_vars['row']->value['song_duration'];?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['row']->value['song_name'];?>
" data-album="<?php echo $_smarty_tpl->tpl_vars['row']->value['song_album'];?>
" data-artist="<?php echo $_smarty_tpl->tpl_vars['row']->value['song_artist'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['row']->value['song_image'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['row']->value['song_id'];?>
">
        <i class="logo" style="background-image: url(content/uploads/<?php echo $_smarty_tpl->tpl_vars['row']->value['song_image'];?>
);"></i>
        <b class="title"><?php echo $_smarty_tpl->tpl_vars['row']->value['song_name'];?>
</b>
        <i class="network"><?php echo $_smarty_tpl->tpl_vars['row']->value['song_artist'];?>
</i>
        <i class="genre"><?php echo $_smarty_tpl->tpl_vars['row']->value['song_album'];?>
</i>
      </a>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php } else { ?>
  <div class="stations-item visible">
    No information loaded
  </div>
  <?php }
}
}
}
