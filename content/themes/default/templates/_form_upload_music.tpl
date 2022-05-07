<form class="x-uploader" action="{$base_url}/includes/ajax/upload.php" method="post" enctype="multipart/form-data">  
    <input name="file" id="file_audio" type="file" accept=".mp3, .wav, .ogg">
    <label for="file_audio" class="label-file">Suba su canción</label>
    <i class="material-icons js_x-uploader" data-handle="publisher" data-type="audio">library_music</i>
			    <progress value="0" max="100" id="loading_audio"></progress>
</form>