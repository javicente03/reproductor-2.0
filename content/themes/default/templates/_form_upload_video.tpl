<form class="x-uploader" action="{$base_url}/includes/ajax/upload.php" method="post" enctype="multipart/form-data">  
    <input name="file" id="file_video" type="file" accept=".mp4, .mkv, .flv, .avi, .mov, .wmv">
    <label for="file_video" class="label-file">Suba un video</label>
    <i class="material-icons js_x-uploader" data-handle="publisher" data-type="video">movie</i>
			    <progress value="0" max="100" id="loading_video"></progress>
</form>