<?php
/* Smarty version 3.1.40, created on 2022-05-18 17:58:39
  from 'C:\xampp\htdocs\nuevo reproductor\content\themes\default\templates\_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_628533cf24b990_32386741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32ca2a5a5b3a322e7d685e89251d141dfa785052' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo reproductor\\content\\themes\\default\\templates\\_footer.tpl',
      1 => 1652896708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_js_files.tpl' => 1,
  ),
),false)) {
function content_628533cf24b990_32386741 (Smarty_Internal_Template $_smarty_tpl) {
?></div>

<!-- Scripts JS -->
  <?php echo '<script'; ?>
 src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'><?php echo '</script'; ?>
>
    <?php $_smarty_tpl->_subTemplateRender('file:_js_files.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php echo '<script'; ?>
  src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/includes/assets/js/search.js"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
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

    $(document).ready(function(){
      document.querySelector('.ready-page').style.visibility = "visible"
      document.querySelector('#loading-page').style.display = "none"
    })
  <?php echo '</script'; ?>
>
</body>
</html><?php }
}
