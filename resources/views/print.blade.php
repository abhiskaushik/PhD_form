<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Success Page</title>
  <link rel="stylesheet" href="{{base_path('public/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{base_path('public/assets/css/materialize.min.css')}}">
  <!-- <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

  <script src="{{base_path('public/assets/js/jquery-2.1.1.min.js')}}"></script>
  <script src="{{base_path('public/assets/js/materialize.min.js')}}"></script> 
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <div class="col l4">
      <img width="100px" height="100px" src="{{base_path('public/assets/images/logo.png')}}">
    </div>
    <div class="col l8">
       <div class="space-small"></div>
          <h4>APPLICATION FOR ADMISSION<br> TO Ph.D. PROGRAMME <br>(2015 – 2016)</h4>
    </div>
  </div>
</div>

<div class="container-fluid">

 <!--  <div class="row">
    <div class="col l12">
      <p class="large"><b>Registration Number:</b>  {!! $candidates['registrationNumber'] !!}</p>      
    </div>
  </div>

  <div class="row">
    <p>Demand Draft Details</p>  
    <div class="col l12">
      <p class="large"><b>D.D Number:</b>{!! $dd['ddno'] !!}</p>
    </div>
    <div class="col l12">
      <p class="large"><b>D.D Date:</b>{!! $dd['date'] !!}</p>
    </div>
  </div>

  <div class="row">
    
  </div> -->

  <h5>Candidate's Form</h5>
          <p><b>Registration Number:</b> {!! $candidates['registrationNumber'] !!}</p>
          <p><b>Date of Registration:</b> {!! $candidates['dateOfReg'] !!}
          </p>
          <p><b>D.D Number:</b> {!! $dd['ddno'] !!}</p>
          <p><b>Date of Submission of D.D:</b>{!! $dd['date'] !!} </p>
          <p><b>Amount(D.D):</b> {!! $dd['amount'] !!}</p>
          <p><b>Drawn At(D.D):</b> {!! $dd['drawnAt'] !!}</p>
          <p><b>Application Category:</b> {!! $candidates['applicationCategory'] !!}</p>
          <p><b>Department:</b> {!! $candidates['dept'] !!}</p>
          <p><b>Area of Research:</b> {!! $candidates['areaOfResearch'] !!}</p>
          <p><b>Name of Candidate:</b> {!! $candidates['name'] !!}</p>
          <p><b>Father's Name:</b> {!! $candidates['fatherName'] !!}</p>
          <p><b>Date of Birth:</b> {!! $candidates['dob'] !!}</p>
          <p><b>Category:</b> {!! $candidates['category'] !!}</p>
          <p><b>Sex :</b> {!! $candidates['sex'] !!}</p>
          <p><b>Marital Status: </b>{!! $candidates['maritalStatus'] !!}</p>
          <p><b>Physically Handicapped:</b> {!! $candidates['PH'] !!}</p><!-- wtf -->
          <p><b>Nationality:</b> {!! $candidates['nationality'] !!}</p>
          <p><b>Address for Communication:</b> {!! $candidates['addrforcomm'] !!}</p>
          <p><b>Permanent Address:</b> {!! $candidates['permanentaddr'] !!}</p>
          <p><b>Undergraduate Degree:</b> {!! $ug['degreeName'] !!}</p>
          <p><b>Undergraduate Branch:</b> {!! $ug['branch'] !!}</p>
          <p><b>Undergraduate G.P.A:</b> {!! $ug['percenatge'] !!}</p>
          <p><b>Undergraduate Class:</b> {!! $ug['class'] !!}</p>
          <p><b>Undergraduate Name of Institution:</b> {!! $ug['institutionName'] !!}</p>
          <p><b>Undergraduate Name of University:</b> {!! $ug['universityName'] !!}</p>
          <p><b>Undergraduate Year of Passing:</b> {!! $ug['yop'] !!}</p>

          <p><b>Post-graduate Degree:</b> {!! $pg['degreeName'] !!}</p>
          <p><b>Post-graduate Branch:</b> {!! $pg['branch'] !!}</p>
          <p><b>Post-graduate G.P.A:</b> {!! $pg['percenatge'] !!}</p>
          <p><b>Post-graduate Class:</b> {!! $pg['class'] !!}</p>
          <p><b>Post-graduate Name of Institution:</b> {!! $pg['institutionName'] !!}</p>
          <p><b>Post-graduate Name of University:</b> {!! $pg['universityName'] !!}</p>
          <p><b>Post-graduate Year of Passing:</b> {!! $pg['yop'] !!}</p>

          <p><b>Score:</b> {!! $others['score'] !!}</p>
          <p><b>Rank:</b> {!! $others['rank'] !!}</p>
          <p><b>Title of Project:</b> {!! $others['pgt'] !!}</p>
          <p><b>Details of Publication:</b> {!! $others['publications'] !!}</p>
          <p><b>Awards:</b> {!! $others['awards'] !!}</p>
          <p><b>Employer Details 1:</b> {!! $others['proexp1'] !!}</p>
          <p><b>Employer Details 2:</b> {!! $others['proexp2'] !!}</p>
          <p><b>Employer Details 3:</b> {!! $others['proexp3'] !!}</p>
</div>

</body>