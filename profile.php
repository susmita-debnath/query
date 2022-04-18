<?php
  include "lib/library.php";
  global $con;

  //$key = $_REQUEST['key'];
  $id = $_SESSION['id'];

  for ($i=0, $j=3; $j < 6; $i++, $j++) { 
    $batch[$i] = $id[$j];
  }

  $query = "SELECT s_img, name FROM student WHERE id = '$id'";
  $a = mysqli_query($con, $query);

  if ( $a->num_rows > 0 ) {
    $row = $a->fetch_assoc();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   My Profile
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
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <nav class="navbar navbar-color-on-scroll navbar-white   fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <img src="uploads/logo.png" width="40" height="40">
        <a class="navbar-brand" href="../index.html">
          Query </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">apps</i> Home
            </a>
            <div class="dropdown-menu ">
              <!-- <a href="../presentation.html" class="dropdown-item">
                <i class="material-icons">line_style</i> Presentation
              </a> -->
              <!-- <a href="../index.html" class="dropdown-item">
                <i class="material-icons">layers</i> All Components
              </a>
              <a href="../docs/2.1/getting-started/introduction.html" class="dropdown-item">
                <i class="material-icons">content_paste</i> Documentation
              </a> -->
            </div>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">view_day</i> Answer
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="../sections.html#headers" class="dropdown-item">
                <i class="material-icons">dns</i> Answer Preferences
              <a href="../sections.html#features" class="dropdown-item">
                <i class="material-icons">build</i> Features
              </a>
              <a href="../sections.html#blogs" class="dropdown-item">
                <i class="material-icons">list</i> Blogs
              </a>
              <a href="../sections.html#teams" class="dropdown-item">
                <i class="material-icons">people</i> Teams
              </a>
              <a href="../sections.html#projects" class="dropdown-item">
                <i class="material-icons">assignment</i> Projects
              </a>
              <a href="../sections.html#pricing" class="dropdown-item">
                <i class="material-icons">monetization_on</i> Pricing
              </a>
              <a href="../sections.html#testimonials" class="dropdown-item">
                <i class="material-icons">chat</i> Testimonials
              </a>
              <a href="../sections.html#contactus" class="dropdown-item">
                <i class="material-icons">call</i> Contacts
              </a>
            </div>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">view_carousel</i> Notifications
            </a>
          </li>
          <li class="button-container nav-item iframe-extern">
            <a href="https://www.creative-tim.com/product/material-kit-pro?ref=presentation" target="_blank" class="btn  btn-rose   btn-round btn-block">
             Add Question
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('assets/img/city-profile.jpg');"></div>
  <div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="avatar">
                <img src="uploads/<?php echo $row['s_img'] ?>" alt="Circle Image" class="img-raised rounded-circle img-fluid">
              </div>
              <div class="name">
                <h3 class="title"><?php echo $row['name'] ?></h3>
                <h6><?php echo $batch[0].$batch[1].$batch[2] ?> Batch</h6>
                <!-- <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-pinterest"><i class="fa fa-pinterest"></i></a> -->
              </div>
            </div>
            <div class="follow">
              <button class="btn btn-fab btn-primary btn-round" rel="tooltip" title="Follow this user">
                <i class="material-icons">add</i>
              </button>
            </div>
          </div>
        </div>
        <!-- <div class="description text-center">
          <p>An artist of considerable range, Chet Faker &#x2014; the name taken by Melbourne-raised, Brooklyn-based Nick Murphy &#x2014; writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
        </div>
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                <!--
                                                        color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                                                -->
                <!-- <!-- <li class="nav-item">
                  <a class="nav-link active" href="#work" role="tab" data-toggle="tab">
                    <i class="material-icons">palette</i>
                    Work
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#connections" role="tab" data-toggle="tab">
                    <i class="material-icons">people</i>
                    Connections
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#media" role="tab" data-toggle="tab">
                    <i class="material-icons">camera</i>
                    Media
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div> -->
        <!-- <div class="tab-content tab-space">
          <div class="tab-pane active work" id="work">
            <div class="row">
              <div class="col-md-7 ml-auto mr-auto ">
                <h4 class="title">Latest Collections</h4>
                <div class="row collections">
                  <div class="col-md-6">
                    <div class="card card-background" style="background-image: url('../assets/img/examples/mariya-georgieva.jpg')">
                      <a href="#pablo"></a>
                      <div class="card-body">
                        <label class="badge badge-warning">Spring 2016</label>
                        <a href="#pablo">
                          <h2 class="card-title">Stilleto</h2>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card card-background" style="background-image: url('../assets/img/examples/clem-onojeghuo.jpg')">
                      <a href="#pablo"></a>
                      <div class="card-body">
                        <label class="badge badge-info">Spring 2016</label>
                        <a href="#pablo">
                          <h2 class="card-title">High Heels</h2>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card card-background" style="background-image: url('../assets/img/examples/olu-eletu.jpg')">
                      <a href="#pablo"></a>
                      <div class="card-body">
                        <label class="badge badge-danger">Summer 2016</label>
                        <a href="#pablo">
                          <h2 class="card-title">Flats</h2>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card card-background" style="background-image: url('../assets/img/examples/darren-coleshill.jpg')">
                      <a href="#pablo"></a>
                      <div class="card-body">
                        <label class="badge badge-success">Winter 2015</label>
                        <a href="#pablo">
                          <h2 class="card-title">Men's Sneakers</h2>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-2 mr-auto ml-auto stats">
                <h4 class="title">Stats</h4>
                <ul class="list-unstyled">
                  <li><b>60</b> Products</li>
                  <li><b>4</b> Collections</li>
                  <li><b>331</b> Influencers</li>
                  <li><b>1.2K</b> Likes</li>
                </ul>
                <hr>
                <h4 class="title">About his Work</h4>
                <p class="description">French luxury footwear and fashion. The footwear has incorporated shiny, red-lacquered soles that have become his signature.</p>
                <hr>
                <h4 class="title">Focus</h4>
                <span class="badge badge-primary">Footwear</span>
                <span class="badge badge-rose">Luxury</span>
              </div>
            </div>
          </div>
          <div class="tab-pane connections" id="connections">
            <div class="row">
              <div class="col-md-5 ml-auto mr-auto">
                <div class="card card-profile card-plain">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="card-header card-header-image">
                        <a href="#pablo">
                          <img class="img" src="../assets/img/faces/avatar.jpg" />
                        </a>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body">
                        <h4 class="card-title">Gigi Hadid</h4>
                        <h6 class="card-category text-muted">Model</h6>
                        <p class="card-description">
                          Don't be scared of the truth because we need to restart the human foundation in truth...
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5 mr-auto ml-auto">
                <div class="card card-profile card-plain">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="card-header card-header-image">
                        <a href="#pablo">
                          <img class="img" src="../assets/img/faces/marc.jpg" />
                        </a>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body">
                        <h4 class="card-title">Marc Jacobs</h4>
                        <h6 class="card-category text-muted">Designer</h6>
                        <p class="card-description">
                          Don't be scared of the truth because we need to restart the human foundation in truth...
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5 ml-auto mr-auto">
                <div class="card card-profile card-plain">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="card-header card-header-image">
                        <a href="#pablo">
                          <img class="img" src="../assets/img/faces/kendall.jpg" />
                        </a>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body">
                        <h4 class="card-title">Kendall Jenner</h4>
                        <h6 class="card-category text-muted">Model</h6>
                        <p class="card-description">
                          I love you like Kanye loves Kanye. Don't be scared of the truth.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5 ml-auto mr-auto">
                <div class="card card-profile card-plain">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="card-header card-header-image">
                        <a href="#pablo">
                          <img class="img" src="../assets/img/faces/card-profile2-square.jpg" />
                        </a>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body">
                        <h4 class="card-title">George West</h4>
                        <h6 class="card-category text-muted">Model/DJ</h6>
                        <p class="card-description">
                          I love you like Kanye loves Kanye.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane text-center gallery" id="media">
            <div class="row">
              <div class="col-md-3 ml-auto">
                <img src="../assets/img/examples/mariya-georgieva.jpg" class="rounded">
                <img src="../assets/img/examples/clem-onojegaw.jpg" class="rounded">
              </div>
              <div class="col-md-3 mr-auto">
                <img src="../assets/img/examples/clem-onojeghuo.jpg" class="rounded">
                <img src="../assets/img/examples/olu-eletu.jpg" class="rounded">
                <img src="../assets/img/examples/cynthia-del-rio.jpg" class="rounded">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer footer-default">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://www.creative-tim.com/">
              Creative Tim
            </a>
          </li>
          <li>
            <a href="https://creative-tim.com/presentation">
              About Us
            </a>
          </li>
          <li>
            <a href="http://blog.creative-tim.com/">
              Blog
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/license">
              Licenses
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a> for a better web.
      </div>
    </div> -->
  <!-- </footer>  -->
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="../../../buttons.github.io/buttons.js"></script>
  <!--	Plugin for Sharrre btn -->
  <script src="../assets/js/plugins/jquery.sharrre.js" type="text/javascript"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
  <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js" type="text/javascript"></script>
  <!--	Plugin for Small Gallery in Product Page -->
  <script src="../assets/js/plugins/jquery.flexisel.js" type="text/javascript"></script>
  <!-- Plugins for presentation and navigation  -->
  <script src="../assets/demo/modernizr.js" type="text/javascript"></script>
  <script src="../assets/demo/vertical-nav.js" type="text/javascript"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="../../../buttons.github.io/buttons.js"></script>
  <!-- Js With initialisations For Demo Purpose, Don't Include it in Your Project -->
  <script src="../assets/demo/demo.js" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-kit.mind1f1.js?v=2.2.0" type="text/javascript"></script>
</body>
</html>