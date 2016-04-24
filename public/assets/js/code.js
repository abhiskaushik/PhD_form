$(document).ready(function(){
	$('.exam').hide();
	$('#agree').click(function()
	{
		$('#disagree').prop('checked',false);
	});
	$('#disagree').click(function()
	{
		$('#agree').prop('checked',false);
	});

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

	$('.discard1').click(function(){
		$('#discard').openModal();
	});

	var count =0;
	//validating via front end 
	$('.valid').click(function(){
		var data={};
		data.department1 = $('#department1 option:selected').val();
		data.department2 = $('#department2 option:selected').val();
		data.department3 = $('#department3 option:selected').val();
		data.category = $('#category option:selected').val();
		data.sex = $('#sex option:selected').val();
		data.ph = $('#ph option:selected').val();
		data.marital_status = $('#marital_status option:selected').val();
		data.name = $('#name').val();
		data.email = $('#email').val();
		data.area_of_research = $('#area_of_research').val();
		data.father_name = $('#father_name').val();
		data.dob = $('#dob').val();
		data.nationality = $('#nationality').val();
		data.addr_for_commn = $('#addr_for_commn').val();
		data.permanent_addr = $('#permanent_addr').val();
		data.mobile = $('#mobile').val();
		data.landline = $('#landline').val();
		data.age = $('#age').val();
		data.checker = $('.checker').val();
		console.log(data);
		// console.log($('#dob').val());
		count++;
		if(data.department1 == '' || data.department2 == '' || data.department3 == '' || data.marital_status == '' || data.sex == '' || data.category == '' || data.ph == ''){
			var error = "Please select all the dropdowns";
			if(count==1)
				$('#error .modal-content .error').append('<p>'+error+'</p>');
			$('#error').openModal();
			
			return false;
		}

		$.ajaxSetup(
	    {
	        headers:
	        {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });
		
		
		var baseurl = 'http://admission.nitt.edu/';
		var url = '/save' + data.checker;//route to the controller goes here
		$.ajax(
	    {
	        type: "POST",
	        url: baseurl + url,
	        data: data,
	        dataType: "json",
	        success: function(data){
	        	//append the regNo which we get from controller to modal
	        	console.log(data);
	        	if(data==0){
	        		$('#regNo .modal-content').append('<div class="regNo"></div>');
	        		var div = '<p>User already exists</p>';
	        	}
	        	else{
	        		var div = '<p>You Registration Number is: '+ data + '</p>\
	        				<a class="redirect teal darken-1 send-btn btn waves-effect waves-light" data-reg="'+data+'">Proceed</a>';
	        	}
	        	$('.regno').html("");
	        	$('.regno').append(div);
	        	$('#regNo').openModal();
	        },
	        error: function(jqXHR,testStatus,errorThrown){
	        	console.log(errorThrown);
	        }
		});
		// 
		// return true;
	});

	$('#regNo').on('click' , '.redirect' ,function()
	{
		var regNo = $(this).attr('data-reg');
		var dept = regNo.split('/');
		var categ = dept[0];
		var applNo = dept[dept.length-1];
		var checker = $('.checker').val();
		var dob = $('#dob').val();
		window.location = 'http://admission.nitt.edu//fetch/'+ checker + '/' + applNo + '/' + dob;
	});
	$('.redirect1').click(function()
	{
		var regNo = $('#regNo').val();
		var dept = regNo.split('/');
		var categ = dept[0];
		var applNo = dept[dept.length-1];
		var dob = $('#dob').val();
		console.log('hey'+dob);
		window.location = 'http://admission.nitt.edu//fetch/'+ categ + '/' + applNo + '/' + dob;
	});
	//validating front-end in form 3
	$('.valid1').click(function(){
		var data={};
		data.appl_categ = $('.applicationCateg option:selected').text();
		data.department1 = $('#department1 option:selected').text();
		data.department2 = $('#department2 option:selected').text();
		data.department3 = $('#department3 option:selected').text();
		data.category = $('#category option:selected').text();
		data.sex = $('#sex option:selected').text();
		data.ph = $('#ph option:selected').text();
		data.marital_status = $('#marital_status option:selected').text();
		data.checker = $('.checker').val();
		data.ug_class = $('#ug_class option:selected').text();
		if(data.checker == 'phd'){
		data.pg_class = $('#pg_class option:selected').text();
		if($('#announced').prop('checked',true)){
				data.exam = data.pg_class = $('#exam option:selected').text();
		}
		console.log(data);
		count++;
		if(data.appl_categ == '' || data.department1 == '' || data.department2 == '' || data.department3 == '' || data.marital_status == '' || data.sex == '' || data.category == '' || data.ph == '' || data.ug_class == '' || data.pg_class == ''){
			var error = "Please select all the dropdowns";
			if(count==1)
				$('#error .modal-content .error').append('<p>'+error+'</p>');
			$('#error').openModal();
			
			return false;
		}
		}
		else{
			console.log(data);
		count++;
		if(data.appl_categ == '' || data.department1 == '' || data.department2 == '' || data.department3 == '' || data.marital_status == '' || data.sex == '' || data.category == '' || data.ph == '' || data.ug_class == ''){
			var error = "Please select all the dropdowns";
			if(count==1)
				$('#error .modal-content .error').append('<p>'+error+'</p>');
			$('#error').openModal();
			
			return false;
		}	
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
			
			$('.upload_container').append('<div class="oc"><input type="file" name="form1" required/><br><input type="file" name="form2" required /></div>');
		}
		else{
			if($('.upload_container').has('.ext'))
				$('.ext').remove();
			if($('.upload_container').has('.oc'))
				$('.oc').remove();
			
		}
	});
	

	

	var x=$('.exam_select');
	x.change(function()
	{
		//if gate is selected then
		$('#valid').prop('required',true);
	});
	

	
});
