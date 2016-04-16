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
	
</head>
<body>

	<header></header>
	
	<nav>
    <div class="nav-wrapper ">
      
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="hide-on-med-and-down">
        <li><a href="/home">Home</a></li>
        <li><a href="/form">Phd Admission's</a></li>
        <li><a href="/ms">M.S Admission's</a></li>
        <li><a href="/login">Admin</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
       <li><a href="/home">Home</a></li>
        <li><a href="/form">Phd Admission's</a></li>
        <li><a href="/ms">Ms Admission's</a></li>
        <li><a href="/login">Admin</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
    </div>
  </nav>

  <div class="space-medium"></div>

	<div class="container">
		<div class="row text-center">
			<h3>APPLICATION FOR ADMISSION TO M.S PROGRAMME (2016 - 2017)</h3>
			<div class="space-medium"></div>
			<div class="divider"></div><div class="divider"></div>
		</div>
		<div class="space-medium"></div>
		<div class="row">

		{!! Form::open(array('url'=>'msvalidate','method'=>'POST', 'files'=>true )) !!}
		<!-- <input type="hidden" name="_token" id="_token" value={!! csrf_field() !!} /> -->			
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
  		
	
  		<div class="row">
  			<p>Applicant Details</p>
		    <div class="col s12">

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

		      		<select name="department2" required>

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

		      		<select name="department3" required>

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
		        	<span for="textarea1">Address for Communication</span><br>
					<textarea required id="textarea1" class="materialize-textarea" name="addr_for_commn" maxlength="200"></textarea>
		            
		            <p>Mobile Number:</p>
		            <input pattern="^([0|\+[0-9]{1,5})?([7-9][0-9]{9})$" required type="number" min="7000000000" max="9999999999" class="validate" name="mobile"></input>
		        </div>
		         <div class="input-field col l5 offset-l2">
		         	<span for="textarea1">Permanent Address</span><br>
		         <textarea required id="textarea1" class="materialize-textarea" name="permanent_addr" maxlength="200"></textarea>
		            
		            <p>Landline Number:</p>
		            <input pattern="^([0|\+[0-9]{1,5})?([7-9][0-9]{9})$" required type="number" min="7000000000" max="9999999999" class="validate" name="landline"></input>
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
		      	            <input required id="reg_number" type="number" class="validate" name="max1" >
		      	            </td>
		      	            <td>
		      	            	<input required id="reg_number" type="number" class="validate" name="gpa1" >
		      	            </td>
		      	          </tr>
		      	          <tr>
		      	            <td>1</td>
		      	            <td>Second</td>
		      	            <td>
		      	            <input required id="reg_number" type="number" class="validate" name="max2" >
		      	            </td>
		      	            <td>
		      	            	<input required id="reg_number" type="number" class="validate" name="gpa2" >
		      	            </td>
		      	          </tr>
		      	          <tr>
		      	            <td>2</td>
		      	            <td>Third</td>
		      	            <td>
		      	            <input required id="reg_number" type="number" class="validate" name="max3" >
		      	            </td>
		      	            <td>
		      	            	<input required id="reg_number" type="number" class="validate" name="gpa3" >
		      	            </td>
		      	          </tr>
		      	          <tr>
		      	            <td>2</td>
		      	            <td>Fourth</td>
		      	            <td>
		      	            <input required id="reg_number" type="number" class="validate" name="max4">
		      	            </td>
		      	            <td>
		      	            	<input required id="reg_number" type="number" class="validate" name="gpa4" >
		      	            </td>
		      	          </tr>
		      	          <tr>
		      	            <td>3</td>
		      	            <td>Fifth</td>
		      	            <td>
		      	            <input required id="reg_number" type="number" class="validate" name="max5">
		      	            </td>
		      	            <td>
		      	            	<input required id="reg_number" type="number" class="validate" name="gpa5">
		      	            </td>
		      	          </tr>
		      	          <tr>
		      	            <td>3</td>
		      	            <td>Sixth</td>
		      	            <td>
		      	            <input required id="reg_number" type="number" class="validate" name="max6">
		      	            </td>
		      	            <td>
		      	            	<input required id="reg_number" type="number" class="validate" name="gpa6" >
		      	            </td>
		      	          </tr>
		      	          <tr>
		      	            <td>4</td>
		      	            <td>Seventh</td>
		      	            <td>
		      	            <input required id="reg_number" type="number" class="validate" name="max7">
		      	            </td>
		      	            <td>
		      	            	<input required id="reg_number" type="number" class="validate" name="gpa7" >
		      	            </td>
		      	          </tr>
		      	          <tr>
		      	            <td>4</td>
		      	            <td>Eighth</td>
		      	            <td>
		      	            <input required id="reg_number" type="number" class="validate eight" name="max8">
		      	            </td>
		      	            <td>
		      	            	<input required id="reg_number" type="number" class="validate eight" name="gpa8" >
		      	            </td>
		      	          </tr>
		      	          
		      	        </tbody>
		      	      </table>
		      </div>
		      <p>
		      	<input type="checkbox" id="ra3" name="ra3" />
			      <label for="ra3">If *th Semester results are not announced,click </label>
		      </p>
		      <div class="row">
		      	<span class="light">Details of Professional Experience</span>
		      	<p>*(In case of more than one employer fill the details,else fill N.A.)</p>
		      	<div class="space-small"></div>
		      	<div class="col s12 l12">
		      		<p for="textarea1">Name & Address of Employer 1</p><br>
		      		 <textarea id="textarea1" placeholder="Enter Details here.." class="materialize-textarea" name="employer_details_1"></textarea>

		      		 <p>Position Held:</p>
		      		 <input id="reg_number" type="text" class="validate" name="emp_pos_1" maxlength="100">

		      		 <div class="col l6 s6">
		      		 	<p>From:</p>
		      		 	<input id="reg_number" type="number" class="validate" name="emp_from_1" maxlength="100">
		      		 </div>
		      		 <div class="col l6 s6">
		      		 	<p>To:</p>
		      		 	<input id="reg_number" type="number" class="validate" name="emp_to_1" maxlength="100">
		      		 </div>
		      	</div>
		      	<div class="col s12 l12">
		      		<p for="textarea1">Name & Address of Employer 2</p><br>
		      		 <textarea id="textarea1" placeholder="Enter Details here.." class="materialize-textarea" name="employer_details_2"></textarea>

		      		 <p>Position Held:</p>
		      		 <input id="reg_number" type="text" class="validate" name="emp_pos_2" maxlength="100">

		      		 <div class="col l6 s6">
		      		 	<p>From:</p>
		      		 	<input id="reg_number" type="number" class="validate" name="emp_from_2" maxlength="100">
		      		 </div>
		      		 <div class="col l6 s6">
		      		 	<p>From:</p>
		      		 	<input id="reg_number" type="number" class="validate" name="emp_to_2" maxlength="100">
		      		 </div>
		      	</div>
		      	<div class="col s12 l12">
		      		<p for="textarea1">Name & Address of Employer 3</p><br>
		      		 <textarea id="textarea1" placeholder="Enter Details here.." class="materialize-textarea" name="employer_details_3"></textarea>

		      		 <p>Position Held:</p>
		      		 <input id="reg_number" type="text" class="validate" name="emp_pos_3" maxlength="100">

		      		 <div class="col l6 s6">
		      		 	<p>From:</p>
		      		 	<input id="reg_number" type="number" class="validate" name="emp_from_3" maxlength="100">
		      		 </div>
		      		 <div class="col l6 s6">
		      		 	<p>From:</p>
		      		 	<input id="reg_number" type="number" class="validate" name="emp_to_3" maxlength="100">
		      		 </div>
		      	</div>
		      </div>

		      <div class="row">
		      	<div class="col l12 s12 ">
		      		<p>I do hereby declare that the information furnished in this application are true and correct to the best of my knowledge. If, any of the particulars furnished above is found to be incorrect at the time of admission, the admission may be cancelled.</p>
		      		<p class="center agreement">
		      			<span>
		      		      <input type="checkbox" id="agree" class="check" />
		      		      <label for="agree">Agree</label>
		      		    </span>
		      		   
		      		</p>
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

		      <div class="row">
		      		<div class="upload_container">
		      	
		      		</div>	
		      </div>
		      
  		


  		<div class="center">
	 {!! Form::submit('Submit', array('class'=>'teal darken-1 send-btn btn waves-effect waves-light' )) !!}
	 </div>
	 	
	      {!! Form::close() !!}
	      </div>
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