{if $playlist}
<div class="playlist-container playlist-scroll" id="playlist">
  {foreach $playlist as $row}
    <div class="song js_play" data-song="{$row['song_rut']}" data-title="{$row['song_name']}" data-album="{$row['song_album']}" data-artist="{$row['song_artist']}" data-image="{$row['song_image']}" id="{$row['song_id']}"><img src="{$base_url}/content/uploads/{$row['song_image']}"/>
    
      <div>{$row['song_name']}</div>
      <div>{$row['song_album']}</div>
      <div>{$row['song_artist']}</div>
      <div class="duration">{$row['song_duration']}</div>
    </div>
  {/foreach}
</div>
{/if}