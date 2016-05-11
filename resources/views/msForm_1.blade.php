	<!DOCTYPE html>
	<html>
	<head>

		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta id="token" name="csrf-token" content="{{ csrf_token() }}">
		<title>M.S. Registration Form</title>
		<link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
		<link rel="stylesheet" href="{{URL::asset('assets/css/materialize.min.css')}}">
		<!-- <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
		<script src="{{URL::asset('assets/js/jquery-2.1.1.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/materialize.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/common.js')}}"></script>
		<script src="{{URL::asset('assets/js/code_ms.js')}}"></script>
		<script src="{{URL::asset('assets/js/savephd.js')}}"></script>
		<script src="{{URL::asset('assets/js/preview.js')}}"></script>
		
	</head>
	<body>

		<div class="blur">
			<div class="center preloader" hidden="true">
				<img src="{{URL::asset('assets/images/preloader.gif')}}">
			</div>
		</div>

		<header></header>

		<nav>
	    <div class="nav-wrapper ">
	      
	      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
	      <ul class="hide-on-med-and-down">
	        <li><a href="/home">Home</a></li>
	        <li><a href="/phdinstructions">PhD. Admissions</a></li>
	        <li><a href="/contact">Contact</a></li>
	      </ul>
	      <ul class="side-nav" id="mobile-demo">
	       <li><a href="/home">Home</a></li>
	        <li><a href="/phdinstructions">PhD. Admissions</a></li>
	        <li><a href="/contact">Contact</a></li>
	      </ul>
	    </div>
	  </nav>

	  <div class="space-medium"></div>
	  <div class="heading">
	  	
	  </div>
	
		<div class="container main">
			<div class="row text-center">
				
				<div class="space-medium"></div>
				<div class="divider"></div><div class="divider"></div>
			</div>
			<div class="space-medium"></div>			
			<input type="text" hidden value="ms" class="checker" />
	  			<p class="vlarge">Applicant Details</p>
			    <div class="col s12">
			      <div class="row dept">
			        <div class="input-field col l6 s6 ">
			      	<select name="department1"  id="department1">
			      	<option value="" disabled selected>Department Preference 1</option>
	                <option value="CS">Computer Science and Engineering</option>
	                <option value="CL">Chemical Engineering</option>
	                <option value="CV">Civil Engineering </option>
	                <option value="CC">CECASE</option>
	                <option value="EN">Department of Energy Engineering</option>
	                <option value="EE">Electrical & Electronics Engineering</option>
	                <option value="EC">Electronics & Communication Engineering</option>
	                <option value="ME">Mechanical Engineering</option>
	                <option value="PR">Production Engineering</option
	                <option value="IC">Instrumentation And Control Engineering</option>
	                <option value="MME">Metalurgy and Material Sciences</option>
	                <option value="PH">Physics</option>
			      		</select>

			        </div>
			        <div class="input-field col l6 s6 ">

			      				      		<select name="department2" required id="department2">
			      			  <option value="" disabled selected>Department Preference 2</option>
	                <option value="CS">Computer Science and Engineering</option>
	                <option value="CL">Chemical Engineering</option>
	                <option value="CV">Civil Engineering </option>
	                <option value="CC">CECASE</option>
	                <option value="EN">Department of Energy Engineering</option>
	                <option value="EE">Electrical & Electronics Engineering</option>
	                <option value="EC">Electronics & Communication Engineering</option>
	                <option value="ME">Mechanical  Engineering</option>
	                <option value="PR">Production Engineering</option
	                <option value="IC">Instrumentation And Control Engineering</option>
	                <option value="MME">Metalurgy and Material Sciences</option>
	                <option value="PH">Physics</option>
			      		</select>

			      		
			        </div>
			        <div class="input-field col l6 s6 ">
			      		<select name="department3" required id="department3">

			      			  <option value="" disabled selected>Department Preference 3</option>
	                <option value="CS">Computer Science and Engineering</option>
	                <option value="CL">Chemical Engineering</option>
	                <option value="CV">Civil Engineering </option>
	                <option value="CC">CECASE</option>
	                <option value="EN">Department of Energy Engineering</option>
	                <option value="EE">Electrical & Electronics Engineering</option>
	                <option value="EC">Electronics & Communication Engineering</option>
	                <option value="ME">Mechanical Engineering</option>
	                <option value="PR">Production Engineering</option
	                <option value="IC">Instrumentation And Control Engineering</option>
	                <option value="MME">Metalurgy and Material Sciences</option>
	                <option value="PH">Physics</option>
			      		</select>

			      		
			        </div>
			        
			        
			        <div class="input-field col s6 l6">
			        	          <input id="email" name="email" type="email" class="validate" required>
			        	          <label for="last_name">*Email:</label>
			       	</div>
			        
			         <div class="input-field col l12 s12">
			         <span class="light">*Area of Research:</span>
			          <input required placeholder="Area of Research" id="area_of_research" type="text" class="validate" name="area_of_research" maxlength="50">
			        </div>
			      </div>      

			      <div class="row">
			        <div class="input-field col l6 s6">
			        	<span class="light">*Name:</span>
			      		<input required placeholder="Name of Candidate" id="name" type="text" class="validate" name="name" maxlength="32">
			        </div>
			         <div class="input-field col l6  s6">
			         <span class="light">*Father's Name/Guardian's Name/Husband's Name:</span>
			          <input required placeholder="Father's/Guardian Name" id="father_name" type="text" class="validate" name="father_name" maxlength="32">
			        </div>
			      </div>

			      <div class="row">
			        <div class="input-field col l4">
			        	<span class="light">*Date of Birth:</span>
			      		<input required id="dob" type="date" class="validate" name="dob" max="2016-06-31" min="1990-06-31" >
			        </div>

			        <div class="input-field col l2">
			        	<span class="light">*Age:</span>
			      		<input placeholder="Enter Age" required id="age" type="number" class="validate" name="age" max="50" min="12" >
			        </div>

			         <div class="input-field col l6 ">
			         <span class="light">*Category:</span><br>
			         	<select required name="category" id="category">
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
			      		<span class="light">*Sex:</span><br>
			         	<select required name="sex" id="sex">
					      <option value="" disabled selected>Choose your Gender</option>
					      <option value="male">Male</option>
					      <option value="female">Female</option>
					    </select>
			      		
			        </div>

			         <div class="input-field col l6 ">
			         <span class="light">*Marital Status:</span><br>
			         	<select required name="marital_status" id="marital_status">
					      <option value="" disabled selected>Choose your Marital Status</option>
					      <option value="married">Married</option>
					      <option value="single">Single</option>
					    </select>
			        </div>
			      </div> 

			      <div class="row">
			        <div class="input-field col l6">
			      		  <span class="light">*Person with Disability(PWD):</span><br>
			         	<select required name="ph" id="ph">
					      <option value="" disabled selected>Choose your option</option>
					      <option value="yes">Yes</option>
					      <option value="no">No</option>
					    </select>
			        </div>
			         <div class="input-field col l6 ">

			         <span class="light">*Nationality:</span>
			          <input required placeholder="Nationality" id="nationality" type="text" class="validate" name="nationality" maxlength="32">
			        </div>
			      </div>           

			       <div class="row">
			        <div class="input-field col l6"> 
			        	<span for="textarea1">*Address for Communication:</span><br>     		  
						<textarea required id="addr_for_commn" class="materialize-textarea" name="addr_for_commn" maxlength="200"></textarea>
			            

			            <span>*Mobile Number:</span>
			            <input required type="number" min="7000000000" max="9999999999" class="validate" name="mobile" id="mobile"></input>
			        </div>
			         <div class="input-field col l6 ">
			         <span for="textarea1">*Permanent Address:</span><br>
			         <textarea required id="permanent_addr" class="materialize-textarea" name="permanent_addr" maxlength="200"></textarea>
			            

			            <span>Land-Line Number:</span>
			            <input id="landline" type="text" class="validate" name="landline" >
			        </div>


			      </div> 

			    </div>
			    <p>(*) indicates that it's a required field.</p> 
	  		</div>

	  		      

	  		<div class="center">
	  		<a class="valid teal darken-1 send-btn btn waves-effect waves-light">Submit</a>
		 </div>
		 	
		     
		      

		      <div class="modal center" id="error">
		      	<div class="modal-content">
		      		<div class="error"></div>
		      	</div>
		      	<div class="modal-footer">
		      		<a class="btn modal-action modal-close waves-effect waves-green btn-flat">Close</a>
		      	</div>
		      </div>

		      <div id="regNo" class="modal center">	
		      	<div class="modal-content">
		      		<div class="regno"></div>
		      		
		      	</div>
		      	<div class="modal-footer">
		      		
		      	</div>
		      </div>

		      <div id="preview" class="modal">	
		      </div>



	<div class="space-large"></div>
	<footer class="page-footer teal darken-4">
	          <div class="container">
	            <div class="row">
	              <div class="col l6 s12">
	                <h5 class="white-text">Contact Us</h5>
	                <p class="grey-text text-lighten-4">National Institute of Technology</p>
	                <p class="grey-text text-lighten-4">Tiruchirappalli - 620015</p>
	                <p class="grey-text text-lighten-4">Tamil Nadu, INDIA</p>
	              </div>
	              <div class="col l4  s12">
	                <h5 class="white-text">QuickLinks</h5>
	                <ul>
	                  <li><a class="grey-text text-lighten-3" href="http://www.nitt.edu/">Institute Website</a></li>
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
			var x = new Date().getFullYear();
			var y = x+1;
			console.log(x);
			var p = '<h4 class="center">APPLICATION FOR ADMISSION TO M.S. PROGRAMME ('+ x + '-' + y + ')</h4>';
			$('.heading').append(p);
		});
		</script>

	</body>
	</html>