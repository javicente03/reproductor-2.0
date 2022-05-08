<?php
/* Smarty version 3.1.40, created on 2022-05-08 13:15:01
  from 'C:\xampp\htdocs\reproductor\content\themes\default\templates\_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6277c255eb04d9_77868189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'baac3d85ddb01565acc1760ed03189bf80064095' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reproductor\\content\\themes\\default\\templates\\_footer.tpl',
      1 => 1652015699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_js_files.tpl' => 1,
  ),
),false)) {
function content_6277c255eb04d9_77868189 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['config']->value[0]['option_value'] != '' && $_smarty_tpl->tpl_vars['config']->value[0]['type'] == 'video') {?>
  </div>
  </section>
<?php }?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/content/themes/default/css/jquery.min.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:_js_files.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/includes/assets/js/core.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/includes/assets/js/user.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/includes/assets/js/messages_contact.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  window.onload = function() {
      document.querySelector('div.center').style.display = "flex"
      document.querySelector('.loading').style.display = "none" 
  }
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
