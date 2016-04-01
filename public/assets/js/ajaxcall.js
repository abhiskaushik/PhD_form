$(document).ready(function(){
	$('.ajax').click(function(e){
		// e.preventDefault();
		var regNo = $(this).attr('data-reg');
		$.ajaxSetup(
	    {
	        headers:
	        {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });
	    // console.log($('meta[name="csrf-token"]').attr('content'));
		var data = {};
		data.regNo = regNo;
		var baseurl = 'http://localhost:8000';
		var url = '/delete';
		$.ajax(
	    {
	        type: "POST",
	        url: baseurl + url,
	        data: data,
	        dataType: "json"
		});
	}); 
 });