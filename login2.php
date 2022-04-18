<?php
	include "lib/library.php";

	if ( isset($_POST['login']) ) {
		$id = $_POST['id'];
		$password = $_POST['password'];

		$valid = is_user_valid($id, $password);

		if ( $valid != false ) {
			$_SESSION['id'] = $valid;
			header("Location:index.php");
		}
		
	}
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demos.creative-tim.com/material-kit-pro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2020 13:18:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Welcome to Query
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/material-kit-pro" />
  <!--  Social tags      -->
  <meta name="keywords" content="bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, material, material kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, premium bootstrap 4 ui kit, premium template, bootstrap 4 template">
  <meta name="description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Material Kit Pro by Creative Tim">
  <meta itemprop="description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design">
  <meta itemprop="image" content="../../s3.amazonaws.com/creativetim_bucket/products/46/original/opt_mkp_thumbnail.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Material Kit Pro by Creative Tim">
  <meta name="twitter:description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="../../s3.amazonaws.com/creativetim_bucket/products/46/original/opt_mkp_thumbnail.jpg">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Material Kit Pro by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="presentation.html" />
  <meta property="og:image" content="../../s3.amazonaws.com/creativetim_bucket/products/46/original/opt_mkp_thumbnail.jpg" />
  <meta property="og:description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design" />
  <meta property="og:site_name" content="Creative Tim" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
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
<div class="main main-raised">
	<div class="container">
   <div class="section text-center">
	<div class="row">
		<div class="col-md-8 ml-auto mr-auto">
			<div id="login">
				<h1 class="title">Log In Here</h1>
				<form method="post">
					<div class="form-group">
						<input type="text" class="form-control" id="userid" name="id" placeholder="User ID" aria-describedby="userid_aria">
						<small id="userid_aria" class="form-text text-muted">Use your student ID as user ID here.</small>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="password" name="password" placeholder="Password" aria-describedby="password_aria">
						<small id="userid_aria" class="form-text text-muted">Use your password here.</small>
					</div>
					<input type="submit" name="login" id="btn" class="btn btn-primary" value="Log In">
				</form>
			</div>
		</div>
	</div>
	</div>
	</div>
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
  <script src="assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="../../buttons.github.io/buttons.js"></script>
  <!--  Plugin for Sharrre btn -->
  <script src="assets/js/plugins/jquery.sharrre.js" type="text/javascript"></script>
  <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
  <!--  Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="assets/js/plugins/jasny-bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Small Gallery in Product Page -->
  <script src="assets/js/plugins/jquery.flexisel.js" type="text/javascript"></script>
  <!-- Plugins for presentation and navigation  -->
  <script src="assets/demo/modernizr.js" type="text/javascript"></script>
  <script src="assets/demo/vertical-nav.js" type="text/javascript"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="../../buttons.github.io/buttons.js"></script>
  <!-- Js With initialisations For Demo Purpose, Don't Include it in Your Project -->
  <script src="assets/demo/demo.js" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-kit.mind1f1.js?v=2.2.0" type="text/javascript"></script>
  
  <script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>