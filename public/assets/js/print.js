$(document).ready(function(){
	$('.print').click(function(e){
		// e.preventDefault();
		var regNo = $(this).attr('data-reg');
		var dept = regNo.split('/');
		var categ = dept[0];
		var applNo = dept[dept.length-1];

		window.location = 'http://localhost:8000/print/' + categ + '/' + applNo;
		console.log("hey");
	}); 
 });