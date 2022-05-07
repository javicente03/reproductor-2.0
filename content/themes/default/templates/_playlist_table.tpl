<div class="right">
	<h2>Playlist</h2>

	<table class="table">
		<thead>
			<th>Image</th>
			<th>Name</th>
			<th>Artist</th>
			<th>Album</th>
			<th>Duration</th>
			<th>Delete</th>
		</thead>
		<tbody>
			{if $playlist}
				{foreach $playlist as $row}
					<tr>
						<td><img src="content/uploads/{$row['song_image']}" ></td>
						<td>{$row['song_name']}</td>
						<td>{$row['song_artist']}</td>
						<td>{$row['song_album']}</td>
						<td>{$row['song_duration']}</td>
						<td><button class="btn-panel delete-song" type="submit" data-song="{$row['song_id']}"><i class="material-icons">delete</i></button></td>
					</tr>
				{/foreach}
			{else}
				<tr>
	                <td colspan="6" class="text-center">
                    "No hay data cargada"
                    </td>
                </tr>
			{/if}
		</tbody>
	</table>
	<div class="error-panel">Error</div>
</div>