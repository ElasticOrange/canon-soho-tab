$(document).ready(function() {

	$('.shareemail').click(function(){
        $('#modal-background').fadeIn(200,function(){
            $('.modal').css({'display':'block'}).animate({'top':'-150px'},200);
        });
        return false;
    });

	$('#boxclose').click(function(){
		$('.modal').animate({'top':'-900px'},500,function(){
            $('#modal-background').fadeOut('fast');
        });
	});

	$('[data-email=true]').click(ajax_email);

	function ajax_email(e)
	{
		var p;
		e.preventDefault();
		p = {
			myemail: $('[data-mymodal=true]').val(),
			hisemail: $('[data-hismodal=true]').val(),
			message: $('.msg-body').val(),
			};
		return $.ajax(
		{
			url: $('[data-modal=true]').attr('action'),
			type: $('[data-modal=true]').attr('method'),
			data: p,
			content: 'json',
			success: function(mail)
			{
				if(mail.status === 'OK')
				{
					console.log('OK');
				}
				else
				{
					console.log('Error');
				}
			}
		});
	};
});
