<?php
	include "lib/library.php";

	global $con;
  $id = $_SESSION['id'];


	$query = "SELECT c.c_id,c.c_name FROM my_courses AS m JOIN course AS c ON(m.c_id = c.c_id) WHERE student_id = '$id' ORDER BY c_id";
  $query2 = "SELECT * FROM course WHERE d_id = (SELECT d_id FROM student WHERE id = '$id')";
	$a = mysqli_query($con, $query);
	$b = mysqli_query($con, $query2);

  if ( isset( $_POST['add'] ) ) {
    $s_course = $_POST['s_course'];
    $query3 = "INSERT INTO `my_courses` (`student_id`, `c_id`) VALUES ('$id', '$s_course')";
    $c = mysqli_query($con, $query3);
    header("Location:courses.php");
  }

  if ( isset( $_POST['remove'] ) ) {
    $key = $_REQUEST['key'];
    echo $key;
    $query4 = "DELETE FROM my_courses WHERE my_courses.student_id = '$id' AND my_courses.c_id = '$key'";
    $d = mysqli_query($con, $query4);
    header("Location:courses.php");
  }

?>

<!DOCTYPE html>
<html>
<head>
	<title>My Courses</title>
	<link rel="stylesheet" type="text/css" href="css/design.css?<?php echo time(); ?>">
	
	<meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   My Profile
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

  <!-- Canonical SEO -->
  <!--
  <link rel="canonical" href="https://www.creative-tim.com/product/material-kit-pro" />
  <!--  Social tags      -->

  <!-- <!-- <!--  --<meta name="keywords" content="bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, material, material kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, premium bootstrap 4 ui kit, premium template, bootstrap 4 template">
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
  </script>   <!-- End Google Tag Manager -->

</head>
<body>
	
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <nav class="navbar navbar-color-on-scroll navbar-white   fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
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
          <li class="dropdown nav-item">
            <a href="index.php" class="dropdown-toggle nav-link" data-toggle="dropdown">
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
            <a href="a_question.php" target="_blank" class="btn  btn-rose   btn-round btn-block">
             Add Question
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="list">
  	<h1>My Courses</h1>
  		<?php while($row = mysqli_fetch_assoc($a)) {
  		?>
        <div class="wrap">
            <div id="course"><a href="subject.php?key=<?php echo $row['c_id']?>"><?php echo $row['c_id'] . ' ' . $row['c_name']?></a></div>
            <!--input type="submit" class="btn btn-primary" name="remove" value="Remove"--> 
            <form action="courses.php?key=<?php echo $row['c_id']; ?>" method="post">
              <div class="remove"><input type="submit" class="btn btn-primary" name="remove" value="Remove"></div>
            </form>         
        </div>
  		<?php } ?>
  	</table>
  	<h2>Choose Courses</h2>
 		

  	<div id="option"></div>
        <div id="course">
          <form method="post">
      		<label>
    		    <select id="courses" name="s_course" style="width: 300px; height: 30px;">
    		    <?php while($row = mysqli_fetch_assoc($b)) { ?>
    		    <option value="<?php echo $row['c_id']; ?>" ><?php echo $row['c_id'] . ' ' . $row['c_name']?></option>
    		    <?php } ?>
    		    </select>
    	    </label>
        </div>
        <div class="blank"></div>
        <!--input type="submit" class="btn btn-primary" name="remove" value="Remove"--> 
        
          <div class="remove"><input type="submit" class="btn btn-primary" name="add" value="Add"></div>
        </form>      
      <div class="wrap">
  	</div>	
  </div>

</body>
</html>