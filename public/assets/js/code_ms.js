$(document).ready(function(){

	$('.applicationCateg').change(function()
	{
		var p=$('.applicationCateg option:selected').text();
		console.log(p);
		if(p=='Part Time'){
			
			$('.upload_container').append('<div class="spon"><input type="file" name="form1" /></div>');

		}
		
		else{
			if($('.upload_container').has('.spon'))
				$('.spon').remove();
			
		}
	});

});