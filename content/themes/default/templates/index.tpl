{include file='_head_radio.tpl'}

{include file='_menu.tpl'}

    <section id="player">
        <div class="wrapper">
            <div id="audio_box"></div>

            <div id="disc">
                <div class="disc">
                    <b class="title"></b>
                    <i id="bg-disc" class="logo"  style="background-image: url(includes/assets/img/cover.jpg); opacity:1;"></i>
                    <i class="cover"></i>
                </div>

                <div id="controls">
                    <video id="video"></video>
                    <a ajax="no" id="play" class="control-play"><i class="material-icons">play_arrow</i></a>
                    <a ajax="no" id="next" class="control-forwards"><i class="material-icons">skip_next</i></a>
                    <a ajax="no" id="prev" class="control-back"><i class="material-icons">skip_previous</i></a>
                </div>
            </div>

            <div id="track">
                <i class="station"></i>
                <b class="title"></b>
            </div>


        </div> 
    </section>

    <section id="station">
        <noindex>
            <a class="close"></a>

            <div class="scroll">

                <div class="info">
                    <a id="fav" class="function icon-fav"></a>
                    <i class="logo"></i>
                    <b class="title"></b>
                    <hr>

                    <a class="artist" ></a>

                    <a class="album" ></a>

                    <div class="styles"><i class="material-icons">library_music</i><i>/</i><span id="info-time"></span></div>
                </div>
            </div>
        </noindex>
    </section>


    <section id="station-playlist">
        <noindex>
            <a class="close" id="close_playlist"><i class="material-icons">close</i></a>

            <div class="scroll">

                <section id="stations" class="item-menu">
                    <div class="ajax" id="playlist">
                    {include file="_playlist.tpl"}

                    </div>
                    <hr>
                </section>
            </div>
        </noindex>
    </section>

    <section id="settings">
        <noindex>
            <a class="close" id="close_settings"><i class="material-icons">close</i></a>
            <div class="scroll">
                <div class="section">
                    <b>Cover</b>
                    <label><input type="radio" class="optcover" name="cover" value="rotate" checked>Round rotate</label>
                    <label><input type="radio" class="optcover" name="cover" value="static">Round static</label>
                    <label><input type="radio" class="optcover" name="cover" value="square">Square</label>
                </div>

                <div class="section">
                    <b>Background</b>
                    <label><input type="radio" class="optbackground" name="background" value="cover" checked>Track cover</label>
                    <label><input type="radio" class="optbackground" name="background" value="default">Default</label>
                    <label><input type="radio" class="optbackground" name="background" value="black">Black</label>
                    <label><input type="checkbox" id="check-blure" name="blure" value="blure">Blure</label>
                </div>

                <div class="section">
                    <b>Effects</b>
                    <label><input type="checkbox" id="check-spectrum" name="spectrum" value="spectrum">Spectrum Analyzer</label>
                </div>

            </div>
        </noindex>
    </section>

    <div id="spectrum">
        <canvas id="canvas_spectrum" style="width:100%"></canvas>
    </div>

<section id="volume">
    <i id="i-volume" class="material-icons">volume_up</i>
    <input type="range" max="1" value="1" min="0" step="0.01" class="range-volume">
    <span id="span-volume">100</span>
</section>

<section id="functions">
    <a data-show="settings" id="show_settings" class="function"><i class="material-icons">settings</i></a>
    <a data-show="list" id="show_list" class="function"><i class="material-icons">list</i></a>
    <a data-toggle="volume" id="show_volume" class="function"><i class="material-icons">volume_up</i></a>
    
    {if $user->_logged_in}
    <a href="{$base_url}/dashboard" id="show_user" class="function open-modal account"><i class="material-icons">person</i></a>
    {else}
    <a data-open="modal1" id="show_user" class="function open-modal account"><i class="material-icons">person</i></a>
    {/if}

    <a id="show_playlist" class="function"><i class="material-icons">library_music</i></a>
    <a id="fullscreen" class="function"><i class="material-icons">fullscreen</i></a>
</section>

{include file='modal_login.tpl'}
{include file='modal_signup.tpl'}

</div>

<script>
  var arraySong = new Array();

  {foreach $playlist as $row}
      arraySong.push({$row['song_id']})
  {/foreach}
  
</script>
{include file='_footer_radio.tpl'}