<?php
/* Smarty version 3.1.40, created on 2022-05-07 21:24:28
  from 'C:\xampp\htdocs\reproductor\content\themes\default\templates\_footer_radio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6276e38c625c39_29468985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '711ebb8123a68ac4f6c48ffe783f8d47d9d6e434' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reproductor\\content\\themes\\default\\templates\\_footer_radio.tpl',
      1 => 1651958666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_js_files.tpl' => 1,
  ),
),false)) {
function content_6276e38c625c39_29468985 (Smarty_Internal_Template $_smarty_tpl) {
?>  <!-- Scripts JS -->
  <?php echo '<script'; ?>
 src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
  src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/includes/assets/js/script.js"><?php echo '</script'; ?>
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
</body>
</html><?php }
}
