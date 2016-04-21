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
	<link rel="shortcut icon" href="{{URL::asset('assets/logo.jpg')}}"> 
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="{{URL::asset('assets/js/jquery-2.1.1.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/materialize.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/jquery-ui.js')}}"></script>
	<script src="{{URL::asset('assets/js/code.js')}}"></script>
	<script src="{{URL::asset('assets/js/savephd.js')}}"></script>
	<script src="{{URL::asset('assets/js/preview.js')}}"></script>
	
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
  <div class="space-large"></div>
  <h4 class="center">APPLICATION FOR ADMISSION TO Ph.D. PROGRAMME (2016 - 2017)</h4>
  <div class="space-medium"></div>
  <div class="container">
    <div class="row">
  {!! Form::open(array('url'=>'phdvalidate','method'=>'POST', 'files'=>true )) !!}  

  <div class="row">              
        <p class="large">Application Category</p>       
            
              
            <div class="input-field col l6 s12">
            
                <select class="applicationCateg" name="appl_categ" required id="appl_categ">
                <option value="" disabled selected class="first">Select</option>
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
        <p class="large">Upload Image</p>
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
            
            
        
      
  
      <div class="row">
        <p class="vlarge">Applicant Details</p>

        <div class="input-field col l6 s12">
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
            
            
        
      
  
      <div class="row">
        <p>Applicant Details</p>
        <div class="col s12">

          <div class="row dept">
            <div class="input-field col l6 s6 ">

              <select name="department1" required id="department1" value="">

                 <option value="" disabled selected>Department Preference 1</option>
                <option value="AR">Architecture</option>
                <option value="CS">Computer Science and Engineering</option>
                <option value="CL">Chemical</option>
                <option value="CV">Civil Engineering </option>
                <option value="CY">Chemistry </option>
                <option value="CA">CA </option>
                <option value="EE">Electrical & Electronics Engineering</option>
                <option value="EC">Electronics & Communication Engineering</option>
                <option value="HM">Humanities</option>
                <option value="ME">Mechanical 
                Engineering</option>
                <option value="MA">Maths</option>
                <option value="MS">MBA
                Engineering</option>
                <option value="PR">Production Engineering</option
                <option value="IC">Instrumentation And Control Engineering</option>
                <option value="MME">Metalurgy and Material Sciences</option>
                <option value="PH">Physics</option>
                <option value="EN">DEE</option>
                <option value="CC">CECASE</option>
              </select>
              
            </div>
            <div class="input-field col l6 s6 ">

              <select name="department2">

                 <option value="" disabled selected id="department2">Department Preference 1</option>
                <option value="AR">Architecture</option>
                <option value="CS">Computer Science and Engineering</option>
                <option value="CL">Chemical</option>
                <option value="CV">Civil Engineering </option>
                <option value="CY">Chemistry </option>
                <option value="CA">CA </option>
                <option value="EE">Electrical & Electronics Engineering</option>
                <option value="EC">Electronics & Communication Engineering</option>
                <option value="HM">Humanities</option>
                <option value="ME">Mechanical 
                Engineering</option>
                <option value="MA">Maths</option>
                <option value="MS">MBA
                Engineering</option>
                <option value="PR">Production Engineering</option
                <option value="IC">Instrumentation And Control Engineering</option>
                <option value="MME">Metalurgy and Material Sciences</option>
                <option value="PH">Physics</option>
                <option value="EN">DEE</option>
                <option value="CC">CECASE</option>
              </select>
              
            </div>
            <div class="input-field col l6 s6 ">

              <select name="department3" id="department3">

                 <option value="" disabled selected>Department Preference 1</option>
                <option value="AR">Architecture</option>
                <option value="CS">Computer Science and Engineering</option>
                <option value="CL">Chemical</option>
                <option value="CV">Civil Engineering </option>
                <option value="CY">Chemistry </option>
                <option value="CA">CA </option>
                <option value="EE">Electrical & Electronics Engineering</option>
                <option value="EC">Electronics & Communication Engineering</option>
                <option value="HM">Humanities</option>
                <option value="ME">Mechanical 
                Engineering</option>
                <option value="MA">Maths</option>
                <option value="MS">MBA
                Engineering</option>
                <option value="PR">Production Engineering</option
                <option value="IC">Instrumentation And Control Engineering</option>
                <option value="MME">Metalurgy and Material Sciences</option>
                <option value="PH">Physics</option>
                <option value="EN">DEE</option>
                <option value="CC">CECASE</option>
              </select>
              
            </div>
            
            
            <div class="input-field col s6 l6">
                        <input id="email" name="email" type="email" class="validate" required value="{!! $details->email !!}">
                        <label for="last_name">Email</label>
            </div>
            
             <div class="input-field col l12 s12">
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

             <div class="input-field col l6 ">
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
            <div class="input-field col l6">
              <span class="light">Sex</span><br>
              <select required name="sex" id="sex">
              <option value="" disabled selected>Choose your Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
              
            </div>

             <div class="input-field col l6 ">
             <span class="light">Marital Status</span><br>
              <select required name="marital_status" id="marital_status">
              <option value="" disabled selected>Choose your Marital Status</option>
              <option value="married">Married</option>
              <option value="notmarried">Not Married</option>
            </select>
            </div>
          </div> 

          <div class="row">
            <div class="input-field col l6">
                <span class="light">Physically Challenged(P.H)</span><br>
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
          <textarea required id="addr_for_commn" class="materialize-textarea" name="addr_for_commn" maxlength="200" value="{!! $details->addrforcommn !!}"></textarea>
                

                <p>Mobile Number:</p>
                <input required id="mobile" type="number" min="7000000000" max="9999999999" class="validate" name="mobile" value="{!! $details->mobile !!}"></input>
            </div>
             <div class="input-field col l6 ">
             <span for="textarea1">Permanent Address</span><br>
             <textarea required id="permanent_addr" class="materialize-textarea" name="permanent_addr" maxlength="200" value="{!! $details->permanentaddr !!}"></textarea>
                

                <p>Land-Line Number:</p>
                <input required id="landline" type="number" class="validate" min="7000000000" max="9999999999" name="landline" value="{!! $details->lanline !!}">
            </div>


          </div> 

        </div>
      </div>


  <div class="row">
        <div class="col s12">
        <p class="large">Undergraduate</p>
           <div class="row">
            <div class="input-field col l6">
              <span class="light">Name of Degree:</span>
              <input required placeholder="Name of Degree" id="ug_deg" type="text" class="validate" name="ug_deg" maxlength="32">
            </div>
             <div class="input-field col l6 ">
              <span class="light">Branch Name:</span>
              <input required placeholder="Branch/Specialization" id="ug_branch" type="text" class="validate" name="ug_branch" maxlength="50">
            </div>
          </div>

          <div class="row">
            
            <div class="input-field col l6 ">
              <span class="light">C.G.P.A:</span>
              <input required placeholder="C.G.P.A" id="ug_gpa" type="number" class="validate ug_cgpa" name="ug_gpa" min="4" max="10" step="0.01">
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
            <label for="ra1">If results are not announced,click </label>
          </p>
          </div>
          </div>

          <div class="row">
            <div class="input-field col l12 s12">
              <span class="light">College Name/Institution Name:</span>
              <input required placeholder="College Name" id="ug_name_of_inst" type="text" class="validate" name="ug_name_of_inst" maxlength="50">
            </div>

            <div class="input-field col l12 s12">
              <span class="light">University Name:</span>
              <input required placeholder="University Name" id="ug_name_of_uni" type="text" class="validate" name="ug_name_of_uni" maxlength="50">
            </div>

            <div class="input-field col l4 s4">
              <span class="light">Year of Passing</span>
              <input required id="ug_yop" type="number" class="validate" name="ug_yop" min="1900" max="2018">
            </div>
          </div>

          <div class="row">
        <div class="col s12">
        <p class="large">Postgraduate</p>
           <div class="row">
            <div class="input-field col l6">
              <span class="light">Name of Degree:</span>
              <input required placeholder="Name of Degree" id="pg_deg" type="text" class="validate" name="pg_deg" maxlength="50">
            </div>
             <div class="input-field col l6 ">
              <span class="light">Branch Name:</span>
              <input required placeholder="Branch/Specialization" id="pg_branch" type="text" class="validate" name="pg_branch" maxlength="50">
            </div>
          </div>

          <div class="row">
            
            <div class="input-field col l6">
              <span class="light">C.G.P.A:</span>
              <input required placeholder="C.G.P.A" id="pg_gpa" type="number" class="validate pg_cgpa" name="pg_gpa" min="4" max="10" step="0.01">
            </div>
            <div class="input-field col l6">
              <span class="light">Class:</span>
              <select required name = 'pg_class' id="pg_class">
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
            <label for="ra2">If results are not announced,click </label>
        </p>
          </div>
          </div>
          <div class="row">
            <div class="input-field col l12 s12">
              <span class="light">College Name/Institution Name:</span>
              <input required placeholder="College Name" id="pg_name_of_inst" type="text" class="validate" name="pg_name_of_inst" maxlength="50">
            </div>

            <div class="input-field col l12 s12">
            <span class="light">University Name:</span>
              <input required placeholder="University Name" id="pg_name_of_uni" type="text" class="validate" name="pg_name_of_uni" maxlength="50">
            </div>

            <div class="input-field col l4 s4">
              <span class="light">Year of Passing</span>
              <input required id="pg_yop" type="number" class="validate" name="pg_yop" min="1900" max="2018"> 
            </div>
          </div>

          <div class="row">
            <p class="large">Other Details:</p>
            
            <div class="space-small"></div>
            <div class="results_announced center">
              <p class="center">Have you qualified in GATE or other Competitive Exam?</p>
              <span>
                <input type="checkbox" id="announced" name="ann" />
                <label for="announced">Yes</label>
              </span>
              <span>
                <input type="checkbox" id="nannounced" name="nann" />
                <label for="nannounced">No</label>
              </span>
            </div>
            <div class="space-medium"></div>
        <div class="exams"></div>         

            <div class="col l12 s12">
              <span class="light">Title of P.G Project:</span>
              <input required placeholder="Title of P.G Project" id="title_of_project" type="text" class="validate" name="title_of_project" maxlength="100">
            </div>
            <div class="col l4 s12">
              <span class="light" for="textarea1" >Publications:</span><br>
               <textarea id="details_of_pub1" placeholder="Enter Details here.." class="materialize-textarea" name="details_of_pub1" maxlength="200"></textarea>
            </div>
            <div class="col l4 s12">
              <span class="light" for="textarea1">Publications:</span><br>
               <textarea id="details_of_pub2" placeholder="Enter Details here.." class="materialize-textarea" name="details_of_pub2" maxlength="200"></textarea>
            </div>
            <div class="col l4 s12">
              <span class="light" for="textarea1">Publications:</span><br>
               <textarea id="details_of_pub3" placeholder="Enter Details here.." class="materialize-textarea" name="details_of_pub3" maxlength="200"></textarea>
            </div>
            <div class="col l4 s12">
              <span class="light" for="textarea1">Awards/ Prizes/Sports/NCC etc</span><br>
               <textarea id="awards1" placeholder="Enter Details here.." class="materialize-textarea" name="awards1" maxlength="200"></textarea>
            </div>
            <div class="col l4 s12">
              <span class="light" for="textarea1">Awards/ Prizes/Sports/NCC etc</span><br>
               <textarea id="awards2" placeholder="Enter Details here.." class="materialize-textarea" name="awards2" maxlength="200"></textarea>
            </div>
            <div class="col l4 s12">
              <span class="light" for="textarea1">Awards/ Prizes/Sports/NCC etc</span><br>
               <textarea id="awards3" placeholder="Enter Details here.." class="materialize-textarea" name="awards3" maxlength="200"></textarea>
            </div>
          </div>

          <div class="row">
            <span class="light">Details of Professional Experience</span>
            <p>*(In case of more than one employer fill the details,else fill N.A.)</p>
            <div class="space-small"></div>
            <div class="col s12 l12 emp_details">
              <span class="light" for="textarea1">Name & Address of Employer 1</span><br>
               <textarea id="employer_details_1" placeholder="Enter Details here.." class="materialize-textarea" name="employer_details_1"></textarea>

               <p>Position Held:</p>
               <input id="emp_pos_1" type="text" class="validate" name="emp_pos_1" maxlength="100">

               <div class="col l6 s6">
                <span class="light">From:</span>
                <input id="emp_from_1" type="number" class="validate" name="emp_from_1" maxlength="100">
               </div>
               <div class="col l6 s6">
                <span class="light">To:</span>
                <input id="emp_to_1" type="number" class="validate" name="emp_to_1" maxlength="100">
               </div>
            </div>
            <div class="col s12 l12 emp_details">
              <span class="light" for="textarea1">Name & Address of Employer 2</span><br>
               <textarea id="employer_details_2" placeholder="Enter Details here.." class="materialize-textarea" name="employer_details_2"></textarea>

               <span class="light">Position Held:</span>
               <input id="emp_pos_2" type="text" class="validate" name="emp_pos_2" maxlength="100">

               <div class="col l6 s6">
                <span class="light">From:</span>
                <input id="emp_from_2" type="number" class="validate" name="emp_from_2" maxlength="100">
               </div>
               <div class="col l6 s6">
                <span class="light">To:</span>
                <input id="emp_to_2" type="number" class="validate" name="emp_to_2" maxlength="100">
               </div>
            </div>
            <div class="col s12 l12 emp_details">
              <span class="light" for="textarea1">Name & Address of Employer 3</span><br>
               <textarea id="employer_details_3" placeholder="Enter Details here.." class="materialize-textarea" name="employer_details_3"></textarea>

               <span class="light">Position Held:</span>
               <input id="emp_pos_3" type="text" class="validate" name="emp_pos_3" maxlength="100">

               <div class="col l6 s6">
                <span class="light">From:</span>
                <input id="emp_from_3" type="number" class="validate" name="emp_from_3" maxlength="100">
               </div>
               <div class="col l6 s6">
                <span class="light">From:</span>
                <input id="emp_to_3" type="number" class="validate" name="emp_to_3" maxlength="100">
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
              <input required id="date" type="date" name="date" class="validate" max="2016-06-31" min="2016-01-31">
            </div>
            <div class="col l6 s6">
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
            </div>
            <div class="space-medium"></div>
            
          </div>

          <div class="row">
            <div class="col l12 s12">
            <p><b>Note:</b> The part time external Ph.D. applicant should attach the duly filled in Form-1 & Form-2, and Part-Time on campus applicant should attach the duly filled in Form-3. Otherwise, the application will be summarily rejected.</p>
            </div>
          </div>
          
        <div class="upload_container " >
          
          
          </div>
      
          

      <div class="center">
      <a id="preview1" href="#preview" class="teal darken-1 waves-effect waves-light btn modal-trigger">Preview Form</a>
      
   {!! Form::submit('Submit', array('class'=>'teal darken-1 send-btn btn waves-effect waves-light' )) !!}
   <a id="save" class="teal darken-1 send-btn btn waves-effect waves-light center">Save Form</a>
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

	});
	</script>

</body>
</html>