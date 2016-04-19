$(document).ready(function(){
	$('#preview1').click(function(e){		
		var data = {};
		
		data.name = $('#name').val();
		data.email = $('#email').val();
		data.appl_categ = $('.applicationCateg option:selected').text();
		data.department1 = $('#department1 option:selected').text();
		data.department2 = $('#department2 option:selected').text();
		data.department3 = $('#department3 option:selected').text();
		data.email = $('#email').val();
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
		data.ug_class = $('#ug_class option:selected').text();
		data.ug_name_of_inst = $('#ug_name_of_inst').val();
		data.ug_name_of_uni = $('#ug_name_of_uni').val();
		data.ug_yop = $('#ug_yop').val();
		data.pg_deg = $('#pg_deg').val();
		data.pg_branch = $('#pg_branch').val();
		data.pg_gpa = $('#pg_gpa').val();
		data.pg_class = $('#pg_class option:selected').text();
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

		if($('#announced').is(':checked')){
			data.exam = $('#exam option:selected').text();
			data.score = $('#score').val();
			data.rank = $('#rank').val();
			data.validity = $('#validity').val();
			data.discipline = $('#discipline').val();
		}
		else{
			data.exam ='';
			data.score ='';
			data.rank ='';
			data.validity ='';
			data.discipline ='';
		}

		console.log(data);
		
		var div = '<div class="modal-content">\
        <h4>Candidate"s Form</h4>\
        <p><b>Registration Number:</b> '+data.reg_number+'</p>\
        <p><b>Date of Registration:</b> '+data.date+'</p>\
      </div>\
        <p><b>Application Category:</b> '+data.appl_categ+'</p>\
        <p><b>Department 1:</b> '+data.department1+'</p>\
        <p><b>Department 2:</b> '+data.department2+'</p>\
        <p><b>Department 3:</b> '+data.department3+'</p>\
        <p><b>Email:</b> '+data.email+'</p>\
        <p><b>Area of Research:</b> '+data.area_of_research+'</p>\
        <p><b>Name of Candidate:</b> '+data.name+'</p>\
        <p><b>Email Id:</b> '+data.email+'</p>\
        <p><b>Father"s Name:</b> '+data.father_name+'</p>\
        <p><b>Date of Birth:</b> '+data.dob+'</p>\
        <p><b>Category:</b> '+data.category+'</p>\
        <p><b>Sex:</b> '+data.sex+'</p>\
        <p><b>Marital Status: '+data.marital_status+'</b></p>\
        <p><b>Physically Handicapped:</b> '+data.ph+'</p>\
        <p><b>Nationality:</b> '+data.nationality+'</p>\
        <p><b>Address for Communication:</b> '+data.addr_for_commn+'</p>\
        <p><b>Permanent Address:</b> '+data.permanent_addr+'</p>\
        <p><b>Mobile Number:</b> '+data.mobile+'</p>\
        <p><b>Landline Number:</b> '+data.landline+'</p>\
        <p><b>Undergraduate Degree:</b> '+data.ug_deg+'</p>\
        <p><b>Undergraduate Branch:</b> '+data.ug_branch+'</p>\
        <p><b>Undergraduate G.P.A:</b> '+data.ug_gpa+'</p>\
        <p><b>Undergraduate Class:</b> '+data.ug_class+'</p>\
        <p><b>Undergraduate Name of Institution:</b> '+data.ug_name_of_inst+'</p>\
        <p><b>Undergraduate Name of University:</b> '+data.ug_name_of_uni+'</p>\
        <p><b>Undergraduate Year of Passing:</b> '+data.ug_yop+'</p>\
        <p><b>Post-Graduate Degree:</b> '+data.pg_deg+'</p>\
        <p><b>Post-Graduate Branch:</b> '+data.pg_branch+'</p>\
        <p><b>Post-Graduate G.P.A:</b> '+data.pg_gpa+'</p>\
        <p><b>Post-Graduate Class:</b> '+data.pg_class+'</p>\
        <p><b>Post-Graduate Name of Institution:</b> '+data.pg_name_of_inst+'</p>\
        <p><b>Post-Graduate Name of University:</b> '+data.pg_name_of_uni+'</p>\
        <p><b>Post-Graduate Year of Passing:</b> '+data.pg_yop+'</p>\
        <p><b>Exam:</b> '+data.exam+'</p>\
        <p><b>Score:</b> '+data.score+'</p>\
        <p><b>Rank:</b> '+data.rank+'</p>\
        <p><b>Validity:</b> '+data.validity+'</p>\
        <p><b>Discipline:</b> '+data.discipline+'</p>\
        <p><b>Title of Project:</b> '+data.title_of_project+'</p>\
        <p><b>Details of Publication 1:</b> '+data.details_of_pub1+'</p>\
        <p><b>Details of Publication 2:</b> '+data.details_of_pub2+'</p>\
        <p><b>Details of Publication 3:</b> '+data.details_of_pub3+'</p>\
        <p><b>Awards 1:</b> '+data.awards1+'</p>\
        <p><b>Awards 2:</b> '+data.awards2+'</p>\
        <p><b>Awards 3:</b> '+data.awards3+'</p>\
        <p><b>Employer Details 1:</b> '+data.employer_details_1+'</p>\
        <p><b>Postition 1:</b> '+data.emp_pos_1+'</p>\
        <p><b>From 1:</b> '+data.emp_from_1+'</p>\
        <p><b>To 1:</b> '+data.emp_to_1+'</p>\
        <p><b>Employer Details 2:</b> '+data.employer_details_2+'</p>\
        <p><b>Postition 2:</b> '+data.emp_pos_2+'</p>\
        <p><b>From 2:</b> '+data.emp_from_2+'</p>\
        <p><b>To 2:</b> '+data.emp_to_2+'</p>\
        <p><b>Employer Details 3:</b> '+data.employer_details_3+'</p>\
        <p><b>Postition 3:</b> '+data.emp_pos_3+'</p>\
        <p><b>From 3:</b> '+data.emp_from_3+'</p>\
        <p><b>To 3:</b> '+data.emp_to_3+'</p>\
      <div class="modal-footer">\
      </div>\
      </div>';
      

      $('#preview').append(div);
      $('#preview').openModal();
	}); 

	$('#preview2').click(function(e){		$.ajaxSetup(
	    {
	        headers:
	        {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });
		var data = {};
		data.name = $('#name').val();
		data.email = $('#email').val();
		data.appl_categ = $('#appl_categ').val();
		data.department1 = $('#department1').val();
		data.department2 = $('#department2').val();
		data.department3 = $('#department3').val();
		data.email = $('#email').val();
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
		data.ug_class = $('#ug_class').val();
		data.ug_name_of_inst = $('#ug_name_of_inst').val();
		data.ug_name_of_uni = $('#ug_name_of_uni').val();
		data.ug_yop = $('#ug_yop').val();
		data.pg_deg = $('#pg_deg').val();
		data.pg_branch = $('#pg_branch').val();
		data.pg_gpa = $('#pg_gpa').val();
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
		console.log(data);
		
		
		var baseurl = 'http://localhost:8000';
		var url = '/save2phd';
		$.ajax(
	    {
	        type: "POST",
	        url: baseurl + url,
	        data: data,
	        dataType: "json",
	        success: function(data){
	        	console.log('happy');
	        	alert("Saved!");
	        },
	        error: function(jqXHR,testStatus,errorThrown){
	        	console.log(errorThrown);
	        }
		});
	}); 
 });