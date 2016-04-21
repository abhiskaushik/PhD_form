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


function ajaxCall(x,y){
	$.ajaxSetup(
	    {
	        headers:
	        {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });
		var data = {};
		data.applNo = x;
		var baseurl = 'http://localhost:8000';
		var url = '/'+y;
		$.ajax(
	    {
	        type: "POST",
	        url: baseurl + url,
	        data: data,
	        dataType: "json",
	        success: function(data){
	        	console.log("helo");
	        	location.reload();
	        },
	        error: function(jqXHR,testStatus,errorThrown){
	        	console.log(errorThrown);
	        }
		});
}
