{include file='_head_radio.tpl'}

  <div class="center">
    <div class="left">
      <div class="controls">
        <div class="close"></div>
        <div class="minimize"></div>
        <div class="maximize"></div>
      </div>
      <div class="menu">
        <div class="title">MENU</div>
          <div class="item"><i class="material-icons">layers</i><span>About</span></div>
          <div class="item"><i class="material-icons">radio</i><span>Playlist</span></div>
          <div class="item"><i class="material-icons">mic</i><span>Our team</span></div>
          <div class="item"><i class="material-icons">album</i><span>Contacts</span></div>
          <div class="item"><i class="material-icons">shop</i><span>Shop</span></div>
      </div>
      <div class="playlists">
        <div class="title">OTHERS</div>
          <div class="item"><i class="material-icons">radio</i><span>Radio</span></div>
          <div class="item"><i class="material-icons">list</i><span>Reggaeton</span></div>
          <div class="item"><i class="material-icons">chat</i><span>Chat</span></div>
      </div>
    </div>
    <div class="right">
      <div class="search"><i class="material-icons">search</i>
        <input placeholder="Find and listen to your favorate music..."/>
      </div>
      <div class="account"><i class="material-icons">notifications_none</i><img class="avatar" src="http://s3-us-west-2.amazonaws.com/s.cdpn.io/350523/profile/profile-80.jpg?1"/></div>
      <div class="row">
        <h1>Featured Albums</h1>
        <button class="play"><span>PLAY</span><i class="material-icons">play_arrow</i></button>
      </div>
      <div class="albums">
        <div class="music-player-container is-playing">
          <div class="music-player">
            <div class="player-content-container">
              <h1 class="artist-name">Incubus</h1>
              <h2 class="album-title">Make Yourself</h2>
              <h3 class="song-title">"Stellar"</h3>
              <div class="music-player-controls">
                <div class="control-back"></div>
                <div class="control-play"></div>
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
        </div>
      </div>
    </div>
  </div>

{include file='_footer_radio.tpl'}
<script>
  window.onload = function() {
      document.querySelector('div.center').style.display = "flex"
      document.querySelector('.loading').style.display = "none" 
  }
</script>