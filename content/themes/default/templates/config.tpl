{include file='_head_radio.tpl'}
{include file='_menu_panel.tpl'}


<section id="player">

	<div class="contact">
		<h2>Settings</h2>
		<br>
		<form id="form_about" class="js_ajax-form-data form-panel" data-url="core/config.php?do=about">
			<h4>Modify About section</h4>
			<textarea placeholder="Contenido" name="about">{$config['about_text']}</textarea>
			
			<div class="container-uploader" data-id="photo-about">
			{include file='_form_upload_image.tpl'}
			</div>

			<button type="submit">Guardar</button>
			<div class="error-panel"></div>
			<div class="success-panel"></div>
		</form>
	</div>
</section>

{include file='_footer.tpl'}