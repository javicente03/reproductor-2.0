// initialize API URLs
/* data */
ajax_path = site_path+"/includes/ajax/";
api['data/upload'] = ajax_path + "data/upload.php";


$(function (){

    // Retornar tiempo de la canción 
    function secondsToString(seconds) {
        var hour = Math.floor(seconds / 3600);
        hour = (hour < 10)? '0' + hour : hour;
        var minute = Math.floor((seconds / 60) % 60);
        minute = (minute < 10)? '0' + minute : minute;
        var second = seconds % 60;
        second = (second < 10)? '0' + second : second;
        return hour + ':' + minute + ':' + second;
    }

    // Obtener duracion de la cancion
    window.URL = window.URL || window.webkitURL;

        // Obtener duración de la canción
        function getDurationFile(inputfile) {
            var audio = Array();
            // var files = this.files;
            // audio.push(inputfile);
            var audio_node = document.createElement('audio');
            audio_node.preload = 'metadata';

            audio_node.onloadedmetadata = function() {
                window.URL.revokeObjectURL(audio_node.src);
                let duration = audio_node.duration;
                let timeDuration = secondsToString(duration);
                document.getElementById("duration").value = timeDuration
            }
            audio_node.src = URL.createObjectURL(inputfile);
        }




    /* initialize uploading */
    $('body').on('change', '.x-uploader input[type="file"]', function () {
        $(this).parent('.x-uploader').submit();
    });
    /* uploading */
    $('body').on('submit', '.x-uploader', function (e) {
        e.preventDefault();
        // get type
        var type = $(this).find('.js_x-uploader').data('type') || "photos";
        /* get handle */
        var handle = $(this).find('.js_x-uploader').data('handle');
        // get file
        let inputfile = $(this).find('input[type="file"]');
        inputfile = inputfile[0].files[0];
        getDurationFile(inputfile);

        // FormData
        var formData = new FormData();
        formData.append('file', inputfile);
        formData.append('type', type);
        formData.append('handle', handle);
        var songData = $(this).parents('.form-panel');
        let error = songData.find('.error-panel');

        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = (evt.loaded / evt.total) * 100;
                        document.getElementById("loading_"+type).value = percentComplete;
                    }
                }, false);
                return xhr;
            },
            url: api['data/upload'],
            data: formData,
            type: 'POST',
            enctype:'multipart/form-data',
            processData: false, // tell jQuery not to process the data
            contentType: false,
            success: function(response){
                if(response.error){
                    document.getElementById("loading_"+type).value = 0;
                    error.html(response.message)
                    error.css('display', "block")
                    setTimeout(function(){
                        error.css('display', 'none')
                    }, 5000)
                } else
                    songData.data(type, response.file)

            },
            error: function(error){
                console.log(error)
            }
        });

        // var options = {
        //     dataType: "json",
        //     uploadProgress: _handle_progress,
        //     success: _handle_success,
        //     error: _handle_error,
        //     resetForm: true
        // };
        // options['data'] = {};
        // /* get uploader input */
        // var uploader = $(this).find('input[type="file"]');
        // /* get type */
        // var type = $(this).find('.js_x-uploader').data('type') || "photos";
        // options['data']['type'] = type;
        // /* get handle */
        // var handle = $(this).find('.js_x-uploader').data('handle');
        // if (handle === undefined) {
        //     return false;
        // }
        // options['data']['handle'] = handle;
        // console.log(type)
        // console.log(handle)

        // function _handle_progress(e){
        //     console.log("AKSSKDDDCCC")
        //     console.log(handle)
        // }

        // function _handle_success(response){
        //     console.log("BBBBBBB")
        //     console.log(response)
        // }

        // function _handle_error(error){
        //     console.log("AAASS")
        //     console.log(error)
        // }
    })
})