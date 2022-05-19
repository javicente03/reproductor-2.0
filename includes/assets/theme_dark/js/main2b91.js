//this code is beta version
let SITE = ' | HQ Radio';

let $html, $body, $styles, $genres, $networks, $stations, $similar, $new, $hot, $player, $station, $preload_track, $preload_station, $track, $search, $user, $spectrum, $list;

let URL, ROUTE = {}, AUDIO, VOLUME = 100, RELOAD = true, STATION = {}, TITLE, COVER, CACHE = {}, TITLE_INT, TRACK = {}, SHOW, IsPlay = false, CONFIG = {}, FAV = [], SETTINGS = {}, audioContext;

let style_name, genre_name, network_name;

let hls;

$(window).on('load', function () {
    $(function () {
        $('body').removeClass('_init');
    });
});

/*
----------------------------------------------------------------------- */

$(function () {

    $body = $('body');
    $html = $('html');
    $styles = $body.find('#styles');
    $genres = $body.find('#genres');
    $networks = $body.find('#networks');
    $stations = $body.find('#stations');
    $similar = $body.find('#similar .ajax');
    $new = $body.find('#new');
    $hot = $body.find('#hot');
    $player = $body.find('#player');
    $station = $body.find('#station .info');
    $preload_track = $body.find('#preload_track');
    $preload_station = $body.find('#preload_station');
    $track = $body.find('#track');
    $search = $body.find('#search');
    $user = $('#user');
    $list = $('#list');


    let m = 'in' + 'fo' + '@' + 'hq' + 'radio' + '.' + 'ru';
    $body.find('#settings .mail').attr('href', 'mailto:' + m).text(m);

    // AUDIO = document.getElementById('audio');

    AUDIO = new Audio();
    // AUDIO.crossOrigin = "anonymous";


    // setInterval(clock, 1000);


    /* media info
----------------------------------------------------------------------- */

    if ('mediaSession' in navigator) {

        navigator.mediaSession.metadata = new MediaMetadata();

        navigator.mediaSession.setActionHandler('play', function () {
            $body.find('#play').click();
        });
        navigator.mediaSession.setActionHandler('pause', function () {
            stop();
        });
        navigator.mediaSession.setActionHandler('previoustrack', function () {
            $body.find('#prev').click();
        });
        navigator.mediaSession.setActionHandler('nexttrack', function () {
            $body.find('#next').click();
        });
    }


    /* load config json
    ----------------------------------------------------------------------- */
    // $body.addClass('_loading');

    // getSettings();

    // // $.getJSON('/config?ajax=json')
    // $.ajax({
    //     url: '/config?ajax=json',
    //     cache: false,
    //     dataType: 'json'
    // }).done(function (data) {
    //     CONFIG = data;

    //     parseJson(data, 'styles');
    //     parseJson(data, 'genres');
    //     parseJson(data, 'networks');
    //     parseJson(data, 'stations');

    //     $(data['new'].list).each(function (i, item) {
    //         $stations.find('.stations-item[data-id="' + item.id + '"]').clone().appendTo('#new .ajax').addClass('visible');
    //     });

    //     $(data['hot'].list).each(function (i, item) {
    //         $stations.find('.stations-item[data-id="' + item.id + '"]').clone().appendTo('#hot .ajax').addClass('visible');
    //     });


    //     $.ajax({
    //         url: '/user',
    //         cache: false,
    //         dataType: "html"
    //     }).done(function (data) {
    //         $user.find('.ajax').html(data);
    //         $body.removeClass('_loading');

    //         getFav();

    //     })


    // }).fail(function () {
    //     message('Config loading error', 'error');
    // });


    /* resize
    ----------------------------------------------------------------------- */


    $(window).on('resize', function () {
        discResize();
        if ($html.hasClass('_set-spectrum-1')) spectrumResize();
        if (window.screen.height == window.innerHeight) $('#fullscreen').addClass('active');
        else $('#fullscreen').removeClass('active');
    });


    /* spectrum
    ----------------------------------------------------------------------- */
    if ($html.hasClass('_set-spectrum-1')) {

        let topSegments = [], spectrumHeight = 266, segmentsMargin = 4, segmentsHeight = 5;

        AUDIO.crossOrigin = "anonymous";

        $spectrum = $('#spectrum');
        let spectrumWidth = $spectrum.width();

        audioContext = new (window.AudioContext || window.webkitAudioContext)();
        let audioSource = audioContext.createMediaElementSource(AUDIO);
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

            if (!$html.hasClass('_set-spectrum-1')) return true;

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
            if (!$html.hasClass('_set-spectrum-1')) return true;
            spectrumWidth = $spectrum.width();
            canvas.width = spectrumWidth;
        }

        spectrumAnimate();
    }


    /* fullscreen
----------------------------------------------------------------------- */

    $body.on('click', '#fullscreen', function (e) {
        e.preventDefault();
        let element = document.documentElement;

        if ($(this).hasClass('active')) {
            if (document.cancelFullScreen) document.cancelFullScreen();
            else if (document.mozCancelFullScreen) document.mozCancelFullScreen();
            else if (document.webkitCancelFullScreen) document.webkitCancelFullScreen();
        } else {
            if (element.requestFullScreen) element.requestFullScreen();
            else if (element.mozRequestFullScreen) element.mozRequestFullScreen();
            else if (element.webkitRequestFullScreen) element.webkitRequestFullScreen();
        }

        // return false;
    });


    /* favorites
    ----------------------------------------------------------------------- */

    $body.on('click', '#fav', function (e) {
        e.preventDefault();

        if ($('#user_status').hasClass('logged')) {


            let id = $(this).attr('data-id');
            let pos = FAV.indexOf(id);

            if (pos >= 0) {
                $(this).removeClass('is_fav add');
                delete FAV[pos];
            } else {
                $(this).addClass('is_fav add');
                FAV.push(id);
            }

            let neFav = [];
            FAV.forEach(function (val) {
                if (val) neFav.push(val);
            });
            FAV = neFav;

            // localStorage.setItem('favorites', JSON.stringify(FAV));
            setFav();

            $.post('/user/favorites/save', {fav: JSON.stringify(FAV)}).done(function (data) {
                message(data, 'success');
            });
        } else {
            message('To save favorites, you must be logged in', 'error');
        }

    });


    /* ajax load
    ----------------------------------------------------------------------- */

    $body.on('click', 'a[target!="_blank"][ajax!="no"][href!=""][href!="#"]:not([href^="#"]):not(.__modal):not([data-show]):not([data-toggle]):not([href^="mailto:"]):not([href^="http"])', function (e) {
        e.preventDefault();
        let url = $(this).attr('href');

        if (url) {
            RELOAD = false;
            $body.removeClass('_reload');
            // $body.find('a').removeClass('active');
            // $(this).addClass('active');

            history.pushState("", "", url);
            router();
        }


        // return false;
    });

    $(window).on('popstate', function () {
        router();
    });

    /* user ajax load
    ----------------------------------------------------------------------- */
    $user.on('click', 'a[target!="_blank"][ajax!="no"][href!=""]', function (e) {
        e.preventDefault();

        let href = $(this).attr('href');

        if (href) {

            $body.addClass('_loading');
            $.ajax({
                url: href,
                cache: false,
                dataType: "html"
            }).done(function (data) {
                $user.find('.ajax').html(data);
                $body.removeClass('_loading');
            })
        }


        // return false;

    });

    /* user form ajax
    ----------------------------------------------------------------------- */
    $user.on('submit', 'form[ajax!="no"]', function (e) {

        e.preventDefault();
        $body.addClass('_loading');
        let $form = $(this);
        let action = $form.attr('action');
        let id = $form.attr('id');

        $form.find('input').attr('readonly', 'readonly');
        $form.find('input[type=submit]').attr('disabled', 'disabled');

        $.post(action, $form.serialize()).done(function (data) {
            console.log('user submit');
            $user.find('.ajax').html(data);
            // if (id == 'login_form') getFav();
        }).fail(function () {
            $form.html('<b>Что то пошло не так! Обновите страницу и повторите.</i>');
        }).always(function () {
            $body.removeClass('_loading');
            // RELOAD = true;
        });

    });

    /*
    ----------------------------------------------------------------------- */


    $body.on('click', '#station .style,#station .genre,#station .network', function () {
        $body.find('#show_list').click();
    });


    /* modal
    ----------------------------------------------------------------------- */
    $body.on('click', 'a[data-show]', function (e) {
        e.preventDefault();

        $body.addClass('_black');
        SHOW = $(this).attr('data-show');
        $body.find('a[data-show]').removeClass('active');
        $body.find('a[data-toggle]').removeClass('active');
        $body.find('.show').removeClass('show');
        $(this).addClass('active');

        let d_src = $body.find('#' + SHOW).find('[data-src]');
        if (!(d_src).attr('src')) $(d_src).attr('src', $(d_src).attr('data-src'));
        $body.find('#' + SHOW).addClass('show');
        // return false;
    });

    $body.on('click', 'a.close,#black', function (e) {
        e.preventDefault();
        $body.find('a[data-show]').removeClass('active');
        $body.find('.show').removeClass('show');
        $body.removeClass('_black');
        // return false;
    });


    $body.on('click', 'a[data-toggle]', function (e) {
        e.preventDefault();
        SHOW = $(this).attr('data-toggle');
        $(this).toggleClass('active');
        $body.find('#' + SHOW).toggleClass('show');
        // return false;
    });

    /* player controls
    ----------------------------------------------------------------------- */

    $body.on('click', '#play', function (e) {
        e.preventDefault();

        if ($body.hasClass('_play')) stop();
        else if ($body.hasClass('_player')) play(true);
        // return false;
    });

    $body.on('click', '#next', function () {
        if (!$body.hasClass('_media') && $body.hasClass('_player')) {
            // if ($body.hasClass('_fav')) {
            //     let next = $body.find('.stations-item.active').nextAll('.stations-item.is_fav:first');
            //     if (!next.hasClass('is_fav')) next = $body.find('.stations-item.is_fav:first');
            // } else {
            let next = $list.find('.stations-item.active').nextAll('.stations-item.visible:first');
            if (!next.hasClass('visible')) next = $list.find('.stations-item.visible:first');
            // }


            next.click();
        }
        // return false;
    });
    $body.on('click', '#prev', function () {
        if (!$body.hasClass('_media') && $body.hasClass('_player')) {
            // if ($body.hasClass('_fav')) {
            //     let prev = $body.find('.stations-item.active').prevAll('.stations-item.is_fav:first');
            //     if (!prev.hasClass('is_fav')) prev = $body.find('.stations-item.is_fav:last');
            // } else {
            let prev = $list.find('.stations-item.active').prevAll('.stations-item.visible:first');
            if (!prev.hasClass('visible')) prev = $list.find('.stations-item.visible:last');
            // }

            prev.click();
        }
        // return false;
    });
    /* hotkeys
    ----------------------------------------------------------------------- */


    $(window).on('keydown', function (e) {

        let key = e.keyCode;

        switch (key) {
            case 179:
                $body.find('#play').click();
                break;
            case 177:
                $body.find('#prev').click();
                break;
            case 176:
                $body.find('#next').click();
                break;
            case 178:
                stop();
                break;
            case 27:
                $body.find('#black').click();
                break;
        }
    });
    /* volume
    ----------------------------------------------------------------------- */

    $body.on('click', '#volume .mute', function (e) {
        e.preventDefault();
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            setVolume(VOLUME);
        } else {
            $body.find('#show_volume').css('background-image', 'url("/tpl/img/icons/mute.svg")');
            $(this).addClass('active').css('background-image', 'url("/tpl/img/icons/mute.svg")');
            AUDIO.volume = 0;
        }

        // return false;
    });

    $body.on('click', '#volume .area', function (e) {
        e.preventDefault();
        let position = e.offsetX;
        setVolume(position);
        // return false;
    });

    $body.on('mousedown touchstart', '#volume .slider', function (e) {
        let $slider = $(this);
        $slider.addClass('active');
        let begin = (e.changedTouches && e.changedTouches[0].pageX) ? e.changedTouches[0].pageX : e.pageX;
        let current = $(this).position().left;

        $body.on('mousemove touchmove', function (e) {
            if ($slider.hasClass('active')) {
                e.preventDefault();
                let mouse = (e.changedTouches && e.changedTouches[0].pageX) ? e.changedTouches[0].pageX : e.pageX;
                let position = current - (begin - mouse);
                if (position > 100) position = 100;
                if (position < 0) position = 0;
                setVolume(position);
                // return false;
            }

        });


    });

    $body.on('mouseup touchend', function () {
        $body.find('#volume .slider').removeClass('active');
    });


    // $body.on('click', '#logo', function () {
    //     $body.removeClass();
    // });

    /* find track
    ----------------------------------------------------------------------- */
    $body.on('click', '#track', function () {
        $(this).toggleClass('active');
    });
    /* search stations
    ----------------------------------------------------------------------- */
    $body.on('cut.textchange paste.textchange input.textchange textchange change', '#search', function () {

        let text = $search.val().toLowerCase();


        if (text.length > 2) {

            $body.removeClass('_fav');
            $body.addClass('_search');
            $styles.removeClass('visible');
            $genres.removeClass('visible');
            $networks.removeClass('visible');
            $new.removeClass('visible');
            $new.find('.stations-item').removeClass('visible');
            $hot.removeClass('visible');
            $hot.find('.stations-item').removeClass('visible');

            $stations.find('.fav').removeClass('visible');
            $stations.find('.stations-item').removeClass('visible');
            $stations.find('.stations-item[data-title*="' + text + '"]').addClass('visible');
            $stations.addClass('visible');


        } else {
            history.pushState("", "", '/');
            router();
            $body.removeClass('_search');
        }

    });


    /* settings
    ----------------------------------------------------------------------- */
    $body.on('change', '#settings input', function () {
        let settings_name = $(this).attr('name');

        $('html').removeClass();

        $('#settings input').each(function () {
            let set = false;
            let name = $(this).attr('name');
            let value = $(this).val();
            let type = $(this).attr('type');
            let checked = $(this).prop('checked');

            if (type == 'radio' && checked) set = value;
            if (type == 'checkbox' && checked) set = '1';
            if (type == 'checkbox' && !checked) set = '0';

            if (set) {
                $('html').addClass('_set-' + name + '-' + set);
                SETTINGS[name] = set;
            }

        });

        if (settings_name == 'find_cover') setTrackInfo(true);
        discResize();
        localStorage.setItem('settings', JSON.stringify(SETTINGS));
    });

    /* player events
    ----------------------------------------------------------------------- */

    $(AUDIO).on('playing', function () {
        $body.addClass('_playing').removeClass('_media');
        getTrackInfo();
    });


    $(AUDIO).on('pause', function () {
        stop();
    });


    $(AUDIO).on('error', function () {
        if (IsPlay) {
            stop();
            message('Station is offline', 'cry');
            console.log(AUDIO.error);
        }

    })
});


