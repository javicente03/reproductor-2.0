<?php
/* Smarty version 3.1.40, created on 2022-05-18 16:43:08
  from 'C:\xampp\htdocs\nuevo reproductor\content\themes\default\templates\modal_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6285221c92a8c6_65382311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf2180dff488e06c7a0fa7944b45a7763af12745' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo reproductor\\content\\themes\\default\\templates\\modal_login.tpl',
      1 => 1652892186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6285221c92a8c6_65382311 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal" id="modal1" data-animation="slideInOutLeft">
  <div class="modal-dialog">
    <header class="modal-header">
      <h3>Sign In</h3>
      <button class="close-modal" aria-label="close modal" data-close>
        ✕  
      </button>
    </header>
    <section class="modal-content">
      <form class="js_ajax-forms form-panel contact" style="width:100%;" data-url="core/signin.php" method="POST">
        <input type="text" name="username_email" style="background: #8080806b; font-weight: bold;" placeholder="Username or email">
        <input type="password" name="password" style="background: #8080806b; font-weight: bold;" placeholder="Password">
       
        <button type="submit">Enter</button>
        <!-- error -->
              <div class="error-panel"></div>
          <!-- error -->
      </form>
    </section>
  </div>
</div>
<?php }
}
