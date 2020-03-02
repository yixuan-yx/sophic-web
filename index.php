<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Sophic Automation - Home</title>
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
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/breakpoint.css" rel="stylesheet">
  <!-- Subscribe Form CSS Files -->
  <link rel="stylesheet" href="css/subscribe.css" />

  <style>
   body{
   background-image: url(images/background2.jpg);
	height: 100%;
	color: #fff;
	background-size: cover;
	background-position: left top;
	background-repeat: no-repeat;
   }

</style>
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

     
	  <?php $page = 'home'; require_once 'header.php'; ?>
	  <!--<img src="images/tryback.jpg" width="100%" style="visibility:hidden; position: absolute;">-->

     

      <div class="container" >
         <div class="firstbox wow fadeInUp">
            <div class="title1" id="fittext1">From Things of Internet (TofI™)</div>
            <div class="title2" id="fittext2">to Internet of Things (IoT)</div>
            <div class="title3" id="fittext2">
               Get your Machines CONNECTED & start Communicating,</br> 
			   Get Ready for I4.0 & Get SMARTer via</br>
               Our Connected Asset suite of solutions for</br>
               Connectivity, Monitoring, Control & Analytics
            </div>
         </div>
      </div>
      <div class="container2">
         <div class="hometitlecontainer wow fadeInLeft">
            <div class="hometitlebox fittext3">Legacy Connections</div>
            <p>Devices connected in myriads of fieldbus, data in silo</p>
         </div> 
      </div>
      <div class="container3"> 
         <div class="hometitlecontainer2 wow fadeInRight">
            <div class="hometitlebox2 fittext4">Connect & Communicate</div>
            <p>With our proprietary bridge technology, we connect up & communicate across devices and connections with single language, and protocol</p>
         </div>
      </div>
      <div class="container4">
         <div class="hometitlecontainer wow fadeInLeft">
            <div class="hometitlebox fittext3">Predicting the Future</div>
            <p>Harness the power of data with Analytics and be Future Confident</p>
         </div>
      </div>
      <div class="container5">
         <p class="wow fadeInRight">We recognize that not all manufacturing and enterprises are the same. For Bespoke solutions, please contact us. And rest assured, it's equally cost competitive as our standard solutions</p>
         <a href="contact.html">
            <div id="circle" class="wow fadeInUp">
               <p>Contact Us</p>
            </div>
         </a>
      </div>
	  <div class="container6">
         <div class="wow fadeInUp">
            <div class="title1 fittext3">We are hiring</div>
            <p>Sophic is an Equal Opportunity Employer. We are seeking the right people — people who want to innovate, achieve, grow and lead. We attract and retain the best talent by investing in our employees and empowering them to develop themselves and their careers. Experience the challenges, rewards and opportunity of working for one of the Malaysia’s (some say the world) best I4.0 solutions provider company.</p>
			<a href="career.html" id="rect" class="wow fadeInUp">
				CAREER
			</a>
         </div>
      </div>
	  
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
	  
      <!-- Contact Form JavaScript File -->
      <script src="contactform/contactform.js"></script>
      <!-- Subscribe Form JavaScript File -->
      <script src="subscribeform/subscribeform.js"></script>
      <!-- Template Main Javascript File -->
      <script src="js/main.js"></script>
      <script src="js/jquery.fittext.js"></script>

      <script type="text/javascript">
         $("#fittext1").fitText(1.7, {
             minFontSize: '25px',
             maxFontSize: '52px'
         });
         $("#fittext2").fitText(1.8, {
             minFontSize: '16px',
             maxFontSize: '35px'
         });
         $(".fittext3").fitText(1.7, {
             minFontSize: '25px',
             maxFontSize: '50px'
         });
         $(".fittext4").fitText(1.2, {
             minFontSize: '25px',
             maxFontSize: '50px'
         });
      </script>
</body>
</html>