<?php
/* Smarty version 3.1.40, created on 2022-05-08 00:40:33
  from 'C:\xampp\htdocs\reproductor\content\themes\default\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62771181648c56_61707812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dca6f7e18269ae1274a6a4f781ad174f07b164fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reproductor\\content\\themes\\default\\templates\\index.tpl',
      1 => 1651970398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head_radio.tpl' => 1,
    'file:_menu.tpl' => 1,
    'file:_playlist.tpl' => 1,
    'file:modal_login.tpl' => 1,
    'file:modal_signup.tpl' => 1,
    'file:_footer_radio.tpl' => 1,
  ),
),false)) {
function content_62771181648c56_61707812 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head_radio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <div class="center">
    <?php $_smarty_tpl->_subTemplateRender('file:_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="right">
      <div class="search js_search"><i class="material-icons">search</i>
        <form id="search" data-url="data/search.php?do=search">
          <input type="text" name="search" placeholder="Find and listen to your favorate music..."/>
        </form>
      </div>
      <div class="account open-modal" data-open="modal1"><img class="avatar" src="http://s3-us-west-2.amazonaws.com/s.cdpn.io/350523/profile/profile-80.jpg?1"/></div>
      <div class="row">
        <h1>Featured Albums</h1>
        <?php if ($_smarty_tpl->tpl_vars['playlist']->value) {?>
        <button class="play"><span>PLAY</span><i class="material-icons">play_arrow</i></button>
        <?php }?>
      </div>
      <div class="albums">
        <div class="music-player-container is-playing">
          <div class="music-player">
            <div class="player-content-container">
              <h1 class="artist-name"></h1>
              <h2 class="album-title"></h2>
              <h3 class="song-title"></h3>
              <div class="music-player-controls">
                <div class="control-back"></div>
                <div class="control-play" data-status="0"></div>
                <div class="control-forwards"></div>
              </div>
            </div>
          </div>
          <div class="album">
            <div class="album-art"></div>
            <div class="vinyl"></div>
          </div>
        </div>
      </div>
      <div class="split">
        <div class="daily-mix"> 
          <h1>Daily Mix</h1>

          <?php $_smarty_tpl->_subTemplateRender('file:_playlist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    
        </div>

        
        <div id="mp3_player">        
          <canvas id="analyzer_render"></canvas>
          <div id="audio_box"></div>
        </div>
      </div>
    </div>
  </div>

<?php if ($_smarty_tpl->tpl_vars['config']->value[0]['option_value'] != '' && $_smarty_tpl->tpl_vars['config']->value[0]['type'] == 'video') {?>
  </div>
  </section>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:modal_login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:modal_signup.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
  var arraySong = new Array();

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['playlist']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
      arraySong.push(<?php echo $_smarty_tpl->tpl_vars['row']->value['song_id'];?>
)
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  
<?php echo '</script'; ?>
>


<?php $_smarty_tpl->_subTemplateRender('file:_footer_radio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
