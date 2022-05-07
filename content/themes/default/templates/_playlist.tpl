{if $playlist}
<div class="playlist-container">
  {foreach $playlist as $row}
    <div class="song"><img src="{$base_url}/content/uploads/{$row['song_image']}"/>
      <div>{$row['song_name']}
        <button class="js_play" data-song="{$row['song_rut']}" data-title="{$row['song_name']}" data-album="{$row['song_album']}" data-artist="{$row['song_artist']}" data-image="{$row['song_image']}""><i class="material-icons">play_circle_outline</i></button>
      </div>
      <div>{$row['song_album']}</div>
      <div>{$row['song_artist']}</div>
      <div class="duration">{$row['song_duration']}</div>
    </div>
  {/foreach}
</div>
{/if}