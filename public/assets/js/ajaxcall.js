$(document).ready(function(){
	$('.discard').click(function(e){
		var applNo = $(this).attr('data-reg');
		ajaxCall(applNo, 'delete');
	}); 

	$('.accept').click(function(e){
		var applNo = $(this).attr('data-reg');
		ajaxCall(applNo, 'accept')
 });

});
