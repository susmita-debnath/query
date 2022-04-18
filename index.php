<?php
  include "lib/library.php";
?>
<!--
 =========================================================
 Material Kit PRO - v2.2.0
 =========================================================

 Product Page: https://www.creative-tim.com/product/material-kit-pro
 Copyright 2019 Creative Tim (https://www.creative-tim.com)

 Coded by Creative Tim

 =========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demos.creative-tim.com/material-kit-pro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2020 13:18:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="assets/img/logo.png">

  <title>
   Welcome to Query
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/material-kit-pro" />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />  
  <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="assets/css/material-kit.mind1f1.css?v=2.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
  <link href="assets/demo/vertical-nav.css" rel="stylesheet" />

  <style>
    .header-filter:before,
    .index-page .header-filter:after{
      background: none !important;
    }
  </style>
  
  <script src="https://kit.fontawesome.com/eb21b7e290.js" crossorigin="anonymous"></script>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        '../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
  </script>
  <!-- End Google Tag Manager -->
</head>

<body class="index-page sidebar-collapse">
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <img src="uploads/logo.png" width="40" height="40">
        <a class="navbar-brand" href="index.php">
        <b>Query</b> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
           <?php 
                if( ! is_user_logged_in() ) {?>
          <li class="nav-item">
           
            <a href="login.php" class="nav-link">
              <!-- <i class="material-icons">apps</i> --> 
              Log In
            </a>
          </li>
          <li class="nav-item">
            <a href="registration.php" class="nav-link">
              <!-- <i class="material-icons">view_day</i>  -->
              Register
            </a> 
          </li>
          <?php } else { ?>
          <li class="nav-item">
          <a href="logout.php" class="nav-link">Log Out</a>
          </li>
          

          <li class="nav-item">
            <a href="#" class="nav-link">
              <!-- <i class="material-icons">view_carousel</i>  -->
              Contact
            </a>            
          </li>
          <li class="nav-item">
            <a href="profile.php" class="nav-link">Profile</a>
          </li>
          <?php } ?> 
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter clear-filter" data-parallax="true" style="background-image: url('assets/img/library.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand">
            <h1>Welcome</h1>
            <h3 class="title">Having problems during exam. Lots of questions running around your brain. Wanna find the answers? Yes, you are in the right place.</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Here You Can Find</h2>
            <h5 class="description">As we are studying in a private university, the communication gap between juniors and seniors is huge. Also between the classmates because of the open credit system. So we are thinking about narrowing the gap by unifying the thoughts and ideas of all students in one platform.</h5>
          </div>
        </div>
        <div class="features">
           <div class="row">
              <div class="col-lg-4 col-md-6">
                <div class="card card-pricing">
                  <div class="card-body ">
                    <h6 class="card-category text-gray">My Courses</h6>
                    <div class="icon icon-primary">
                      <i class="material-icons">star</i>
                    </div>
                    <!-- <h3 class="card-title">$29</h3> -->
                    <p class="card-description">
                      You can find resources of previous students. Or you can ask, chat and also post. 
                    </p>
                    <a href="courses.php" class="btn btn-info btn-round">Courses</a>
                  </div>
                </div>
              </div>

            <div class="col-lg-4 col-md-6">
                <div class="card card-pricing">
                  <div class="card-body ">
                    <h6 class="card-category text-gray">I'd Like to Answer</h6>
                    <div class="icon icon-primary">
                      <i class="material-icons">star</i>
                    </div>
                    <!-- <h3 class="card-title">$29</h3> -->
                    <p class="card-description">
                      You can help others on those courses which you are good at.
                    </p>
                    <a href="answer_courses.php" class="btn btn-info btn-round">Answers</a>
                  </div>
                </div>
              </div>
            <div class="col-lg-4 col-md-6">
                <div class="card card-pricing">
                  <div class="card-body ">
                    <h6 class="card-category text-gray">Important Notices</h6>
                    <div class="icon icon-primary">
                      <i class="material-icons">star</i>
                    </div>
                    <!-- <h3 class="card-title">$29</h3> -->
                    <p class="card-description">
                      This is good if your company size is between 2 and 10 Persons.
                    </p>
                    <a href="#pablo" class="btn btn-info btn-round">Notices</a>
                  </div>
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-4 col-md-6">
                <div class="card card-pricing">
                  <div class="card-body ">
                    <h6 class="card-category text-gray">Academic Calenders</h6>
                    <div class="icon icon-primary">
                      <i class="material-icons">star</i>
                    </div>
                    <!-- <h3 class="card-title">$29</h3> -->
                    <p class="card-description">
                      This is good if your company size is between 2 and 10 Persons.
                    </p>
                    <a href="#pablo" class="btn btn-info btn-round">Calenders</a>
                  </div>
                </div>
              </div>

            <div class="col-lg-4 col-md-6">
                <div class="card card-pricing">
                  <div class="card-body ">
                    <h6 class="card-category text-gray">Previous Mid & Final Questions/Answers</h6>
                    <div class="icon icon-primary">
                      <i class="material-icons">star</i>
                    </div>
                    <!-- <h3 class="card-title">$29</h3> -->
                    <p class="card-description">
                      This is good if your company size is between 2 and 10 Persons.
                    </p>
                    <a href="#pablo" class="btn btn-info btn-round">Previous Q&A</a>
                  </div>
                </div>
              </div>
            <div class="col-lg-4 col-md-6">
                <div class="card card-pricing">
                  <div class="card-body ">
                    <h6 class="card-category text-gray">Books & Tutorials</h6>
                    <div class="icon icon-primary">
                      <i class="material-icons">star</i>
                    </div>
                    <!-- <h3 class="card-title">$29</h3> -->
                    <p class="card-description">
                      This is good if your company size is between 2 and 10 Persons.
                    </p>
                    <a href="#pablo" class="btn btn-info btn-round">Tutorials</a>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-5 w-5 m-5">
    
  </div>
 <footer class="footer footer-black footer-big">
            <div class="container">
              <div class="content">
                <div class="row">
                  <div class="col-md-4">
                    <h5>Quick Links</h5>
                  <ul>
                    <li>
                      <a href="http://www.uiu.ac.bd/">United Internation University</a>
                    </li><br>
                    <li>
                      <a href="http://elms.uiu.ac.bd/">eLMS</a>
                    </li><br>
                    <li>
                      <a href="http://ucam.uiu.ac.bd/Security/LogIn.aspx">uCAM</a>
                    </li><br>
                    <li>
                      <a href="https://www.cisco.com/">CISCO</a>
                    </li>
                  </ul>
                  </div>

                  <div class="col-md-4">
                  </div>
                  
                  <div class=" col-lg-4 float-right">
                    <h5>Instagram Feed</h5>
                    <div class="gallery-feed">
                       
                      <div class="icon icon-info">
                          <i class="fab fa-facebook-square fa-3x" style="color:#3B5998;"></i>
                        
                      </div>
                    <div class="icon icon-info">
                      <i class="material-icons">people</i>
                    </div>
                    <div class="icon icon-info">
                      <i class="material-icons">people</i>
                    </div>
                     <!--  <i class="fab fa-500px" style="color: #D44638;"></i> -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- <hr> -->
              <!-- <ul class="float-left">
                <li>
                  <a href="#pablo">
                    Blog
                  </a>
                </li>
                <li>
                  <a href="#pablo">
                    Presentation
                  </a>
                </li>
                <li>
                  <a href="#pablo">
                    Discover
                  </a>
                </li>
                <li>
                  <a href="#pablo">
                    Payment
                  </a>
                </li>
                <li>
                  <a href="#pablo">
                    Contact Us
                  </a>
                </li>
              </ul> -->
             <!--  <div class="copyright float-right">
                Copyright &#xA9; <script>
                  document.write(new Date().getFullYear())
                </script> Creative Tim All Rights Reserved.
              </div>
            </div> -->
          </footer>
          <!--     *********   END BIG FOOTER     *********      -->
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script> 
  <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="assets/js/material-kit.mind1f1.js?v=2.2.0" type="text/javascript"></script>
  </body>
</html>