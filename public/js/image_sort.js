$(document).ready(function() {
	var id_gallery = $('input[name=id_gallery]').val();
	var saved = true;
	
	$('#gallery_sortable').sortable({
		sort: function(){
			$('#msg_save').hide();
			$('#btn_save').fadeIn(500);	
			saved = false;			
		}
	});
	
	$('#btn_save').click(function(e){
	
		var images = [];
		
		$('#gallery_sortable li').each(function(){
			images.push($(this).attr('id_image'));
		});
		
		$.post('/ajax/galsort', {id_gallery: id_gallery, images: images},
				function(data){
					$('#btn_save').hide();
					$('#msg_save').fadeIn(500);	
					saved = true;
				});		
	});
	
	$('a').click(function(e){
		if(!saved && !confirm('Ничего не сохранено, хочешь уйти?'))
			e.preventDefault();
	});
});
