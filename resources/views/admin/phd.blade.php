<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta id="token" name="csrf-token" content="{{ csrf_token() }}">
  <title>Admissions NITT | Admin Page</title>
  <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/css/materialize.min.css')}}">
  <!-- <link rel="shortcut icon" href="{{URL::asset('assets/logo.jpg')}}"> -->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="{{URL::asset('assets/js/jquery-2.1.1.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/admin.js')}}"></script>
  <script src="{{URL::asset('assets/js/materialize.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/print.js')}}"></script>
  
</head>
<body>
<header style="height: 25vh;
  padding: 0px;
  margin: 0px;
  background-image: url('{{URL::asset('assets/images/header.png')}}');
  background-repeat: no-repeat;
  background-position: center;
  background-color: #004d40;
  background-size: contain;"></header>
<nav>
    <div class="nav-wrapper ">
      
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="hide-on-med-and-down">
        <li><a href="../home">Home</a></li>
        <li><a href="../ms">M.S. Applicants</a></li>
        <li><a href="/logout">Logout</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
       <li><a href="../home">Home</a></li>
        <li><a href="../ms">M.S. Applicants</a></li>
        <li><a href="/logout">Logout</a></li>
      </ul>
    </div>
  </nav>
  
  <div class="container search" hidden="true">

      <form class="searchbox">
          <input id="search" type="search" placeholder="Search.." name="search" class="searchbox-input" required>
          


      </form>
      
  </div>
  <div class="search-pad">
  <div class="box">
       <i class="material-icons">search</i><a class="box-a"> Search </a>
   </div>
  
