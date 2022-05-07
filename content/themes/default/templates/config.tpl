{include file='_head_radio.tpl'}


<div class="center">
{include file='_menu_panel.tpl'}

	<div class="right">
		<h2>Configuración</h2>
		<div class="js_ajax-form-data form-panel" data-url="core/config.php">
			<h4>Cambiar fondo</h4>
			{include file='_form_upload_image.tpl'}
			<button type="submit">Guardar</button>
			<div class="error-panel"></div>
		</div>
	</div>
</div>

{include file='_footer.tpl'}