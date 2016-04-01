$(document).ready(function(){
	$('#search').keyup(function(){
	var searchVal = $(this).val().toLowerCase();
	console.log(searchVal);
	if(searchVal == ''){
		$('.candidates > div').show();
	}
	else{
		$('.candidates > div').each(function(){
			var text = $(this).attr('data-reg');
			(text.indexOf(searchVal) == searchVal.indexOf(searchVal)) ? $(this).show("slow") : $(this).hide("slow");
		});

	}
});
});
