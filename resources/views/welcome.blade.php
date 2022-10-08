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
              <a href="{{URL::to('/login')}}" class="w3-button w3-large w3-round w3-deep-orange">Login</a> 
              <a href="{{URL::to('/reg')}}"class="w3-button w3-large w3-round w3-deep-orange">Sign Up</a>
            </div>

</header>

<!-- Advert1 section -->

<section class="hero-section">
  <div class="hero-items owl-carousel">
      
      <div class="single-hero-items set-bg" data-setbg="assets/img/hero-2.jpg">
          <div class="container">
              <div class="row">
                  <div class="col-lg-5">
                      <span>E-Learning</span>
                      <h1>MobiSchool</h1>
                      <p>As a mission-driven organization, we are relentlessly pursuing our vision of a world
                         where every learner can access education to unlock their potential,
                          without the barriers of cost or location.</p>
                 <div class="text-center">
                     <p> Need to open an account?</p>
                    <button class="site-btn ">Sign Up</button>  </div> 
                  </div>
              </div>
              <div class="off-card">
                  <h2>Learn <span>Free</span></h2>
              </div>
          </div>
      </div>

      <div class="single-hero-items set-bg" data-setbg="assets/img/hero-1.jpg">
          <div class="container">
              <div class="row">
                  <div class="col-lg-5">
                      <span>DIAL</span>
                      <h1>*456#</h1>
                      <P>Access our USSD mobile service. Educating Everyone, Anywhere, Anytime.</p>
                  </div>
              </div>
              <div class="off-card">
                  <h2>Join<span>Free</span></h2>
              </div>
          </div>
      </div>

      <div class="single-hero-items set-bg" data-setbg="assets/img/hero-2.jpg">
          <div class="container">
              <div class="row">
                  <div class="col-lg-5">
                      <span>Health</span>
                      <h1>COVID-19</h1>
                      <p>MobiSchool as an E-Learning organization also observes Covid-19 safety measures.
                        Please remember to observe 1 meter distance, wash your hands, sanitize and wear a mask.
                      </p>
                      
                  </div>
              </div>
              <div class="off-card">
                  <h2>STAY <span>SAFE</span></h2>
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
                  <img style="height:230px;" class="w3-round" src="assets/img/primary.jpg" alt="" />
                  <div style="padding-top:100px;" class="inner-text">
                      <a  href="/primary"><h4 >Primary School</h4></a>
                  </div>
              </div>
          </div>
          <div class="col-lg-4">
              <div class="single-banner">
                  <img style="height:230px;" class="w3-round" src="assets/img/secondary.jpg" alt="" />
                  <div style="padding-top:100px;" class="inner-text">
                      <a href="/secondary"><h4>Secondary School</h4></a>
                  </div>
              </div>
          </div>
          <div class="col-lg-4">
              <div class="single-banner">
                  <img style="height:230px;" class="w3-round" src="assets/img/tertiary.jpg" alt="" />
                  <div style="padding-top:100px;" class="inner-text">
                      <a href="/tertiary"><h4>Tertiary School</h4></a>
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


 <!-- learners section--> 

<section  style='padding:25px; 0px; 25px; 0px;' class="w3-light-gray man-banner spad">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
              <div class="section-title">
                  <h2>Testimonies</h2><br>
                  <p>Over <b> 100 thousand malawians</b> today are using MobiSchool to access
                    free education. Our goal is to provide free education that is accessible to everyone.
                  </p>


              </div>
          </div>

          <div class="product-slider owl-carousel ">
                  <div class="product-item col-lg-8">
                      <div class="pi-pic">
                          <img src="assets/img/man-1.jpg" alt="" />
                          
                      </div>
                      <div class="pi-text">
                          <div class="catagory-name">MobiSchool Learner</div>
                          <a href="#">
                              <h5>Fred Nkhata</h5>
                          </a>
                      </div>
                  </div>
                  <div class="product-item col-lg-8 ">
                      <div class="pi-pic">
                          <img src="assets/img/man-2.jpg" alt="" />
                          
                      </div>
                      <div class="pi-text">
                          <div class="catagory-name">MobiSchool Teacher</div>
                          <a href="#">
                              <h5>Clifford Mwale</h5>
                          </a>
                          
                      </div>
                  </div>
                  <div class="product-item col-lg-8 ">
                      <div class="pi-pic">
                          <img src="assets/img/man-3.jpg" alt="" />
                          
                      </div>
                      <div class="pi-text">
                          <div class="catagory-name">Tertiary Teacher</div>
                          <a href="#">
                              <h5>Dennis Man</h5>
                          </a>
                          
                      </div>
                  </div>

                  <div class="product-item col-lg-8 ">
                      <div class="pi-pic">
                          <img src="assets/img/man-3.jpg" alt="" />
                          
                      </div>
                      <div class="pi-text">
                          <div class="catagory-name">Secondary Teacher</div>
                          <a href="#">
                              <h5>Max Den</h5>
                          </a>
                          
                      </div>
                  </div>
                  <div class="product-item col-lg-8">
                      <div class="pi-pic">
                          <img src="assets/img/man-4.jpg" alt="" />
                        
                      </div>
                      <div class="pi-text">
                          <div class="catagory-name">Primary Teacher</div>
                          <a href="#">
                              <h5>Frank Phiri</h5>
                          </a>
                          
                      </div>
                  </div>
              </div>

      </div>

    
  </div>
</section>


<!-- advert3 & section-->

<section style='padding:25px; 0px; 25px; 0px;' class="deal-of-week set-bg spad">
  <div class="w3-container ">
      <div class="row">
          <div class="col-lg-12">
              <div class="section-title">
                  <h2>Not Sure Where to Start?</h2><br>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-6 col-md-6 text-center">
              <div class="single-latest-blog">
              <h3>Achieve your goals with us</h3><br> 
              <p>We offer a diverse of online class sessions to learners
                to access it easily regardless of location, cost and time. </p>
                <br>
              <p> Still don't have an account?<a style="color:orange;" href="#"> Sign Up</a></p>
                  
              </div>
          </div>
          <div class="col-lg-6 col-md-6 text-center">
              <div class="single-latest-blog">
              <h3>Contact Us</h3><br>
                <p>To leave us a message, please click the enquire button below.</p><br>
                <a href="#"  class="w3-button w3-round w3-deep-orange">Enquire</a>
                  
              </div>
          </div>
          
      </div>
      
  </div>
</section>


<!-- footer -->

<footer class="footer-section ">

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

</body>
</html>