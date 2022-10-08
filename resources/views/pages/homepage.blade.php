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
    <div id='id01' class="w3-container w3-light-gray">
        <p class="w3-center" style="padding-top:10px;">
        <b>MobiSchool's New App is now available on Google Play Store!</b> 
            <button class="w3-button w3-small w3-round w3-deep-orange ">Download</button> 
            <button onclick="document.getElementById('id01').style.display='none'" 
            class="w3-right w3-deep-orange w3-button w3-circle">&times;</button></p>
            
    </div>
 <div class="nav-item">
        <!--logo-->
    <div class="w3-left">
        <div class="logo">
        <a style='color:#ffffff;' href="">MobiSchool</a>
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
                      <li><a href="/library">Library</a></li>
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Help</a></li>
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
    <a href="{{URL::to('/welcome')}}" class="w3-bar-item w3-button">Log Out</a>
    </div>
  </div>

</header>
<br>

<!-- Advert1 section -->
<section style='padding:25px; 0px; 25px; 0px;' class="deal-of-week set-bg spad">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="section-title">
                  <h2>Free Online Learning</h2><br>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-12 col-md-12 text-center">
              <div class="single-latest-blog">
              <p>We thank you for choosing MobiSchools as a free learning platform to help you 
                with your education [more content]. </p>
              </div>
          </div>
          
      </div>
      
  </div>
</section>

<!-- MobiSchool categories section -->

<div style='padding:25px; 0px; 25px; 0px;' class="w3-light-gray banner-section spad">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-4">
              <div class="single-banner">
                  <img style="height:230px;" class="w3-round" src="assets/img/primary-2.jpg" alt="" />
                  <div style="padding-top:100px;" class="inner-text">
                      <a href="#"><h4>Primary School</h4></a>
                  </div>
              </div>
          </div>
          <div class="col-lg-4">
              <div class="single-banner">
                  <img class="w3-round" src="assets/img/secondary-2.jpg" alt="" />
                  <div style="padding-:100px;" class="inner-text">
                      <a href="#"><h4>Secondary School</h4></a>
                  </div>
              </div>
          </div>
          <div class="col-lg-4">
              <div class="single-banner">
                  <img class="w3-round" src="assets/img/tertiary-2.jpg" alt="" />
                  <div style="padding-top:100px;" class="inner-text">
                      <a href="#"><h4>Tertiary School</h4></a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<!-- Library section-->

<section  style='padding:25px; 0px; 25px; 0px;' class="w3-light-gray women-banner spad">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-3">
              <div class="product-large set-bg" data-setbg="assets/img/women-large.jpg">
                  <h2>LIBRARY</h2>
              </div>
          </div>
          <div class="col-lg-8 offset-lg-1">
              <div class="filter-control">
                  <ul>
                      <li class="active">Catalogue</li>
                      
                  </ul>
              </div>
              <div class="product-slider owl-carousel">
                  <div class="product-item">
                      <div class="pi-pic">
                          <img src="assets/img/women-2.jpg" alt="" />
                          <ul> 
                              <li class="w3-round w3-deep-orange quick-view">
                                <a style="color:#ffffff;"href="#">Quick view</a></li>
                          </ul>
                      </div>
                      <div class="pi-text">
                          <div class="catagory-name">ebook</div>
                          <a href="#">
                              <h5>Smouldering charchoal</h5>
                          </a>
                          <div class="product-price">
                              Free   
                          </div>
                      </div>
                  </div>
                  <div class="product-item">
                      <div class="pi-pic">
                          <img src="assets/img/women-3.jpg" alt="" />
                          <ul>
                            <li class="w3-round w3-deep-orange quick-view">
                                <a style="color:#ffffff;"href="#">Quick view</a></li>
                          </ul>
                      </div>
                      <div class="pi-text">
                          <div class="catagory-name">Audio book</div>
                          <a href="#">
                              <h5>Macbeth</h5>
                          </a>
                          <div class="product-price">
                              MK 5,000.00
                          </div>
                      </div>
                  </div>
                  <div class="product-item">
                      <div class="pi-pic">
                          <img src="assets/img/women-1.jpg" alt="" />
                          <ul>
                            <li class="w3-round w3-deep-orange quick-view">
                                <a style="color:#ffffff;"href="#">Quick view</a></li>
                          </ul>
                      </div>
                      <div class="pi-text">
                          <div class="catagory-name">Audio book</div>
                          <a href="#">
                              <h5>Photosynthesis</h5>
                          </a>
                          <div class="product-price">
                              Free
                          </div>
                      </div>
                  </div>
                  <div class="product-item">
                      <div class="pi-pic">
                          <img src="assets/img/women-4.jpg" alt="" />
                          <ul>
                            
                          <li class="w3-round w3-deep-orange quick-view">
                                <a style="color:#ffffff;"href="#">Quick view</a></li>
                          </ul>
                      </div>
                      <div class="pi-text">
                          <div class="catagory-name">ebook</div>
                          <a href="#">
                              <h5>Discovering computers</h5>
                          </a>
                          <div class="product-price">
                              MK 3,000.00
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>


<!-- advert2 section-->

<section style='padding:25px; 0px; 25px; 0px; ' class="w3-light-gray man-banner spad" >
    <div class="benefit-items">
          <div class="row">
              <div class="col-lg-4">
                  <div class="single-benefit">
                      <div class="sb-icon">
                          <img src="assets/img/icon-2.png" alt="" />
                      </div>
                      <div class="sb-text">
                          <h6>FREE LEARNING</h6>
                          <p>for everyone, everywhere</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="single-benefit">
                      <div class="sb-icon">
                          <img src="assets/img/icon-2.png" alt="" />
                      </div>
                      <div class="sb-text">
                          <h6>E-BOOKS</h6>
                          <p>available 24/7</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="single-benefit">
                      <div class="sb-icon">
                          <img src="assets/img/icon-2.png" alt="" />
                      </div>
                      <div class="sb-text">
                          <h6>CLASS SESSIONS</h6>
                          <p>watch, listen & subscribe</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
</section>


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
                      <li><a href="#">Help</a></li>
                      
                  </ul>
              </div>
          </div>
          <div class="col-lg-2">
              <div class="footer-widget">
                  <h5>My Account</h5>
                  <ul>
                      <li><a href="#">Log Out</a></li>
                      
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