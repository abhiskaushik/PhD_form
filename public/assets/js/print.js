$(document).ready(function(){
	$('.print').click(function(e){
		// e.preventDefault();
		var regNo = $(this).attr('data-reg');
		window.location = 'http://localhost:8000/print/' + regNo;
	}); 
 });