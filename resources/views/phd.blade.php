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
	
	<script src="{{URL::asset('assets/js/jquery-2.1.1.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
	
</head>
<body>
	<div class="container">
		<div class="row text-center">
			<h2>APPLICATION FOR ADMISSION TO Ph.D. PROGRAMME (2015 – 2016)</h2>
			<div class="space-medium"></div>
			<div class="divider"></div><div class="divider"></div>
		</div>

		<div class="row">
		{!! Form::open(array('url'=>'success' ,'method'=>'GET', 'files'=>true )) !!}
			
		<div class="row">
		    <div class="col s12">
		      <div class="row">
		        <div class="input-field col l4 s6 ">
		          <input placeholder="Registration Number" id="reg_number" type="text" class="validate" name="reg_number">
		        </div>
		        <div class="input-field col l4 s6 offset-l4">
		          <input id="last_name" type="date" class="validate" name="date">
		        </div>
		      </div>      
		    </div>
  		</div>

  		<div class="row">
  			<label>Demand Draft Details:</label>
		    <div class="col s12">
		      <div class="row">
		        <div class="input-field col l4 s6">
		          <input placeholder="Enter D.D Number" id="reg_number" type="text" class="validate" name="dd_no">
		        </div>
		        <div class="input-field col l4 s6 offset-l4">
		          <input id="last_name" type="date" class="validate" name="date_of_sub">
		        </div>
		      </div>      
		      <div class="row">
		        <div class="input-field col l4 s6">
		          <input placeholder="Enter Amount" id="reg_number" type="text" class="validate" name="amount">
		        </div>
		        <div class="input-field col l4 s6 offset-l4">
		          <input placeholder="Drawn At" id="reg_number" type="text" class="validate" name="drawn_at">
		        </div>
		      </div>      
		    </div>

		    <div class="row">
  			<label>Application Category</label>
		    <div class="col s12">
		      <div class="row">
		        <div class="input-field col l4 s6">
		      		<input name="group1" type="radio" id="ac1" /><label for="ac1" >Full Time</label>
		      		<input name="group1" type="radio" id="ac2" /><label for="ac2" >Part Time</label>
		        </div>
		        
		      </div>      
		    </div>
  		</div>

  		<div class="row">
  			<label>Applicant Details</label>
		    <div class="col s12">

		      <div class="row">
		        <div class="input-field col l5 s6">
		      		<input placeholder="Department" id="reg_number" type="text" class="validate" name="department">
		        </div>
		         <div class="input-field col l5 offset-l2 s6">
		          <input placeholder="Area of Research" id="reg_number" type="text" class="validate" name="area_of_research">
		        </div>
		      </div>      

		      <div class="row">
		        <div class="input-field col l5 s6">
		      		<input placeholder="Name of Candidate" id="reg_number" type="text" class="validate" name="name">
		        </div>
		         <div class="input-field col l5 offset-l2 s6">
		          <input placeholder="Father's/Guardian Name" id="reg_number" type="text" class="validate" name="father_name">
		        </div>
		      </div>

		      <div class="row">
		        <div class="input-field col l5">
		      		<input id="reg_number" type="date" class="validate" name="dob">
		        </div>

		         <div class="input-field col l5 offset-l2">
		         <span>Category</span><br>
		         	<input name="group1" type="radio" id="ac1" /><label for="ac1" >OC</label>
		      		<input name="group1" type="radio" id="ac2" /><label for="ac2" >OBC</label>
		      		<input name="group1" type="radio" id="ac3" /><label for="ac3" >SC</label>
		      		<input name="group1" type="radio" id="ac4" /><label for="ac4" >ST</label>
		        </div>
		      </div> 

		      <div class="row">
		        <div class="input-field col l5">
		      		  <span>Physically Challenged(P.H)</span><br>
		         	<input name="group1" type="radio" id="ac1" /><label for="ac1" >Yes</label>
		      		<input name="group1" type="radio" id="ac2" /><label for="ac2" >No</label>
		        </div>
		         <div class="input-field col l5 offset-l2">
		          <input placeholder="Nationality" id="reg_number" type="text" class="validate" name="nationality">
		        </div>
		      </div>           

		       <div class="row">
		        <div class="input-field col l5">      		  
					<textarea id="textarea1" class="materialize-textarea" name="addr_for_commn"></textarea>
		            <label for="textarea1">Address for Communication</label><br>
		        </div>
		         <div class="input-field col l5 offset-l2">
		         <textarea id="textarea1" class="materialize-textarea" name="permanent_addr"></textarea>
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
		      		<input placeholder="Name of Degree" id="reg_number" type="text" class="validate" name="ug_deg">
		        </div>
		         <div class="input-field col l5 offset-l2">
		         	<input placeholder="Branch/Specialization" id="reg_number" type="text" class="validate" name="ug_branch">
		        </div>
		      </div>

		      <div class="row">
		      	<div class="input-field col l4">
		      		<input placeholder="Percentage" id="reg_number" type="number" class="validate" name="ug_percentage">
		      	</div>
		      	<div class="input-field col l4">
		      		<input placeholder="C.G.P.A" id="reg_number" type="number" class="validate" name="ug_gpa">
		      	</div>
		      	<div class="input-field col l4">
		      		<select>
				      <option value="" disabled selected>Choose your option</option>
				      <option value="1">Honours</option>
				      <option value="2">Distinction</option>
				      <option value="3">First</option>
				      <option value="4">Second</option>
				    </select>
    				<label>Class</label>
		      	</div>
		      </div> 

		      <div class="row">
		      	<div class="input-field col l12 s12">
		      		<input placeholder="College Name" id="reg_number" type="text" class="validate" name="ug_name_of_inst">
		      	</div>

		      	<div class="input-field col l12 s12">
		      		<input placeholder="University Name" id="reg_number" type="text" class="validate" name="ug_name_of_uni">
		      	</div>

		      	<div class="input-field col l4 s4">
		      		<span>Year of Passing</span>
		      		<input id="reg_number" type="number" class="validate" name="ug_yop">
		      	</div>
		      </div>

		      <div class="row">
  			<div class="col s12">
  			<p>Postgraduate</p>
  				 <div class="row">
		        <div class="input-field col l5">
		      		<input placeholder="Name of Degree" id="reg_number" type="text" class="validate" name="pg_deg">
		        </div>
		         <div class="input-field col l5 offset-l2">
		         	<input placeholder="Branch/Specialization" id="reg_number" type="text" class="validate" name="pg_branch">
		        </div>
		      </div>

		      <div class="row">
		      	<div class="input-field col l4">
		      		<input placeholder="Percentage" id="reg_number" type="number" class="validate" name="pg_percentage">
		      	</div>
		      	<div class="input-field col l4">
		      		<input placeholder="C.G.P.A" id="reg_number" type="number" class="validate" name="pg_gpa">
		      	</div>
		      	<div class="input-field col l4">
		      		<select>
				      <option value="" disabled selected>Choose your option</option>
				      <option value="1">Honours</option>
				      <option value="2">Distinction</option>
				      <option value="3">First</option>
				      <option value="4">Second</option>
				    </select>
    				<label>Class</label>
		      	</div>
		      </div> 

		      <div class="row">
		      	<div class="input-field col l12 s12">
		      		<input placeholder="College Name" id="reg_number" type="text" class="validate" name="pg_name_of_inst">
		      	</div>

		      	<div class="input-field col l12 s12">
		      		<input placeholder="University Name" id="reg_number" type="text" class="validate" name="pg_nae_of_uni">
		      	</div>

		      	<div class="input-field col l4 s4">
		      		<span>Year of Passing</span>
		      		<input id="reg_number" type="number" class="validate" name="pg_yop"> 
		      	</div>
		      </div>

		      <div class="row">
		      	<p>*Write as 'RA'if results awaiting</p>
		      	<div class="col l6 s6">
		      		<input placeholder="Enter GATE/NET/SLET/CSIR/CAT/UGC Score" id="reg_number" type="number" class="validate" name="score">
		      	</div>
		      	<div class="col l6 s6">
		      		<input placeholder="Enter GATE/NET/SLET/CSIR/CAT/UGC Rank" id="reg_number" type="Number" class="validate" name="rank">
		      	</div>
		      	<div class="col l12 s12">
		      		<input placeholder="Title of P.G Project" id="reg_number" type="text" class="validate" name="title_of_project">
		      	</div>
		      	<div class="col l12 s12">
		      		<p for="textarea1">Details of publication in refereed journals/ Proceedings of Conferences</p><br>
		      		 <textarea id="textarea1" placeholder="Enter Details here.." class="materialize-textarea" name="details_of_pub"></textarea>
		      	</div>
		      	<div class="col l12 s12">
		      		<p for="textarea1">Awards/ Prizes/Sports/NCC etc</p><br>
		      		 <textarea id="textarea1" placeholder="Enter Details here.." class="materialize-textarea" name="awards"></textarea>
		      	</div>
		      </div>

		      <div class="row">
		      	<p>Details of Professional Experience <br>
		      	*(In case of more than one employer fill the details,else fill N.A.)</p>
		      	<div class="col s12 l12">
		      		<p for="textarea1">Name & Address of Employer 1</p><br>
		      		 <textarea id="textarea1" placeholder="Enter Details here.." class="materialize-textarea" name="employer_details_1"></textarea>
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
		      	<div class="col l10 s10 offset-l1 offset-s1">
		      		<p>I do hereby declare that the information furnished in this application are true and correct to the best of my knowledge. If, any of the particulars furnished above is found to be incorrect at the time of admission, the admission may be cancelled.</p>
		      	</div>
		      </div>

		      <div class="row">

		      	<div class="col s6 l5">
		      		<p>Date of Submission</p>
		      		<input id="reg_number" type="date" class="validate">
		      	</div>
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

  			</div>
  		</div>


  		<div class="center">
	 {!! Form::submit('Submit', array('class'=>'teal darken-1 send-btn btn waves-effect waves-light' )) !!}
	 </div>
	      {!! Form::close() !!}
	<!-- form starts here -->
	
</body>
</html>