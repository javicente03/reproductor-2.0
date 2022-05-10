{include file='_head_radio.tpl'}


<div class="center">
{include file='_menu_panel.tpl'}

	<div class="right">
		<h2>Settings</h2>
		<form id="form_wallpaper" class="js_ajax-form-data form-panel" data-url="core/config.php?do=wallpaper">
			<h4>Change wallpaper</h4>

			<div class="container-uploader" data-id="photo-wallpaper">
			{include file='_form_upload_image.tpl'}
			</div>
			
			<div class="container-uploader" data-id="video-wallpaper">
			{include file='_form_upload_video.tpl'}
			</div>

			<button type="submit">Guardar</button>
			<div class="error-panel"></div>
		</form>
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
</div>

{include file='_footer.tpl'}