$(function () {

	$("#search_form").submit(function(e){
		$("#playlist").children().remove();
        var url = $(this).data('url');
		e.preventDefault()
		$.ajax({
            url: site_path+'/includes/ajax/'+url,
            data: $(this).serialize(),
            type: 'POST',
            enctype: 'x-www-form-urlencoded',
            success: function(response){
                if(response.error){
                    alert(response.message)
                } else{
                	var result = JSON.parse(response)

                	result.forEach(function(e){
                		let node_content = `
						    <i class="logo" style="background-image: url(content/uploads/${e.song_image});"></i>
						    <b class="title">${e.song_name}</b>
						    <i class="network">${e.song_artist}</i>
						    <i class="genre">${e.song_album}</i>`;
						let node = document.createElement('div');
						node.id = e.song_id;
						node.className = "stations-item visible js_play";
						node.innerHTML = node_content;
						document.getElementById("playlist").appendChild(node);
						$("#playlist").find('#'+node.id).data('song', e.song_rut);
						$("#playlist").find('#'+node.id).data('title', e.song_name);
						$("#playlist").find('#'+node.id).data('album', e.song_album);
						$("#playlist").find('#'+node.id).data('artist', e.song_artist);
						$("#playlist").find('#'+node.id).data('image', e.song_image);
						$("#playlist").find('#'+node.id).data('time', e.song_duration);
						$("#playlist").find('#'+node.id).data('duration', e.song_duration_second);
                	})
                }
            },
            error: function(error){
                console.log("error")
            }
        });
	})

	$('#search_form').on('keyup', 'input', function(e){
    	if(this.value.length ==0){
			$("#playlist").children().remove();
	    	$.ajax({
            url: site_path+'/includes/ajax/data/search.php?do=all',
            data: $(this).serialize(),
            type: 'POST',
            enctype: 'x-www-form-urlencoded',
            success: function(response){
                if(response.error){
                    alert(response.message)
                } else{
                	var result = JSON.parse(response)
                	result.forEach(function(e){
                		let node_content = `
                			<i class="logo" style="background-image: url(content/uploads/${e.song_image});"></i>
						    <b class="title">${e.song_name}</b>
						    <i class="network">${e.song_artist}</i>
						    <i class="genre">${e.song_album}</i>`;
						let node = document.createElement('div');
						node.id = e.song_id;
						node.className = "stations-item visible js_play";
						node.innerHTML = node_content;
						document.getElementById("playlist").appendChild(node);
						$("#playlist").find('#'+node.id).data('song', e.song_rut);
						$("#playlist").find('#'+node.id).data('title', e.song_name);
						$("#playlist").find('#'+node.id).data('album', e.song_album);
						$("#playlist").find('#'+node.id).data('artist', e.song_artist);
						$("#playlist").find('#'+node.id).data('image', e.song_image);
						$("#playlist").find('#'+node.id).data('time', e.song_duration);
						$("#playlist").find('#'+node.id).data('duration', e.song_duration_second);
                	})
                }
            },
            error: function(error){
                console.log("error")
            }
        });
	    }
	})
})