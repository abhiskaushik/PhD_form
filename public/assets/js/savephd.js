$(document).ready(function(){
	
	$('#save2').click(function(e){		$.ajaxSetup(
	    {
	        headers:
	        {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });
		var data = {};
		data.chalanNo = $('#chalanNo').val();
		data.name = $('#name').val();
		data.email = $('#email').val();
		data.appl_categ = $('.applCheck .select-wrapper input').val();
			data.department1 = $('#department1').attr('data-reg');		
			data.department2 = $('#department2').attr('data-reg');		
			data.department3 = $('#department3').attr('data-reg');
		
			data.category = $('.categCheck .select-wrapper input').val();			
		
		
		data.ph = $('.pdCheck .select-wrapper input').val();
		data.marital_status = $('.statusCheck .select-wrapper input').val();
		 data.sex = $('.sexCheck .select-wrapper input').val();
		data.area_of_research = $('#area_of_research').val();
		data.father_name = $('#father_name').val();
		data.dob = $('#dob').val();
		data.nationality = $('#nationality').val();
		data.addr_for_commn = $('#addr_for_commn').val();
		data.permanent_addr = $('#permanent_addr').val();
		data.mobile = $('#mobile').val();
		data.landline = $('#landline').val();
		data.ug_deg = $('#ug_deg').val();
		data.ug_branch = $('#ug_branch').val();
		data.ug_gpa = $('#ug_gpa').val();
		data.ug_class = $('.ugclassCheck .select-wrapper input').val();
		data.ug_name_of_inst = $('#ug_name_of_inst').val();
		data.ug_name_of_uni = $('#ug_name_of_uni').val();
		data.ug_yop = $('#ug_yop').val();
		data.pg_deg = $('#pg_deg').val();
		data.pg_branch = $('#pg_branch').val();
		data.pg_gpa = $('#pg_gpa').val();
		data.pg_class = $('.pgclassCheck .select-wrapper input').val();
		data.pg_name_of_inst = $('#pg_name_of_inst').val();
		data.pg_name_of_uni = $('#pg_name_of_uni').val();
		data.pg_yop = $('#pg_yop').val();
		data.title_of_project = $('#title_of_project').val();
		data.details_of_pub1 = $('#details_of_pub1').val();
		data.details_of_pub2 = $('#details_of_pub2').val();
		data.details_of_pub3 = $('#details_of_pub3').val();
		data.awards1 = $('#awards1').val();
		data.awards2 = $('#awards2').val();
		data.awards3 = $('#awards3').val();
		data.employer_details_1 = $('#employer_details_1').val();
		data.employer_details_2 = $('#employer_details_2').val();
		data.employer_details_3 = $('#employer_details_3').val();
		data.emp_pos_1 = $('#emp_pos_1').val();
		data.emp_pos_2 = $('#emp_pos_2').val();
		data.emp_pos_3 = $('#emp_pos_3').val();
		data.emp_from_1 = $('#emp_from_1').val();
		data.emp_from_2 = $('#emp_from_2').val();
		data.emp_from_3 = $('#emp_from_3').val();
		data.emp_to_1 = $('#emp_to_1').val();
		data.emp_to_2 = $('#emp_to_2').val();
		data.emp_to_3 = $('#emp_to_3').val();
		data.date = $('#date').val();
		// console.log('hey');
		// console.log(data);
		
		
		var baseurl = 'http://localhost:8000';//localhost:8000
		var url = '/save2phd';
		$.ajax(
	    {
	        type: "POST",
	        url: baseurl + url,
	        data: data,
	        dataType: "json",
	        success: function(data){
	        	// console.log('happy');
	        	alert("Saved!");
	        },
	        error: function(jqXHR,testStatus,errorThrown){
	        	console.log(errorThrown);
	        }
		});
	}); 
 });