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
<body>

<header   class="header-section ">
 <!-- notification panel --> 
    <div>
        </div>

    <div class="nav-item">
        <!--logo-->
    <div class="w3-left">
        <div class="logo">
        <a style='color:#ffffff;' href="{{URL::to('/welcome')}}">MobiSchool</a>
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
                      <li class="active"><a href="/primary">Primary</a></li>
                      <li><a href="/secondary">Secondary</a></li>
                      <li><a href="/tertiary">Tertiary</a></li>
                      <li><a href="/about">About Us</a></li>
                      <li><a href="/about">Help</a></li>
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

            <div class="logdiv"> 
              <a href="{{URL::to('/homepage')}}" class="login-panel"><i class="fa fa-user"></i>Login</a>
              <a href="{{URL::to('/thdashboard')}}">Sign Up</a>
            </div>

</header>

<!-- Advert1 section -->


<!-- PrimarySchool categories section -->
<br>

<div style='background-color:#' class="container">
              <div class="row">
                  <div class="">
                  <h2> Free Secondary School Education</h2> 
                  <p>As a mission-driven organization, we are relentlessly pursuing our vision of a world
                    where every learner
                <span id="dots">...</span><span style="display:none;" id="more">
                erisque enim ligula venenatis dolor. Maecenas nisl est, 
                ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. 
                Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc 
                venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. 
                Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                <button  onclick="myFunction()" id="myBtn">Read more</button> 
                  </div>
              </div>

</div>
<br>

<div class="w3-container">
    <div  class=" w3-card w3-half col-lg-6 col-md-6">
  <h3>Junior Certificate</h3>
  <p>has 2 classes, 50+ subjects [more content]...</p>
  <div class="w3-padding-16">
        <button >Get Started</button>
 </div>
    </div> 

    <div  class="w3-card w3-half col-lg-6 col-md-6">
  <h3>Malawi School Certificate of Education</h3>
  <p>has 2 classes, 50+ subjects [more content]...</p>
  <div class="w3-padding-16">
             <button >Get Started</button>
 </div>
    </div>
</div>

<br>
<!-- footer -->

<footer class="footer-section">

  <div class="container">
      <div class="row">
          <div class="col-lg-3">
              <div class="footer-left">
                  <div class="footer-widget">
                      <h5>ADDRESS</h5>
                  
                  <ul>
                      <li>Shop No. 22,</li>
                      <li>Sana Supermarket Complex,</li>
                      <li>Area 47,</li>
                      <li>Lilongwe</li> <br>
                      <li> <a href="#"><i class="fa fa-envelope"></i> info@mobischool.mw </a></li>
                      <li class="fa fa-phone"> +265310001919</li>
                  </ul>
                  
              </div>
              </div>
          </div>
          <div class="col-lg-2 offset-lg-1">
              <div class="footer-widget">
                  <h5>MobiSchool</h5>
                  <ul>
                      <li><a href="#">mission statement</a></li>
                      <li><a href="#">About us</a></li>
                      <li><a href="#">Terms & Conditions</a></li>
                      <li><a href="#">Privacy & Policy</a></li>
                      
                      
                  </ul>
              </div>
          </div>
          <div class="col-lg-2">
              <div class="footer-widget">
                  <h5>My Account</h5>
                  <ul>
                      <li><a href="#">Log In</a></li>
                      <li><a href="#">Sign Up</a></li>
                  </ul>
              </div>
          </div>
          <div class="col-lg-4">
              <div class="footer-widget">
                  <h5>Connect With Us</h5>
                  <ul>
                      <li><a href="#"><i class="fa fa-facebook"></i> facebook</a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i> instagram</a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i> twitter</a></li>
                      <li><a href="#"><i class="fa fa-youtube"></i> youtube</a></li>
                  </ul>
                  </div>
              </div>
      </div>
  </div>
  <div class="copyright-reserved">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="copyright-text">

                     
Copyright &copy;2022 MobiSchool. All rights reserved</a>

                  </div>
                  
              </div>
          </div>
      </div>
  </div>
</footer>

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
} 
</script>
</body>
</html>