/*
----------------------------------------------------------------------- */
function router() {
    URL = document.location.pathname.split("/");

    ROUTE.module = URL[1];
    ROUTE.id = URL[2];
    ROUTE.params = URL[3];


    $body.removeClass('_mod_home _mod_styles _mod_genres _mod_stations _mod_networks _mod_favorites');


    // $body.find('#fav').removeClass('add');
    $body.find('#volume').removeClass('show');

    if (!ROUTE.module) ROUTE.module = 'home';
    $body.addClass('_mod_' + ROUTE.module);


    if (ROUTE.module != 'stations' && ROUTE.module != 'home') {
        $search.val('');
        // $search.val('').change();

        // $body.removeClass('_fav');
    }


    switch (ROUTE.module) {



        /*
        ----------------------------------------------------------------------- */

        case 'favorites':
            if (!$('#user_status').hasClass('logged')) {
                message('To show favorites, you must be logged in', 'error');

                if (RELOAD) {
                    history.pushState("", "", '/');
                    router();
                }

            } else {

                if ($body.hasClass('_fav') && !RELOAD) {
                    history.pushState("", "", '/');
                    router();
                    $body.removeClass('_fav');
                    SETTINGS['fav_mode'] = '';
                    localStorage.setItem('settings', JSON.stringify(SETTINGS));
                } else {
                    $body.addClass('_fav');
                    SETTINGS['fav_mode'] = 'fav';
                    localStorage.setItem('settings', JSON.stringify(SETTINGS));

                    $stations.find('.stations-item:not(.is_fav)').removeClass('visible');
                    $stations.find('.stations-item.is_fav').addClass('visible');
                    $stations.find('.fav').addClass('visible');
                    $stations.addClass('visible');

                    $styles.removeClass('visible');
                    $genres.removeClass('visible');

                    $networks.removeClass('visible');

                    $new.removeClass('visible');
                    $new.find('.stations-item').removeClass('visible');
                    $hot.removeClass('visible');
                    $hot.find('.stations-item').removeClass('visible');

                }


            }

            break;

        /*
        ----------------------------------------------------------------------- */


        case 'styles':
            $body.removeClass('_fav');


            let $style = $styles.find('.styles-item[data-name="' + ROUTE.id + '"]');
            document.title = $style.text() + SITE;

            $styles.find('.styles-item').removeClass('visible');
            $style.addClass('visible active');
            $styles.find('.all').addClass('visible');
            $styles.addClass('visible');


            $genres.find('.genres-item').removeClass('visible active');
            $genres.find('.genres-item[data-style_name="' + ROUTE.id + '"]').addClass('visible');
            $genres.find('.all').removeClass('visible');
            $genres.addClass('visible');

            $networks.removeClass('visible active');

            $stations.find('.stations-item').removeClass('visible');
            $stations.find('.stations-item[data-style_name="' + ROUTE.id + '"]').addClass('visible');
            $stations.find('.fav').removeClass('visible');
            $stations.addClass('visible');

            $new.removeClass('visible');
            $new.find('.stations-item').removeClass('visible');
            $hot.removeClass('visible');
            $hot.find('.stations-item').removeClass('visible');

            break;

        /*
        ----------------------------------------------------------------------- */

        case 'genres':
            $body.removeClass('_fav');


            let $genre = $genres.find('.genres-item[data-name="' + ROUTE.id + '"]');
            document.title = $genre.text() + SITE;
            style_name = $genre.attr('data-style_name');

            $styles.find('.styles-item').removeClass('visible');
            $styles.find('.styles-item[data-name="' + style_name + '"]').addClass('visible active');
            $styles.find('.all').addClass('visible');
            $styles.addClass('visible');

            $genres.find('.genres-item[data-style_name="' + style_name + '"]').addClass('visible').removeClass('active');
            $genre.addClass('visible active');
            $genres.find('.all').attr('href', '/styles/' + style_name).addClass('visible');
            $genres.addClass('visible');

            $networks.removeClass('visible active');

            $stations.find('.stations-item').removeClass('visible');
            $stations.find('.stations-item[data-genre_name="' + ROUTE.id + '"][data-style_name="' + style_name + '"]').addClass('visible');
            $stations.find('.fav').removeClass('visible');
            $stations.addClass('visible');

            $new.removeClass('visible');
            $new.find('.stations-item').removeClass('visible');
            $hot.removeClass('visible');
            $hot.find('.stations-item').removeClass('visible');
            break;

        /*
        ----------------------------------------------------------------------- */

        case 'networks':
            $body.removeClass('_fav');

            $styles.removeClass('visible active');
            $genres.removeClass('visible active');

            $networks.find('.networks-item').removeClass('visible active');
            let $network = $networks.find('.networks-item[data-name="' + ROUTE.id + '"]');
            $network.addClass('visible active');
            document.title = $network.text() + SITE;
            $networks.find('.all').addClass('visible');
            $networks.addClass('visible');

            $stations.find('.stations-item').removeClass('visible');
            $stations.find('.stations-item[data-network_name="' + ROUTE.id + '"]').addClass('visible');
            $stations.find('.fav').removeClass('visible');
            $stations.addClass('visible');

            $new.removeClass('visible');
            $new.find('.stations-item').removeClass('visible');
            $hot.removeClass('visible');
            $hot.find('.stations-item').removeClass('visible');
            break;

        /*
        ----------------------------------------------------------------------- */

        case 'stations':
            // stop();

            let currentStationId = $stations.find('.stations-item.active').attr('data-name');

            if (currentStationId == ROUTE.id) {
                play();
                return true;
            }

            $body.find('.stations-item').removeClass('active');

            let $station = $stations.find('.stations-item[data-name="' + ROUTE.id + '"]');
            $body.find('.stations-item[data-name="' + ROUTE.id + '"]').addClass('active');
            document.title = $station.find('.title').text() + SITE;

            style_name = $station.attr('data-style_name');
            genre_name = $station.attr('data-genre_name');
            network_name = $station.attr('data-network_name');

            // if (RELOAD) $stations.find('.stations-item').removeClass('visible');

            if ($body.hasClass('_fav')) {
                $stations.find('.stations-item.is_fav').addClass('visible');
                $stations.find('.fav').addClass('visible');
                $styles.removeClass('visible active');
                $genres.removeClass('visible active');
                $networks.removeClass('visible active');
                $new.removeClass('visible');
                $new.find('.stations-item').removeClass('visible');
                $hot.removeClass('visible');
                $hot.find('.stations-item').removeClass('visible');
            } else {

                if (RELOAD) {
                    $stations.find('.stations-item[data-style_name="' + style_name + '"]').addClass('visible');

                    $styles.find('.styles-item').removeClass('visible');
                    $styles.find('.styles-item[data-name="' + style_name + '"]').addClass('visible active');
                    $styles.find('.all').addClass('visible');
                    $styles.addClass('visible');

                    if (style_name) {
                        $genres.find('.genres-item').removeClass('visible');
                        $genres.find('.genres-item[data-style_name="' + style_name + '"]').addClass('visible');
                        $genres.find('.all').attr('href', '/styles/' + style_name);
                        $genres.addClass('visible');
                    }

                }


            }


            $stations.addClass('visible');


            $similar.empty();
            $stations.find('.stations-item[data-genre_name="' + genre_name + '"][data-name!="' + ROUTE.id + '"]').each(function () {
                $(this).clone().appendTo($similar).addClass('visible');
            });


            getStation();

            break;

        /*
        ----------------------------------------------------------------------- */

        case 'donate':

            let $donate = $body.find('#donate');
            let $iframe = $donate.find('[data-src]');

            $iframe.attr('src', $iframe.attr('data-src'));
            $donate.addClass('show');
            $body.addClass('_mod_donate');

        /*
        ----------------------------------------------------------------------- */

        default: //home
            $styles.find('.styles-item').addClass('visible').removeClass('active');
            $styles.find('.all').removeClass('visible');
            $styles.addClass('visible');

            $genres.removeClass('visible active');

            $networks.find('.networks-item').addClass('visible').removeClass('active');
            $networks.find('.all').removeClass('visible');
            $networks.addClass('visible');

            if ($('#user_status').hasClass('logged')) {
                $stations.find('.stations-item').removeClass('visible');
                $stations.find('.stations-item.is_fav').addClass('visible');
                $stations.find('.fav').addClass('visible');
                $stations.addClass('visible');
            } else {
                $stations.removeClass('visible');
            }

            $new.addClass('visible');
            $new.find('.stations-item').addClass('visible');
            $hot.addClass('visible');
            $hot.find('.stations-item').addClass('visible');


            // $search.val('').change();
            document.title = 'Music online' + SITE;
    }

    // refresh = false;

}

