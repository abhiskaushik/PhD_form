$(document).ready(function() {
    
    $('#save2').click(function(e) {
        $.ajaxSetup({
            headers: {
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
        data.max1 = $('#max1').val();
        data.gpa1 = $('#gpa1').val();
        data.max2 = $('#max2').val();
        data.gpa2 = $('#gpa2').val();
        data.max3 = $('#max3').val();
        data.gpa3 = $('#gpa3').val();
        data.max4 = $('#max4').val();
        data.gpa4 = $('#gpa4').val();
        data.max5 = $('#max5').val();
        data.gpa5 = $('#gpa5').val();
        data.max6 = $('#max6').val();
        data.gpa6 = $('#gpa6').val();
        data.max7 = $('#max7').val();
        data.gpa7 = $('#gpa7').val();
        data.max8 = $('#max8').val();
        data.gpa8 = $('#gpa8').val();
        data.title_of_project = $('#title_of_project').val();
        data.details_of_pub1 = $('#details_of_pub1').val();
        data.details_of_pub2 = $('#details_of_pub2').val();
        data.details_of_pub3 = $('#details_of_pub3').val();
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

        if($('#announced').is(":checked")) {
            data.exam = $('#exam').val();
            data.rank = $('#rank').val();
            data.score = $('#score').val();
            data.validity = $('#validity').val();
            data.discipline = $('#discipline').val();
        }
        else {
            data.exam = '';
            data.rank = '';
            data.score = '';
            data.validity = '';
            data.discipline = '';
        }

        $.ajax({
            type: "POST",
            url: '/save2ms',
            data: data,
            dataType: "json",
            success: function(data){
                alert("Saved!");
            },
            error: function(jqXHR,testStatus,errorThrown){
                console.log(errorThrown);
            }
        });
    }); 
});