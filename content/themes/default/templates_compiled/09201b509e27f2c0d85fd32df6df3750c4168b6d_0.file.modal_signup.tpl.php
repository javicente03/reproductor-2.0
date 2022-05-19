<?php
/* Smarty version 3.1.40, created on 2022-05-17 18:00:09
  from 'C:\xampp\htdocs\nuevo reproductor\content\themes\default\templates\modal_signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6283e2a9caf729_54007994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09201b509e27f2c0d85fd32df6df3750c4168b6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo reproductor\\content\\themes\\default\\templates\\modal_signup.tpl',
      1 => 1651956655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6283e2a9caf729_54007994 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal" id="modal2" data-animation="slideInOutLeft">
  <div class="modal-dialog">
    <header class="modal-header">
      <h3>Registro</h3>
      <button class="close-modal" aria-label="close modal" data-close>
        ✕  
      </button>
    </header>
    <section class="modal-content">
      <form class="js_ajax-forms form-panel" data-url="core/signup.php" method="POST">
        <input type="text" name="first_name" class="form-control" placeholder="Nombre">
        <input type="text" name="last_name" class="form-control" placeholder="Apellido">
        <input type="text" name="username" class="form-control" placeholder="Usuario">
        <input type="email" name="email" class="form-control" placeholder="Correo">
        <input type="password" name="password" class="form-control" placeholder="Contraseña">
        <button type="submit" class="send-login">Registrarse</button>
        <!-- error -->
              <div class="error-panel"></div>
          <!-- error -->
      </form>
    </section>
  </div>
</div>
<?php }
}