/*
----------------------------------------------------------------------- */


function parseJson(json, id) {
    let $ajax = $('#' + id + ' .ajax');
    $ajax.empty();

    if (json[id].list) {
        let ptrn = /{{([\w\.]+)}}/g;

        for (let item = 0; item < json[id].list.length; item++) {
            let tmpl = json[id].tpl;
            while ((res = ptrn.exec(json[id].tpl)) != null) {
                tmpl = tmpl.replace(res[0], json[id].list[item][res[1]]);
            }
            $ajax.append(tmpl);
        }
    }
}

/*
----------------------------------------------------------------------- */
function getStation() {


    $body.removeClass('_logo');

    if (CACHE[ROUTE.id]) {
        parseStation(CACHE[ROUTE.id]);
    } else {
        $body.addClass('_loading');

        $.ajax({
            url: '/stations/' + ROUTE.id + '?ajax=json',
            cache: false,
            dataType: 'json'
        }).done(function (data) {

            CACHE[ROUTE.id] = data;
            setTimeout(function () {
                parseStation(data);
            }, 250);

        }).fail(function () {
            message('Station loading error', 'error');
        });
    }


    function parseStation(data) {


        $body.addClass('_player');
        $body.removeClass('_loading');
        // console.log(data);

        STATION = data.view;
        // document.title=STATION.title+SITE;


        $body.find('#fav').attr('data-id', STATION.id).removeClass('is_fav');

        if (FAV.indexOf(STATION.id) >= 0) $body.find('#fav').addClass('is_fav');
        else $body.find('#fav').removeClass('is_fav');


        $player.find('.station').text(STATION.title + ' | ' + STATION.network);


        $station.find('.title').text(STATION.title);
        $station.find('.style').text(STATION.style).attr('href', '/styles/' + STATION.style_name);
        $station.find('.genre').text(STATION.genre).attr('href', '/genres/' + STATION.genre_name);
        $station.find('.web').text(STATION.network).attr('href', STATION.web).css('background-image', 'url(/data/icons/' + STATION.network_name + '.png)');
        $station.find('.network').attr('href', '/networks/' + STATION.network_name);


        $preload_station.attr('src', '/data/covers/' + STATION.id + '.jpg?' + STATION.date_changed);
        $preload_station.on("load", function () {
            $station.find('.logo').css('background-image', 'url(/data/covers/' + STATION.id + '.jpg?' + STATION.date_changed + ')');
            $player.find('.logo').css('background-image', 'url(/data/covers/' + STATION.id + '.jpg?' + STATION.date_changed + ')');
            $body.find('#bg .logo').css('background-image', 'url(/data/covers/' + STATION.id + '.jpg?' + STATION.date_changed + ')');
            setTimeout(function () {
                $body.addClass('_logo');
            }, 500)
        });


        $station.find('.streams').empty();
        $.each(STATION.streams, function (id, stream) {
            $station.find('.streams').append('<a class="stream" ajax="no">' + stream.bitrate + stream.codec + '</a>');
        });

        stop();

        if ('mediaSession' in navigator) {
            navigator.mediaSession.metadata.artist = STATION.title + ' / ' + STATION.network;
            navigator.mediaSession.metadata.title = '';
            navigator.mediaSession.metadata.album = 'HQ Radio';
            navigator.mediaSession.metadata.artwork = [{src: 'http://hqradio.ru/data/covers/' + STATION.id + '.jpg?' + STATION.date_changed, sizes: '512x512', type: 'image/jpeg'}];
        }

        // $body.find('#track .title, #disc .title').text('');
        // $body.find('#disc .cover, #bg .cover').css('background-image', 'url("")');

        setTimeout(function () {

            if (!RELOAD) play();
            else RELOAD = false;

        }, 250);

        $('#cp .edit').attr('href', '/cp/stations/edit/' + STATION.id + '/0/1').show();

        discResize();
    }

}

