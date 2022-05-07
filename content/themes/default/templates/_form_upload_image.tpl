<form class="x-uploader" action="{$base_url}/includes/ajax/upload.php" method="post" enctype="multipart/form-data">  
	<input name="file" id="file_photo" type="file" accept=".jpg, .png, .gif">
    <label for="file_photo" class="label-file">Suba una imágen</label>

	<i class="material-icons js_x-uploader" data-handle="publisher" data-type="photo">photo</i>
    <progress value="0" max="100" id="loading_photo"></progress>
</form>