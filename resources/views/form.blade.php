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
	<!-- <link rel="shortcut icon" href="{{URL::asset('assets/logo.jpg')}}"> -->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="{{URL::asset('assets/js/jquery-2.1.1.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/materialize.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/jquery-ui.js')}}"></script>
	<script src="{{URL::asset('assets/js/code.js')}}"></script>
	
</head>
<body>

	<header></header>
	
	<nav>
    <div class="nav-wrapper ">
      
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="hide-on-med-and-down">
        <li><a href="/home">Home</a></li>
        <li><a href="/form">Phd/M.S. Admission's</a></li>
        <li><a href="/login">Admin</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
       <li><a href="/home">Home</a></li>
        <li><a href="/form">Phd/M.S. Admission's</a></li>
        <li><a href="/login">Admin</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
    </div>
  </nav>

  <div class="space-medium"></div>

	<div class="container">
		<div class="row text-center">
			<h3>APPLICATION FOR ADMISSION TO Ph.D. PROGRAMME (2016 - 2017)</h3>
			<div class="space-medium"></div>
			<div class="divider"></div><div class="divider"></div>
		</div>

		<div class="row">

		{!! Form::open(array('url'=>'success','method'=>'POST', 'files'=>true )) !!}
		<!-- <input type="hidden" name="_token" id="_token" value={!! csrf_field() !!} /> -->
		<div class="row">
		<span class="light">Application Type:</span>
		<div class="input-field col l12 s12">
		      		<select required name="phdormsc">
				      <option value="" disabled selected>Choose your option</option>
				      <option value="phd">Ph D</option>
				      <option value="msc">M.S.</option>
				    </select>
		        </div>
		    </div>
		
  		<div class="row">
  			<span class="light">Demand Draft Details:</span>
  			<div class="space-small"></div>
		    <div class="col s12">
		      <div class="row">
		        <div class="input-field col l4 s6">
		        	<span class="light">D.D. Number:</span>

		          <input required placeholder="Enter D.D Number" id="reg_number" type="number" class="validate" name="dd_no" min="1" max="1000000000">
		        </div>

		        <div class="input-field col l4 s6 offset-l4">
		        	<span class="light">Date of D.D:</span>
		        	<div class="space-small"></div>
		          <input required type="date" class="validate" name="date_of_sub" max="2016-06-31" min="2016-06-31">

		        </div>
		      </div>      
		      <div class="row">
		        <div class="input-field col l4 s6">
		        <span class="light">Amount:</span>
		          <input required placeholder="Enter Amount" id="reg_number" type="number" class="validate" name="amount" max="2000000" min="1000">
		        </div>
		        <div class="input-field col l4 s6 offset-l4">
		        <span class="light">Drawn At:</span>
		          <input required placeholder="Drawn At" id="reg_number" type="text" class="validate" name="drawn_at" maxlength="30">
		        </div>
		      </div>      
		    </div>

		    <div class="row">
  			<p>Application Category</p>
		    <div class="col s8">
		      <div class="row">
		        <div class="input-field col l4 s6">
		      		<select required name="appl_categ">
				      <option value="" disabled selected>Choose your option</option>
				      <option value="Part Time">Part Time</option>
				      <option value="Full Time">Full Time</option>
				    </select>
		        </div>
		        
		      </div>      
		    </div>
		    <div class="col l4 s12">
		    <p>Upload Image</p>
		      	<div class="file-field input-field">`
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
	</div>
  		<div class="row">
  			<p>Applicant Details</p>
		    <div class="col s12">

		      <div class="row dept">
		        <div class="input-field col l6 s6 ">
		      		<select class="validate" name="department" required>
		      			 <option value="" disabled selected>Choose your Department</option>
		      			<option value="ARC">Architecture</option>
		      			<option value="CHEM">Chemical</option>
		      			<option value="CIV">Civil Engineering </option>
		      			<option value="EEE">Electrical & Electronics Engineering</option>
		      			<option value="ECE">Electronics & Communication Engineering</option>
		      			<option value="HM">Humanities</option>
		      			<option value="MNG">Management Studies</option>
		      			<option value="MATH">Mathematics</option>
		      		</select>
		      		<div class="multi"></div>
		      		<p>Click <a href="form_multi">Here</a> if applying for more than 1 Department's</p>
		        </div>
		        
		        <div class="input-field col s6 l6">
		        	          <input id="email" name="email" type="email" class="validate" required>
		        	          <label for="last_name">Email</label>
		       	</div>
		        
		         <div class="input-field col l12 s12">
		         <span class="light">Area of Research:</span>
		          <input required placeholder="Area of Research" id="reg_number" type="text" class="validate" name="area_of_research" maxlength="50">
		        </div>
		      </div>      

		      <div class="row">
		        <div class="input-field col l5 s6">
		        	<span class="light">Name:</span>
		      		<input required placeholder="Name of Candidate" id="reg_number" type="text" class="validate" name="name" maxlength="32">
		        </div>
		         <div class="input-field col l5 offset-l2 s6">
		         <span class="light">Father's Name:</span>
		          <input required placeholder="Father's/Guardian Name" id="reg_number" type="text" class="validate" name="father_name" maxlength="32">
		        </div>
		      </div>

		      <div class="row">
		        <div class="input-field col l5">
		        	<span class="light">Date of Birth:</span>
		      		<input required id="reg_number" type="date" class="validate" name="dob" max="2016-06-31" min="1990-06-31">
		        </div>

		         <div class="input-field col l5 offset-l2">
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
		        <div class="input-field col l5">
		      		<span class="light">Sex</span><br>
		         	<select required name="sex">
				      <option value="" disabled selected>Choose your Gender</option>
				      <option value="male">Male</option>
				      <option value="female">Female</option>
				    </select>
		      		
		        </div>

		         <div class="input-field col l5 offset-l2">
		         <span class="light">Marital Status</span><br>
		         	<select required name="marital_status">
				      <option value="" disabled selected>Choose your Marital Status</option>
				      <option value="married">Married</option>
				      <option value="notmarried">Not Married</option>
				    </select>
		        </div>
		      </div> 

		      <div class="row">
		        <div class="input-field col l5">
		      		  <span class="light">Physically Challenged(P.H)</span><br>
		         	<select required name="ph">
				      <option value="" disabled selected>Choose your option</option>
				      <option value="yes">Yes</option>
				      <option value="no">No</option>
				    </select>
		        </div>
		         <div class="input-field col l5 offset-l2">

		         <span class="light">Nationality:</span>
		          <input required placeholder="Nationality" id="reg_number" type="text" class="validate" name="nationality" maxlength="32">
		        </div>
		      </div>           

		       <div class="row">
		        <div class="input-field col l5">      		  
					<textarea required id="textarea1" class="materialize-textarea" name="addr_for_commn" maxlength="200"></textarea>
		            <span for="textarea1">Address for Communication</span><br>
		        </div>
		         <div class="input-field col l5 offset-l2">
		         <textarea required id="textarea1" class="materialize-textarea" name="permanent_addr" maxlength="200"></textarea>
		            <span for="textarea1">Permanent Address</span><br>
		        </div>
		      </div> 

		    </div>
  		</div>

  		<div class="row">
  			<div class="col s12">
  			<p>Undergraduate</p>
  				 <div class="row">
		        <div class="input-field col l5">
		        	<span class="light">Name of Degree:</span>
		      		<input required placeholder="Name of Degree" id="reg_number" type="text" class="validate" name="ug_deg" maxlength="32">
		        </div>
		         <div class="input-field col l5 offset-l2">
		         	<span class="light">Branch Name:</span>
		         	<input required placeholder="Branch/Specialization" id="reg_number" type="text" class="validate" name="ug_branch" maxlength="50">
		        </div>
		      </div>

		      <div class="row">
		      	
		      	<div class="input-field col l6">
		      		<span class="light">C.G.P.A:</span>
		      		<input required placeholder="C.G.P.A" id="reg_number" type="number" class="validate" name="ug_gpa" min="4" max="10" step="0.01">
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
		      </div>
		      </div>

		      <div class="row">
		      	<div class="input-field col l12 s12">
		      		<span class="light">College Name:</span>
		      		<input required placeholder="College Name" id="reg_number" type="text" class="validate" name="ug_name_of_inst" maxlength="50">
		      	</div>

		      	<div class="input-field col l12 s12">
		      		<span class="light">University Name:</span>
		      		<input required placeholder="University Name" id="reg_number" type="text" class="validate" name="ug_name_of_uni" maxlength="50">
		      	</div>

		      	<div class="input-field col l4 s4">
		      		<span class="light">Year of Passing</span>
		      		<input required id="reg_number" type="number" class="validate" name="ug_yop" min="2000" max="2018">
		      	</div>
		      </div>

		      <div class="row">
  			<div class="col s12">
  			<p>Postgraduate</p>
  				 <div class="row">
		        <div class="input-field col l5">
		        	<span class="light">Name of Degree:</span>
		      		<input required placeholder="Name of Degree" id="reg_number" type="text" class="validate" name="pg_deg" maxlength="50">
		        </div>
		         <div class="input-field col l5 offset-l2">
		         	<span class="light">Branch Name:</span>
		         	<input required placeholder="Branch/Specialization" id="reg_number" type="text" class="validate" name="pg_branch" maxlength="50">
		        </div>
		      </div>

		      <div class="row">
		      	
		      	<div class="input-field col l6">
		      		<span class="light">C.G.P.A:</span>
		      		<input required placeholder="C.G.P.A" id="reg_number" type="number" class="validate" name="pg_gpa" min="4" max="10" step="0.01">
		      	</div>
		      	<div class="input-field col l6">
		      		<span class="light">Class:</span>
		      		<select required name = 'pg_class'>
				      <option value="" disabled selected>Choose your option</option>
				      <option  value="Honours">Honours</option>
				      <option  value="Distinction">Distinction</option>
				      <option  value="First">First</option>
				      <option  value="Second">Second</option>
				    </select>
		      	</div>
		      </div> 
		      </div>
		      </div>
		      <div class="row">
		      	<div class="input-field col l12 s12">
		      		<span class="light">College Name:</span>
		      		<input required placeholder="College Name" id="reg_number" type="text" class="validate" name="pg_name_of_inst" maxlength="50">
		      	</div>

		      	<div class="input-field col l12 s12">
		      	<span class="light">University Name:</span>
		      		<input required placeholder="University Name" id="reg_number" type="text" class="validate" name="pg_name_of_uni" maxlength="50">
		      	</div>

		      	<div class="input-field col l4 s4">
		      		<span class="light">Year of Passing</span>
		      		<input required id="reg_number" type="number" class="validate" name="pg_yop" min="2000" max="2018"> 
		      	</div>
		      </div>

		      <div class="row">
		      	<span class="light">Other Details:</span>
		      	<p>(*Write as 'RA'if results awaiting)</p>
		      	<div class="space-small"></div>
		      	<div class="exam">
			      	<div class="col l6 s12">
			      		<span class="light">Enter GATE/NET/SLET/CSIR/CAT/UGC Score:</span>
			      		<input required placeholder="Enter GATE/NET/SLET/CSIR/CAT/UGC Score" id="reg_number" type="number" class="validate" name="score" max="10000">
			      	</div>
			      	<div class="col l6 s12">
			      		<span class="light">Enter GATE/NET/SLET/CSIR/CAT/UGC Rank:</span>
			      		<input required placeholder="Enter GATE/NET/SLET/CSIR/CAT/UGC Rank" id="reg_number" type="Number" class="validate" name="rank" min="1" max="100000">
			      	</div>
		      	</div>
		      	<div class="col l12 s12">
		      		<span class="light">Title of P.G Project:</span>
		      		<input required placeholder="Title of P.G Project" id="reg_number" type="text" class="validate" name="title_of_project" maxlength="100">
		      	</div>
		      	<div class="col l12 s12">
		      		<p for="textarea1">Details of publication in refereed journals/ Proceedings of Conferences</p><br>
		      		 <textarea required id="textarea1" placeholder="Enter Details here.." class="materialize-textarea" name="details_of_pub" maxlength="200"></textarea>
		      	</div>
		      	<div class="col l12 s12">
		      		<p for="textarea1">Awards/ Prizes/Sports/NCC etc</p><br>
		      		 <textarea required id="textarea1" placeholder="Enter Details here.." class="materialize-textarea" name="awards" maxlength="200"></textarea>
		      	</div>
		      </div>

		      <div class="row">
		      	<span class="light">Details of Professional Experience</span>
		      	<p>*(In case of more than one employer fill the details,else fill N.A.)</p>
		      	<div class="space-small"></div>
		      	<div class="col s12 l12">
		      		<p for="textarea1">Name & Address of Employer 1</p><br>
		      		 <textarea required id="textarea1" placeholder="Enter Details here.." class="materialize-textarea" name="employer_details_1"></textarea>
		      	</div>
		      	<div class="col s12 l12">
		      		<p for="textarea1">Name & Address of Employer 2</p><br>
		      		 <textarea id="textarea1" placeholder="Enter Details here.." class="materialize-textarea" name="employer_details_2"></textarea>
		      	</div>
		      	<div class="col s12 l12">
		      		<p for="textarea1">Name & Address of Employer 3</p><br>
		      		 <textarea id="textarea1" placeholder="Enter Details here.." class="materialize-textarea" name="employer_details_3"></textarea>
		      	</div>
		      </div>

		      <div class="row">
		      	<div class="col l12 s12 ">
		      		<p>I do hereby declare that the information furnished in this application are true and correct to the best of my knowledge. If, any of the particulars furnished above is found to be incorrect at the time of admission, the admission may be cancelled.</p>
		      	</div>
		      </div>
		      <div class="space-medium"></div>
		      <div class="row">

		      	<div class="col s6 l5">
		      		<p>Date of Submission</p>
		      		<input required id="reg_number" type="date" name="date" class="validate" max="2016-06-31" min="2016-01-31">
		      	</div>
		      	<div class="space-medium"></div>
		      	
		      </div>

		      <div class="row">
		      	<div class="col l12 s12">
		      	<p><b>Note:</b> The part time external Ph.D. applicant should attach the duly filled in Form-1 & Form-2, and Part-Time on campus applicant should attach the duly filled in Form-3. Otherwise, the application will be summarily rejected.</p>
		      	</div>
		      </div>

  		


  		<div class="center">
	 {!! Form::submit('Submit', array('class'=>'teal darken-1 send-btn btn waves-effect waves-light' )) !!}
	 </div>
	 	
	      {!! Form::close() !!}
	      </div>
	      </div>
	<!-- form starts here -->
<div class="space-large"></div>
<footer class="page-footer teal darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">National Institute of Technology</p>
                <p class="grey-text text-lighten-4">Tiruchirappalli - 620015</p>
                <p class="grey-text text-lighten-4">Tamil Nadu, INDIA</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">QuickLinks</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="https://www.nitt.edu">Institute Website</a></li>
                  <li><a class="grey-text text-lighten-3" href="http://www.nitt.edu/home/academics/departments/">Departments</a></li>
                  <li><a class="grey-text text-lighten-3" href="http://www.nitt.edu/home/admissions/">Admissions</a></li>
                  <li><a class="grey-text text-lighten-3" href="http://www.nitt.edu/contact">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright dark">
            <div class="container center">
            
            <a class="grey-text text-lighten-4" href="#!">Made with &hearts; by Delta Force</a>
            </div>
          </div>
        </footer>
            

	<script type="text/javascript">
	$(document ).ready(function(){
		$(".button-collapse").sideNav();
		$('select').material_select();
	})
	</script>

</body>
</html>