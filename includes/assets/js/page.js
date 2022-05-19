// SHOW SETTINGS
    $("#show_settings").click(function(){
        $("#settings").addClass('show');
    })

    $("#close_settings").click(function(){
        $("#settings").removeClass('show');
    })

    $("#show_list").click(function(){
        $("#list").addClass('show');
    })

    $("#close_list").click(function(){
        $("#list").removeClass('show');
    })

    $("#show_playlist").click(function(){
        $("#station-playlist").addClass('show');
    })

    $("#close_playlist").click(function(){
        $("#station-playlist").removeClass('show');
    })
    

    $('body').on('click', '.optcover', function (e) {

        switch($(this).val()){
            case 'rotate':
                if($('html').hasClass('_set-cover-square')) $('html').removeClass('_set-cover-square')
                if($('html').hasClass('_set-cover-static')) $('html').removeClass('_set-cover-static')
                $('html').addClass('_set-cover-rotate')
                break;

            case 'static':
                if($('html').hasClass('_set-cover-square')) $('html').removeClass('_set-cover-square')
                if($('html').hasClass('_set-cover-rotate')) $('html').removeClass('_set-cover-rotate')
                $('html').addClass('_set-cover-static')
                break;

            case 'square':
                if($('html').hasClass('_set-cover-rotate')) $('html').removeClass('_set-cover-rotate')
                if($('html').hasClass('_set-cover-static')) $('html').removeClass('_set-cover-static')
                $('html').addClass('_set-cover-square')
                break;
        }
    });


    $('body').on('click', '.optbackground', function (e) {

        switch($(this).val()){
            case 'cover':
                if($('html').hasClass('_set-background-default')) $('html').removeClass('_set-background-default')
                if($('html').hasClass('_set-background-black')) $('html').removeClass('_set-background-black')
                $('html').addClass('_set-background-cover')
                break;

            case 'black':
                if($('html').hasClass('_set-background-default')) $('html').removeClass('_set-background-default')
                if($('html').hasClass('_set-background-cover')) $('html').removeClass('_set-background-cover')
                $('html').addClass('_set-background-black')
                break;

            case 'default':
                if($('html').hasClass('_set-background-black')) $('html').removeClass('_set-background-black')
                if($('html').hasClass('_set-background-cover')) $('html').removeClass('_set-background-cover')
                $('html').addClass('_set-background-default')
                break;
        }
    });

    $("#check-blure").change(function(){
        if($(this).prop('checked')){
            $('html').removeClass('_set-blure-0');
            $('html').addClass('_set-blure-1');
        }
        else{
            $('html').removeClass('_set-blure-1');
            $('html').addClass('_set-blure-0');
        }
    })

    $("#check-spectrum").change(function(){
        if($(this).prop('checked')){
            $('html').removeClass('_set-spectrum-0');
            $('html').addClass('_set-spectrum-1');
        }
        else{
            $('html').removeClass('_set-spectrum-1');
            $('html').addClass('_set-spectrum-0');
        }
    })

// FULLSCREEN

    $('body').on('click', '#fullscreen', function (e) {
        e.preventDefault();
        let element = document.documentElement;

        if ($(this).hasClass('active')) {
            document.querySelector('#fullscreen i').innerHTML = 'fullscreen_exit';
            if (document.cancelFullScreen) document.cancelFullScreen();
            else if (document.mozCancelFullScreen) document.mozCancelFullScreen();
            else if (document.webkitCancelFullScreen) document.webkitCancelFullScreen();
        } else {
            document.querySelector('#fullscreen i').innerHTML = 'fullscreen_exit';
            if (element.requestFullScreen) element.requestFullScreen();
            else if (element.mozRequestFullScreen) element.mozRequestFullScreen();
            else if (element.webkitRequestFullScreen) element.webkitRequestFullScreen();
        }

        // return false;
    });


// SETTINGS

