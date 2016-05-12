$(document).ready(function(){
	$('.button').click(function(){
		var data = $('#regNo').val();
		var a = window.confirm("Are you sure?");
		if(!a){

		}
		else{
		$.ajaxSetup(
	    {
	        headers:
	        {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });
		
		
		var baseurl = 'http://localhost:8000';
		var url = '/'+'dmgctrl';
		$.ajax(
	    {
	        type: "POST",
	        url: baseurl + url,
	        data: data,
	        dataType: "json",
	        success: function(data){
	        	// console.log("helo");
	        	location.reload();
	        },
	        error: function(jqXHR,testStatus,errorThrown){
	        	console.log(errorThrown);
	        }
		});
		}
	});

});