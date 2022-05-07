var api = [];


$(function () {

    // run ajax-forms sign/in/up
    function _submitAJAXform(element) {
        var url = element.data('url');
        var submit = element.find('button[type="submit"]');
        var error = element.find('.error-panel');
        /* show any collapsed section if any */
        if (element.find('.js_hidden-section').length > 0 && !element.find('.js_hidden-section').is(':visible')) {
            element.find('.js_hidden-section').slideDown();
            return false;
        }
        /* button loading */
        // button_status(submit, "loading");
        /* tinyMCE triggerSave if any */
        if (typeof tinyMCE !== "undefined") {
            tinyMCE.triggerSave();
        }
        /* get ajax response */
        /* Funcion que dispara registro de usuario*/
        var data = (element.hasClass('js_ajax-forms')) ? element.serialize() : element.find('select, textarea, input').serialize();

        //console.log(ajax_path + url)
        $.ajax({
            url: site_path+'/includes/ajax/'+url,
            data: data,
            type: 'POST',
            success: function(response){
                if(response.error){
                    error.html(response.message)
                    error.css('display', "block")
                    setTimeout(function(){
                        error.css('display', 'none')
                    }, 5000)
                } else if(response.callback){
                    eval(response.callback)
                }
            },
            error: function(error){
                console.log("error")
                console.log(error)
            }
        });
    }
    $('body').on('submit', '.js_ajax-forms', function (e) {
        e.preventDefault();
        _submitAJAXform($(this));
    });
    $('body').on('click', '.js_ajax-forms-html button[type="submit"]', function () {
        _submitAJAXform($(this).closest('.js_ajax-forms-html'));
    });



    // AJAX submit add music

    function sendAddMusic(element){
        var url = element.data('url');
        var submit = element.find('button[type="submit"]');
        let error = element.find('.error-panel');
        let success = element.find('.success-panel');
        let music = (element.data('audio')) ? element.data('audio') : '';
        let photo = (element.data('photo')) ? element.data('photo') : '';
        
        var data = new FormData();
        data.append('name', $("#name").val());
        data.append('album', $("#album").val()); 
        data.append('artist', $("#artist").val());
        data.append('music', JSON.stringify(music));
        data.append('photo', JSON.stringify(photo));
        data.append('duration', $("#duration").val());

        $.ajax({
            url: site_path+'/includes/ajax/'+url,
            data: data,
            type: 'POST',
            enctype: 'x-www-form-urlencoded',
            processData: false, // tell jQuery not to process the data
            contentType: false,
            success: function(response){
                if(response.error){
                    error.html(response.message)
                    error.css('display', "block")
                    setTimeout(function(){
                        error.css('display', 'none')
                    }, 5000)
                } else if(response.success){
                    element.removeData('audio')
                    element.removeData('photo')
                    $("#name").val("")
                    $("#album").val("")
                    $("#artist").val("")
                    $("#file_audio").val("")
                    $("#file_photo").val("")
                    $("#loading_audio").val(0)
                    $("#loading_photo").val(0)
                    success.html('Canción subida exitósamente')
                    success.css('display', "block")
                    setTimeout(function(){
                        success.css('display', 'none')
                    }, 5000)
                } else if(response.callback)
                    eval(response.callback)
            },
            error: function(error){
                console.log("error")
                console.log(error)
            }
        });
    }

    $('body').on('submit', '.js_ajax-music', function (e) {
        e.preventDefault();
        sendAddMusic($(this));
    });
    $('body').on('click', '.js_ajax-music-html button[type="submit"]', function () {
        sendAddMusic($(this).closest('.js_ajax-music-html'));
    });


// DELETE SONG
    $('body').on('click', '.delete-song', function(){
        option = "¿Seguro que desea elminarlo?"
        if(confirm(option)){
            var tab = $(this).parents('.right');
            let error = tab.find('.error-panel');
            $.ajax({
                url: site_path+'/includes/ajax/core/songs.php?do=delete',
                data: {id:$(this).data('song')},
                type: 'POST',
                enctype: 'x-www-form-urlencoded',
                success: function(response){
                    if(response.error){
                        error.html(response.message)
                        error.css('display', "block")
                        setTimeout(function(){
                            error.css('display', 'none')
                        }, 5000)
                    } else if(response.callback){
                        eval(response.callback)
                    }
                },
                error: function(error){
                    console.log(error)
                }
            });  
        }
    })

    // AJAX FORM

    function sendData(element) {
        var url = element.data('url');
        var submit = element.find('button[type="submit"]');
        var error = element.find('.error-panel');
        let upload = (element.data('photo')) ? element.data('photo') : '';
        
        if(upload=="")
            upload = (element.data('video')) ? element.data('video') : '';


        var data = new FormData();
        data.append('upload', JSON.stringify(upload));


        //console.log(ajax_path + url)
        $.ajax({
            url: site_path+'/includes/ajax/'+url,
            data: data,
            type: 'POST',
            enctype: 'x-www-form-urlencoded',
            processData: false,
            contentType: false,
            success: function(response){
                if(response.error){
                    error.html(response.message)
                    error.css('display', "block")
                    setTimeout(function(){
                        error.css('display', 'none')
                    }, 5000)
                } else if(response.callback){
                    eval(response.callback)
                }
            },
            error: function(error){
                console.log("error")
            }
        });
    }    

    $('body').on('click', '.js_ajax-form-data button[type="submit"]', function () {
        sendData($(this).closest('.js_ajax-form-data'));
    }); 

});