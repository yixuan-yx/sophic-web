<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Contact</title>
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
  <link href="style.css" rel="stylesheet">
  <link href="css/contact.css" rel="stylesheet">
  
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

  <?php $page = 'contact'; require_once 'header.php'; ?>
  
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel slide carousel-fade" data-ride="carousel">
	  
        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="images/globe.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h1>Contact Us</h1>
                <h2>
				  Sophic is here to provide you with more information,<br>answer any questions you may have and create an effective solution for your  industrial needs.
				</h2>
                <!-- <a href="#contact" class="btn-get-started scrollto">Contact Us Now!</a> -->
              </div>
            </div>
          </div>
		  
        </div>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">
   <!--==========================
      Contact Section
    ============================-->
	<div class="section-bg">
    <section id="contact" class="wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
          <p>Sophic is here to provide you with more information, answer any questions you may have and create<br>an effective solution for your industrial needs.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <h3 style="color:black">Penang</h3>
              <address>
			    PSDC Building, 2nd Floor, No.1,<br>
				Jalan Sultan Azlan Shah,<br>
				11900 Bayan Lepas,<br>
				Penang, Malaysia.
			  </address>
			  
              <p class="mt-2"><b>Tel :</b> (604) 640 9087 / 9088 / 9089</p>
			  <p><b>Fax :</b> (604) 240 9288</p>
              <p><b><a href="mailto:enquiry@sophicautomation.com" style="color:#18d26e">enquiry@sophicautomation.com</a></b></p>				  
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-address">
              <h3 style="color:black">Kuala Lumpur</h3>
              <address>
				Lot 2-9, Innovation House, Technology Park Malaysia,<br>
				Lebuhraya Puchong-Sg Besi, 57000 Kuala Lumpur,<br>
				Selangor, Malaysia.
			  </address>
              <p class="mt-2"><b>Tel :</b> (603) 899 41179</p>
              <p><b><a href="mailto:enquiry@sophicautomation.com" style="color:#18d26e">enquiry@sophicautomation.com</a></b></p>				  
            </div>
          </div>


          <div class="col-md-4">
            <div class="contact-address">
              <h3 style="color:black">Vietnam</h3>
              <address>
			    Sophic Co Ltd, Lot A2,<br>
				Nguyen Van Ba street, Truong Tho Ward, Thu Duc District, <br>
				Ho Chi Minh City,<br>
				Vietnam.
			  </address>
              <p class="mt-2"><b>Tel :</b> (+84) 8 62821235</p>
              <p><b><a href="mailto:enquiry@sophicautomation.com" style="color:#18d26e">enquiry@sophicautomation.com</a></b></p>				  
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="tel" class="form-control" name="phonenumber" id="phonenumber" placeholder="Your Phone Number" data-rule="minlen:4" data-msg="Please enter a valid phone number" />
                <div class="validation"></div>
              </div>
            </div>  
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Submit</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->
	</div>
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
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  
  <!-- Subscribe Form JavaScript File -->
  <script src="subscribeform/subscribeform.js"></script>
  
</body>
</html>
