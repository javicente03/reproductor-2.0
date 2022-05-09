{include file='_head_radio.tpl'}

  <div class="center">
    {include file='_menu.tpl'}
    <div class="right">
      <div class="search js_search"><i class="material-icons">search</i>
        <form id="search" data-url="data/search.php?do=search">
          <input type="text" name="search" placeholder="Find and listen to your favorate music..."/>
        </form>
      </div>
      <div class="account open-modal" data-open="modal1"><img class="avatar" src="http://s3-us-west-2.amazonaws.com/s.cdpn.io/350523/profile/profile-80.jpg?1"/></div>
      <div class="row">
        <h1>Featured Albums</h1>
        {if $playlist}
        <button class="play"><span>PLAY</span><i class="material-icons">play_arrow</i></button>
        {/if}
      </div>
      <div class="albums">
        <div class="music-player-container is-playing">
          <div class="music-player">
            <div class="player-content-container">
              <h1 class="artist-name"></h1>
              <h2 class="album-title"></h2>
              <h3 class="song-title"></h3>
              <div class="music-player-controls">
                <div class="control-back"></div>
                <div class="control-play" data-status="0"></div>
                <div class="control-forwards"></div>
              </div>
            </div>
          </div>
          <div class="album">
            <div class="album-art"></div>
            <div class="vinyl"></div>
          </div>
        </div>
      </div>
      <div class="split">
        <div class="daily-mix"> 
          <h1>Daily Mix</h1>

          {include file='_playlist.tpl'}    
        </div>

        
        <div id="mp3_player">        
          <canvas id="analyzer_render"></canvas>
          <div id="audio_box"></div>
          <input type="range" max="100" value="0" disabled class="range-audio">
        </div>
      </div>
    </div>
  </div>

{if $config['wallpaper'] != "" && $config['type_wallpaper'] == 'video'}
  </div>
  </section>
{/if}

{include file='modal_login.tpl'}
{include file='modal_signup.tpl'}

<script>
  var arraySong = new Array();

  {foreach $playlist as $row}
      arraySong.push({$row['song_id']})
  {/foreach}
  
</script>


{include file='_footer_radio.tpl'}