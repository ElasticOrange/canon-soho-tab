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
});
