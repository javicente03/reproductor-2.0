<div class="right">
	<h2>Agregar Canción</h2>

	<div class="js_ajax-music-html form-panel" data-url="core/songs.php?do=create">
			<input type="text" id="name" placeholder="Nombre de la canción">
			<input type="text" id="album" placeholder="Album">
			<input type="text" id="artist" placeholder="Artista">
			<input type="hidden" id="duration">


			{include file='_form_upload_music.tpl'}
			{include file='_form_upload_image.tpl'}

			<button type="submit" >Agregar</button>
			<div class="error-panel">Error</div>
			<div class="success-panel">Success</div>
	<div>
	
</div>