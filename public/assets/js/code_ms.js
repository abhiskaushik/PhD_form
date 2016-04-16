$(document).ready(function(){

	$('.applicationCateg').change(function()
	{
		var p=$('.applicationCateg option:selected').text();
		console.log(p);
		if(p=='Part Time'){
			
			$('.upload_container').append('<div class="spon"><input type="file" name="form1" required required/></div>');

		}
		
		else{
			if($('.upload_container').has('.spon'))
				$('.spon').remove();
			
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

});