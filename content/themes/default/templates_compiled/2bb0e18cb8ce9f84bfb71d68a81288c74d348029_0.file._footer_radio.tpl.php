<?php
/* Smarty version 3.1.40, created on 2022-05-18 17:48:35
  from 'C:\xampp\htdocs\nuevo reproductor\content\themes\default\templates\_footer_radio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62853173bb7993_11703473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bb0e18cb8ce9f84bfb71d68a81288c74d348029' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo reproductor\\content\\themes\\default\\templates\\_footer_radio.tpl',
      1 => 1652896113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_js_files.tpl' => 1,
  ),
),false)) {
function content_62853173bb7993_11703473 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Scripts JS -->
  <?php echo '<script'; ?>
 src='includes/assets/theme_dark/js/jquery.min.js'><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src='includes/assets/theme_dark/js/hls.js'><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
  src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/includes/assets/js/script.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
  src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/includes/assets/js/page.js"><?php echo '</script'; ?>
>
    <?php $_smarty_tpl->_subTemplateRender('file:_js_files.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php echo '<script'; ?>
  src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/includes/assets/js/search.js"><?php echo '</script'; ?>
>

  <?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
      <?php echo '<script'; ?>
  src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/includes/assets/js/modals.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
  src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/includes/assets/js/core.js"><?php echo '</script'; ?>
>
  <?php }?>

  <?php echo '<script'; ?>
>

    $(document).ready(function(){
      document.querySelector('.ready-page').style.visibility = "visible"
      document.querySelector('#loading-page').style.display = "none"
    })
  <?php echo '</script'; ?>
>
</body>
</html><?php }
}
