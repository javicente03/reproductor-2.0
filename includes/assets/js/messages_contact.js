
$(function(){

	$('body').on('click', '.js_button-send', function(){
		var container = $(this).parents('.right');
		let error = container.find('.error-panel');
        let success = (container.find('.success-panel'))?container.find('.success-panel'):undefined;
        let url = $(this).data('url');

		$.ajax({
            url: site_path+'/includes/ajax/'+url,
            data: {id:$(this).data('id')},
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
	})
})