/*
----------------------------------------------------------------------- */
function play() {

    if ($html.hasClass('_set-spectrum-1')) audioContext.resume();

    $body.find('#volume').removeClass('show');
    TITLE = ' ';
    setTrackInfo();

    IsPlay = true;
    $track.removeClass('active');
    clearInterval(TITLE_INT);
    TITLE = '';
    COVER = '';
    TRACK.title = TITLE;
    TRACK.cover = COVER;


    $body.addClass('_play _media').removeClass('_playing _reload _cover _title');


    let stream = STATION.streams[1].url;

    console.log('stream: ' + stream);


    if (STATION.streams[1].codec == 'HLS') {

        if (Hls.isSupported()) {

            hls=  new Hls();
            hls.attachMedia(AUDIO);
            hls.on(Hls.Events.MEDIA_ATTACHED, function () {
                AUDIO.play();
                hls.loadSource(stream);
                hls.on(Hls.Events.MANIFEST_PARSED, function (event, data) {
                    console.log(data.levels);
                });
            });


        }

    } else {
        AUDIO.src = stream;
        AUDIO.play();
    }


    RELOAD = false;


    TITLE_INT = setInterval('getTrackInfo()', 15000);


}

/*
----------------------------------------------------------------------- */
function getTrackInfo() {
    TITLE = '';
    COVER = '';

    if (STATION.status_format == 'JSON-JS' || STATION.status_format == 'JSONP' || STATION.status_format == 'XML-JS' || STATION.status_force_server) getTrackInfoServer();
    else getTrackInfoStream();

}

