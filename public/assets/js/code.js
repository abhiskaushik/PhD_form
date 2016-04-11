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
	$('#ra1').click(function()
	{
		if($('#ra1').is(':checked')){
		
		$('.ug_cgpa').val('');
		$('.ug_cgpa').prop('disabled',true);
		}
		else{
			$('.ug_cgpa').prop('disabled',false);	
		}
	});
	$('#ra2').click(function()
	{
		if($('#ra2').is(':checked')){
		$('.pg_cgpa').val('');
		$('.pg_cgpa').prop('disabled',true);
		}
		else{
			$('.pg_cgpa').prop('disabled',false);	
		}
	});
	$('#ra3').click(function()
	{
		if($('#ra3').is(':checked')){
		$('.eight').val('');
		$('.eight').prop('disabled',true);
		}
		else{
			$('.eight').prop('disabled',false);	
		}
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
