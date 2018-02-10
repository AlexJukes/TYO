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
  <title>TYO | Performers</title>
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
            <a href="../index.html"><img src="img/logo.png" alt="" /></a>
          </div>
        </div>
        <div class="collapse navbar-collapse" id="menu">
          <ul class="nav navbar-nav pull-right">
            <li>
              <a href="../index.html">Home</a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								About Us
							</a>
              <ul class="dropdown-menu">
                <li><a href="../about.html">About</a></li>
                <li><a href="../meet_orchestra.html">Meet the Orchestra</a></li>
                <li><a href="../staff.html">Meet the Staff</a></li>
                <li><a href="../tour.html">Tour</a></li>
                <li><a href="../chair.html">Sponsor a Chair</a></li>
              </ul>
            </li>
            <li>
              <a href="../join.html">Join</a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								Media
							</a>
              <ul class="dropdown-menu">
                <li><a href="https://soundcloud.com/thamesyouthorchestra" target="blank">Audio Archive</a></li>
                <li><a href="https://www.youtube.com/channel/UCBnPdEk2fDQTwo5un-ZBX6w" target="blank">Videos</a></li>
                <li><a href="../gallery.html">Photos</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								Members
							</a>
              <ul class="dropdown-menu">
                <li><a href="performers.php">Performers' Area</a></li>

              </ul>
            </li>
            <li>
              <a href="../contact.html">Contact</a>
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
          <h1>
            Performers' Area
          </h1>

            <div class="lead">
            Current Pieces
            </div>
          </div>

          <div class="container" style="text-align:center">
            <div class="row pad45">
             <div class"col-md-12">
               <h2>Stravinsky: Firebird Suite (1919)</h2>
             </div>
            </div>
            <div class="row pad30">
              <div class="col-md-12">
                <img src="../img/general_illustration/Stravinsky.jpg" alt="Igor">
              </div>
            </div>
            <div class="row pad45">
              <div class="col-xs-12 col-md-3">
                <img class="section-icon" src="/tyo/img/instrument_icons/violin.png" />
                <div class="pieces">
                  <a href="pdfs/Firebird/Violin I.pdf" target="_blank">Violin 1</a></br>
                  <a href="pdfs/Firebird/Violin II.pdf" target="_blank" class="style3">Violin 2</a></br>
                  <a href="pdfs/Firebird/Viola.pdf" target="_blank" class="style3">Viola</a></br>
                  <a href="pdfs/Firebird/Cello.pdf" target="_blank" class="style3">Cello</a></br>
                  <a href="pdfs/Firebird/Bass.pdf" target="_blank" class="style3">Bass</a></br>
                </div>

              </div>
              <div class="col-xs-12 col-md-3">
                <img class="section-icon" src="/tyo/img/instrument_icons/flute.png" />
                <div class="pieces">
                  <a href="pdfs/Firebird/Flute 1.pdf" target="_blank">Flute 1</a></br>
                  <a href="pdfs/Firebird/Flute 2.pdf" target="_blank">Flute 2</a></br>
                  <a href="pdfs/Firebird/Oboe 1.pdf" target="_blank">Oboe 1</a></br>
                  <a href="pdfs/Firebird/Oboe 2 + cor.pdf" target="_blank">Oboe 2/Cor</a></br>
                  <a href="pdfs/Firebird/Clarinet 1.pdf" target="_blank">Clarinet 1</a></br>
                  <a href="pdfs/Firebird/Clarinet 2.pdf" target="_blank">Clarinet 2</a></br>
                  <a href="pdfs/Firebird/Bassoon 1.pdf" target="_blank">Bassoon 1</a></br>
                </div>
              </div>
              <div class="col-xs-12 col-md-3">
                <img class="section-icon" src="/tyo/img/instrument_icons/trumpet.png" />
                <div class="pieces">
                  <a href="pdfs/Firebird/Horn 1.pdf" target="_blank">Horn 1</a><br>
                  <a href="pdfs/Firebird/Horn 2.pdf" target="_blank">Horn 2</a><br>
                  <a href="pdfs/Firebird/Horn 3.pdf" target="_blank">Horn 3</a><br>
                  <a href="pdfs/Firebird/Horn 4.pdf" target="_blank">Horn 4</a> <br>
                  <a href="pdfs/Firebird/Trumpet 1.pdf" target="_blank">Trumpet 1</a><br>
                  <a href="pdfs/Firebird/Trumpet 2.pdf" target="_blank">Trumpet 2</a><br>
                </div>
              </div>
              <div class="col-xs-12 col-md-3">
                <img class="section-icon" src="/tyo/img/instrument_icons/trombone.png" />
                <div class="pieces">
                  <a href="pdfs/Firebird/Trombone 1.pdf" target="_blank">Trombone 1</a><br>
                  <a href="pdfs/Firebird/Trombone 2.pdf" target="_blank">Trombone 2</a><br>
                  <a href="pdfs/Firebird/Trombone 3.pdf" target="_blank">Trombone 3</a><br>
                  <a href="pdfs/Firebird/Tuba.pdf" target="_blank">Tuba</a><br>
                  <a href="pdfs/Firebird/Harp.pdf" target="_new">Harp</a><br>
                  <a href="pdfs/Firebird/Piano.pdf" target="_new">Piano</a><br>
                  <a href="pdfs/Firebird/Timps.pdf" target="_new">Timps</a><br>
                  <a href="pdfs/Firebird/Percussion.pdf" target="_blank">Percussion</a><br>
                </div>


              </div>
            </div>


            <div class="row pad45">
             <div class"col-md-12">
               <h2>Kodaly: Hary Janos Suite</h2>
             </div>
            </div>
            <div class="row pad30">
              <div class="col-md-12">
                <img style="height:130px" src="../img/general_illustration/kodaly.jpg" alt="Kodaly">
              </div>
            </div>
            <div class="row pad45">
              <div class="col-xs-12 col-md-2">
                <img class="section-icon" src="/tyo/img/instrument_icons/violin.png" />

                <div class="pieces">
                  <a href="pdfs/Hary/Violin I.pdf" target="_blank">Violin 1</a></br>
                  <a href="pdfs/Hary/Violin II.pdf" target="_blank" class="style3">Violin 2</a></br>
                  <a href="pdfs/Hary/Viola.pdf" target="_blank" class="style3">Viola</a></br>
                  <a href="pdfs/Hary/Cello.pdf" target="_blank" class="style3">Cello</a></br>
                  <a href="pdfs/Hary/Bass.pdf" target="_blank" class="style3">Bass</a></br>
                </div>
              </div>
              <div class="col-xs-12 col-md-2">
                <img class="section-icon" src="/tyo/img/instrument_icons/flute.png" />

                <div class="pieces">
                  <a href="pdfs/Hary/flute 1.pdf" target="_blank">Flute 1</a><br>
                  <a href="pdfs/Hary/flute 2.pdf" target="_blank">Flute 2</a><br>
                  <a href="pdfs/Hary/flute 3.pdf" target="_blank">Flute 3</a><br>
                  <a href="pdfs/Hary/oboe 1.pdf" target="_blank">Oboe 1</a><br>
                  <a href="pdfs/Hary/oboe 2.pdf" target="_blank">Oboe 2</a><br>
                </div>
              </div>
              <div class="col-xs-12 col-md-2">
                <img class="section-icon" src="/tyo/img/instrument_icons/score.png" />

                <div class="pieces">
                  <a href="pdfs/Hary/clarinet 1.pdf" target="_blank">Clarinet 1</a><br>
                  <a href="pdfs/Hary/clarinet 2.pdf" target="_blank">Clarinet 2</a><br>
                  <a href="pdfs/Hary/bassoon 1.pdf" target="_blank">Bassoon 1</a><br>
                  <a href="pdfs/Hary/bassoon 2.pdf" target="_blank">Bassoon 2</a>
                </div>
              </div>
              <div class="col-xs-12 col-md-2">
                <img class="section-icon" src="/tyo/img/instrument_icons/trumpet.png" />

                <div class="pieces">
                  <a href="pdfs/Hary/horn 1.pdf" target="_blank">Horn 1</a><br>
                  <a href="pdfs/Hary/horn 2.pdf" target="_blank">Horn 2</a><br>
                  <a href="pdfs/Hary/horn 3.pdf" target="_blank">Horn 3</a><br>
                  <a href="pdfs/Hary/horn 4.pdf" target="_blank">Horn 4</a><br>
                  <a href="pdfs/Hary/trumpet 1.pdf" target="_blank">Trumpet 1</a><br>
                  <a href="pdfs/Hary/trumpet 2.pdf" target="_blank">Trumpet 2</a><br>
                  <a href="pdfs/Hary/trumpet 3.pdf" target="_blank">Trumpet 3</a><br>
                </div>
              </div>
              <div class="col-xs-12 col-md-2">
                <img class="section-icon" src="/tyo/img/instrument_icons/trombone.png" />

                <div class="pieces">
                  <a href="pdfs/Hary/cornet 1.pdf" target="_blank">Cornet 1</a><br>
                  <a href="pdfs/Hary/cornet 2.pdf" target="_blank">Cornet 2</a><br>
                  <a href="pdfs/Hary/cornet 3.pdf" target="_blank">Cornet 3</a><br>
                  <a href="pdfs/Hary/trombone 1.pdf" target="_blank">Trombone 1</a><br>
                  <a href="pdfs/Hary/trombone 2.pdf" target="_blank">Trombone 2</a><br>
                  <a href="pdfs/Hary/trombone 3.pdf" target="_blank">Trombone 3</a><br>
                  <a href="pdfs/Hary/tuba.pdf" target="_blank">Tuba</a>
                </div>
              </div>
              <div class="col-xs-12 col-md-2">
                <img class="section-icon" src="/tyo/img/instrument_icons/harp.png" />

                <div class="pieces">
                  <a href="pdfs/Hary/harp.pdf" target="_new">Harp</a><br>
                  <a href="pdfs/Hary/piano.pdf" target="_new">Piano</a><br>
                  <a href="pdfs/Hary/celesta.pdf" target="_new">Celesta</a><br>
                  <a href="pdfs/Hary/cimbalom.pdf" target="_new">Cimbalom</a><br>
                  <a href="pdfs/Hary/timps.pdf" target="_new">Timps</a><br>
                  <a href="pdfs/Hary/perc.pdf" target="_blank">Percussion</a>
                </div>
              </div>
            </div>

          </div>


          <!--FOOTER-->
          <div class="center footer">
            <div class="social-icons">
              <span class="wow fadeIn" data-wow-offset="80" data-wow-duration="2s">
					<a href="https://twitter.com/thamesyouthorch"><i class="fa fa-twitter"></i></a>
				</span>

              <span class="wow fadeIn" data-wow-offset="80" data-wow-duration="2s" data-wow-delay="0.5s">
					<a href="https://en-gb.facebook.com/TYOLondon/"><i class="fa fa-facebook"></i></a>
				</span>

              <span class="wow fadeIn" data-wow-offset="80" data-wow-duration="2s" data-wow-delay="1s">
					<a href="https://www.youtube.com/channel/UCBnPdEk2fDQTwo5un-ZBX6w"><i class="fa fa-youtube"></i></a>
				</span>

              <span class="wow fadeIn" data-wow-offset="80" data-wow-duration="2s" data-wow-delay="1.5s">

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
  <script src="../js/database_functions.js"></script>
  <script>
    is_logged_in();
  </script>
  </head>

</body>

</html>
