  // Inicializo mi indice y mi songNowId, uno es el puntero que me indica la posición en el arreglo, el otro el valor de la canción actual
  var songNowId = 0;
  var indice = 0;
  var go =false;

  var audio = new Audio();
  audio.controls = true;
  audio.autoplay = false;
  audio.id = "audioMusic";
  document.getElementById('audio_box').appendChild(audio);
  var range = document.querySelector('.range-audio');
  var volume = document.querySelector('.range-volume');

  var canvas, ctx, source, context, analyser, fbc_array, bars, bar_x, bar_width, bar_height;

      window.addEventListener("load", initMp3Player, false);

      function initMp3Player(){
        var AudioContext = window.AudioContext || window.webkitAudioContext;
        context = new AudioContext();
        analyser = context.createAnalyser();

        canvas = document.getElementById('analyzer_render');

        ctx = canvas.getContext('2d');

        source = context.createMediaElementSource(audio);
        source.connect(analyser);
        analyser.connect(context.destination);
        frameLooper();
      }

      function frameLooper(){
        window.requestAnimationFrame(frameLooper);

        fbc_array = new Uint8Array(analyser.frequencyBinCount);

        analyser.getByteFrequencyData(fbc_array);

        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.fillStyle = "#83F442";
        bars = 100;

        for(var i = 0; i < bars; i++){
          bar_x = i * 3;
          bar_width = 2;
          bar_height = -(fbc_array[i] / 2);
          ctx.fillRect(bar_x, canvas.height, bar_width, bar_height);
        }
      }

    // Detecto si el audio fue puesto en play
    audio.addEventListener("play", function(){
      document.querySelector("div.control-play").style.background = "transparent url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/83141/pause.svg) center/cover no-repeat"
      pauseVinylAnimate(true);
    })
    // Detecto si el audio fue puesto en pausa
    audio.addEventListener("pause", function(){
      document.querySelector("div.control-play").style.background = "transparent url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/83141/play.svg) center/cover no-repeat"
      pauseVinylAnimate();
    })
    //Detecto cuando una canción finaliza 
    audio.addEventListener("ended", function(){
      nextSong();
    });

// Evento para iniciar una nueva canción seleccionada
$('body').on('click', '.js_play', function () {
  // Necesario para navegadores como Chrome para inicializar el AudioContext
  context.resume().then(() => {
    console.log('Playback resumed successfully');
  });
  if(!go)
    go = true;
  // Obtengo de donde proviene el click
  songNowId = parseInt(this.id);
  // Obtengo el indice en el array
  indice = arraySong.indexOf(songNowId);

  audio.src = site_path + "/content/uploads/" + $(this).data('song');
  document.querySelector("h1.artist-name").innerHTML = $(this).data('artist')
  document.querySelector("h2.album-title").innerHTML = $(this).data('album')
  document.querySelector("h3.song-title").innerHTML = $(this).data('title')
  document.querySelector("div.album-art").style.background = "#fff url(content/uploads/"+$(this).data('image')+") center/cover no-repeat"
  audio.play();
  
  range.disabled = false;

  document.querySelector("div.control-play").style.background = "transparent url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/83141/pause.svg) center/cover no-repeat"
  pauseVinylAnimate(true);
});

// Evento para pausar y reproducir
$('body').on('click', '.control-play', function(){
    if(go){
      if(!audio.paused){
    
          audio.pause();
          this.style.background = "transparent url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/83141/play.svg) center/cover no-repeat"
          pauseVinylAnimate();
        } else {
    
          audio.play()
          this.style.background = "transparent url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/83141/pause.svg) center/cover no-repeat"
          pauseVinylAnimate(true);
        }
      }
})

// Evento para regresar una canción
$('body').on('click', '.control-back', function(){
  if(go)
    prevSong();
})

// Evento para avanzar una canción
$('body').on('click', '.control-forwards', function(){
  if(go)
    nextSong();
})

// Evento para iniciar la playlist
$('body').on('click', 'button.play', function(){
  $("#"+arraySong[0]).click()
})

// Función +1
function nextSong(){
  // Solo continúa si la canción reproduciendose no es la ultima del array
  if(indice < arraySong.length-1){
    indice = (indice + 1);
    songNowId = arraySong[indice];
    $("#"+songNowId).click();
  }
}

// Función -1
function prevSong(){
  // Solo continúa si la canción reproduciendose no es la primera del array
  if(indice > 0){
    indice = (indice - 1);
    songNowId = arraySong[indice];
    $("#"+songNowId).click();
  }
}

// Maneja la linea de tiempo de la canción
range.addEventListener("change", function(){
  if(range.value < 0)
    audio.currentTime = 0
  else if(range.value >= audio.duration)
    audio.currentTime = audio.duration
  else
    audio.currentTime = range.value
})

audio.ontimeupdate = function(){
  range.max = audio.duration;
  range.value = audio.currentTime;
}


// Maneja el volumen de la canción
volume.addEventListener("change", function(){
  audio.volume = volume.value
})


function pauseVinylAnimate(arg=false){
  if(arg){
    let vinyl = document.querySelectorAll("div.vinyl");
    vinyl.forEach(function(e){
      e.className = "vinyl vinyl-animate";
    })
  } else {
    let vinyl = document.querySelectorAll("div.vinyl");
    vinyl.forEach(function(e){
      e.className = "vinyl";
    })
  }
}