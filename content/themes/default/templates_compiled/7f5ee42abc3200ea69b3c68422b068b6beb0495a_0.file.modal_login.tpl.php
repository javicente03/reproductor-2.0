<?php
/* Smarty version 3.1.40, created on 2022-05-07 20:52:34
  from 'C:\xampp\htdocs\reproductor\content\themes\default\templates\modal_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6276dc1267e186_99203587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f5ee42abc3200ea69b3c68422b068b6beb0495a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reproductor\\content\\themes\\default\\templates\\modal_login.tpl',
      1 => 1651956624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6276dc1267e186_99203587 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal" id="modal1" data-animation="slideInOutLeft">
  <div class="modal-dialog">
    <header class="modal-header">
      <h3>Inicie Sesión</h3>
      <button class="close-modal" aria-label="close modal" data-close>
        ✕  
      </button>
    </header>
    <section class="modal-content">
      <form class="js_ajax-forms form-panel" data-url="core/signin.php" method="POST">
        <input type="text" name="username_email" class="form-control" placeholder="Usuario">
        <input type="password" name="password" class="form-control" placeholder="Contraseña">
       
        <button type="submit">Ingresar</button>
        <!-- error -->
              <div class="error-panel"></div>
          <!-- error -->
      </form>
    </section>
  </div>
</div>
<?php }
}
