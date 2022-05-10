$(function () {

	$("#search").submit(function(e){
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
                			<img src="${site_path}/content/uploads/${e.song_image}"/>
                			<div>${e.song_name}</div>
						    <div>${e.song_album}</div>
						    <div>${e.song_artist}</div>
						    <div class="duration">${e.song_duration}</div>`;
						let node = document.createElement('div');
						node.id = e.song_id;
						node.className = "song js_play";
						node.innerHTML = node_content;
						document.getElementById("playlist").appendChild(node);
						$("#playlist").find('#'+node.id).data('song', e.song_rut);
						$("#playlist").find('#'+node.id).data('title', e.song_name);
						$("#playlist").find('#'+node.id).data('album', e.song_album);
						$("#playlist").find('#'+node.id).data('artist', e.song_artist);
						$("#playlist").find('#'+node.id).data('image', e.song_image);
						$("#playlist").find('#'+node.id).data('duration', e.song_duration_second);
                	})
                }
            },
            error: function(error){
                console.log("error")
            }
        });
	})

	$('#search').on('keyup', 'input', function(e){
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
                			<img src="${site_path}/content/uploads/${e.song_image}"/>
                			<div>${e.song_name}</div>
						    <div>${e.song_album}</div>
						    <div>${e.song_artist}</div>
						    <div class="duration">${e.song_duration}</div>`;
						let node = document.createElement('div');
						node.id = e.song_id;
						node.className = "song js_play";
						node.innerHTML = node_content;
						document.getElementById("playlist").appendChild(node);
						$("#playlist").find('#'+node.id).data('song', e.song_rut);
						$("#playlist").find('#'+node.id).data('title', e.song_name);
						$("#playlist").find('#'+node.id).data('album', e.song_album);
						$("#playlist").find('#'+node.id).data('artist', e.song_artist);
						$("#playlist").find('#'+node.id).data('image', e.song_image);
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