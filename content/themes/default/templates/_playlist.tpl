{if isset($playlist)}  
  {if $playlist}

    {foreach $playlist as $row}
      <a class="stations-item visible js_play" data-song="{$row['song_rut']}" data-duration="{$row['song_duration_second']}" data-time="{$row['song_duration']}" data-title="{$row['song_name']}" data-album="{$row['song_album']}" data-artist="{$row['song_artist']}" data-image="{$row['song_image']}" id="{$row['song_id']}">
        <i class="logo" style="background-image: url(content/uploads/{$row['song_image']});"></i>
        <b class="title">{$row['song_name']}</b>
        <i class="network">{$row['song_artist']}</i>
        <i class="genre">{$row['song_album']}</i>
      </a>
    {/foreach}
  {else}
  <div class="stations-item visible">
    No information loaded
  </div>
  {/if}
{/if}