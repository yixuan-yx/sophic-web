<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ToFI Bridge</title>
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
  <link href="css/tofi.css" rel="stylesheet">
  
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

  <?php $page = 'tofi'; require_once 'header.php'; ?>

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
                <h1>TofI Universal Bus Translator</h1>
                <h2>Things of Internet are Smart Devices gathering and processing data<br>collected from the field to be utilized for the optimization of manufacturing and enterprise processes</h2>
                <!-- <a href="#main" class="btn-get-started scrollto">Learn More</a>  -->
              </div>
            </div>
          </div>
		  
        </div>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">
    <!--==========================
      tofi
    ============================-->
    <section id="tofi" class="section-bg">
      <div class="container">
		<div class="row wow fadeInLeft">
		  <div class="col-12">
		    <header class="section-header">
			  <h3>ToFI Bridge</h3>
			</header>
		  </div>
		  <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 text-center">
		    <img src="images/tofi/TofI Bridge.png" class="img-fluid" alt="ToFi Bridge">
		  </div>
		</div>
		
		<div class="row wow fadeInRight">
		  <div class="col mt-5">
		    <div class="context">
			  <h3>Product Overview</h3>
			  <p>Universal Bus Translator (ToFiBridge) is a platform capable of adapt & translate all types of manufacturing data (from low level sensors to PLCs) into IoT Gateway ready & compatible data. This platform will smoothen modernization transition via compliance standards such as MQTT and IIC to ease for next level deployment for intelligent algorithm. Beyond ToFi Bridge, our Application Program Interfaces (APIs) will bridge two-way communication between - Middleware to Gateway and - Gateway to Cloud. The API acts as bridge transferring data from local PC to cloud system. API consists of functions such as pulling of data, inserting data from/ to cloud, data mapping etc.</p>
		    <div class="line"></div>			  
			</div>
		  </div>
		</div>

		<div class="row wow fadeInUp">
		  <div class="col">
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="pills-product-specifications-tab" data-toggle="pill" href="#pills-product-specifications" role="tab" aria-controls="pills-product-specifications" aria-selected="true">Product Specifications</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-features-tab" data-toggle="pill" href="#pills-features" role="tab" aria-controls="pills-features" aria-selected="false">Features</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-application-tab" data-toggle="pill" href="#pills-application" role="tab" aria-controls="pills-application" aria-selected="false">Application</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="pills-download-tab" data-toggle="pill" href="#pills-download" role="tab" aria-controls="pills-download" aria-selected="false">Download</a>
				</li>					
			</ul>
			<div class="tab-content" id="pills-tabContent">
				<div class="tab-pane fade show active" id="pills-product-specifications" role="tabpanel" aria-labelledby="pills-product-specifications-tab">
					<table class="table table-bordered table-striped">
					  <thead>
						<tr>
						  <th scope="col">Component</th>
						  <th scope="col">Specification</th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
						  <th scope="row">CPU</th>
						  <td>Intel Celeron N3060 2.16GHz</td>
						</tr>
						<tr>
						  <th scope="row">Memory</th>
						  <td>DDR3L 1333/ 1066Mhz, 4GB</td>
						</tr>
						<tr>
						  <th scope="row">Storage</th>
						  <td>32GB eMMC</td>
						</tr>
						<tr>
						  <th scope="row">Field Bus Communication (Optional)</th>
						  <td>Support with additional add on module:<br>
						  2 x RS232 with 5v/ 12V<br>
						  1 x RS422/ RS485<br>
						  1 x GPIO with 5v & GND<br>
						  4 x USB 2.0</td>
						</tr>
						<tr>
						  <th scope="row">Ethernet Communication</th>
						  <td>SupportDual 10/100/1000 Mbps LAN<br>
						  LAN1: Intel120AT<br>
						  LAN2: Realtek RTL8111G</td>
						</tr>
						<tr>
						  <th scope="row">Wireless Communication (Optional)</th>
						  <td>Support with add on modules:<br>
						  WLAN 802.11<br>
						  2 x 3G Network (SIM Card)<br>
						  Bluetooth 2.0</td>
						</tr>
						<tr>
						  <th scope="row">Expansion</th>
						  <td>Support Mini PCI-E:<br>
						  1 x Half-Size Mini PCI-E support for WIFI<br>
						  1 x Full-Size Mini PCI-E support for mSATA<br>
						  SPI Chain Connection for:<br>
						  RS232 Field Bus Hub<br>
						  RS485 Field Bus Hub<br>
						  Ethernet 10/ 100/ 1000 Bus Hub</td>
						</tr>
						<tr>
						  <th scope="row">Operating System</th>
						  <td>Windows 7, Windows 8 & Windows 10 IOT</td>
						</tr>
						<tr>
						  <th scope="row">Power Requirement</th>
						  <td>12Vdc 1A</td>
						</tr>
						<tr>
						  <th scope="row">Construction Casing</th>
						  <td>Aluminum (Support VESA/DIN Rail/Wall)</td>
						</tr>
						<tr>
						  <th scope="row">Operating Temperature</th>
						  <td>0 ~ 40C</td>
						</tr>
						<tr>
						  <th scope="row">Storage Temperature</th>
						  <td>-20 ~ 80C</td>
						</tr>
						<tr>
						  <th scope="row">Operating Humidity</th>
						  <td>0 ~ 90%</td>
						</tr>
						<tr>
						  <th scope="row">Dimensions</th>
						  <td>140.8 x 27 x 107.50mm (W x D x H)</td>
						</tr>
						<tr>
						  <th scope="row">Certifications</th>
						  <td>CE, FCC Class A</td>
						</tr>	
						<tr>
						  <th scope="row">Protection Standard</th>
						  <td>IP20</td>
						</tr>								
					  </tbody>
					</table>					
				</div>
				<div class="tab-pane fade" id="pills-features" role="tabpanel" aria-labelledby="pills-features-tab">
					<ul class="list-unstyled ds-list mt-4">
						<li><i class="ion-android-checkmark-circle"></i> Palm-size form factor with expansion design</li>
						<li><i class="ion-android-checkmark-circle"></i> Support various type of industrial PLC/ Data Acquisition/ Sensors/ Devices protocols</li>
						<li><i class="ion-android-checkmark-circle"></i> Built-in with WiFiAP System for remote application solutions</li>
						<li><i class="ion-android-checkmark-circle"></i> Include with Web Portal for configuration and maintaining</li>
						<li><i class="ion-android-checkmark-circle"></i> Comes with common use communication interfaces (USB, Serial, Ethernet, GPIO, Parallel), and API features support multi-vendor protocols such as (Modbus, PROFINET, EtherCAT, MQTT)</li>
					</ul>					
				</div>
				<div class="tab-pane fade" id="pills-application" role="tabpanel" aria-labelledby="pills-application-tab">
					<ul class="list-unstyled ds-list mt-4">
						<li><i class="ion-android-checkmark-circle"></i> Manufacturing process monitoring</li>
						<li><i class="ion-android-checkmark-circle"></i> Equipment integration</li>
						<li><i class="ion-android-checkmark-circle"></i> Multi-vendor protocol integration</li>
						<li><i class="ion-android-checkmark-circle"></i> SCADA System</li>
						<li><i class="ion-android-checkmark-circle"></i> Big Data Application</li>
						<li><i class="ion-android-checkmark-circle"></i> Production traceability system</li>
						<li><i class="ion-android-checkmark-circle"></i> Data acquisition to cloud via MQTT protocol</li>
					</ul>
				</div>
				<div class="tab-pane fade" id="pills-download" role="tabpanel" aria-labelledby="pills-download-tab">
					<p class="p-4">
						<img src="images/icons/icon-pdf.png">
						 <a href="images/tofi/Tofi Bridge.pdf" download>Tofi Bridge.pdf</a>
					</p>
				</div>					
			</div>	
		  </div>
		</div>		
    </section>
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