</div>
<div class="hide space-large  " hidden="true"></div>
    <h5 class="center">{!! $data['dept'] !!}</h5>
 
  <div class="space-large"></div>
  <div class="container main">
    <div class="candidates row">
     @for($i = 0; $i < sizeof($data['candidates']); $i++)
        @if(!$data['candidates'][$i]->deleted)
        <div class="{!! $data['candidates'][$i]->applNo !!} col l5 offset-l1" data-reg = "{!! $data['candidates'][$i]->registrationNumber !!}">
        @if($data['candidates'][$i]->accepted)
        <div class="card center border">
        @else
        <div class="card center">
        @endif
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Candidate's Card</span>
            <div class="row">
              
                <p>Registration Number:  {!! $data['candidates'][$i]->registrationNumber !!}</p>
              
            </div>
            
           
            <div class="space-small">
            </div>
            <div class="center ">
              <a data-reg="{!! $i !!}" target="_blank" href="../../phdpreview1" class="form waves-effect waves-light btn" >Click Here To view full form</a>
              <input class="regNo{!! $i !!}" hidden="true" value='{!! $data['candidates'][$i]->registrationNumber !!}' />
              <input class="chalanNo{!! $i !!}" hidden="true" value='{!! $data['candidates'][$i]->chalanNo !!}' />
              <input class="applCateg{!! $i !!}" hidden="true" value='{!! $data['candidates'][$i]->applicationCategory !!}' />
              <input class="dateOfReg{!! $i !!}" hidden="true" value='{!! $data['candidates'][$i]->dateOfReg !!}' />
              <input class="dept1{!! $i !!}" hidden="true" value='{!! $data['candidates'][$i]->dept1 !!}' />
              <input class="dept2{!! $i !!}" hidden="true" value='{!! $data['candidates'][$i]->dept2 !!}' />
              <input class="dept3{!! $i !!}" hidden="true" value='{!! $data['candidates'][$i]->dept3 !!}' />
              <input class="email{!! $i !!}" hidden="true" value='{!! $data['candidates'][$i]->email !!}' />
              <input class="name{!! $i !!}" hidden="true" value='{!! $data['candidates'][$i]->name !!}' />
              <input class="fatherName{!! $i !!}" hidden="true" value='{!! $data['candidates'][$i]->fatherName !!}' />
              <input class="category{!! $i !!}" hidden="true" value='{!! $data['candidates'][$i]->category !!}' />
              <input class="maritalStatus{!! $i !!}" hidden="true" value='{!! $data['candidates'][$i]->maritalStatus !!}' />
              <input class="nationality{!! $i !!}" hidden="true" value='{!! $data['candidates'][$i]->nationality !!}' />
              <input class="permanentaddr{!! $i !!}" hidden="true" value='{!! $data['candidates'][$i]->permanentaddr !!}' />
              <input class="landline{!! $i !!}" hidden="true" value='{!! $data['candidates'][$i]->landline !!}' />
              <input class="areaOfResearch{!! $i !!}" hidden="true" value='{!! $data['candidates'][$i]->areaOfResearch !!}' />
              <input class="dob{!! $i !!}" hidden="true" value='{!! $data['candidates'][$i]->dob !!}' />
              <input class="sex{!! $i !!}" hidden="true" value='{!! $data['candidates'][$i]->sex !!}' />
              <input class="addrforcomm{!! $i !!}" hidden="true" value='{!! $data['candidates'][$i]->addrforcomm !!}' />
              <input class="mobile{!! $i !!}" hidden="true" value='{!! $data['candidates'][$i]->mobile !!}' />
              <input class="PH{!! $i !!}" hidden="true" value='{!! $data['candidates'][$i]->PH !!}' />
              <input class="ug_degreeName{!! $i !!}" hidden="true" value='{!! $data['ug'][$i]->degreeName !!}' />
              <input class="ug_gpa{!! $i !!}" hidden="true" value='{!! $data['ug'][$i]->gpa !!}' />
              <input class="ug_institutionName{!! $i !!}" hidden="true" value='{!! $data['ug'][$i]->institutionName !!}' />
              <input class="ug_yop{!! $i !!}" hidden="true" value='{!! $data['ug'][$i]->yop !!}' />
              <input class="ug_branch{!! $i !!}" hidden="true" value='{!! $data['ug'][$i]->branch !!}' />
              <input class="ug_class{!! $i !!}" hidden="true" value='{!! $data['ug'][$i]->class !!}' />
              <input class="ug_universityName{!! $i !!}" hidden="true" value='{!! $data['ug'][$i]->universityName !!}' />

              <input class="pg_degreeName{!! $i !!}" hidden="true" value='{!! $data['pg'][$i]->degreeName !!}' />
              <input class="pg_gpa{!! $i !!}" hidden="true" value='{!! $data['pg'][$i]->gpa !!}' />
              <input class="pg__institutionName{!! $i !!}" hidden="true" value='{!! $data['pg'][$i]->institutionName !!}' />
              <input class="pg_yop{!! $i !!}" hidden="true" value='{!! $data['pg'][$i]->yop !!}' />
              <input class="pg_branch{!! $i !!}" hidden="true" value='{!! $data['pg'][$i]->branch !!}' />
              <input class="pg_class{!! $i !!}" hidden="true" value='{!! $data['pg'][$i]->class !!}' />
              <input class="pg_universityName{!! $i !!}" hidden="true" value='{!! $data['pg'][$i]->universityName !!}' />
              
              <input class="exam{!! $i !!}" hidden="true" value='{!! $data['others'][$i]->exam !!}' />
              <input class="discipline{!! $i !!}" hidden="true" value='{!! $data['others'][$i]->discipline !!}' />
              <input class="score{!! $i !!}" hidden="true" value='{!! $data['others'][$i]->score !!}' />
              <input class="rank{!! $i !!}" hidden="true" value='{!! $data['others'][$i]->rank !!}' />
              <input class="valid{!! $i !!}" hidden="true" value='{!! $data['others'][$i]->validity !!}' />
              
              <input class="pgproject{!! $i !!}" hidden="true" value='{!! $data['others'][$i]->pgproject !!}' />
              <input class="publications1{!! $i !!}" hidden="true" value='{!! $data['others'][$i]->publications1 !!}' />
              <input class="publications2{!! $i !!}" hidden="true" value='{!! $data['others'][$i]->publications2 !!}' />
              <input class="publications3{!! $i !!}" hidden="true" value='{!! $data['others'][$i]->publications3 !!}' />
              <input class="awards1{!! $i !!}" hidden="true" value='{!! $data['others'][$i]->awards1 !!}' />
              <input class="awards2{!! $i !!}" hidden="true" value='{!! $data['others'][$i]->awards2 !!}' />
              <input class="awards3{!! $i !!}" hidden="true" value='{!! $data['others'][$i]->awards3 !!}' />

              <input class="proexp1{!! $i !!}" hidden="true" value='{!! $data['pro'][$i]->proexp1 !!}' />
              <input class="position1{!! $i !!}" hidden="true" value='{!! $data['pro'][$i]->position1 !!}' /> 
              <input class="from1{!! $i !!}" hidden="true" value='{!! $data['pro'][$i]->from1 !!}' />  
              <input class="to1{!! $i !!}" hidden="true" value='{!! $data['pro'][$i]->to1 !!}' />           
              <input class="proexp2{!! $i !!}" hidden="true" value='{!! $data['pro'][$i]->proexp2 !!}' />
              <input class="position2{!! $i !!}" hidden="true" value='{!! $data['pro'][$i]->position2 !!}' /> 
              <input class="from2{!! $i !!}" hidden="true" value='{!! $data['pro'][$i]->from2 !!}' />  
              <input class="to2{!! $i !!}" hidden="true" value='{!! $data['pro'][$i]->to2 !!}' />  
              <input class="proexp3{!! $i !!}" hidden="true" value='{!! $data['pro'][$i]->proexp3 !!}' />
              <input class="position3{!! $i !!}" hidden="true" value='{!! $data['pro'][$i]->position3 !!}' /> 
              <input class="from3{!! $i !!}" hidden="true" value='{!! $data['pro'][$i]->from3 !!}' />  
              <input class="to3{!! $i !!}" hidden="true" value='{!! $data['pro'][$i]->to3 !!}' />    
            </div>
            <div class="space-small"></div>
               <div class="center">
        @if($data['session'] == 'all')
        <div class="col l12 center buttons">
        <div class="col l6">
          <a href="#!" data-reg={!! $data['candidates'][$i]->registrationNumber!!} class="discard1 btn modal-action modal-close waves-effect waves-green btn">Discard</a>
          </div>
        @if(!$data['candidates'][$i]->accepted)
        <div class="col l6">
        <a href="#!"  data-reg={!! $data['candidates'][$i]->registrationNumber!!} class="accept btn modal-action modal-close waves-effect waves-green btn">Accept</a>
        </div>
        @endif
        </div>
        @endif

        <div class="col l12 center buttons">
        <div class="space-medium"></div>
        <div class="col l6">
        <a href="#!" data-reg={!! $data['candidates'][$i]->registrationNumber!!} class="print btn modal-action modal-close waves-effect waves-green btn">Print</a>
        </div>
        <div class="col l6">
        <a href="#!" data-reg={!! $data['candidates'][$i]->registrationNumber!!} class="admit btn modal-action modal-close waves-effect waves-green btn">Admit</a>
        </div>
        </div>
        <div class="space-large"></div>
        </div>
          <div class="space-medium"></div>
          <div class="formButtons center"></div>
          </div>
          </div>

      
   
      
        
    </div>
          @endif
          @endfor

           </div>
           <div class="center">
      <ul class="pagination">
    <li class="disabled"><a href={!! $data["candidates"]->previousPageUrl()!!}><i class="material-icons">chevron_left</i></a></li>
    <li class="active teal" ><a href="#!">{!! $data["candidates"]->currentPage() !!}</a></li>
    <li class="waves-effect"><a href={!! $data["candidates"]->nextPageUrl()!!}><i class="material-icons">chevron_right</i></a></li>
  </ul>
  </div>

   <div class="space-medium"></div>
