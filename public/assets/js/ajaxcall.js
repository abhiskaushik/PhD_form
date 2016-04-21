$(document).ready(function(){
	$('.discard').click(function(e){
		var applNo = $(this).attr('data-reg');
		$.ajaxSetup(
	    {
	        headers:
	        {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });
		var data = {};
		data.applNo = applNo;

		var baseurl = 'http://localhost:8000';
		var url = '/delete';
		$.ajax(
	    {
	        type: "POST",
	        url: baseurl + url,
	        data: data,
	        dataType: "json",
	        success: function(data){
	        	console.log(data);
	        	$('.'+applNo).hide('slow');
	        		location.reload();
	        },
	        error: function(jqXHR,testStatus,errorThrown){
	        	console.log(errorThrown);
	        }
		});
	}); 

	$('.accept').click(function(e){
		var applNo = $(this).attr('data-reg');
		$.ajaxSetup(
	    {
	        headers:
	        {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });
		var data = {};
		data.applNo = applNo;
		var baseurl = 'http://localhost:8000';
		var url = '/accept';
		$.ajax(
	    {
	        type: "POST",
	        url: baseurl + url,
	        data: data,
	        dataType: "json",
	        success: function(data){
	        	console.log("helo");
	        	// $('.'+applNo).hide('slow');
	        	location.reload();
	        },
	        error: function(jqXHR,testStatus,errorThrown){
	        	console.log(errorThrown);
	        }
		});
	});
 });