<?php
/* Smarty version 3.1.40, created on 2022-05-18 20:33:28
  from 'C:\xampp\htdocs\nuevo reproductor\content\themes\default\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62855818147410_73464482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '928c87a23ab1028314bd9cbba2107616688d5857' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo reproductor\\content\\themes\\default\\templates\\index.tpl',
      1 => 1652906003,
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
function content_62855818147410_73464482 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head_radio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <section id="player">
        <div class="wrapper">
            <div id="audio_box"></div>

            <div id="disc">
                <div class="disc">
                    <b class="title"></b>
                    <i id="bg-disc" class="logo"  style="background-image: url(includes/assets/img/cover.jpg); opacity:1;"></i>
                    <i class="cover"></i>
                </div>

                <div id="controls">
                    <video id="video"></video>
                    <a ajax="no" id="play" class="control-play"><i class="material-icons">play_arrow</i></a>
                    <a ajax="no" id="next" class="control-forwards"><i class="material-icons">skip_next</i></a>
                    <a ajax="no" id="prev" class="control-back"><i class="material-icons">skip_previous</i></a>
                </div>
            </div>

            <div id="track">
                <i class="station"></i>
                <b class="title"></b>
            </div>


        </div> 
    </section>

    <section id="station">
        <noindex>
            <a class="close"></a>

            <div class="scroll">

                <div class="info">
                    <a id="fav" class="function icon-fav"></a>
                    <i class="logo"></i>
                    <b class="title"></b>
                    <hr>

                    <a class="artist" ></a>

                    <a class="album" ></a>

                    <div class="styles"><i class="material-icons">library_music</i><i>/</i><span id="info-time"></span></div>
                </div>
            </div>
        </noindex>
    </section>


    <section id="station-playlist">
        <noindex>
            <a class="close" id="close_playlist"><i class="material-icons">close</i></a>

            <div class="scroll">

                <section id="stations" class="item-menu">
                    <div class="ajax" id="playlist">
                    <?php $_smarty_tpl->_subTemplateRender("file:_playlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    </div>
                    <hr>
                </section>
            </div>
        </noindex>
    </section>

    <section id="settings">
        <noindex>
            <a class="close" id="close_settings"><i class="material-icons">close</i></a>
            <div class="scroll">
                <div class="section">
                    <b>Cover</b>
                    <label><input type="radio" class="optcover" name="cover" value="rotate" checked>Round rotate</label>
                    <label><input type="radio" class="optcover" name="cover" value="static">Round static</label>
                    <label><input type="radio" class="optcover" name="cover" value="square">Square</label>
                </div>

                <div class="section">
                    <b>Background</b>
                    <label><input type="radio" class="optbackground" name="background" value="cover" checked>Track cover</label>
                    <label><input type="radio" class="optbackground" name="background" value="default">Default</label>
                    <label><input type="radio" class="optbackground" name="background" value="black">Black</label>
                    <label><input type="checkbox" id="check-blure" name="blure" value="blure">Blure</label>
                </div>

                <div class="section">
                    <b>Effects</b>
                    <label><input type="checkbox" id="check-spectrum" name="spectrum" value="spectrum">Spectrum Analyzer</label>
                    <sup>Test function! Reload page to apply. Some stations may not work!!!</sup>
                </div>

            </div>
        </noindex>
    </section>

    <div id="spectrum">
        <canvas id="canvas_spectrum" style="width:100%"></canvas>
    </div>

<section id="volume">
    <i id="i-volume" class="material-icons">volume_up</i>
    <input type="range" max="1" value="1" min="0" step="0.01" class="range-volume">
    <span id="span-volume">100</span>
</section>

<section id="functions">
    <a data-show="settings" id="show_settings" class="function"><i class="material-icons">settings</i></a>
    <a data-show="list" id="show_list" class="function"><i class="material-icons">list</i></a>
    <a data-toggle="volume" id="show_volume" class="function"><i class="material-icons">volume_up</i></a>
    
    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/dashboard" id="show_user" class="function open-modal account"><i class="material-icons">person</i></a>
    <?php } else { ?>
    <a data-open="modal1" id="show_user" class="function open-modal account"><i class="material-icons">person</i></a>
    <?php }?>

    <a id="show_playlist" class="function"><i class="material-icons">library_music</i></a>
    <a id="fullscreen" class="function"><i class="material-icons">fullscreen</i></a>
</section>

<?php $_smarty_tpl->_subTemplateRender('file:modal_login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:modal_signup.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>

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