<div class="center">
   <a class="waves-effect waves-light btn" href="../ms">View M.S. applicants</a>
  </div>
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
              <div class="col l4 offset-l2 s12">
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
    console.log('{!! $data['candidates'] !!}');
  })
  </script>    

  <script type="text/javascript">
      $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    if($('.applCateg'+index).val()=='External'){
      var f = '<a href="#" class="btn waves teal">Form 3</a>';
      $('.formButtons').append(f);
    }
    else if($('.applCateg'+index).val()=='On Campus'){
       var f = '<a href="#" class="btn waves teal">Form 1</a><a href="#" class="btn waves teal">Form 2</a>';
      $('.formButtons').append(f);
    }

    $('.formButtons').

    $('.modal-trigger').leanModal();
     var a = $('.box');
        var inputBox = $('.searchbox-input');
        var isOpen = false;

        a.click(function(){
          $('.box').hide();
          $('.search').show();
          if(isOpen == false){
          $('.searchbox').addClass('searchbox-open');
          inputBox.focus();
          isOpen = true;
        }
        else{
          $('.box').show('slow');
          $('.search').css('display','none');
          $('.hide').show();
          $('.search-pad').append('<div class="space-large"></div>');
         $('.searchbox').removeClass('searchbox-open');
          inputBox.focusout();
          isOpen = false; 
        }

        });
        $('.form').click(function(){
          var index = $(this).data("reg");
          var data = {};

          data.regNo = $('.regNo'+index).val();
          data.chalanNo = $('.chalanNo'+index).val();//to be added
          data.applCateg = $('.applCateg'+index).val();
          data.dateOfReg = $('.dateOfReg'+index).val();
          data.dept1 = department($('.dept1'+index).val());
          data.dept2 = department($('.dept2'+index).val());
          data.dept3 = department($('.dept3'+index).val());
          data.email = $('.email'+index).val();
          data.name = $('.name'+index).val();
          data.fatherName = $('.fatherName'+index).val();
          data.category = $('.category'+index).val();
          data.maritalStatus = $('.maritalStatus'+index).val();
          data.nationality = $('.nationality'+index).val();
          data.permanentaddr = $('.permanentaddr'+index).val();
          data.landline = $('.landline'+index).val();
          data.areaOfResearch = $('.areaOfResearch'+index).val();
          data.dob = $('.dob'+index).val();
          data.sex = $('.sex'+index).val();
          data.addrforcomm = $('.addrforcomm'+index).val();
          data.mobile = $('.mobile'+index).val();
          data.PH = $('.PH'+index).val();
          data.ug_degreeName = $('.ug_degreeName'+index).val();
          data.ug_gpa = $('.ug_gpa'+index).val();
          data.ug_institutionName = $('.ug_institutionName'+index).val();
          data.ug_universityName = $('.ug_universityName'+index).val();
          data.ug_yop = $('.ug_yop'+index).val();
          data.ug_branch = $('.ug_branch'+index).val();
          data.ug_class = $('.ug_class'+index).val();

          data.pg_degreeName = $('.pg_degreeName'+index).val();
          data.pg_gpa = $('.pg_gpa'+index).val();
          data.pg_institutionName = $('.pg_institutionName'+index).val();
          data.pg_universityName = $('.pg_universityName'+index).val();
          data.pg_yop = $('.pg_yop'+index).val();
          data.pg_branch = $('.pg_branch'+index).val();
          data.pg_class = $('.pg_class'+index).val();
          data.exam = $('.exam'+index).val();
          data.discipline = $('.discipline'+index).val();
          data.score = $('.score'+index).val();
          data.rank = $('.rank'+index).val();
          data.valid = $('.valid'+index).val();
          data.pgproject = $('.pgproject'+index).val();
          data.publications1 = $('.publications1'+index).val();
          data.publications2 = $('.publications2'+index).val();
          data.publications3 = $('.publications3'+index).val();

          data.awards1 = $('.awards1'+index).val();
          data.awards2 = $('.awards2'+index).val();
          data.awards3 = $('.awards3'+index).val();

          data.proexp1 = $('.proexp1'+index).val();
          data.proexp2 = $('.proexp2'+index).val();
          data.proexp3 = $('.proexp3'+index).val();

          data.position1 = $('.position1'+index).val();
          data.position2 = $('.position2'+index).val();
          data.position3 = $('.position3'+index).val();

          data.from1 = $('.from1'+index).val();
          data.from2 = $('.from2'+index).val();
          data.from3 = $('.from3'+index).val();

          data.to1 = $('.to1'+index).val();
          data.to2 = $('.to2'+index).val();
          data.to3 = $('.to3'+index).val();
          
          console.log(data);
          localStorage.clear();
          localStorage.setItem('data' , JSON.stringify(data));    
          console.log(JSON.parse(localStorage.getItem('data')));

        });

        function department(t)
        {
          if(t == 'AR')
          {
              return 'Architecture';
          }
          if(t == 'CS')
          {
              return 'Computer Science and Engineering';
          }
          if(t == 'CL')
          {
              return 'Chemical Engineering';
          }
          if(t == 'CV')
          {
              return 'Civil Engineering';
          }
          if(t == 'CY')
          {
              return 'Chemistry';
          }
          if(t == 'CA')
          {
              return 'Computer Applications';
          }
          if(t == 'CC')
          {
              return 'CECASE';
          }
          if(t == 'EN')
          {
              return 'Department of Energy Engineering';
          }
          if(t == 'EE')
          {
              return 'Electrical and Electronics Engineering';
          }
          if(t == 'EC')
          {
              return 'Electronics and Communication Engineering';
          }
          if(t == 'ME')
          {
              return 'Mechanical Engineering';
          }
          if(t == 'PR')
          {
              return 'Production Engineering';
          }
          if(t == 'MME')
          {
              return 'Metalurgy and Material Sciences';
          }
          if(t == 'MA')
          {
              return 'Mathematics';
          }
          if(t == 'IC')
          {
              return 'Instrumentation and Control Engineering';
          }
          if(t == 'PH')
          {
              return 'Physics';
          }
        }
  });
  </script>

</body>
</html>