/*
----------------------------------------------------------------------- */

function getTrackInfoStream() {
    $.ajax({
        url: 'https://api.hqradio.ru/title/stream/?u=' + encodeURIComponent(STATION.streams[1].url) + '&n=' + STATION.name + '&ajax=json',
        cache: false,
        dataType: "html"
    }).done(function (data) {
        if (data.length > 3) {
            TITLE = data;
            if (TITLE) setTrackInfo();
        } else if (STATION.status_url) {
            STATION.status_force_server = true;
            getTrackInfoServer();
        }

    })

}

/*
----------------------------------------------------------------------- */

function getTrackInfoServer() {
    let url = 'https://api.hqradio.ru/title/server/?u=' + encodeURIComponent(STATION.status_url) + '&n=' + STATION.name + '&ajax=json';

    if (STATION.status_format == 'JSON' || STATION.status_format == 'JSON-JS' || STATION.status_format == 'JSONP') {

        if (STATION.status_format == 'JSON-JS' || STATION.status_format == 'JSONP') url = STATION.status_url;

        let dataType = "json";
        if (STATION.status_format == 'JSONP') dataType = "jsonp";

        $.ajax({
            url: url,
            cache: false,
            dataType: dataType
        }).done(function (data) {

            let artist_var = STATION.status_title_vars.split('+')[0];
            let track_var = STATION.status_title_vars.split('+')[1];

            if (track_var) TITLE = eval('data.' + artist_var + ' + " - " + data.' + track_var);
            else if (STATION.status_title_vars.indexOf('[') == 0) TITLE = eval('data' + STATION.status_title_vars);
            else TITLE = eval('data.' + STATION.status_title_vars);

            if (STATION.status_cover_vars.indexOf('[') == 0) COVER = eval('data' + STATION.status_cover_vars);
            else if (STATION.status_cover_vars) COVER = eval('data.' + STATION.status_cover_vars);

            if (TITLE) setTrackInfo();

        })
    }
    /*
    ----------------------------------------------------------------------- */


    if (STATION.status_format == 'HTML') {
        $.ajax({
            url: url,
            cache: false,
            dataType: "html"
        }).done(function (data) {
            let ptrn = '/' + STATION.status_title_vars + '/i';
            let matches = eval('data.match(' + ptrn + ')');
            TITLE = matches[1];
            if (TITLE) setTrackInfo();
        })
    }

    /*
    ----------------------------------------------------------------------- */

    if (STATION.status_format == 'XML' || STATION.status_format == 'XML-JS') {

        if (STATION.status_format == 'XML-JS') url = STATION.status_url;

        $.ajax({
            url: url,
            cache: false,
            dataType: "xml"
        }).done(function (data) {

            let $xml = $(data);

            let artist_var = STATION.status_title_vars.split('+')[0];
            let track_var = STATION.status_title_vars.split('+')[1];

            if (track_var) TITLE = $xml.find(artist_var).text() + ' - ' + $xml.find(track_var).text();
            else TITLE = $xml.find(STATION.status_title_vars).text();
            if (STATION.status_cover_vars) COVER = $xml.find(STATION.status_cover_vars).text();

            if (TITLE) setTrackInfo();


        })
    }


}


