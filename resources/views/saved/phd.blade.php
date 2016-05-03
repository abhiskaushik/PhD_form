	<!DOCTYPE html>
	<html>
	<head>

		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta id="token" name="csrf-token" content="{{ csrf_token() }}">
		<title>Admissions NITT | Ph.d Registration Form</title>
		<link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
		<link rel="stylesheet" href="{{URL::asset('assets/css/materialize.min.css')}}">
		<link rel="shortcut icon" href="{{URL::asset('assets/logo.jpg')}}"> 
		<!-- <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
		<script src="{{URL::asset('assets/js/jquery-2.1.1.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/materialize.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/code.js')}}"></script>
		<script src="{{URL::asset('assets/js/savephd.js')}}"></script>
		<script src="{{URL::asset('assets/js/preview.js')}}"></script>
		
	</head>
	<body>

		<header></header>
		
		<nav>
	    <div class="nav-wrapper ">
	      
	      <a href="#" details-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
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
			<div class="row text-center">
				<h4>APPLICATION FOR ADMISSION TO Ph.D. PROGRAMME (2016 - 2017)</h4>
				<div class="space-medium"></div>
				<div class="divider"></div><div class="divider"></div>
			</div>
			<div class="space-medium"></div>
			

			{!! Form::open(array('url'=>'phdvalidate','method'=>'POST', 'files'=>true )) !!}	

			<div class="row">
				<div class="col l6 s12">
					<p class="large">Bank Reference Number:</p>
					<input type="text" id="chalanNo" name="chalanNo" placeholder="Enter Chalan Number. " required />
				</div>
			</div>

	  		<div class="row">  					   
	  			<p class="large">Application Category</p>		    
			        
			      		
					    <div class="input-field col l6 s12 appCheck">
					        <select class="applicationCateg" name="appl_categ" required id="applicationCateg"> 
					        <option value="" disabled selected>Select</option>
					          <optgroup label="Part Time">
					            <option value="onCampus">On Campus</option>
					            <option value="External">External</option>
					          </optgroup>
					          <optgroup label="Full Time">
					            <option value="stipendiary">Stipendiary</option>
					            <option value="nonStipendiary">Non-Stipendiary</option>
					            <option value="Project">Project</option>
					      		<option value="Other">Other Fellowships</option>
					          </optgroup>
					        </select>
					        <label>Choose Category</label>
					      </div>

					      <div class="upload col l6 s12 ">
			    <p>Upload Image</p>
			      	<div class="file-field input-field">
		          		<div class="btn teal darken-1 btn waves-effect waves-light">
		          			<span class="light">File</span>
		          			{!! Form::file('image_path' , array('class'=>'', 'required')) !!}			
		          		</div>
		          		<div class="file-path-wrapper">
	        				<input class="file-path validate" type="text">
	      				</div>
		          	</div>
			      </div>
			      

			        </div>		        		    		    
	  		
	  			<p class="vlarge">Applicant Details</p>
			    <div class="col s12">
			      <div class="row dept">
			        <div class="input-field col l6 s6 dep1Check">
			        	<select name="department1" id="department1">
	 						<option value="" disabled selected>Department 1</option>
			      			<option value="AR">Architecture</option>
			      			<option value="CS">Computer Science and Engineering</option>
			      			<option value="CL">Chemical Engineering</option>
			      			<option value="CV">Civil Engineering </option>
			      			<option value="CY">Chemistry </option>
			      			<option value="CA">Computer Applications </option>
			      			<option value="CC">CECASE</option>
			      			<option value="EN">Department of Energy Engineering</option>
			      			<option value="EC">Electronics & Communication Engineering</option>
			      			<option value="EE">Electrical & Electronics Engineering</option>		      			
			      			<option value="HM">Humanities & Social Science</option>
			      			<option value="ME">Mechanical Engineering</option>
			      			<option value="MA">Mathematics</option>			      			
			      			<option value="MME">Metalurgy and Material Engineering</option>
			      			<option value="PR">Production Engineering</option>
			     		</select>
			        </div>
			        <div class="input-field col l6 s6 dep2Check">
			        	<select name="department2" id="department2">
	 						<option value="" disabled selected>Department 2</option>
			      			<option value="AR">Architecture</option>
			      			<option value="CS">Computer Science and Engineering</option>
			      			<option value="CL">Chemical Engineering</option>
			      			<option value="CV">Civil Engineering </option>
			      			<option value="CY">Chemistry </option>
			      			<option value="CA">Computer Applications </option>
			      			<option value="CC">CECASE</option>
			      			<option value="EN">Department of Energy Engineering</option>
			      			<option value="EC">Electronics & Communication Engineering</option>
			      			<option value="EE">Electrical & Electronics Engineering</option>		      			
			      			<option value="HM">Humanities & Social Science</option>
			      			<option value="ME">Mechanical Engineering</option>
			      			<option value="MA">Mathematics</option>			      		
			      			<option value="MME">Metalurgy and Material Engineering</option>
			      			<option value="PR">Production Engineering</option>		      
			      		</select>
			   
			      	
			        </div>
			        </div>
			        <div class="dept row">			        
			        <div class="input-field col s6 l6 dep3Check">
			        	<select name="department3" id="department3" >
	 						<option value="" disabled selected>Department 3</option>
			      			<option value="AR">Architecture</option>
			      			<option value="CS">Computer Science and Engineering</option>
			      			<option value="CL">Chemical Engineering</option>
			      			<option value="CV">Civil Engineering </option>
			      			<option value="CY">Chemistry </option>
			      			<option value="CA">Computer Applications </option>
			      			<option value="CC">CECASE</option>
			      			<option value="EN">Department of Energy Engineering</option>
			      			<option value="EC">Electronics & Communication Engineering</option>
			      			<option value="EE">Electrical & Electronics Engineering</option>		      			
			      			<option value="HM">Humanities & Social Science</option>
			      			<option value="ME">Mechanical Engineering</option>
			      			<option value="MA">Mathematics</option>
			      			<option value="MME">Metalurgy and Material Engineering</option>
			      			<option value="PR">Production Engineering</option>		      
			      		</select>			     
			        </div>
			        <div class="input-field col s6 l6">
			        	<input type="text" value="dept" hidden="true" />
			        </div>
			      </div>      
			      <div class="space-small"></div>
			       <div class="row">
			        <div class="input-field col s6 l6">
			        	<span class="light">Email Id:</span>
			        	          <input id="email" name="email" type="email" class="validate" required value="{!! $details->email !!}">
			        	          
			       	</div>
			        
			         <div class="input-field col l6 s6">
			         <span class="light">Area of Research:</span>
			          <input required placeholder="Area of Research" id="area_of_research" type="text" class="validate" name="area_of_research" maxlength="50" value="{!! $details->areaOfResearch !!}">
			        </div>
			        </div>
			      <div class="row">
			        <div class="input-field col l6 s6">
			        	<span class="light">Name:</span>
			      		<input required placeholder="Name of Candidate" id="name" type="text" class="validate" name="name" maxlength="32" value="{!! $details->name !!}">
			        </div>
			         <div class="input-field col l6  s6">
			         <span class="light">Father's Name:</span>
			          <input required placeholder="Father's/Guardian Name" id="father_name" type="text" class="validate" name="father_name" maxlength="32" value="{!! $details->fatherName !!}">
			        </div>
			      </div>

			      <div class="row">
			        <div class="input-field col l6">
			        	<span class="light">Date of Birth:</span>
			      		<input required id="dob" type="date" class="validate" name="dob" max="2016-06-31" min="1990-06-31" value="{!! $details->dob !!}">
			        </div>

			         <div class="input-field col l6 categCheck">
			         <span class="light">Category</span><br>
			         
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
			        <div class="input-field col l6 sexCheck">
			      		<span class="light">Sex</span><br>
			         	<!-- <input name="sex" id="sex" readonly="true" value="{!! $details->sex !!}" /> -->
			         	<select id="sex" name="sex" required="true">
			         		<option value="" disabled selected>Choose your Option</option>
			         		<option value="male">Male</option>
			         		<option value="female">Female</option>
			         	</select>
			      		
			        </div>
			         <div class="input-field col l6 statusCheck">
			         <span class="light">Marital Status</span><br>
			         
			         	<select required name="marital_status" id="marital_status">
					      <option value="" disabled selected>Choose your Marital Status</option>
					      <option value="married">Married</option>
					      <option value="single">Single</option>
					    </select>
			      </div> 
			      </div>

			      <div class="row">
			        <div class="input-field col l6 pdCheck">
			      		  <span class="light">Physically Disability(P.W.D)</span><br>
			      
			         	<select required name="ph" id="ph">
					      <option value="" disabled selected>Choose your option</option>
					      <option value="yes">Yes</option>
					      <option value="no">No</option>
					    </select>
					
			        </div>
			         <div class="input-field col l6 ">

			         <span class="light">Nationality:</span>
			          <input required placeholder="Nationality" id="nationality" type="text" class="validate" name="nationality" maxlength="32" value="{!! $details->nationality !!}">
			        </div>
			      </div>           

			       <div class="row">
			        <div class="input-field col l6"> 
			        	<span for="textarea1">Address for Communication</span><br>     		  
						<textarea required id="addr_for_commn" class="materialize-textarea" name="addr_for_commn" maxlength="200"></textarea>			          
			            <p>Mobile Number:</p>
			            <input required id="mobile" type="number" min="7000000000" max="9999999999" class="validate" name="mobile" value="{!! $details->mobile !!}" />
			        </div>
			         <div class="input-field col l6 ">
			         <span for="textarea1">Permanent Address</span><br>
			         <textarea required id="permanent_addr" class="materialize-textarea" name="permanent_addr" maxlength="200" value="{!! $details->permanentaddr !!}"></textarea>			            
			            <p>Land-Line Number:</p>
			            <input required id="landline" type="text" class="validate" name="landline" value="{!! $details->lanline !!}" />
			        </div>


			      </div> 

	  		<div class="row">
	  			<div class="col s12">
	  			<p class="vlarge">Undergraduate</p>
	  				 <div class="row">
			        <div class="input-field col l6">
			        	<span class="light">Name of Degree:</span>
			      		<input required placeholder="Name of Degree" id="ug_deg" type="text" class="validate" name="ug_deg" maxlength="32" value="{!! $details->ugdegreeName !!}">
			        </div>
			         <div class="input-field col l6 ">
			         	<span class="light">Branch Name:</span>
			         	<input required placeholder="Branch/Specialization" id="ug_branch" type="text" class="validate" name="ug_branch" maxlength="50" value="{!! $details->ugbranch !!}">
			        </div>
			      </div>

			      <div class="row">
			      	
			      	<div class="input-field col l6 ">
			      		<span class="light">C.G.P.A/Percentage:</span>
			      		<input required placeholder="C.G.P.A" id="ug_gpa" type="number" class="validate ug_cgpa" name="ug_gpa" min="4" max="100" step="0.01" value="{!! $details->uggpa !!}" >
			      	</div>
			      	<div class="input-field col l6">
			      		<span class="light">Class:</span>
			      		<select required name="ug_class" id="ug_class">
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
				      <label for="ra1">Click here if final semester results are not announced.</label>
			      </p>
			      </div>
			      </div>

			      <div class="row">
			      	<div class="input-field col l12 s12">
			      		<span class="light">College Name:</span>
			      		<input required placeholder="College Name" id="ug_name_of_inst" type="text" class="validate" name="ug_name_of_inst" maxlength="50" value="{!! $details->uginstitutionName !!}">
			      	</div>

			      	<div class="input-field col l12 s12">
			      		<span class="light">University Name:</span>
			      		<input required placeholder="University Name" id="ug_name_of_uni" type="text" class="validate" name="ug_name_of_uni" maxlength="50" value="{!! $details->uguniversityName !!}">
			      	</div>

			      	<div class="input-field col l4 s4">
			      		<span class="light">Year of Passing:</span>
			      		<input required id="ug_yop" type="number" class="validate" name="ug_yop" min="2000" max="2018" value="{!! $details->ugyop !!}">
			      	</div>
			      </div>

			      <div class="row">
	  			<div class="col s12">
	  			<p class="vlarge">Postgraduate</p>
	  				 <div class="row">
			        <div class="input-field col l6">
			        	<span class="light">Name of Degree:</span>
			      		<input required placeholder="Name of Degree" id="pg_deg" type="text" class="validate" name="pg_deg" maxlength="50" value="{!! $details->pgdeg !!}">
			        </div>
			         <div class="input-field col l6 ">
			         	<span class="light">Branch Name:</span>
			         	<input required placeholder="Branch/Specialization" id="pg_branch" type="text" class="validate" name="pg_branch" maxlength="50" value="{!! $details->pgbranch !!}">
			        </div>
			      </div>

			      <div class="row">
			      	
			      	<div class="input-field col l6">
			      		<span class="light">C.G.P.A/Percentage:</span>
			      		<input required placeholder="C.G.P.A" id="pg_gpa" type="number" class="validate pg_cgpa" name="pg_gpa" min="4" max="100" step="0.01" value="{!! $details->pggpa !!}">
			      	</div>
			      	<div class="input-field col l6">
			      		<span class="light">Class:</span>
			      		<select required name = "pg_class" id="pgclass">
					      <option value="" disabled selected>Choose your option</option>
					      <option  value="Honours">Honours</option>
					      <option  value="Distinction">Distinction</option>
					      <option  value="First">First</option>
					      <option  value="Second">Second</option>
					    </select>
			      	</div>
			      </div> 
			      <p>
				      <input type="checkbox" id="ra2" name="ra2" />
				      <label for="ra2">Click here if final semester results are not announced.</label>
				  </p>
			      </div>
			      </div>
			      <div class="row">
			      	<div class="input-field col l12 s12">
			      		<span class="light">College Name:</span>
			      		<input required placeholder="College Name" id="pg_name_of_inst" type="text" class="validate" name="pg_name_of_inst" maxlength="50" value="{!! $details->pginstitutionName !!}">
			      	</div>

			      	<div class="input-field col l12 s12">
			      	<span class="light">University Name:</span>
			      		<input required placeholder="University Name" id="pg_name_of_uni" type="text" class="validate" name="pg_name_of_uni" maxlength="50" value="{!! $details->pguniversityName !!}">
			      	</div>

			      	<div class="input-field col l4 s4">
			      		<span class="light">Year of Passing</span>
			      		<input required id="pg_yop" type="number" class="validate" name="pg_yop" min="2000" max="2018" value="{!! $details->pgyop !!}"> 
			      	</div>
			      </div>

			      <div class="row">
			      	<p class="vlarge">Other Details:</p>
			      	<div class="space-small"></div>
			      	<div class="results_announced center">
			      		<p class="center">Qualified in GATE/NET/SLET/CSIR/CAT/UGC/NBHM</p>
			      		<span>
			      			<input type="checkbox" id="announced" name="ann" />
			      			<label for="announced">Yes</label>
			      		</span>
			      		
			      	</div>
			      	<div class="space-medium"></div>
					<div class="exams"></div>		      

			      	<div class="col l12 s12">
			      		<span class="light">Title of P.G Project:</span>
			      		<input required placeholder="Title of P.G Project" id="title_of_project" type="text" class="validate" name="title_of_project" maxlength="100" value="{!! $details->pgproject !!}" >
			      	</div>
			      	<div class="col l4 s12">
			      		<p for="textarea1">Publications:</p><br>
			      		 <textarea id="details_of_pub1" placeholder="Enter Details here.." class="materialize-textarea" name="details_of_pub1" maxlength="200" value="{!! $details->publications1 !!}"></textarea>
			      	</div>
			      	<div class="col l4 s12">
			      		<p for="textarea1">Publications:</p><br>
			      		 <textarea id="details_of_pub2" placeholder="Enter Details here.." class="materialize-textarea" name="details_of_pub2" maxlength="200" value="{!! $details->publications2 !!}"></textarea>
			      	</div>
			      	<div class="col l4 s12">
			      		<p for="textarea1">Publications:</p><br>
			      		 <textarea id="details_of_pub3" placeholder="Enter Details here.." class="materialize-textarea" name="details_of_pub3" maxlength="200" value="{!! $details->publications3 !!}"></textarea>
			      	</div>
			      	<div class="col l4 s12">
			      		<p for="textarea1">Awards/ Prizes/Sports/NCC etc</p><br>
			      		 <textarea id="awards1" placeholder="Enter Details here.." class="materialize-textarea" name="awards1" maxlength="200" value="{!! $details->awards1 !!}"></textarea>
			      	</div>
			      	<div class="col l4 s12">
			      		<p for="textarea1">Awards/ Prizes/Sports/NCC etc</p><br>
			      		 <textarea id="awards2" placeholder="Enter Details here.." class="materialize-textarea" name="awards2" maxlength="200" value="{!! $details->awards2 !!}"></textarea>
			      	</div>
			      	<div class="col l4 s12">
			      		<p for="textarea1">Awards/ Prizes/Sports/NCC etc</p><br>
			      		 <textarea id="awards3" placeholder="Enter Details here.." class="materialize-textarea" name="awards3" maxlength="200" value="{!! $details->awards3 !!}"></textarea>
			      	</div>
			      </div>

			      <div class="row">
			      	<p class="vlarge">Details of Professional Experience</p>
			      	<p>*(In case of more than one employer fill the details,else fill N.A.)</p>
			      	<div class="space-small"></div>
			      	<div class="col s12 l12 emp_details">
			      		<p for="textarea1">Name & Address of Employer 1</p><br>
			      		 <textarea id="employer_details_1" placeholder="Enter Details here.." class="materialize-textarea" name="employer_details_1" value="{!! $details->proexp1 !!}"></textarea>

			      		 <p>Position Held:</p>
			      		 <input id="emp_pos_1" type="text" class="validate" name="emp_pos_1" maxlength="100" value="{!! $details->position1 !!}">

			      		 <div class="col l6 s6">
			      		 	<p>From:</p>
			      		 	<input id="emp_from_1" type="number" class="validate" name="emp_from_1" maxlength="100" value="{!! $details->from1 !!}">
			      		 </div>
			      		 <div class="col l6 s6">
			      		 	<p>To:</p>
			      		 	<input id="emp_to_1" type="number" class="validate" name="emp_to_1" maxlength="100" value="{!! $details->to1 !!}">
			      		 </div>
			      	</div>
			      	<div class="col s12 l12 emp_details">
			      		<p for="textarea1">Name & Address of Employer 2</p><br>
			      		 <textarea id="employer_details_2" placeholder="Enter Details here.." class="materialize-textarea" name="employer_details_2" value="{!! $details->proexp2 !!}"></textarea>

			      		 <p>Position Held:</p>
			      		 <input id="emp_pos_2" type="text" class="validate" name="emp_pos_2" maxlength="100" value="{!! $details->position2 !!}">

			      		 <div class="col l6 s6">
			      		 	<p>From:</p>
			      		 	<input id="emp_from_2" type="number" class="validate" name="emp_from_2" maxlength="100" value="{!! $details->from2 !!}">
			      		 </div>
			      		 <div class="col l6 s6">
			      		 	<p>To:</p>
			      		 	<input id="emp_to_2" type="number" class="validate" name="emp_to_2" maxlength="100" value="{!! $details->to2 !!}">
			      		 </div>
			      	</div>
			      	<div class="col s12 l12 emp_details">
			      		<p for="textarea1">Name & Address of Employer 3</p><br>
			      		 <textarea id="employer_details_3" placeholder="Enter Details here.." class="materialize-textarea" name="employer_details_3" value="{!! $details->proexp3 !!}"></textarea>

			      		 <p>Position Held:</p>
			      		 <input id="emp_pos_3" type="text" class="validate" name="emp_pos_3" maxlength="100" value="{!! $details->position3 !!}">

			      		 <div class="col l6 s6">
			      		 	<p>From:</p>
			      		 	<input id="emp_from_3" type="number" class="validate" name="emp_from_3" maxlength="100" value="{!! $details->from3 !!}">
			      		 </div>
			      		 <div class="col l6 s6">
			      		 	<p>To:</p>
			      		 	<input id="emp_to_3" type="number" class="validate" name="emp_to_3" maxlength="100" value="{!! $details->to3 !!}">
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
			      		<input required id="date" type="date" name="date" class="validate" max="2016-06-31" min="2016-01-31" value="{!! $details->date !!}">
			      	</div>
			      	<div class="upload col l6 s6 ">
			    <p>Upload Signature</p>
			      	<div class="file-field input-field">
		          		<div class="btn teal darken-1 btn waves-effect waves-light">
		          			<span class="light">File</span>
		          			{!! Form::file('sign' , array('class'=>'', 'required')) !!}			
		          		</div>
		          		<div class="file-path-wrapper">
	        				<input class="file-path validate" type="text">
	      				</div>
		          	</div>
			      	<div class="space-medium"></div>			      	
			      </div>

			      
			      	<div class="col l12 s12">
			      	<p><b>Note:</b> The part time external Ph.D. applicant should attach the duly filled in Form-1 & Form-2, and Part-Time on campus applicant should attach the duly filled in Form-3. Otherwise, the application will be summarily rejected.</p>
			      	</div>
			      </div>
			      
					<div class="upload_container " >
			      
			      
			      </div>
			      
					<div class="space-medium"></div>
					<div class="row">
	   			<div class="captcha center l6 offset-l3">
						{!! app('captcha')->display(); !!}      	
			     </div>      
	  			</div>

	  		<div class="center">
	      <a id="preview1" class="teal darken-1 waves-effect waves-light btn modal-trigger">Preview Form</a>

	      
	   {!! Form::submit('Submit', array('class'=>'valid1 teal darken-1 send-btn btn waves-effect waves-light' )) !!}
	   <a id="save2" class="teal darken-1 send-btn btn waves-effect waves-light center">Save Form</a>
	   </div>
	   			
		 	
		      {!! Form::close() !!}
		      
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
			
			console.log('{!! $details->addrforcomm !!}');
			$("textarea#addr_for_commn").val('{!! $details->addrforcomm !!}');
			$("textarea#permanent_addr").val('{!! $details->permanentaddr !!}');
			$("textarea#details_of_pub1").val('{!! $details->publications1 !!}');
			$("textarea#details_of_pub2").val('{!! $details->publications2 !!}');
			$("textarea#details_of_pub3").val('{!! $details->publications3 !!}');
			$("textarea#awards3").val('{!! $details->awards3 !!}');
			$("textarea#awards2").val('{!! $details->awards2 !!}');
			$("textarea#awards1").val('{!! $details->awards1 !!}');
			$("textarea#employer_details_1").val('{!! $details->proexp1 !!}');
			$("textarea#employer_details_2").val('{!! $details->proexp2 !!}');
			$("textarea#employer_details_3").val('{!! $details->proexp3 !!}');
			
			var x = $('#department1 option');
			var y = '{!! $details->dept1 !!}';
			console.log(y);
			console.log(document.getElementById('sex').value);
			
			console.log(document.getElementById('sex').value);
			// var t = '{!! $details->sex !!}';
			// $('select#sex').val('male');
			// var text1 = 'male';
			// $("select#sex option").filter(function() {
			//     //may want to use $.trim in here
			//     return $(this).text() == text1; 
			// }).attr('selected', true);
			// console.log($('select#sex option').val());


			// $('.sexCheck .select-wrapper ul>li:eq(1)').addClass('active selected');	
			////this adds the require class but doesnt show any change in the html so i tried another thing
				

			var t='{!! $details->sex !!}';
			if(t=='male'){
				$('.sexCheck .select-wrapper input').val(t);
				$('.sexCheck .select-wrapper ul>li:eq(1)').click();
			}
			else{
				$('.sexCheck .select-wrapper input').val(t);
				$('.sexCheck .select-wrapper ul>li:eq(2)').click();
			}

			t='{!! $details->maritalStatus !!}';
			
			if(t=='single'){
				$('.statusCheck .select-wrapper input').val(t);
				$('.statusCheck .select-wrapper ul>li:eq(2)').click();
			}
			else{
				$('.statusCheck .select-wrapper input').val(t);
				$('.statusCheck .select-wrapper ul>li:eq(1)').click();
			}

			t='{!! $details->PH !!}';
			console.log('hey');
			if(t=='no'){
				$('.pdCheck .select-wrapper input').val(t);
				$('.pdCheck .select-wrapper ul>li:eq(2)').click();
			}
			else{
				$('.pdCheck .select-wrapper input').val(t);
				$('.pdCheck .select-wrapper ul>li:eq(1)').click();
			}
			t='{!! $details->applicationCateg !!}';
			console.log(t);
			if(t!=''){
				$('.appCheck .select-wrapper input').val(t);	
			}

			//if conditions for departments left

			t='{!! $details->dept1 !!}';
			console.log(t);
			if(t=='AR'){
				t='Architecture';
				$('.dep1Check .select-wrapper input').val(t);		
			}
			else{
				$('.dep1Check .select-wrapper input').val(t);			
			}
			t='{!! $details->dept2 !!}';
			console.log(t);
			if(t=='AR'){
				t='Architecture';
				$('.dep2Check .select-wrapper input').val(t);		
			}
			else{
				$('.dep2Check .select-wrapper input').val(t);			
			}
			t='{!! $details->dept3 !!}';
			console.log(t);
			if(t=='AR'){
				t='Architecture';
				$('.dep3Check .select-wrapper input').val(t);		
			}
			else{
				$('.dep3Check .select-wrapper input').val(t);			
			}
			t='hello';
	// 		console.log($('.categCheck select option:eq(1)').prop('selected', false));
	// 		$('.categCheck select option:eq(0)').removeAttr('selected');
	// 		$('.categCheck select option:eq(1)').attr('selected',true);
	// console.log($('.categCheck select option:eq(1)'));
			
			$('.categCheck .select-wrapper ul>li:eq(1)').click()

			// $('.categCheck .select-wrapper ul>li:eq(1)').addClass('selected active');


			// t='{!! $details->category !!}';
			// console.log(t);
			// if(t=='OBC'){
				
			// 	$('.categCheck .select-wrapper input').val(t);

			// }
			// else if(t=='OC'){
			// 	$('.categCheck .select-wrapper input').val(t);			
			// }
			// else if(t=='SC'){
			// 	$('.categCheck .select-wrapper input').val(t);			
			// }
			// else if(t=='ST'){
			// 	$('.categCheck .select-wrapper input').val(t);			
			// }
		})
		</script>

	</body>
	</html>