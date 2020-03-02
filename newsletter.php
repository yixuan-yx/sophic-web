<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Newsletter</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="lib/lity-2.3.1/dist/lity.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="style.css" rel="stylesheet">
  <link href="css/news.css" rel="stylesheet">
  
  <!-- Subscribe Form CSS Files -->
  <link rel="stylesheet" href="css/subscribe.css" />
</head>

<body>
	<!-- Pop-up subscribe form -->
      <div id="popup-box">
         <img src="img/close.png" id="popup-close" />
         <div id="popup-box-content">
            <h3>Subscribe to The Sophic Newsletter</h3>
            <p>
               Stay up to date on the latest news, product, solution and many more by subscribe!
            </p>
            <form id="mc-embedded-subscribe-form" action="https://sophicautomation.us14.list-manage.com/subscribe/post?u=2ff8b31262712df77126e0313&amp;id=723c4c2cba">
               <input type="text" name="EMAIL" id="mce-EMAIL" placeholder="Email Address">               
               <input type="submit" name="subscribeForm" id="button">
            </form>
         </div>
      </div>

  <?php $page = 'resource'; require_once 'header.php'; ?>

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
	  
        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="images/globe.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h1>Sophic Newsletter</h1>
                <h2>We update you the latest newsletter !</h2>
                <!-- <a href="#portfolio" class="btn-get-started scrollto">Our News</a> -->
              </div>
            </div>
          </div>	  
        </div>
      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">
    <!--==========================
      News Section
    ============================-->
    <section id="portfolio" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Newsletter</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">

            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
		 
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              
            <figure>
                <img src="images/news/eventnworkshop.jpg" class="img-fluid" alt="">
                <a href="images/news/MVCA Annual Dinner & Awards Night/DINNER MVCA_156.jpg" class="link-preview" data-lightbox="news-section-19" title="Preview"><i class="ion ion-eye"></i></a>
               

                <a href="news-category1.php" class="link-details" title="Show All News" data-lity><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a>IN PROGRESS</a></h4>
                <p>hey</p>
              </div>
            </div>
           </div>
        </div>
        

      </div>
    </section><!-- #portfolio -->
	
  </main>
  
  <?php require_once 'footer.php'; ?>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="lib/lity-2.3.1/dist/lity.js"></script>
  
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  
  <!-- Subscribe Form JavaScript File -->
  <script src="subscribeform/subscribeform.js"></script>
  
</body>
</html>