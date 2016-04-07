$(document).ready(function(){
	$('.discard').click(function(e){
		var regNo = $(this).attr('data-reg');
		$.ajaxSetup(
	    {
	        headers:
	        {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });
		var data = {};
		data.regNo = regNo;
		var baseurl = 'http://localhost:8000';
		var url = '/delete';
		$.ajax(
	    {
	        type: "POST",
	        url: baseurl + url,
	        data: data,
	        dataType: "json",
	        success: function(data){
	        	console.log("helo");
	        	$('.'+regNo).hide('slow');
	        	location.reload();
	        },
	        error: function(jqXHR,testStatus,errorThrown){
	        	console.log(errorThrown);
	        }
		});
	}); 

	$('.accept').click(function(e){
		var regNo = $(this).attr('data-reg');
		$.ajaxSetup(
	    {
	        headers:
	        {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });
		var data = {};
		data.regNo = regNo;
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
	        	// $('.'+regNo).hide('slow');
	        	location.reload();
	        },
	        error: function(jqXHR,testStatus,errorThrown){
	        	console.log(errorThrown);
	        }
		});
	});
 });