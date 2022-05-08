<?php
/* Smarty version 3.1.40, created on 2022-05-08 00:46:36
  from 'C:\xampp\htdocs\reproductor\content\themes\default\templates\_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_627712ec5f2143_49374877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33c6dded84cc878a04567e73c62ea294660ba401' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reproductor\\content\\themes\\default\\templates\\_menu.tpl',
      1 => 1651970760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627712ec5f2143_49374877 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="left">
      <div class="controls">
        <div class="close"></div>
        <div class="minimize"></div>
        <div class="maximize"></div>
      </div>
      <div class="menu">
        <div class="title">MENU</div>
          <div class="item item-panel">
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/about"><i class="material-icons">layers</i><span>About</span></a>
          </div>
          <div class="item"><i class="material-icons">radio</i><span>Playlist</span></div>
          <div class="item"><i class="material-icons">mic</i><span>Our team</span></div>
          <div class="item item-panel">
            <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/contact"><i class="material-icons">album</i><span>Contacts</span></a>
          </div>
          <div class="item"><i class="material-icons">shop</i><span>Shop</span></div>
      </div>
      <div class="playlists">
        <div class="title">OTHERS</div>
          <div class="item"><i class="material-icons">radio</i><span>Radio</span></div>
          <div class="item"><i class="material-icons">list</i><span>Reggaeton</span></div>
          <div class="item"><i class="material-icons">chat</i><span>Chat</span></div>
      </div>
    </div><?php }
}
