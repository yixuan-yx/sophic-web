<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Product Contact Form</title>
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
  <main id="main">
   <!--==========================
      Contact Section
    ============================-->
	<div class="section-bg">
    <section id="contact" class="wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>
		  <?php
		    if(isset($_GET["product"]))
			{
				$data = $_GET["product"];
			}
			echo $data;
			?>
		  </h3>
          <p>Sophic is here to provide you with more information, answer any questions you may have and create an effective solution for your  industrial needs.</p>
        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-12">
                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
				<input type="hidden" class="form-control" name="product" id="product" value=<?php echo $data; ?>>
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-12">
                <input type="text" class="form-control" name="company" id="company" placeholder="Company" data-rule="minlen:4" data-msg="Please enter at least 4 chars of subject" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
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
