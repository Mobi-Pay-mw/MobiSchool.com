<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
 <!-- Css Styles -->
 <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
 <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
 <link rel="stylesheet" href="assets/css/themify-icons.css" type="text/css">
 <link rel="stylesheet" href="assets/css/elegant-icons.css" type="text/css">
 <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
 <link rel="stylesheet" href="assets/css/nice-select.css" type="text/css">
 <link rel="stylesheet" href="assets/css/jquery-ui.min.css" type="text/css">
 <link rel="stylesheet" href="assets/css/slicknav.min.css" type="text/css">
 <link rel="stylesheet" href="assets/css/style.css" type="text/css">
 <link rel="stylesheet" href="assets/css/w3css/w3.css" type="text/css">
 
 <!-- Js Plugins -->
 <script src="assets/js/jquery-3.3.1.min.js"></script>
 <script src="assets/js/bootstrap.min.js"></script>
 <script src="assets/js/jquery-ui.min.js"></script>
 <script src="assets/js/jquery.countdown.min.js"></script>
 <script src="assets/js/jquery.nice-select.min.js"></script>
 <script src="assets/js/jquery.zoom.min.js"></script>
 <script src="assets/js/jquery.dd.min.js"></script>
 <script src="assets/js/jquery.slicknav.js"></script>
 <script src="assets/js/owl.carousel.min.js"></script>
 <script src="assets/js/main.js"></script>
 
</style>

<style>

  /* Style the tab */
  .w3-sidebar {
  background-color: #f1f1f1;
  width:relative;
  max-height:480px;

  }

  /* Style the buttons that are used to open the tab content */
  .w3-sidebar.w3-button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: center;
  cursor: pointer;
  transition: 0.3s;
  }

  /* Change background color of buttons on hover */
  .w3-sidebar button:hover {
  background-color: #ddd;
  }

  /* Create an active/current "tab button" class */
  .w3-sidebar button.active {
  background-color: #ccc;
  }

  
</style>
<body>

<header   class="header-section ">
 <!-- notification panel --> 
    <div>
    </div>

    <div class="header-top nav-item">
      <!--logo-->

      <div class="w3-left">
        <div class="logo">
        <a style='color:#ffffff;' href="">MobiSchool</a>
        </div>
    </div>
      
        
    
        <!--home -icon-->
        <div class="">
        <div class="">
        <a href="{{URL::to('/homepage')}}" style="padding:20px;" class ="fa fa-home" alt="Home" href="#"></a>
        </div>
    </div>

    <!--web nav menu -->
    <div class="nav-item ">   
      <div class="container ">
          <div class="nav-depart">
              <div class="depart-btn"> 
                  <i class="ti-menu"></i>
                  <span>Menu</span>
                  <ul class="depart-hover">
                      <li class="active"><a href="#">Primary</a></li>
                      <li><a href="#">Secondary</a></li>
                      <li><a href="#">Tertiary</a></li>
                      <li><a href="#">Libary</a></li>
                      <li><a href="#">About Us</a></li>
                  </ul> 
              </div> 
          </div>
          <!--mobile nav menu -->
          <nav class="nav-menu mobile-menu">
              
          </nav>

          <!--mobile nav menu wrap -->
          <div id="mobile-menu-wrap">

          </div>
      </div>
       
  </div>
    
  <!--search -->
    <div class="searchdiv" >
                  <div class="advanced-search " > 
                      <div class="input-group " >
                          <input  style='width:260px' type="text" placeholder=" Search what you need here" />
                          <button type="button"><i class="ti-search"></i></button>
                      </div>
                  </div>
    </div>


  <!--log in & sign up -->
  
 
  <div class="logdiv w3-dropdown-hover">
    <button onclick="myDropFunc()" class="w3-button w3-circle w3-light-gray"><i class="fa fa-user"></i></button>
    <div id="demoDrop" class="w3-dropdown-content w3-bar-block w3-deep-orange w3-card">
    <a href="#" class="w3-bar-item w3-button">view profile</a>
    <a href="{{URL::to('/stdashboard')}}" class="w3-bar-item w3-button">Dashboard</a>
    <a href="{{URL::to('/logout')}}" class="w3-bar-item w3-button">Log Out</a>
    </div>
  </div>

</header>


<!-- Page Content -->
<div class="w3-container">
  <h2>Greeting, User! [Learner]</h2>
</div>
<br>

<div class="w3-sidebar w3-bar-block w3-light-grey w3-card">
 
  <h2 class="w3-center">Learners' Dashboard</h2>
  <br>  
  <button class="w3-bar-item w3-button tablinks" onclick="openCity(event, 'Programs')">Programs</button>
  <button class="w3-bar-item w3-button tablinks" onclick="openCity(event, 'Schedule')">Schedule</button>
  <button class="w3-bar-item w3-button tablinks" onclick="openCity(event, 'Live')">Live Class</button>
  <button class="w3-bar-item w3-button tablinks" onclick="openCity(event, 'Lessons')">Lessons</button>
  <button class="w3-bar-item w3-button tablinks" onclick="openCity(event, 'Assignments')">Assignments</button>
  <button class="w3-bar-item w3-button tablinks" onclick="openCity(event, 'eBooks')">My Books</button>
</div>

<div style="margin-left:200px;" class="w3-card-4">

  <div id="Programs" class="w3-container tabcontent " style="height:480px;">
  <h3>Programs</h3>
  <p>Programs will appear here.</p>
 
  
  </div>

  <div id="Schedule" class="w3-container  tabcontent " style="display:none; height:480px;">
  <h3>Schedule</h3>
  <p>Schedules will appear here.</p>
  </div>

  <div id="Live" class="w3-container  tabcontent " style="display:none; height:480px;">
  <h3>Live Class</h3>
  <p>Access a Live class here.</p>
  </div> 

  <div id="Lessons" class="w3-container  tabcontent" style="display:none; height:480px;">
  <h3>Lessons</h3>
  <p>Lessons will appear here.</p>
  </div>

  <div id="Assignments" class="w3-container  tabcontent" style="display:none; height:480px;">
  <h3>Assignments</h3>
  <p>Assignments will appear here</p>
  </div>

  <div id="eBooks" class="w3-container tabcontent" style="display:none; height:480px;">
  <h3>My Books</h3>
  <p>eBooks for a student will here</p>
  </div>
</div>

<script>
  function openCity(evt, cityName) {
  // Declare all variables
  var i, x, tablinks;

  // Get all elements with class="tabcontent" and hide them
  x = document.getElementsByClassName("tabcontent");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
  } 

  function myDropFunc() {
  var x = document.getElementById("demoDrop");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-green";
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-green", "");
  }
  }
</script>

</body>
</html>