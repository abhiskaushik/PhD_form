$(document).ready(function(){

	$('#agree').click(function()
	{
		$('#disagree').prop('checked',false);
	});
	$('#disagree').click(function()
	{
		$('#agree').prop('checked',false);
	});
	$('.exam').hide();
	$('#announced').click(function()
	{
		$('#nannounced').prop('checked',false);
		$('.exam').show('slow');
	});
	$('#nannounced').click(function()
	{
		$('#announced').prop('checked',false);
		$('.exam').hide('slow');
	});

	$('.applicationCateg').change(function()
	{
		var p=$('.applicationCateg option:selected').text();
		if(p=='Part Time'){
			$('.upload').removeClass('offset-l4');
			$('.part').show('slow');
			$('.full').hide();

		}
		else if(p=='Full Time'){
			$('.upload').removeClass('offset-l4');
			$('.full').show('slow');
			$('.part').hide();
		}
	});
	

	var x=$('.exam_select');
	x.change(function()
	{
		//if gate is selected then
		$('#valid').prop('required',true);
	});
	

	$('#search').keyup(function(){
		var searchVal = $(this).val().toLowerCase();
		console.log(searchVal);
		if(searchVal == ''){
			$('.candidates > div').show();
		}
		else{
			$('.candidates > div').each(function(){
				var text = $(this).attr('data-reg');
				text = text.toLowerCase();
				console.log("text is-"+text);
				(text.indexOf(searchVal) >= 0) ? $(this).show("slow") : $(this).hide("slow");
			});

		}
	});
});
