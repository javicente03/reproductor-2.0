<div class="modal" id="modal2" data-animation="slideInOutLeft">
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
