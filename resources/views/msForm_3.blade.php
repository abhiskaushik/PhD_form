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
  <h4 class="center">APPLICATION FOR ADMISSION TO M.S. PROGRAMME (2016 - 2017)</h4>
  <div class="space-medium"></div>
  <div class="container">
    <div class="row">
  {!! Form::open(array('url'=>'phdvalidate','method'=>'POST', 'files'=>true )) !!}  

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
                        <input required id="max1" type="number" class="validate" name="max1" >
                        </td>
                        <td>
                          <input required id="gpa1" type="number" class="validate" name="gpa1" >
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Second</td>
                        <td>
                        <input required id="max2" type="number" class="validate" name="max2" >
                        </td>
                        <td>
                          <input required id="gpa2" type="number" class="validate" name="gpa2" >
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Third</td>
                        <td>
                        <input required id="max3" type="number" class="validate" name="max3" >
                        </td>
                        <td>
                          <input required id="gpa3" type="number" class="validate" name="gpa3" >
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Fourth</td>
                        <td>
                        <input required id="max4" type="number" class="validate" name="max4">
                        </td>
                        <td>
                          <input required id="gpa4" type="number" class="validate" name="gpa4" >
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Fifth</td>
                        <td>
                        <input required id="max5" type="number" class="validate" name="max5">
                        </td>
                        <td>
                          <input required id="gpa5" type="number" class="validate" name="gpa5">
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Sixth</td>
                        <td>
                        <input required id="max6" type="number" class="validate" name="max6">
                        </td>
                        <td>
                          <input required id="gpa6" type="number" class="validate" name="gpa6" >
                        </td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Seventh</td>
                        <td>
                        <input required id="max7" type="number" class="validate" name="max7">
                        </td>
                        <td>
                          <input required id="gpa7" type="number" class="validate" name="gpa7" >
                        </td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Eighth</td>
                        <td>
                        <input required id="max8" type="number" class="validate eight" name="max8">
                        </td>
                        <td>
                          <input required id="gpa8" type="number" class="validate eight" name="gpa8" >
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