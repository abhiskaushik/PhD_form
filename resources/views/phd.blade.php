<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ph.d Registration Form</title>
	<link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/css/materialize.min.css')}}">
	<!-- <link rel="shortcut icon" href="{{URL::asset('assets/logo.jpg')}}"> -->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="{{URL::asset('assets/js/jquery-2.1.1.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/materialize.min.js')}}"></script>
	
</head>
<body>

	<header></header>
	
	<nav>
    <div class="nav-wrapper ">
      
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="hide-on-med-and-down">
        <li><a href="/home">Home</a></li>
        <li><a href="/phd">Phd Admission's</a></li>
        <li><a href="/msc">M.Sc Admission's</a></li>
        <li><a href="/adminlogin">Admin</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
       <li><a href="/home">Home</a></li>
        <li><a href="/phd">Phd Admission's</a></li>
        <li><a href="/msc">M.Sc Admission's</a></li>
        <li><a href="/adminlogin">Admin</a></li>
      </ul>
    </div>
  </nav>

  <div class="space-medium"></div>

	<div class="container">
		<div class="row text-center">
			<h3>APPLICATION FOR ADMISSION TO Ph.D. PROGRAMME (2015 – 2016)</h3>
			<div class="space-medium"></div>
			<div class="divider"></div><div class="divider"></div>
		</div>

		<div class="row">

		{!! Form::open(array('url'=>'success','method'=>'POST', 'files'=>true )) !!}

			
		
  		<div class="row">
  			<p>Demand Draft Details:</p>
		    <div class="col s12">
		      <div class="row">
		        <div class="input-field col l4 s6">
		          <input required placeholder="Enter D.D Number" id="reg_number" type="text" class="validate" name="dd_no">
		        </div>
		        <div class="input-field col l4 s6 offset-l4">

		          <input required id="last_name" type="date" class="validate" name="date_of_sub">
		        </div>
		      </div>      
		      <div class="row">
		        <div class="input-field col l4 s6">
		          <input required placeholder="Enter Amount" id="reg_number" type="text" class="validate" name="amount" >
		        </div>
		        <div class="input-field col l4 s6 offset-l4">
		          <input required placeholder="Drawn At" id="reg_number" type="text" class="validate" name="drawn_at">
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
		      	<div class="file-field input-field">
				      <a class="btn">
				        <span>File</span>
				        <input type="file">
				      </a>
				      <div class="file-path-wrapper">
				        <input class="file-path validate" type="text" name="image_path">
				      </div>
				      <span>Upload Image Here</span>
    			</div>
		      </div>
  		</div>
	</div>
  		<div class="row">
  			<p>Applicant Details</p>
		    <div class="col s12">

		      <div class="row">
		        <div class="input-field col l5 s6">
		      		<input required placeholder="Department" id="reg_number" type="text" class="validate" name="department">
		        </div>
		         <div class="input-field col l5 offset-l2 s6">
		          <input required placeholder="Area of Research" id="reg_number" type="text" class="validate" name="area_of_research">
		        </div>
		      </div>      

		      <div class="row">
		        <div class="input-field col l5 s6">
		      		<input required placeholder="Name of Candidate" id="reg_number" type="text" class="validate" name="name">
		        </div>
		         <div class="input-field col l5 offset-l2 s6">
		          <input required placeholder="Father's/Guardian Name" id="reg_number" type="text" class="validate" name="father_name">
		        </div>
		      </div>

		      <div class="row">
		        <div class="input-field col l5">
		      		<input required id="reg_number" type="date" class="validate" name="dob">
		        </div>

		         <div class="input-field col l5 offset-l2">
		         <span>Category</span><br>
		         	<select required name="category">
				      <option value="" disabled selected>Choose your option</option>
				      <option value="OBC">OBC</option>
				      <option value="OC">OC</option>
				      <option value="SC">SC</option>
				      <option value="ST">ST</option>
				    </select>
		        </div>
		      </div> 

		      <div class="row">
		        <div class="input-field col l5">
		      		<span>Sex</span><br>
		         	<select required name="sex">
				      <option value="" disabled selected>Choose your option</option>
				      <option value="male">Male</option>
				      <option value="female">Female</option>
				    </select>
		      		
		        </div>

		         <div class="input-field col l5 offset-l2">
		         <span>Marital Status</span><br>
		         	<select required name="marital_status">
				      <option value="" disabled selected>Choose your option</option>
				      <option value="married">Married</option>
				      <option value="not married">Not Married</option>
				    </select>
		        </div>
		      </div> 

		      <div class="row">
		        <div class="input-field col l5">
		      		  <span>Physically Challenged(P.H)</span><br>
		         	<select required name="ph">
				      <option value="" disabled selected>Choose your option</option>
				      <option value="yes">Yes</option>
				      <option value="no">No</option>
				    </select>
		        </div>
		         <div class="input-field col l5 offset-l2">
		          <input required placeholder="Nationality" id="reg_number" type="text" class="validate" name="nationality">
		        </div>
		      </div>           

		       <div class="row">
		        <div class="input-field col l5">      		  
					<textarea required id="textarea1" class="materialize-textarea" name="addr_for_commn"></textarea>
		            <label for="textarea1">Address for Communication</label><br>
		        </div>
		         <div class="input-field col l5 offset-l2">
		         <textarea required id="textarea1" class="materialize-textarea" name="permanent_addr"></textarea>
		            <label for="textarea1">Permanent Address</label><br>
		        </div>
		      </div> 

		    </div>
  		</div>

  		<div class="row">
  			<div class="col s12">
  			<p>Undergraduate</p>
  				 <div class="row">
		        <div class="input-field col l5">
		      		<input required placeholder="Name of Degree" id="reg_number" type="text" class="validate" name="ug_deg">
		        </div>
		         <div class="input-field col l5 offset-l2">
		         	<input required placeholder="Branch/Specialization" id="reg_number" type="text" class="validate" name="ug_branch">
		        </div>
		      </div>

		      <div class="row">
		      	<div class="input-field col l4">
		      		<input required placeholder="Percentage" id="reg_number" type="number" class="validate" name="ug_percentage">
		      	</div>
		      	<div class="input-field col l4">
		      		<input required placeholder="C.G.P.A" id="reg_number" type="number" class="validate" name="ug_gpa">
		      	</div>
		      	<div class="input-field col l4">
		      		<select required name="ug_class">
				      <option value="" disabled selected>Choose your option</option>
				      <option  value="Honours">Honours</option>
				      <option  value="Distinction">Distinction</option>
				      <option  value="First">First</option>
				      <option  value="Second">Second</option>
				    </select>
    				<label>Class</label>
		      	</div>
		      </div> 
		      </div>
		      </div>

		      <div class="row">
		      	<div class="input-field col l12 s12">
		      		<input required placeholder="College Name" id="reg_number" type="text" class="validate" name="ug_name_of_inst">
		      	</div>

		      	<div class="input-field col l12 s12">
		      		<input required placeholder="University Name" id="reg_number" type="text" class="validate" name="ug_name_of_uni">
		      	</div>

		      	<div class="input-field col l4 s4">
		      		<span>Year of Passing</span>
		      		<input required id="reg_number" type="number" class="validate" name="ug_yop">
		      	</div>
		      </div>

		      <div class="row">
  			<div class="col s12">
  			<p>Postgraduate</p>
  				 <div class="row">
		        <div class="input-field col l5">
		      		<input required placeholder="Name of Degree" id="reg_number" type="text" class="validate" name="pg_deg">
		        </div>
		         <div class="input-field col l5 offset-l2">
		         	<input required placeholder="Branch/Specialization" id="reg_number" type="text" class="validate" name="pg_branch">
		        </div>
		      </div>

		      <div class="row">
		      	<div class="input-field col l4">
		      		<input required placeholder="Percentage" id="reg_number" type="number" class="validate" name="pg_percentage">
		      	</div>
		      	<div class="input-field col l4">
		      		<input required placeholder="C.G.P.A" id="reg_number" type="number" class="validate" name="pg_gpa">
		      	</div>
		      	<div class="input-field col l4">
		      		<select required name = 'pg_class'>
				      <option value="" disabled selected>Choose your option</option>
				      <option  value="Honours">Honours</option>
				      <option  value="Distinction">Distinction</option>
				      <option  value="First">First</option>
				      <option  value="Second">Second</option>
				    </select>
    				<label>Class</label>
		      	</div>
		      </div> 
		      </div>
		      </div>
		      <div class="row">
		      	<div class="input-field col l12 s12">
		      		<input required placeholder="College Name" id="reg_number" type="text" class="validate" name="pg_name_of_inst">
		      	</div>

		      	<div class="input-field col l12 s12">
		      		<input required placeholder="University Name" id="reg_number" type="text" class="validate" name="pg_name_of_uni">
		      	</div>

		      	<div class="input-field col l4 s4">
		      		<span>Year of Passing</span>
		      		<input required id="reg_number" type="number" class="validate" name="pg_yop"> 
		      	</div>
		      </div>

		      <div class="row">
		      	<p>*Write as 'RA'if results awaiting</p>
		      	<div class="col l6 s6">
		      		<input required placeholder="Enter GATE/NET/SLET/CSIR/CAT/UGC Score" id="reg_number" type="number" class="validate" name="score">
		      	</div>
		      	<div class="col l6 s6">
		      		<input required placeholder="Enter GATE/NET/SLET/CSIR/CAT/UGC Rank" id="reg_number" type="Number" class="validate" name="rank">
		      	</div>
		      	<div class="col l12 s12">
		      		<input required placeholder="Title of P.G Project" id="reg_number" type="text" class="validate" name="title_of_project">
		      	</div>
		      	<div class="col l12 s12">
		      		<p for="textarea1">Details of publication in refereed journals/ Proceedings of Conferences</p><br>
		      		 <textarea required id="textarea1" placeholder="Enter Details here.." class="materialize-textarea" name="details_of_pub"></textarea>
		      	</div>
		      	<div class="col l12 s12">
		      		<p for="textarea1">Awards/ Prizes/Sports/NCC etc</p><br>
		      		 <textarea required id="textarea1" placeholder="Enter Details here.." class="materialize-textarea" name="awards"></textarea>
		      	</div>
		      </div>

		      <div class="row">
		      	<p>Details of Professional Experience <br>
		      	*(In case of more than one employer fill the details,else fill N.A.)</p>
		      	<div class="col s12 l12">
		      		<p for="textarea1">Name & Address of Employer 1</p><br>
		      		 <textarea required id="textarea1" placeholder="Enter Details here.." class="materialize-textarea" name="employer_details_1"></textarea>
		      	</div>
		      	<div class="col s12 l12">
		      		<p for="textarea1">Name & Address of Employer 2</p><br>
		      		 <textarea required id="textarea1" placeholder="Enter Details here.." class="materialize-textarea" name="employer_details_2"></textarea>
		      	</div>
		      	<div class="col s12 l12">
		      		<p for="textarea1">Name & Address of Employer 3</p><br>
		      		 <textarea required id="textarea1" placeholder="Enter Details here.." class="materialize-textarea" name="employer_details_3"></textarea>
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
		      		<input required id="reg_number" type="date" name="date" class="validate">
		      	</div>
		      	<div class="space-medium"></div>
		      	<div class="col s6 l5 offset-l1">
		      		<p>Upload Signature</p>
		      		<div class="file-field input-field">
				      <div class="btn">
				        <span>File</span>
				        <input type="file">
				      </div>
				      <div class="file-path-wrapper">
				        <input class="file-path validate" type="text">
				      </div>
				    </div>
		      	</div>
		      </div>

		      <div class="row">
		      	<p><b>Note:</b> The part time external Ph.D. applicant should attach the duly filled in Form-1 & Form-2, and Part-Time on campus applicant should attach the duly filled in Form-3. Otherwise, the application will be summarily rejected.</p>
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
            
            <a class="grey-text text-lighten-4" href="#!">Made with * by Delta Force</a>
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