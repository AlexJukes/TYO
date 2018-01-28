<?
/* Include Files *********************/
ini_set("session.save_handler", "files");
include("login.php");
include("cookie.php");

/*************************************/
?>
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
  <meta charset="utf-8" />
  <title>TYO | Join</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

  <!--FONT-->
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400,700%7CLora:400italic%7CPlayfair+Display:700">

  <!--CSS-->
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/colour.css" />
  <link rel="stylesheet" href="../css/animate.css" />
  <link rel="stylesheet" href="../css/font-awesome.min.css" />

  <!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
  <script src="../js/custom.modernizr.js"></script>
	<script src="../js/database_functions.js"></script>
	<script>
		is_logged_in();
	</script>
</head>


<body>
  <div id="load"></div>

  <!--header-->
  <header class="header">
    <!--menu-->
    <nav id="main_menu" class="navbar" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!--toggle-->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
				 <span class="icon-bar"></span>
				 <span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
          <!--logo-->
          <div class="logo">
            <a href="index.html"><img src="img/logo.png" alt="" /></a>
          </div>
        </div>
        <div class="collapse navbar-collapse" id="menu">
          <ul class="nav navbar-nav pull-right">
            <li>
              <a href="index.html">Home</a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								Tour
							</a>
              <ul class="dropdown-menu">
                <li><a href="about.html">About</a></li>
                <li><a href="meet_orchestra.html">Meet the Orchestra</a></li>
                <li><a href="staff.html">Meet the Staff</a></li>
                <li><a href="tour.html">Tour</a></li>
                <li><a href="chair.html">Sponsor a Chair</a></li>
              </ul>
            </li>
            <li>
              <a href="join.html">Join</a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								Media
							</a>
              <ul class="dropdown-menu">
                <li><a href="https://soundcloud.com/thamesyouthorchestra" target="blank">Audio Archive</a></li>
                <li><a href="videos.html">Videos</a></li>
                <li><a href="gallery.html">Photos</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								Members
							</a>
              <ul class="dropdown-menu">
                <li><a href="gridblog.html">Performers' Area</a></li>
                <li><a href="gridblog2.html">Administration</a></li>
              </ul>
            </li>
            <li>
              <a href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!--//header-->

  <!--TOP IMAGE-->
  <section id="intro-small-fixed">
    <div id="intro-background" class="joinbg"></div>
  </section>

  <!--MAIN-->
  <main class="content-small">

    <div class="container">
      <div class="row">
        <div class="col-lg-12">

          <div class="row pad45">
            <div class="lead">
              How To Join Us
            </div>
          </div>


          <!--FOOTER-->
          <div class="center footer">
            <div class="social-icons">
              <span class="wow fadeIn" data-wow-offset="80" data-wow-duration="2s">
					<a href="#"><i class="fa fa-twitter"></i></a>
				</span>

              <span class="wow fadeIn" data-wow-offset="80" data-wow-duration="2s" data-wow-delay="0.5s">
					<a href="#"><i class="fa fa-facebook"></i></a>
				</span>

              <span class="wow fadeIn" data-wow-offset="80" data-wow-duration="2s" data-wow-delay="1s">
					<a href="#"><i class="fa fa-youtube"></i></a>
				</span>

              <span class="wow fadeIn" data-wow-offset="80" data-wow-duration="2s" data-wow-delay="1.5s">
					<a href="#"><i class="fa fa-linkedin"></i></a>
				</span>

            </div>

            <div id="copyright">
              &copy; THAMES YOUTH ORCHESTRA
            </div>
            <p class="madeby">
              Registered Charity No. 1121177
            </p>
          </div>
          <!--//END-->

          <!--//END MAIN-->
  </main>
  <!--//-->

  <!--BACK TO TOP-->
  <a href="#"><i class="go-top fa fa-angle-up"></i></a>
  <!--//BACK TO TOP-->


  <!--SCRIPTS -->
  <script src="../js/jquery.js"></script>
  <script src="../js/retina.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/scripts.js"></script>
  <script src="../js/wow.js"></script>
  <script src="../js/topeffect.js"></script>
  <script src="../js/owl.carousel.min.js"></script>


</body>

</html>
