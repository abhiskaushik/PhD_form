<!DOCTYPE html>
<html>
<head>
  
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admissions NITT | Admin Portal</title>
  <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/css/materialize.min.css')}}">
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="{{URL::asset('assets/js/jquery-2.1.1.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/materialize.min.js')}}"></script>
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
        <li><a href="../ms/home">M.S. Applicants</a></li>
        <li><a href="/logout">Logout</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
       <li><a href="../home">Home</a></li>
        <li><a href="../ms/home">M.S. Applicants</a></li>
        <li><a href="/logout">Logout</a></li>
      </ul>
    </div>
  </nav>
  <div class="space-medium"></div>
  <div class="container main">
    <h5 class="center">List of Ph.D Departments</h5>
    <input type="hidden" value="PHD" class="phdormsc" />
    <div class="row buttons ">
      <div class="col l4"> <a href="/admin/phd/AR" class="btn teal waves">Architecture</a> </div>
      <div class="col l4"> <a href="/admin/phd/CS" class="btn teal waves">C.S.E</a> </div>
      <div class="col l4"> <a href="/admin/phd/CL" class="btn teal waves">Chemical Engineering</a> </div>
      <div class="space-large"></div>
      <div class="col l4"> <a href="/admin/phd/CV" class="btn teal waves">Civil Engineering</a> </div>  
      <div class="col l4"> <a href="/admin/phd/CY" class="btn teal waves">Chemistry</a> </div>
      <div class="col l4"> <a href="/admin/phd/CA" class="btn teal waves">Computer Applications</a> </div>
      <div class="space-large"></div>
      <div class="col l4"> <a href="/admin/phd/CC" class="btn teal waves">CECASE</a> </div>
      <div class="col l4"> <a href="/admin/phd/EN" class="btn teal waves">Energy Engineering</a> </div>
      <div class="col l4"> <a href="/admin/phd/EC" class="btn teal waves">E.C.E</a> </div>
      <div class="space-large"></div>
      <div class="col l4"> <a href="/admin/phd/EE" class="btn teal waves">E.E.E</a> </div>  
      <div class="col l4"> <a href="/admin/phd/HM" class="btn teal waves">Humanities & Social</a> </div>
      <div class="col l4"> <a href="/admin/phd/ME" class="btn teal waves">Mechanical Engg.</a> </div>
      <div class="space-large"></div>
      <div class="col l4"> <a href="/admin/phd/MA" class="btn teal waves">Mathematics</a> </div>  
      <div class="col l4"> <a href="/admin/phd/MME" class="btn teal waves">M.M.E.</a> </div>
      <div class="col l4"> <a href="/admin/phd/PR" class="btn teal waves">Production Engg.</a> </div>
      <div class="space-large"></div>
      <div class="col l4"> <a href="/admin/phd/IC" class="btn teal waves">I.C.E.</a> </div>  
      <div class="col l4"> <a href="/admin/phd/PH" class="btn teal waves">Physics.</a> </div>
      <div class="col l4"> <a href="/admin/phd/MS" class="btn teal waves">Management Studies.</a> </div>
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
  })
  </script>
  
</body>
</html>