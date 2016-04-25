$(document).ready(function(){
	$('.print').click(function(e){
		// e.preventDefault();
		var regNo = $(this).attr('data-reg');
		var dept = regNo.split('/');
		var categ = dept[0];
		var applNo = dept[dept.length-1];
		window.location = 'http://admission.nitt.edu/print/' + categ + '/' + applNo;
	}); 
	$('.admit').click(function(e){
		// e.preventDefault();
		var regNo = $(this).attr('data-reg');
		var dept = regNo.split('/');
		var categ = dept[0];
		var applNo = dept[dept.length-1];
		window.location = 'http://admission.nitt.edu/admit/' + categ + '/' + applNo;
	}); 
 });