/*
----------------------------------------------------------------------- */

function setTrackInfo(force) {

    if (!TITLE) TITLE = STATION.title;


    if (STATION.network_name == '101-ru') {
        let matches = TITLE.match(/{"t":"(.*)","tT":"/i);
        if (matches) TITLE = matches[1];
        TITLE = TITLE.replace(/ - 0:00/, '');
    }

    if (STATION.network_name == 'di-radio-com') TITLE = TITLE.replace(/\[(.+)\]/g, "");
    if (STATION.network_name == 'radiogothic-net') TITLE = TITLE.replace(/\(\d+\) /g, "");
    if (STATION.network_name == 'graalradio-com') TITLE = TITLE.replace(/\/Graal Radio Stream/, "");
    // if (STATION.network_name == '1-fm') TITLE = TITLE.replace(/\b\w/g, l => l.toUpperCase());


    if (TRACK.title != TITLE || force) {

        $body.addClass('_title').find('#track .title').text(TITLE);

        document.title = TITLE + ' | ' + STATION.title + SITE;

        // console.log('title: ' + TITLE);
        // console.log('cover: ' + COVER);

        TRACK.title = TITLE;
        TRACK.cover = COVER;
        $body.removeClass('_cover _track');


        if ('mediaSession' in navigator) {
            navigator.mediaSession.metadata.artist = STATION.title + ' / ' + STATION.network;
            navigator.mediaSession.metadata.title = TITLE;
            navigator.mediaSession.metadata.album = 'HQ Radio';
        }


        let $search_track = $track.find('.search');
        let search = encodeURIComponent(TITLE);

        $search_track.find('.vk').attr('href', 'https://vk.com/search?c[section]=audio&c[q]=' + search);
        $search_track.find('.sc').attr('href', 'https://soundcloud.com/search/sounds?q=' + search);
        $search_track.find('.bp').attr('href', 'https://www.beatport.com/search?q=' + search);
        $search_track.find('.jd').attr('href', 'https://www.junodownload.com/search/?q%5Ball%5D%5B%5D=' + search);
        $search_track.find('.dz').attr('href', 'https://www.deezer.com/search/' + search);
        // $search_track.find('.zk').attr('href', 'https://zvuk.com/search/?query=' + search);
        $search_track.find('.sf').attr('href', 'https://open.spotify.com/search/' + search);
        $search_track.find('.ym').attr('href', 'https://music.yandex.ru/search?text=' + search);
        $search_track.find('.yt').attr('href', 'https://www.youtube.com/results?search_query=' + search);
        // $search_track.find('.gg').attr('href', 'https://www.google.com/search?q=' + search);


        if (COVER && SETTINGS['find_cover'] == '1') {

            if ('mediaSession' in navigator) {
                navigator.mediaSession.metadata.artwork = [{src: COVER, sizes: '512x512', type: 'image/jpeg'}];
            }

            $preload_track.attr('src', COVER);
            $preload_track.on("load", function () {
                $body.find('#disc .cover, #bg .cover').css('background-image', 'url(' + COVER + ')');
                setTimeout(function () {
                    $body.addClass('_cover');
                }, 500)
            });
        } else {
            $body.removeClass('_cover');
            if ('mediaSession' in navigator) {
                navigator.mediaSession.metadata.artwork = [{src: 'http://hqradio.ru/data/covers/' + STATION.id + '.jpg?' + STATION.date_changed, sizes: '512x512', type: 'image/jpeg'}];
            }
        }


        if (TITLE.match(/-/)) {
            $.ajax({
                url: 'https://itunes.apple.com/search?media=music&entity=musicTrack&limit=1&term=' + encodeURIComponent(TITLE),
                cache: false,
                dataType: "jsonp"
            }).done(function (data) {
                // console.log('searchTrackItunes');
                // console.log(data);
                $search_track.find('.it').hide();

                if (data.resultCount > 0) {
                    let cover = data.results['0']['artworkUrl100'].replace('/100x100', '/1000x1000');
                    $search_track.find('.it').attr('href', data.results['0'].trackViewUrl).show();
                    // console.log(cover);
                    if (!COVER && cover) {
                        COVER = cover;
                        setTrackInfo(true);
                    }
                }

            })
        }


    }


}

/*
----------------------------------------------------------------------- */

function stop() {
    $body.find('#volume').removeClass('show');
    TITLE = ' ';
    setTrackInfo();

    // console.log('stop');
    $track.removeClass('active');
    clearInterval(TITLE_INT);
    IsPlay = false;

    $preload_track.attr('src', ' ');

    $body.removeClass('_play _playing _media _cover _title');
    if (STATION.title) document.title = STATION.title + SITE;
    AUDIO.pause();
    AUDIO.src = '';

    if(hls){
        hls.detachMedia();
        hls.destroy();
    }


}


/*
----------------------------------------------------------------------- */
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

/*
 ----------------------------------------------------------------------- */
function message(text, type) {
    $('#message').append('<div class="msg ' + type + ' icon-' + type + '">' + text + '</div>');
    setTimeout(function () {
        $('#message .msg:first').detach();
    }, 5000)
}

/*
----------------------------------------------------------------------- */
function setVolume(position) {
    VOLUME = position;

    let $volume = $('#volume');

    $volume.find('.value').text(Math.round(position));
    $volume.find('.slider').css('left', (position) + 'px');
    $volume.find('.volume').css('width', (position) + 'px');

    let volume = Math.round(position) / 100;
    AUDIO.volume = volume;

    let icon = '';
    if (position >= 80) icon = 'max';
    if (position >= 30 && position < 80) icon = 'mid';
    if (position > 0 && position < 30) icon = 'min';
    if (position == 0) icon = 'mute';
    $body.find('#show_volume').css('background-image', 'url("/tpl/img/icons/volume_' + icon + '.svg")');
    $volume.find('.mute').css('background-image', 'url("/tpl/img/icons/volume_' + icon + '.svg")');


    SETTINGS['volume'] = VOLUME;
    localStorage.setItem('settings', JSON.stringify(SETTINGS));

}

/*
----------------------------------------------------------------------- */

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

/*
----------------------------------------------------------------------- */

function getFav() {

    if ($('#user_status').hasClass('logged')) {
        $.ajax({
            url: '/user/favorites/get',
            cache: false,
            dataType: 'json'
        }).done(function (data) {
            // console.log(data);
            FAV = data;

            setFav();
            router();


        }).fail(function () {
            router();
        });
    } else {
        router();
    }


}

function setFav() {

    $body.find('.stations-item').removeClass('is_fav');
    FAV.forEach(function (val) {
        $body.find('.stations-item[data-id="' + val + '"]').addClass('is_fav');
    });

    URL = document.location.pathname.split("/");
    ROUTE.module = URL[1];


    // if (SETTINGS['fav_mode'] == 'fav' && (!ROUTE.module || ROUTE.module == "stations")) $body.addClass('_fav');

}

/*
----------------------------------------------------------------------- */
function clock() {

    let $clock = $body.find('#clock');

    let currentTime = new Date();
    let currentHours = currentTime.getHours();
    let currentMinutes = currentTime.getMinutes();
    currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;

    $clock.find('.s').toggleClass('d');
    $clock.find('.h').text(currentHours);
    $clock.find('.m').text(currentMinutes);
}

/*
----------------------------------------------------------------------- */


