<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ph.d Registration Form</title>
	<link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
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
		{!! Form::open(array('url'=>'success' , 'action'=>'ValidationController@validate','method'=>'GET', 'files'=>true )) !!}
			<div class="form">
				<div class="space-small"></div>
					<div class="text-center visible-xs"><span>Registration Number:</span><input type="text" name="reg_number" /></div>
					<div class="hidden-xs"><span>Registration Number:</span><input type="text"  />
					<input class="right" type="text" name="reg_number" /><span class="right">Date:</span>
					</div>
					<div class="hidden-xs"></div>
					
				</div>
			</div>
			<div class="space-vsmall"></div>
			<div class="divider"></div>
		</div>
		<div class="space-small"></div>
		<!-- banking details -->
		<div class="row visible-xs">
			<div class="form">
				<div class="col-md-9 text-center">
					<div class="row nope">
						<div class="col-md-4">
							<span>Demand Draft Details:</span>
						</div>
						<div class="space-vsmall visible-xs"></div>
						<div class="col-md-4">
							<span>D.D. No:</span>
							<input type="text" name="dd_number" />
						</div>
						<div class="space-vsmall visible-xs"></div>
						<div class="col-md-4">
							<span>Date:</span>
								<div class="date">
									<input type="date" name="form_date"></input>
						</div>
							<div class="space-small"></div>
						</div>
						<div class="space-vsmall visible-xs"></div>
						<div class="col-md-4 col-md-offset-4">
							<span>Amount:</span>
							<input type="text" />
						</div>
						<div class="space-vsmall visible-xs"></div>
						<div class="col-md-4">
							<span>Drawn at:</span>
							<input type="text" />
						</div>
					</div>
					<div class="row nope text-center">
						<div class="space-small"></div>
						<div class="col-md-4"><span>Application Category</span></div>
						<div class="space-vsmall"></div>
						<div class="col-md-5 col-xs-4">
							<span>Full-Time</span>
							<input type="checkbox" /><br>
							<span class="small">(Stipendiary/Non-Stipendiary)</span>
						</div>
						<div class="col-md-3">
							<span>Part-Time</span>
							<input type="checkbox" />
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="space-medium"></div>
		<div class="row hidden-xs">
			<table class="table table-hover text-center">
				
				<tbody>
					<tr>
						<td class="col-3"><span> Demand Draft Details:</span></td>
						<td class="col-3">
							<span>D.D. No:</span>
							<input type="text" />
						</td>
						<td class="col-3">
							<span>Date:</span>
								<div class="date">
									<span><input type="text" placeholder="Day" /></span>
									<span><input type="text" placeholder="Month"></span>
									<span><input type="text" placeholder="Year" /></span>
						</div>
						</td>

					</tr>
					<tr>
						<td class="col-3"></td>
						<td>
							<span>Amount:</span>
							<input type="text" />
						</td>
						<td>
							<span>Drawn At:</span>
							<input type="text" />
						</td>
					</tr>
					<tr>
						<td>Application Category:</td>
						<td><span>Full-Time</span>
							<input type="checkbox" /><br>
							<span class="small">(Stipendiary/Non-Stipendiary)</span>
						</td>
						<td>
							<span>Part-Time</span>
							<input type="checkbox" />
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- department & area of Research -->
		<div class="row nope">
			<!-- <div class="form">
				<div class="col-md-12 ">
					<div class="col-md-4 text-center">
						<span>Department:</span>
					</div>
					<div class="col-md-8">
						<input type="text" class="full-width" />
					</div>
				</div>
			</div> -->
			<table class="table table-hover text-center">
				<tbody>
					<tr>
						<td class="col-2"><span> Department:</span></td>
						<td class="col-2"><input type="text" class="full-width"></td>
					</tr>
					<tr>
						<td class="col-2"><span> Area of Research:</span></td>
						<td class="col-2"><input type="text" class="full-width"></td>
					</tr>
				</tbody>
			</table>
		</div>



		<!-- personal details -->
		<div class="row nope">
			<table class="table table-hover text-center myTable">
				<tbody>
					<tr>
						<td class="col-2"><span>Name of The Candidate:</span></td>
						<td class="col-2"><input type="text" class="full-width" /></td>
					</tr>
					<tr>
						<td class="col-2"><span>Father's/Guardian's Name:</span></td>
						<td class="col-2"><input type="text" class="full-width" /></td>
					</tr>
					<tr>
						<td class="col-2"><span>Date of Birth(dd/mm/yy):</span></td>
						<td class="col-2">
							<div class="date">
									<span><input type="text" /><a href="#" class="large none">/</a></span>
									<span><input type="text"><a href="#" class="large none">/</a></span>
									<span><input type="text" /></span>
							</div>
						</td>
					</tr>
					<tr>
						<td class="col-2"><span> Category:</span></td>
						<td class="category col-2">
							<span>OBC</span><input type="checkbox" />
							<span>SC</span><input type="checkbox" />
							<span>OC</span><input type="checkbox" />
							<span>ST</span><input type="checkbox" />
						</td>
					</tr>
					<tr>
						<td><span>Sex & Marital Status:</span></td>
						<td class="category col-2">
							<span>Male</span><input type="checkbox" />
							<span>Female </span><input type="checkbox" />

							<span>Married</span><input type="checkbox" />
							<span>Single</span><input type="checkbox" />
						</td>
					</tr>
					<tr>
						<td class="col-2"><span>Physically Challenged (PH):</span></td>
						<td class="category col-2">
							<span>YES</span><input type="checkbox" />
							<span>NO</span><input type="checkbox" />
						</td>
					</tr>
					<tr>
						<td class="col-2"><span>Nationality:</span></td>
						<td class="col-2"><input type="text" class="full-width" /></td>
					</tr>
				</tbody>
			</table>
			
		</div>
		<!-- third section -->
		<div class="row nope">
			<table class="table table-hover text-center">
			
				<tbody>
					<tr>
						<td class="col-2"><span>Address For Communication:</span></td>
						<!-- <td class="col-2"><input type="text" class="full-width" /></td> -->
						<td class="visible-lg"><textarea cols="40" rows="3"></textarea></td>
						<td class="visible-xs"><textarea cols="15" rows="3"></textarea></td>
					</tr>
					<tr>
						<td class="col-2"><span>Permanent Address:</span></td>
						<!-- <td class="col-2"><input type="text" class="full-width" /></td> -->
						<td class="visible-lg"><textarea cols="40" rows="3"></textarea></td>
						<td class="visible-xs"><textarea cols="15" rows="3"></textarea></td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- qualifying degree qualifications -->
		<div class="row">
		<table class="table table-hover text-center">
			<thead>
				<tr>
					<th>Undergraduate</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="col-2"><span>Name of the degree:</span></td>
					<td class="col-2"><input type="text" class="full-width" /></td>
				</tr>
				<tr>
					<td class="col-2"><span>Branch/Specialization:</span></td>
					<td class="col-2"><input type="text" class="full-width" /></td>
				</tr>
				<tr>
					<td class="col-2"><span>Percentage & C.G.P.A:</span></td>
					<td class="col-2"><input type="text" class="full-width" /></td>
				</tr>
				<tr>
					<td class="col-2"><span>Class:</span><span class="small">
						(Honours / Distinction / First / Second)
					</span></td>
					<td class="col-2"><input type="text" class="full-width" /></td>
				</tr>
				<tr>
					<td class="col-2"><span>Name of Institution:</span></td>
					<td class="col-2"><input type="text" class="full-width" /></td>
				</tr>
				<tr>
					<td class="col-2"><span>Name of University:</span></td>
					<td class="col-2"><input type="text" class="full-width" /></td>
				</tr>
				<tr>
					<td class="col-2"><span>Year of Passing:</span></td>
					<td class="col-2">
						<div class="date">
									<span><input type="text" placeholder="Day" /></span>
									<span><input type="text" placeholder="Month"></span>
									<span><input type="text" placeholder="Year" /></span>
						</div>
					</td>
				</tr>

			</tbody>
		</table>
		</div>

		<div class="row nope">
		<table class="table table-hover text-center">
			<thead>
				<tr>
					<th>Post Graduate</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="col-2"><span>Name of the degree:</span></td>
					<td class="col-2"><input type="text" class="full-width" /></td>
				</tr>
				<tr>
					<td class="col-2"><span>Branch/Specialization:</span></td>
					<td class="col-2"><input type="text" class="full-width" /></td>
				</tr>
				<tr>
					<td class="col-2"><span>Percentage & C.G.P.A:</span></td>
					<td class="col-2"><input type="text" class="full-width" /></td>
				</tr>
				<tr>
					<td class="col-2"><span>Class:</span><span class="small">
						(Honours / Distinction / First / Second)
					</span></td>
					<td class="col-2"><input type="text" class="full-width" /></td>
				</tr>
				<tr>
					<td class="col-2"><span>Name of Institution:</span></td>
					<td class="col-2"><input type="text" class="full-width" /></td>
				</tr>
				<tr>
					<td class="col-2"><span>Name of University:</span></td>
					<td class="col-2"><input type="text" class="full-width" /></td>
				</tr>
				<tr>
					<td class="col-2"><span>Year of Passing:</span></td>
					<td class="col-2">
						<div class="date">
									<span><input type="text" placeholder="Day" /></span>
									<span><input type="text" placeholder="Month"></span>
									<span><input type="text" placeholder="Year" /></span>
						</div>
					</td>
				</tr>

			</tbody>
		</table>
		</div>

		<div class="row nope">
			<table class="table table-hover text-center">
				<thead>
					<tr>
						<th>* Write as ‘RA’ if results awaiting</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="col-2 visible-lg"><span>GATE/NET/SLET/CSIR/CAT/UGC(Score & Rank):	</span></td>
						<td class="col-2 visible-xs"><span>GATE/NET/SLET/<br>CSIR/CAT/UGC:</span></td>
						<td class="col-2"><span></span> <input type="text" class="full-width" /></td>
					</tr>
					<tr>
						<td class="col-2"><span>Title of P.G. Project:</span></td>
						<td class="col-2"><input type="text" class="full-width" /></td>
					</tr>
					<tr>
						<td class="col-2"><span>Details of publication in refereed journals/ Proceedings of Conferences</span></td>
						<td class="col-2"><input type="text" class="full-width" /></td>
					</tr>
					<tr>
						<td class="col-2"><span>Awards/ Prizes/Sports/NCC etc</span></td>
						<td class="col-2"><input type="text" class="full-width" /></td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="row">
			<table class="table table-hover text-center">
				<thead>
					<tr>
						<th>Details of Professional Experience:</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="col-2"><span>Name & Address of Employer</span></td>
						<td class="col-2"><input type="text" class="full-width" /></td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="row">
			<p class="padding">I do hereby declare that the information furnished in this application are true and correct to the best of my
knowledge. If, any of the particulars furnished above is found to be incorrect at the time of admission, the
admission may be cancelled.</p>
		</div>

		<div class="row">
			<div class="col-md-offset-1 col-md-6 col-xs-6">
				<span>Date:</span>
				<div class="date">
									<span><input type="text" placeholder="Day" /></span>
									<span><input type="text" placeholder="Month"></span>
									<span><input type="text" placeholder="Year" /></span>
						</div>
			</div>
			<div class="col-md-5 col-xs-6">
				<span>Signature of Applicant</span>
			</div>
		</div>
		<div class="space-large"></div>

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
			<p class="padding">
				<b>Note: The part time external Ph.D. applicant should attach the duly filled in Form-1 & Form-2, and
 Part-Time on campus applicant should attach the duly filled in Form-3. Otherwise, the application
 will be summarily rejected.</b>
			</p>
			</div>
		</div>
	</div>
	 {!! Form::submit('Submit', array('class'=>'teal darken-1 send-btn btn waves-effect waves-light' )) !!}
	      {!! Form::close() !!}
	<!-- form starts here -->
	
</body>
</html>