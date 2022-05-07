<?php
/* Smarty version 3.1.40, created on 2022-05-05 02:07:40
  from 'C:\xampp\htdocs\reproductor\content\themes\default\templates\_js_templates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6273316c963d12_46796656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18858534d447f589c1595bbff481efe6883f38f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reproductor\\content\\themes\\default\\templates\\_js_templates.tpl',
      1 => 1651711719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6273316c963d12_46796656 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 id="x-uploader" type="text/template">
    <form class="x-uploader" action="{{url}}" method="post" enctype="multipart/form-data">
        {{#multiple}}
            <input name="file[]" type="file" multiple="multiple" accept="{{accept}}">
        {{/multiple}}
        {{^multiple}}
            <?php if ((isset($_smarty_tpl->tpl_vars['load_data']->value))) {?>
            <input name="file" type="file" accept=".csv">
            <input type="hidden" name="load_data" value="1">
            <?php } else { ?>
            <input name="file" type="file" accept="{{accept}}">
            <?php }?>
        {{/multiple}}
        <input type="hidden" name="secret" value="{{secret}}">
    </form>
<?php echo '</script'; ?>
><?php }
}