function getSettings() {

    let settings = localStorage.getItem('settings');
    if (settings && settings.length > 10) {
        SETTINGS = JSON.parse(settings);
    } else {
        SETTINGS['cover'] = 'rotate';
        SETTINGS['find_cover'] = '1';
        SETTINGS['background'] = 'cover';
        SETTINGS['remember_bitrate'] = '0';
        SETTINGS['try_stream'] = '0';
        SETTINGS['volume'] = 80;
        localStorage.setItem('settings', JSON.stringify(SETTINGS));
    }

    $body.find('#settings input').each(function () {
        let set = false;
        let name = $(this).attr('name');
        let type = $(this).attr('type');
        let value = $(this).val();
        let setting = SETTINGS[name];

        if (type == 'radio' && value == setting) set = setting;
        if (type == 'checkbox' && setting == '1') set = '1';
        if (type == 'checkbox' && setting == '0') set = '0';

        if (set) {
            if (set != '0') $(this).attr('checked', 'checked');
            $('html').addClass('_set-' + name + '-' + set);
        }


    });


    setVolume(SETTINGS['volume']);


    setTimeout(function () {
        $('#message #alerts').detach();
    }, 10000);
}



/* resize
    ----------------------------------------------------------------------- */


    $(window).on('resize', function () {
        discResize();
        if ($('html').hasClass('_set-spectrum-1')) spectrumResize();
        if (window.screen.height == window.innerHeight) $('#fullscreen').addClass('active');
        else $('#fullscreen').removeClass('active');
    });


    /* spectrum CANVAS
    ----------------------------------------------------------------------- */

        let topSegments = [], spectrumHeight = 266, segmentsMargin = 4, segmentsHeight = 5;

        audio.crossOrigin = "anonymous";

        let spectrumWidth = $('#spectrum').width();

        audioContext = new (window.AudioContext || window.webkitAudioContext)();
        let audioSource = audioContext.createMediaElementSource(audio);
        let analyser = audioContext.createAnalyser();

        analyser.fftSize = 2048;
        analyser.smoothingTimeConstant = 0.6;

        audioSource.connect(analyser);
        audioSource.connect(audioContext.destination);

        let frequencyData = new Uint8Array(64);
        let spectrumCols = frequencyData.length;

        let canvas = document.getElementById("canvas_spectrum");
        canvas.width = spectrumWidth;
        canvas.height = spectrumHeight;
        let ctx = canvas.getContext("2d");

        for (i = 0; i < spectrumCols; i++) {
            topSegments[i] = spectrumHeight;
        }


        //animate
        function spectrumAnimate() {
            requestAnimationFrame(spectrumAnimate);

            if (!$('html').hasClass('_set-spectrum-1')) return true;

            analyser.getByteFrequencyData(frequencyData);

            ctx.clearRect(0, 0, spectrumWidth, spectrumHeight);

            $(frequencyData).each(function (i, data) {
                // ctx.fillRect((i * (spectrumWidth / spectrumCols)), spectrumHeight - data, (spectrumWidth / spectrumCols - segmentsMargin), (data));
                ctx.fillStyle = "#265a88";
                for (l = 0; l < data / (segmentsHeight + segmentsMargin / 2); l++) {
                    ctx.fillRect((i * (spectrumWidth / spectrumCols)), spectrumHeight - l * (segmentsHeight + segmentsMargin / 2), (spectrumWidth / spectrumCols - segmentsMargin), segmentsHeight);
                }


                ctx.fillStyle = "#74bbff";
                //top
                if (data > 0 && (spectrumHeight - data - 10) < topSegments[i]) topSegments[i] = spectrumHeight - data - 10;
                else topSegments[i] += 1;
                if (topSegments[i] > spectrumHeight) topSegments[i] = spectrumHeight;
                ctx.fillRect((i * (spectrumWidth / spectrumCols)), topSegments[i], (spectrumWidth / spectrumCols - segmentsMargin), 2);

            });


        }


        function spectrumResize() {
            if (!$('html').hasClass('_set-spectrum-1')) return true;
            spectrumWidth = $('#spectrum').width();
            canvas.width = spectrumWidth;
        }

        spectrumAnimate();


// RESIZE DISC
  function discResize() {

    let size = 400;

    let $wrap = $('#player .wrapper');

    let dw = $wrap.width();
    let bottom = 50;

    if ($('html').hasClass('_set-cover-square')) bottom = 120;
    if (window.innerHeight < 480 && window.innerWidth < 800) bottom = 0;


    let dh = $wrap.height() - bottom;

    if (dw < dh) size = dw;
    else size = dh;
    $('#disc').width(size).height(size);
  }


// SHOW VOLUME

$('body').on('click', '#show_volume', function(){
  if($("#volume").hasClass('show'))
    $("#volume").removeClass('show')
  else
    $("#volume").addClass('show')
})