{include file='_head_radio.tpl'}

<div class="center">
    {include file='_menu.tpl'}

	<div class="right">
		<div class="contact">
			<h2>Contacto</h2>

			<form class="js_ajax-forms form-panel" data-url="data/contact.php?do=create">
				<input type="email" name="email" placeholder="Ingrese su correo" />
				<input type="text" name="subject" placeholder="Motivo" />
				<textarea placeholder="Ingrese su mensaje" name="message"></textarea>
				<button type="submit">Enviar</button>
				<div class="error-panel">Error</div>
				<div class="success-panel">Success</div>
			</form>
		</div>
	</div>	
</div>

{if $config[0]['option_value'] != "" && $config[0]['type'] == 'video'}
  </div>
  </section>
{/if}

{include file='modal_login.tpl'}
{include file='modal_signup.tpl'}

{include file='_footer.tpl'}