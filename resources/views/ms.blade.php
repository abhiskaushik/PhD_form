<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta id="token" name="csrf-token" content="{{ csrf_token() }}">
	<title>Ph.d Registration Form</title>
	<link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/css/materialize.min.css')}}">
	<!-- <link rel="shortcut icon" href="{{URL::asset('assets/logo.jpg')}}"> --><!-- 
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
	<script src="{{URL::asset('assets/js/jquery-2.1.1.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/materialize.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/jquery-ui.js')}}"></script>
	<script src="{{URL::asset('assets/js/code_ms.js')}}"></script>
	<script src="{{URL::asset('assets/js/validate.js')}}"></script>
</head>
<body>

	<header></header>
	
	<nav>
    <div class="nav-wrapper ">
      
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="hide-on-med-and-down">
        <li><a href="/home">Home</a></li>
        <li><a href="/ms">M.S Admissions</a></li>
        <li><a href="/login">Admin</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
       <li><a href="/home">Home</a></li>
        <li><a href="/ms">Ms Admissions</a></li>
        <li><a href="/login">Admin</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
    </div>
  </nav>

  <div class="space-medium"></div>	

  <div class="container">
  	<div class="row">
  		<h3>APPLICATION FOR ADMISSION TO M.S PROGRAMME (2016 - 2017)</h3>
		<div class="space-medium"></div>
		<div class="divider"></div><div class="divider"></div>
  	</div>
  	
  	{!! Form::open(array('url'=>'msvalidate','method'=>'POST', 'files'=>true )) !!}
  		
  		<div class="row">  					   
  			<p>Application Category</p>		    
		        
		      		
				    <div class="input-field col l6 s12">
		      		<select required name="appl_categ" class="applicationCateg">
				      <option value="" disabled selected>Choose your option</option>
				      <option value="Part Time">Part Time</option>
				      <option value="Full Time">Full Time</option>
				    </select>
		        </div>

				      <div class="col l6 s12">
		    <p>Upload Image</p>
		      	<div class="file-field input-field">
	          		<div class="btn teal darken-1 btn waves-effect waves-light">
	          			<span class="light">File</span>
	          			{!! Form::file('image_path' , array('class'=>'')) !!}			
	          		</div>
	          		<div class="file-path-wrapper">
        				<input class="file-path validate" type="text">
      				</div>
	          	</div>
		      </div>	

		        </div>

		        <div class="row dept">
		        <div class="input-field col l6 s6 ">

		      		<select name="department1" required>

		      			 <option value="" disabled selected>Department Preference 1</option>
		      			<option value="ARC">Architecture</option>
		      			<option value="CHEM">Chemical</option>
		      			<option value="CIV">Civil Engineering </option>
		      			<option value="EEE">Electrical & Electronics Engineering</option>
		      			<option value="ECE">Electronics & Communication Engineering</option>
		      			<option value="HM">Humanities</option>
		      			<option value="MNG">Management Studies</option>
		      			<option value="MATH">Mathematics</option>
		      		</select>
		      		
		        </div>
		        <div class="input-field col l6 s6 ">

		      		<select name="department2">

		      			 <option value="" disabled selected>Department Preference 2</option>
		      			<option value="ARC">Architecture</option>
		      			<option value="CHEM">Chemical</option>
		      			<option value="CIV">Civil Engineering </option>
		      			<option value="EEE">Electrical & Electronics Engineering</option>
		      			<option value="ECE">Electronics & Communication Engineering</option>
		      			<option value="HM">Humanities</option>
		      			<option value="MNG">Management Studies</option>
		      			<option value="MATH">Mathematics</option>
		      		</select>
		      		
		        </div>
		        <div class="input-field col l6 s6 ">

		      		<select name="department3">

		      			 <option value="" disabled selected>Department Preference 3</option>
		      			<option value="ARC">Architecture</option>
		      			<option value="CHEM">Chemical</option>
		      			<option value="CIV">Civil Engineering </option>
		      			<option value="EEE">Electrical & Electronics Engineering</option>
		      			<option value="ECE">Electronics & Communication Engineering</option>
		      			<option value="HM">Humanities</option>
		      			<option value="MNG">Management Studies</option>
		      			<option value="MATH">Mathematics</option>
		      		</select>
		      		
		        </div>
		        
		        
		        <div class="input-field col s6 l6">
		        	          <input id="email" name="email" type="email" data-error=".error1">
		        	          <label for="email">Email</label>
		        	          <div class="error1"></div>
		       	</div>
		        
		         <div class="input-field col l12 s12">
		         <span class="light">Area of Research:</span>
		          <input placeholder="Area of Research" type="text" name="area_of_research" data-error=".error2">
		          <div class="error2"></div>
		        </div>
		      </div> 

		      <div class="row">
		        <div class="input-field col l6 s6">
		        	<span class="light">Name:</span>
		      		<input placeholder="Name of Candidate" type="text" name="name" data-error=".error3">
		      		<div class="error3"></div>
		        </div>
		         <div class="input-field col l6  s6">
		         <span class="light">Father's Name:</span>
		          <input placeholder="Father's/Guardian Name" type="text" name="father_name" data-error=".error4">
		          <div class="error4"></div>
		        </div>
		      </div>

		      <div class="row">
		        <div class="input-field col l6">
		        	<span class="light">Date of Birth:</span>
		      		<input type="date" class="validate" name="dob" data-error=".error5">
		      		<div class="error5"></div>
		        </div>

		         <div class="input-field col l6 ">
		         <span class="light">Category</span><br>
		         	<select required name="category">
				      <option value="" disabled selected>Choose your Category</option>
				      <option value="OBC">OBC</option>
				      <option value="OC">OC</option>
				      <option value="SC">SC</option>
				      <option value="ST">ST</option>
				    </select>
		        </div>
		      </div> 		        		    		    

		      <div class="row">
		        <div class="input-field col l6">
		      		<span class="light">Sex</span><br>
		         	<select required name="sex">
				      <option value="" disabled selected>Choose your Gender</option>
				      <option value="male">Male</option>
				      <option value="female">Female</option>
				    </select>
		      		
		        </div>

		         <div class="input-field col l6 ">
		         <span class="light">Marital Status</span><br>
		         	<select required name="marital_status">
				      <option value="" disabled selected>Choose your Marital Status</option>
				      <option value="married">Married</option>
				      <option value="notmarried">Not Married</option>
				    </select>
		        </div>
		      </div> 

		      <div class="row">
		        <div class="input-field col l6">
		      		  <span class="light">Physically Challenged(P.H)</span><br>
		         	<select required name="ph">
				      <option value="" disabled selected>Choose your option</option>
				      <option value="yes">Yes</option>
				      <option value="no">No</option>
				    </select>
		        </div>
		         <div class="input-field col l6 ">

		         <span class="light">Nationality:</span>
		          <input placeholder="Nationality" type="text" class="validate" name="nationality" data-error=".error6">
		          <div class="error6"></div>
		        </div>
		      </div>           

		      <div class="row">
		        <div class="input-field col l6"> 
		        	<span for="textarea1">Address for Communication</span><br>     		  
					<textarea required id="textarea1" class="materialize-textarea" name="addr_for_commn" maxlength="200"></textarea>
		            

		            <p>Mobile Number:</p>
		            <input pattern="^([0|\+[0-9]{1,5})?([7-9][0-9]{9})$" type="number" min="7000000000" max="9999999999" class="validate" name="mobile" data-error=".error7"></input>
		            <div class="error7"></div>
		        </div>
		         <div class="input-field col l6 ">
		         <span for="textarea1">Permanent Address</span><br>
		         <textarea required id="textarea1" class="materialize-textarea" name="permanent_addr" maxlength="200"></textarea>
		            

		            <p>Land-Line Number:</p>
		            <input type="number" class="validate" minlength="10" maxlength="10" name="landline" data-error=".error8">
		            <div class="error8"></div>
		        </div>
		      </div> 

		    <div class="row">
  			<div class="col s12">
  			<p>Undergraduate</p>
  				 <div class="row">
		        <div class="input-field col l6">
		        	<span class="light">Name of Degree:</span>
		      		<input placeholder="Name of Degree" type="text" class="validate" name="ug_deg" data-error=".error9">
		      		<div class="error9"></div>
		        </div>
		         <div class="input-field col l6 ">
		         	<span class="light">Branch Name:</span>
		         	<input placeholder="Branch/Specialization" type="text" class="validate" name="ug_branch" data-error=".error10">
		         	<div class="error10"></div>
		        </div>
		      </div>

		      <div class="row">
		      	
		      	<div class="input-field col l6 ">
		      		<span class="light">C.G.P.A:</span>
		      		<input placeholder="C.G.P.A" type="number" class="validate ug_cgpa" name="ug_gpa" min="4" max="10" step="0.01" data-error=".error11">
		      		<div class="error11"></div>
		      	</div>
		      	<div class="input-field col l6">
		      		<span class="light">Class:</span>
		      		<select required name="ug_class">
				      <option value="" disabled selected>Choose your option</option>
				      <option  value="Honours">Honours</option>
				      <option  value="Distinction">Distinction</option>
				      <option  value="First">First</option>
				      <option  value="Second">Second</option>
				    </select>
		      	</div>
		      </div> 
		      <p>
		      	<input type="checkbox" id="ra1" name="ra1" />
			      <label for="ra1">If results are not announced,click </label>
		      </p>
		      </div>
		      </div>

		      <div class="row">
		      	<div class="input-field col l12 s12">
		      		<span class="light">College Name:</span>
		      		<input placeholder="College Name" type="text" class="validate" name="ug_name_of_inst" data-error=".error12">
		      		<div class="error12"></div>
		      	</div>

		      	<div class="input-field col l12 s12">
		      		<span class="light">University Name:</span>
		      		<input placeholder="University Name" type="text" class="validate" name="ug_name_of_uni" data-error=".error13">
		      		<div class="error13"></div>
		      	</div>

		      	<div class="input-field col l4 s4">
		      		<span class="light">Year of Passing</span>
		      		<input type="number" class="validate" name="ug_yop" min="2000" max="2018" data-error=".error14">
		      		<div class="error14"></div>
		      	</div>
		      </div>

		      <div class="space-medium"></div>
		      <div class="row">
		      <p>Academic Details:</p>
		      	<table class="highlight centered responsive-table">
		      	        <thead>
		      	          <tr>
		      	              <th data-field="id">Year</th>
		      	              <th data-field="name">Semester</th>
		      	              <th data-field="price">Maximum G.P.A</th>
		      	              <th data-field="price">G.P.A obtained</th>
		      	          </tr>
		      	        </thead>

		      	        <tbody>
		      	          <tr>
		      	            <td>1</td>
		      	            <td>First</td>
		      	            <td>
		      	            <input type="number" class="validate" name="max1" >
		      	            </td>
		      	            <td>
		      	            	<input type="number" class="validate" name="gpa1" >
		      	            </td>
		      	          </tr>
		      	          <tr>
		      	            <td>1</td>
		      	            <td>Second</td>
		      	            <td>
		      	            <input type="number" class="validate" name="max2" >
		      	            </td>
		      	            <td>
		      	            	<input type="number" class="validate" name="gpa2" >
		      	            </td>
		      	          </tr>
		      	          <tr>
		      	            <td>2</td>
		      	            <td>Third</td>
		      	            <td>
		      	            <input type="number" class="validate" name="max3" >
		      	            </td>
		      	            <td>
		      	            	<input type="number" class="validate" name="gpa3" >
		      	            </td>
		      	          </tr>
		      	          <tr>
		      	            <td>2</td>
		      	            <td>Fourth</td>
		      	            <td>
		      	            <input type="number" class="validate" name="max4">
		      	            </td>
		      	            <td>
		      	            	<input type="number" class="validate" name="gpa4" >
		      	            </td>
		      	          </tr>
		      	          <tr>
		      	            <td>3</td>
		      	            <td>Fifth</td>
		      	            <td>
		      	            <input type="number" class="validate" name="max5">
		      	            </td>
		      	            <td>
		      	            	<input type="number" class="validate" name="gpa5">
		      	            </td>
		      	          </tr>
		      	          <tr>
		      	            <td>3</td>
		      	            <td>Sixth</td>
		      	            <td>
		      	            <input type="number" class="validate" name="max6">
		      	            </td>
		      	            <td>
		      	            	<input type="number" class="validate" name="gpa6" >
		      	            </td>
		      	          </tr>
		      	          <tr>
		      	            <td>4</td>
		      	            <td>Seventh</td>
		      	            <td>
		      	            <input type="number" class="validate" name="max7">
		      	            </td>
		      	            <td>
		      	            	<input type="number" class="validate" name="gpa7" >
		      	            </td>
		      	          </tr>
		      	          <tr>
		      	            <td>4</td>
		      	            <td>Eighth</td>
		      	            <td>
		      	            <input type="number" class="validate eight" name="max8">
		      	            </td>
		      	            <td>
		      	            	<input type="number" class="validate eight" name="gpa8" >
		      	            </td>
		      	          </tr>
		      	          
		      	        </tbody>
		      	      </table>
		      </div>
		      <p>
		      	<input type="checkbox" id="ra3" name="ra3" />
			      <label for="ra3">If the Semester results are not announced,click </label>
		      </p>
		      
		      
		      <div class="row">
		      	<span class="light">Details of Professional Experience</span>
		      	<p>*(In case of more than one employer fill the details,else fill N.A.)</p>
		      	<div class="space-small"></div>
		      	<div class="col s12 l12 emp_details">
		      		<p for="textarea1">Name & Address of Employer 1</p><br>
		      		 <textarea id="textarea1" placeholder="Enter Details here.." class="materialize-textarea" name="employer_details_1"></textarea>

		      		 <p>Position Held:</p>
		      		 <input type="text" class="validate" name="emp_pos_1">

		      		 <div class="col l6 s6">
		      		 	<p>From:</p>
		      		 	<input type="number" class="validate" name="emp_from_1">
		      		 </div>
		      		 <div class="col l6 s6">
		      		 	<p>To:</p>
		      		 	<input type="number" class="validate" name="emp_to_1">
		      		 </div>
		      	</div>
		      	<div class="col s12 l12 emp_details">
		      		<p for="textarea1">Name & Address of Employer 2</p><br>
		      		 <textarea id="textarea1" placeholder="Enter Details here.." class="materialize-textarea" name="employer_details_2"></textarea>

		      		 <p>Position Held:</p>
		      		 <input type="text" class="validate" name="emp_pos_2">

		      		 <div class="col l6 s6">
		      		 	<p>From:</p>
		      		 	<input type="number" class="validate" name="emp_from_2">
		      		 </div>
		      		 <div class="col l6 s6">
		      		 	<p>From:</p>
		      		 	<input type="number" class="validate" name="emp_to_2">
		      		 </div>
		      	</div>
		      	<div class="col s12 l12 emp_details">
		      		<p for="textarea1">Name & Address of Employer 3</p><br>
		      		 <textarea id="textarea1" placeholder="Enter Details here.." class="materialize-textarea" name="employer_details_3"></textarea>

		      		 <p>Position Held:</p>
		      		 <input type="text" class="validate" name="emp_pos_3">

		      		 <div class="col l6 s6">
		      		 	<p>From:</p>
		      		 	<input type="number" class="validate" name="emp_from_3">
		      		 </div>
		      		 <div class="col l6 s6">
		      		 	<p>From:</p>
		      		 	<input type="number" class="validate" name="emp_to_3">
		      		 </div>
		      	</div>
		      </div>

		      <div class="row">
		      	<div class="col l12 s12 ">
		      		<p>I do hereby declare that the information furnished in this application are true and correct to the best of my knowledge. If, any of the particulars furnished above is found to be incorrect at the time of admission, the admission may be cancelled.</p>
		      		<p class="center agreement">
		      			<span>
		      		      <input type="checkbox" id="agree" class="check" required/>
		      		      <label for="agree">Agree</label>
		      		    </span>
		      		    
		      		</p>
		      	</div>
		      </div>
		      <div class="space-medium"></div>
		      <div class="row">

		      	<div class="col s6 l6">
		      		<p>Date of Submission</p>
		      		<input type="date" name="date" class="validate">
		      	</div>
		      	<div class="space-medium"></div>
		      	
		      </div>

		      <div class="row">
		      	<div class="col l12 s12">
		      	<p><b>Note:</b> The part time external Ph.D. applicant should attach the duly filled in Form-1 and Form-2, and Part-Time on campus applicant should attach the duly filled in Form-3. Otherwise, the application will be summarily rejected.</p>
		      	</div>
		      </div>
		      
				<div class="upload_container " >
		      
		      
		      </div>


  		<div class="center">
	 {!! Form::submit('Submit', array('class'=>'teal darken-1 send-btn btn waves-effect waves-light' )) !!}
	 </div>
	 	
	      {!! Form::close() !!}		
  	</form>
  	<script type="text/javascript">
  		  $(document).ready(function() {
    	  $('select').material_select();
    // 	  $('.datepicker').pickadate({
		  //   selectMonths: true, // Creates a dropdown to control month
		  //   selectYears: 100 // Creates a dropdown of 15 years to control year
		  // });
    	  $('#formPhd').validate({
    	  	rules:{
    	  		email: 'required',
           		area_of_research:{
           			required: true,
           			minlength: 20
           		},
           		name:{
           			required:true,
           			maxlength:32
           		},
           		father_name:{
           			required:true,
           			maxlength:32
           		},
           		dob:{
           			required:true,
           			min:'1990-06-31',
           			max:'2010-06-31'
           		},
           		nationality:{
           			required:true,
           			maxlength:32
           		},
           		mobile:{
           			required:true,
           			minlength:7000000000,
           			maxlength:9999999999
           		},
           		landline:{
           			required:true,
           			minlength:7000000000,
           			maxlength:9999999999
           		},
           		ug_deg:{
           			required:true,
           			maxlength:32
           		},
           		ug_branch:{
           			required:true,
           			maxlength:50
           		},
           		ug_gpa:{
           			required:true,
           			min:4,
           			max:10,
           			step:0.01
           		},
           		ug_name_of_uni:{
           			required:true,
           			maxlength:50
           		},
           		ug_name_of_inst:{
           			required:true,
           			maxlength:50
           		},
           		ug_yop:{
           			required:true,
           			max:2018,
           			min:2000
           		},
           		max1:{
           			required:true,
           			max:10,
           			min:1
           		},
           		gpa1:{
           			required:true,
           			max:10,
           			min:1
           		},
           		max2:{
           			required:true,
           			max:10,
           			min:1
           		},
           		gpa2:{
           			required:true,
           			max:10,
           			min:1
           		},
           		max3:{
           			required:true,
           			max:10,
           			min:1
           		},
           		gpa3:{
           			required:true,
           			max:10,
           			min:1
           		},
           		max4:{
           			required:true,
           			max:10,
           			min:1
           		},
           		gpa4:{
           			required:true,
           			max:10,
           			min:1
           		},
           		max5:{
           			required:true,
           			max:10,
           			min:1
           		},
           		gpa5:{
           			required:true,
           			max:10,
           			min:1
           		},
           		max6:{
           			required:true,
           			max:10,
           			min:1
           		},
           		gpa6:{
           			required:true,
           			max:10,
           			min:1
           		},
           		max7:{
           			required:true,
           			max:10,
           			min:1
           		},
           		gpa7:{
           			required:true,
           			max:10,
           			min:1
           		},
           		employer_details_1:{
           			maxlength:200,
           		},
           		emp_pos_1:{
           			maxlength:100,
           		},
           		emp_to_1:{
           			min:2010,
           			max:2016
           		},
           		emp_from_1:{
           			min:2010,
           			max:2016
           		},
           		employer_details_2:{
           			maxlength:200,
           		},
           		emp_pos_2:{
           			maxlength:100,
           		},
           		emp_to_2:{
           			min:2010,
           			max:2016
           		},
           		emp_from_2:{
           			min:2010,
           			max:2016
           		},
           		employer_details_3:{
           			maxlength:200,
           		},
           		emp_pos_3:{
           			maxlength:100,
           		},
           		emp_to_3:{
           			min:2010,
           			max:2016
           		},
           		emp_from_3:{
           			min:2010,
           			max:2016
           		},
           		date:{
           			required:true,
           			min:'2016-01-1',
           			max:'2016-06-31'
           		}
    	  	},
    	  	messages:{
    	  		email:"Please fill your email id",
    	  		area_of_research:{
    	  			required:"Please fill the area of research",
    	  			minlength:"Enter atleast 20 characters"
    	  		},
    	  		name:{
    	  			required:"Please fill the details",
    	  			minlength:"Enter atmost 32 characters"
    	  		},
    	  		father_name:{
    	  			required:"Please fill the details",
    	  			minlength:"Enter atmost 32 characters"
    	  		},
    	  		dob:{
					required:"Please fill the DOB",
					min:"Enter date between 1990-06-31 & 2010-06-31"
    	  		},
    	  		nationality:{
    	  			required:"Please fill the details",
    	  			minlength:"Enter atmost 32 characters"
    	  		},
    	  		mobile:{
    	  			required:"Please fill correct MObile Number",
    	  		},
    	  		landline:{
    	  			required:"Please fill correct Landline Number",
    	  		},
    	  		ug_deg:{
    	  			required:"Fill the required detail"
    	  		},
    	  		ug_branch:{
    	  			required:"Fill the required detail",
    	  			minlength:"Enter atmost 50 characters"
    	  		},
    	  		ug_gpa:{
    	  			required:"Fill the required G.P.A"
    	  		},
    	  		
    	  	},
    	  	errorElement:'div',
    	  	errorPlacement: function(error , element){
    	  		var placement = $(element).data('error');
    	  		if(placement){
    	  			$(placement).append(error);
    	  		}
    	  		else{
    	  			error.insertAfter(element);
    	  		}
    	  	}
    	  });
  });
  	</script>
  </div>
</body>
