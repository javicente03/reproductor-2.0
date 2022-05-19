  // Inicializo mi indice y mi songNowId, uno es el puntero que me indica la posición en el arreglo, el otro el valor de la canción actual
  var songNowId = 0;
  var indice = 0;
  var go =false;

  var audio = new Audio();
  audio.controls = true;
  audio.autoplay = false;
  audio.id = "audioMusic";
  document.getElementById('audio_box').appendChild(audio);
  var volume = document.querySelector('.range-volume');


    // Detecto si el audio fue puesto en play
    audio.addEventListener("play", function(){
      document.querySelector(".control-play i").innerHTML = "pause"
      $('body').addClass('_title _playing');
    })
    // Detecto si el audio fue puesto en pausa
    audio.addEventListener("pause", function(){
      document.querySelector(".control-play i").innerHTML = "play_arrow"
      $('body').removeClass('_title _playing');
    })
    //Detecto cuando una canción finaliza 
    audio.addEventListener("ended", function(){
      $('body').addClass('paused')
      nextSong();
    });

// Evento para iniciar una nueva canción seleccionada
$('body').on('click', '.js_play', function () {
  // Necesario para navegadores como Chrome para inicializar el AudioContext
  audioContext.resume().then(() => {
    console.log('Playback resumed successfully');
  });
  if(!go)
    go = true;


  $("#station").css('display', 'block') 

  // Obtengo de donde proviene el click
  songNowId = parseInt(this.id);
  // Obtengo el indice en el array
  indice = arraySong.indexOf(songNowId);

  audio.src = site_path + "/content/uploads/" + $(this).data('song');
  $("#bg-disc").css('background-image', 'url(content/uploads/'+$(this).data("image"));
  $(document.querySelector('#bg .logo')).css('background-image', 'url(content/uploads/'+$(this).data("image"));
  document.querySelector(".info .artist").innerHTML = $(this).data('artist');
  document.querySelector(".info .album").innerHTML = $(this).data('album');
  document.querySelector(".info .title").innerHTML = $(this).data('title');
  $("#info-time").html($(this).data('time'));
  $(document.querySelector('.info .logo')).css('background-image', 'url(content/uploads/'+$(this).data("image"));
  
  document.querySelector('#track .station').innerHTML = $(this).data('artist'); 
  $('body').addClass('_title _playing')
  document.querySelector('#track .title').innerHTML = $(this).data('title');


  audio.play();
  // if ($('html').hasClass('_set-spectrum-1')) audioContext.resume();

  if($('body').hasClass('paused')) $('body').removeClass('paused')
  document.querySelector(".control-play i").innerHTML = "pause"
});

// Evento para pausar y reproducir
$('body').on('click', '.control-play', function(){
    if(go){
      if(!audio.paused){
    
          audio.pause();
          document.querySelector(".control-play i").innerHTML = "play_arrow"
          $('body').addClass('paused')
          // pauseVinylAnimate();
        } else {
    
          audio.play()
          if($('body').hasClass('paused')) $('body').removeClass('paused')
          document.querySelector(".control-play i").innerHTML = "pause";
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


// Maneja el volumen de la canción
volume.addEventListener("change", function(){
  audio.volume = volume.value;
  $("#span-volume").html((volume.value*100))
  if(volume.value == 0)
    $("#i-volume").html('volume_mute')
  else if(volume.value < 0.6)
    $("#i-volume").html('volume_down')
  else if(volume.value > 0.6)
    $("#i-volume").html('volume_up')
})