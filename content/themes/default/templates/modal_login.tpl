
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
