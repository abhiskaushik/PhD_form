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
				text = text.toLowerCase();
				console.log("text is-"+text);
				(text.indexOf(searchVal) >= 0) ? $(this).show("slow") : $(this).hide("slow");
			});

		}
	});
});

// function addNew(){
// 	$('.multi').append("<div class='col l12 s12 dept'>hj<select><option>helo</option></select></div>");
// 	var x="<div class='input-field col l12 s12 dept'> <select class='validate' name='department' required> <option value=' disabled selected>Choose your Department</option> <option value='ARC'>Architecture</option> <option value='CHEM'>Chemical</option> <option value='CIV'>Civil Engineering </option> <option value='EEE'>Electrical & Electronics Engineering</option> <option value='ECE'>Electronics & Communication Engineering</option> <option value='HM'>Humanities</option> <option value='MNG'>Management Studies</option> <option value='MATH'>Mathematics</option> </select></div>";
// }
