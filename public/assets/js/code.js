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
		if($('.exams').has('.add'))
			$('.add').remove();
		$('#nannounced').prop('checked',false);
		if($('#announced').is(':checked'))
			$('.exams').append('<div class="add"><div class="col l3 s6"> <span class="light">Examination:</span> <select class="exam_select" required name="exam"> <option value="" selected>Choose your Exam</option> <option value="GATE">GATE</option> <option value="NET">NET</option> <option value="SLET">SLET</option> <option value="CSIR">CSIR</option> <option value="CAT">CAT</option> <option value="UGC">UGC</option> </select> </div> <div class="col l3 s6"> <span class="light">Enter Score:</span> <input required placeholder="Enter Score" id="reg_number" type="number" class="validate" name="score" max="10000"> </div> <div class="col l3 s6"> <span class="light">Enter Rank:</span> <input required placeholder="Enter Rank" id="reg_number" type="number" class="validate" name="rank" max="10000"> </div> <div class="col l3 s6"> <span class="light">Valid Till:</span> <input id="valid" type="Number" class="validate" name="validity" max="2018" min="2010"> </div> <!-- disipline needs to be added--> <div class="col l12 s12"> <span class="light">Discipline:</span> <input type="text" class="validate" name="discipline" required / > </div> <div class="space-small"></div></div><script>$("select").material_select();</script>');
	});
	$('#nannounced').click(function()
	{
		$('#announced').prop('checked',false);
		$('.add').remove();
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
	$('.applicationCateg').change(function()
	{
		var p=$('.applicationCateg option:selected').text();
		console.log(p);
		if(p=='On Campus'){
			if($('.upload_container').has('.ext'))
				$('.ext').remove();
				// console.log($('.upload_container').has('.ext'));
			$('.upload_container').append('<div class="ext"><input type="file" name="form3" required/></div>');

		}
		else if(p=='External'){
			if($('.upload_container').has('.oc'))
				$('.oc').remove();
			// console.log($('.upload_container').has('.oc'));
			$('.upload_container').append('<div class="oc"><input type="file" name="form1" required/><br><input type="file" name="form2" required /></div>');
		}
		else{
			if($('.upload_container').has('.ext'))
				$('.ext').remove();
			if($('.upload_container').has('.oc'))
				$('.oc').remove();
			// console.log($('.upload_container').has('.ext'));
			// console.log($('.upload_container').has('.oc'));
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
