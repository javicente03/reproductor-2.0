<?php
/* Smarty version 3.1.40, created on 2022-05-07 18:12:40
  from 'C:\xampp\htdocs\reproductor\content\themes\default\templates\_playlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6276b698c80099_67739648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59b05d7454ce7267da819fef9590245d1cb4fa72' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reproductor\\content\\themes\\default\\templates\\_playlist.tpl',
      1 => 1651947103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6276b698c80099_67739648 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['playlist']->value) {?>
<div class="playlist-container playlist-scroll">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['playlist']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
    <div class="song js_play" data-song="<?php echo $_smarty_tpl->tpl_vars['row']->value['song_rut'];?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['row']->value['song_name'];?>
" data-album="<?php echo $_smarty_tpl->tpl_vars['row']->value['song_album'];?>
" data-artist="<?php echo $_smarty_tpl->tpl_vars['row']->value['song_artist'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['row']->value['song_image'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['row']->value['song_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/content/uploads/<?php echo $_smarty_tpl->tpl_vars['row']->value['song_image'];?>
"/>
    
      <div><?php echo $_smarty_tpl->tpl_vars['row']->value['song_name'];?>
</div>
      <div><?php echo $_smarty_tpl->tpl_vars['row']->value['song_album'];?>
</div>
      <div><?php echo $_smarty_tpl->tpl_vars['row']->value['song_artist'];?>
</div>
      <div class="duration"><?php echo $_smarty_tpl->tpl_vars['row']->value['song_duration'];?>
</div>
    </div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
}
