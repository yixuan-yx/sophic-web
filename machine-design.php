<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Smart Machine Design</title>
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
  <link href="css/mc.css" rel="stylesheet">
  
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

  <?php $page = 'solution'; require_once 'header.php'; ?>

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
                <h1>Smart Machine Design</h1>
                <h2>Sophic works with our partners to deliver<br>Smart Machines by embedding Smart software design into the machines</h2>
                <!-- <a href="#main-context" class="btn-get-started scrollto">Smart Machine</a> -->
              </div>
            </div>
          </div>
		  
        </div>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">
	<section id="main-context" class="section-bg">
	  <div class="container-fluid">	
		<div class="row">
		  <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12">
			<div class="list-group list-group-flush">
			  <div class="list-group-item bg-white p-0">
				<h5 class="m-3"><b>Handlers (Pick & Place)</b></h5>
 				  <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<li class="nav-item">
					  <a class="nav-link active" id="v-pills-awis-tab" data-toggle="pill" href="#v-pills-awis" role="tab" aria-controls="v-pills-awis" aria-selected="true">Automated Wafer Inspection System</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" id="v-pills-whs-tab" data-toggle="pill" href="#v-pills-whs" role="tab" aria-controls="v-pills-whs" aria-selected="false">Wafer Handling System</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" id="v-pills-awmh-tab" data-toggle="pill" href="#v-pills-awmh" role="tab" aria-controls="v-pills-awmh" aria-selected="false">Automated Wafer Marking Handler</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" id="v-pills-dwih-tab" data-toggle="pill" href="#v-pills-dwih" role="tab" aria-controls="v-pills-dwih" aria-selected="false">Die/ Wire Inspection Handler</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" id="v-pills-lmh-tab" data-toggle="pill" href="#v-pills-lmh" role="tab" aria-controls="v-pills-lmh" aria-selected="false">Laser Marking Handler</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" id="v-pills-imh-tab" data-toggle="pill" href="#v-pills-imh" role="tab" aria-controls="v-pills-imh" aria-selected="false">Ink Marking Handler</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" id="v-pills-cih-tab" data-toggle="pill" href="#v-pills-cih" role="tab" aria-controls="v-pills-cih" aria-selected="false">Component Insert Handler</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" id="v-pills-pph-tab" data-toggle="pill" href="#v-pills-pph" role="tab" aria-controls="v-pills-pph" aria-selected="false">Pick & Place Handler</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" id="v-pills-gfth-tab" data-toggle="pill" href="#v-pills-gfth" role="tab" aria-controls="v-pills-gfth" aria-selected="false">Gravity Feed Test Handler</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" id="v-pills-cth-tab" data-toggle="pill" href="#v-pills-cth" role="tab" aria-controls="v-pills-cth" aria-selected="false">Cartesian Test Handler</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" id="v-pills-tth1-tab" data-toggle="pill" href="#v-pills-tth1" role="tab" aria-controls="v-pills-tth1" aria-selected="false">Test & Tape Handler</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" id="v-pills-tth2-tab" data-toggle="pill" href="#v-pills-tth2" role="tab" aria-controls="v-pills-tth2" aria-selected="false">Test & Tape Handler</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" id="v-pills-fah-tab" data-toggle="pill" href="#v-pills-fah" role="tab" aria-controls="v-pills-fah" aria-selected="false">Flip & Attach Handler</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" id="v-pills-ra-tab" data-toggle="pill" href="#v-pills-ra" role="tab" aria-controls="v-pills-ra" aria-selected="false">Robot Arm</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" id="v-pills-mt-tab" data-toggle="pill" href="#v-pills-mt" role="tab" aria-controls="v-pills-mt" aria-selected="false">Misc Tester</a>
					</li>				  
				  </ul>	 
			  </div>
			  <a class="list-group-item list-group-item-action disabled bg-light">Leak Tester
			  <br>
			  <span class="text-danger">(Not available)</span>
			  </a>
			  <a class="list-group-item list-group-item-action disabled bg-light">Functional Tester
			  <br>
			  <span class="text-danger">(Not available)</span>
			  </a>
			  <a class="list-group-item list-group-item-action disabled bg-light">Machine + Vision
			  <br>
			  <span class="text-danger">(Not available)</span>
			  </a>
			  <a class="list-group-item list-group-item-action disabled bg-light">Material Transfer (AGV)
			  <br>
			  <span class="text-danger">(Not available)</span>
			  </a>
			</div>
		  </div>
		  
		  <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12">
			<div class="tab-content mt-3" id="v-pills-tabContent">
			
			  <!-- Automated Wafer Inspection System -->
			  <div class="tab-pane fade show active" id="v-pills-awis" role="tabpanel" aria-labelledby="v-pills-awis-tab">
				<div class="container-fluid">
				<div class="row">
				  <div class="col">
					<div class="section-header">
					  <h3>Automated Wafer Inspection System</h3>
					</div>
				  </div>
				</div>
				<div class="row">
				  <div class="col-4">
				    <img id="awis" src="images/machine design/picture1.png" class="img-fluid" alt="AWIS">
					<div class="row mt-1">
						<div class="col">
						  <img src="images/machine design/picture1.png" style="cursor:pointer;" id="c1" alt="" class="d-inline-block w-25">
						  <img src="images/machine design/picture101.png" style="cursor:pointer;" id="c2" alt="" class="d-inline-block w-25">						  
						</div>
					</div>						
				  </div>
				  <div class="col-8">	

				  </div>
				</div>
				<div class="row">
				  <div class="col">
					<div class="line"></div>
				  </div>
				</div>						
				<div class="row">
				  <div class="col-12">
					<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					  <li class="nav-item">
						<a class="nav-link active" id="pills-awis-main-function-tab" data-toggle="pill" href="#pills-awis-main-function" role="tab" aria-controls="pills-awis-main-function" aria-selected="true">Main Function</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" id="pills-awis-features-tab" data-toggle="pill" href="#pills-awis-features" role="tab" aria-controls="pills-awis-features" aria-selected="false">Features</a>
					  </li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
					  <div class="tab-pane fade show active" id="pills-awis-main-function" role="tabpanel" aria-labelledby="pills-awis-main-function-tab">
						<ul class="list-unstyled ds-list">
						  <li><i class="ion-android-checkmark-circle"></i> Auto loader/unloader for water frames</li>
						  <li><i class="ion-android-checkmark-circle"></i> Automated defect classification of inspected die</li>
						  <li><i class="ion-android-checkmark-circle"></i> Water map creation/updates of loaded water map</li>
						  <li><i class="ion-android-checkmark-circle"></i> Optional inking capability for defect dies</li>
						</ul>
					  </div>
					  <div class="tab-pane fade" id="pills-awis-features" role="tabpanel" aria-labelledby="pills-awis-features-tab">
						<ul class="list-unstyled ds-list">
						  <li><i class="ion-android-checkmark-circle"></i> Capable of handling up to 12" water</li>
						  <li><i class="ion-android-checkmark-circle"></i> Window platform with user-defined specifications</li>
						  <li><i class="ion-android-checkmark-circle"></i> Built-in calibration feature</li>
						  <li><i class="ion-android-checkmark-circle"></i> Library based uploading for different types of die</li>
						  <li><i class="ion-android-checkmark-circle"></i> Statistical descriptive analysis of defects</li>
						</ul>
					  </div>
					</div>
				  </div>
				</div>
			    </div>
			  </div>
			  
			  <!-- Automated Wafer Inspection System -->
			  <div class="tab-pane fade" id="v-pills-whs" role="tabpanel" aria-labelledby="v-pills-whs-tab">
			    <div class="container-fluid">
				<div class="row">
				  <div class="col">
					<div class="section-header">
					  <h3>Water Handling System</h3>
					</div>
				  </div>
				</div>
				<div class="row">
				  <div class="col-4">
					<img id="whs" src="images/machine design/Picture2.png" class="img-fluid" alt="WHS">
					<div class="row mt-1">
						<div class="col">
						  <img src="images/machine design/Picture2.png" style="cursor:pointer;" id="d1" alt="" class="d-inline-block w-25">
						  <img src="images/machine design/Picture201.jpg" style="cursor:pointer;" id="d2" alt="" class="d-inline-block w-25">
						  <img src="images/machine design/picture202.jpg" style="cursor:pointer;" id="d3" alt="" class="d-inline-block w-25">							  
						</div>
					</div>						
				  </div>
				  <div class="col-8">	

				  </div>
				</div>
				<div class="row">
				  <div class="col">
					<div class="line"></div>
				  </div>
				</div>						
				<div class="row">
				  <div class="col-12">
					<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					  <li class="nav-item">
						<a class="nav-link active" id="pills-whs-tab" data-toggle="pill" href="#pills-whs-main-function" role="tab" aria-controls="pills-whs" aria-selected="true">Main Function</a>
					  </li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
					  <div class="tab-pane fade show active" id="pills-whs-main-function" role="tabpanel" aria-labelledby="pills-whs-main-function-tab">
						<ul class="list-unstyled ds-list">
						  <li><i class="ion-android-checkmark-circle"></i> High-resolution camera</li>
						  <li><i class="ion-android-checkmark-circle"></i> Able to perform die counting</li>
						  <li><i class="ion-android-checkmark-circle"></i> Window platform with user-defined specifications</li>
						  <li><i class="ion-android-checkmark-circle"></i> Built-in calibration feature</li>
						  <li><i class="ion-android-checkmark-circle"></i> Library based uploading for different types of die</li>
						  <li><i class="ion-android-checkmark-circle"></i> Wafer map creation/updates of loaded wafer map</li>
						</ul>
					  </div>
					</div>
				  </div>
				</div>
				</div>
			  </div>
			  
			  <!-- Automated Wafer Marking Handler -->
			  <div class="tab-pane fade" id="v-pills-awmh" role="tabpanel" aria-labelledby="v-pills-awmh-tab">
				<div class="container-fluid">
				<div class="row">
				  <div class="col">
					<div class="section-header">
					  <h3>Automated Wafer Marking Handler</h3>
					</div>
				  </div>
				</div>
				<div class="row">
				  <div class="col-4">
				    <img src="images/machine design/Picture3.png" class="img-fluid" alt="AWMH">
				  </div>
				  <div class="col-8">	

				  </div>
				</div>
				<div class="row">
				  <div class="col">
					<div class="line"></div>
				  </div>
				</div>						
				<div class="row">
				  <div class="col-12">
					<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					  <li class="nav-item">
						<a class="nav-link active" id="pills-awmh-tab" data-toggle="pill" href="#pills-awmh-main-function" role="tab" aria-controls="pills-awmh" aria-selected="true">Main Function</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" id="pills-awmh-tab" data-toggle="pill" href="#pills-awmh-features" role="tab" aria-controls="pills-awmh" aria-selected="false">Features</a>
					  </li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
					  <div class="tab-pane fade show active" id="pills-awmh-main-function" role="tabpanel" aria-labelledby="pills-awmh-main-function-tab">
						<ul class="list-unstyled ds-list">
						  <li><i class="ion-android-checkmark-circle"></i> Input: unmarked wafer in cassette form</li>
						  <li><i class="ion-android-checkmark-circle"></i> Output: marked wafer in cassette form</li>
						</ul>
					  </div>
					  <div class="tab-pane fade" id="pills-awmh-features" role="tabpanel" aria-labelledby="pills-awmh-features-tab">
						<ul class="list-unstyled ds-list">
						  <li><i class="ion-android-checkmark-circle"></i> Auto loader/unloader for wafer frame</li>
						  <li><i class="ion-android-checkmark-circle"></i> Capable of handling up to 12" water</li>
						  <li><i class="ion-android-checkmark-circle"></i> Window platform with user-defined specifications</li>
						  <li><i class="ion-android-checkmark-circle"></i> Built-in calibration feature</li>
						  <li><i class="ion-android-checkmark-circle"></i> Library based uploading for different types of die</li>
						  <li><i class="ion-android-checkmark-circle"></i> Water map creation/updates of loaded wafer map</li>
						</ul>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
			
			<!-- Die/ Wire Inspection Handler -->
			<div class="tab-pane fade" id="v-pills-dwih" role="tabpanel" aria-labelledby="v-pills-dwih-tab">
			  <div class="container-fluid">
			  <div class="row">
				<div class="col">
				  <div class="section-header">
					<h3>Die/ Wire Inspection Handler</h3>
				  </div>
				</div>
			  </div>
			  <div class="row">
				<div class="col-4">
				  <img id="dwih" src="images/machine design/Picture4.png" class="img-fluid" alt="dwih">
					<div class="row mt-1">
						<div class="col">
						  <img src="images/machine design/Picture4.png" style="cursor:pointer;" id="e1" alt="" class="d-inline-block w-25">
						  <img src="images/machine design/picture401.png" style="cursor:pointer;" id="e2" alt="" class="d-inline-block w-25">						  
						</div>
					</div>						  
				</div>
				<div class="col-8">	

				</div>
			  </div>
			  <div class="row">
				<div class="col">
				  <div class="line"></div>
				</div>
			  </div>						
			  <div class="row">
				<div class="col-12">
				  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					<li class="nav-item">
					  <a class="nav-link active" id="pills-dwih-tab" data-toggle="pill" href="#pills-dwih-main-function" role="tab" aria-controls="pills-dwih" aria-selected="true">Main Function</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" id="pills-dwih-tab" data-toggle="pill" href="#pills-dwih-features" role="tab" aria-controls="pills-dwih" aria-selected="false">Features</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" id="pills-dwih-tab" data-toggle="pill" href="#pills-dwih-vision-inspection-options" role="tab" aria-controls="pills-dwih" aria-selected="false">Vision inspection options</a>
					</li>							
				  </ul>
				  <div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-dwih-main-function" role="tabpanel" aria-labelledby="pills-dwih-main-function-tab">
					  <ul class="list-unstyled ds-list">
						<li><i class="ion-android-checkmark-circle"></i> Auto loader/unloader for substrate or leadframe</li>
						<li><i class="ion-android-checkmark-circle"></i> Perform automated die-attach inspection & defect classification of inspected die</li>
						<li><i class="ion-android-checkmark-circle"></i> Substrate map creation/updates or inking of defect dies</li>
						<li><i class="ion-android-checkmark-circle"></i> Statistical descriptive analysis of defects</li>
					  </ul>
					</div>
					<div class="tab-pane fade" id="pills-dwih-features" role="tabpanel" aria-labelledby="pills-dwih-features-tab">
					  <ul class="list-unstyled ds-list">
						<li><i class="ion-android-checkmark-circle"></i> High-resolution and high-precision X-Y table</li>
						<li><i class="ion-android-checkmark-circle"></i> Multiple inspection stations</li>
						<li><i class="ion-android-checkmark-circle"></i> Auto marking for rejects</li>
						<li><i class="ion-android-checkmark-circle"></i> Window platform with user-defined specifications</li>
						<li><i class="ion-android-checkmark-circle"></i> Auto-generation of GR & R report</li>
						<li><i class="ion-android-checkmark-circle"></i> Library based uploading for different types of die</li>
					  </ul>
					</div>
					<div class="tab-pane fade" id="pills-dwih-vision-inspection-options" role="tabpanel" aria-labelledby="pills-dwih-vision-inspection-options-tab">
					  <ul class="list-unstyled ds-list">
						<li><i class="ion-android-checkmark-circle"></i> Orientation check</li>
						<li><i class="ion-android-checkmark-circle"></i> Device check</li>
						<li><i class="ion-android-checkmark-circle"></i> Die Centering position/offset inspection</li>
						<li><i class="ion-android-checkmark-circle"></i> Silver epoxy coverage inspection</li>
						<li><i class="ion-android-checkmark-circle"></i> Wire bond inspection e.g. sagging wire, missing bond, off pad etc</li>
					  </ul>
					</div>							
				  </div>
				</div>
			  </div>
			  </div>
			</div>
			
			<!-- Laser Marking Handler -->
			<div class="tab-pane fade" id="v-pills-lmh" role="tabpanel" aria-labelledby="v-pills-lmh-tab">
			<div class="container-fluid">
			<div class="row">
			<div class="col">
			<div class="section-header">
			<h3>Laser Marking Handler</h3>
			</div>
			</div>
			</div>
			<div class="row">
			<div class="col-4">
			<img id="lmh" src="images/machine design/Picture5.png" class="img-fluid" alt="lmh">
					<div class="row mt-1">
						<div class="col">
						  <img src="images/machine design/Picture5.png" style="cursor:pointer;" id="f1" alt="" class="d-inline-block w-25">
						  <img src="images/machine design/Picture501.png" style="cursor:pointer;" id="f2" alt="" class="d-inline-block w-25">
						  <img src="images/machine design/Picture502.jpg" style="cursor:pointer;" id="f3" alt="" class="d-inline-block w-25">							  
						</div>
					</div>			
			</div>
			<div class="col-8">	

			</div>
			</div>
			<div class="row">
			<div class="col">
			<div class="line"></div>
			</div>
			</div>						
			<div class="row">
			<div class="col-12">
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			<li class="nav-item">
			<a class="nav-link active" id="pills-lmh-tab" data-toggle="pill" href="#pills-lmh-main-function" role="tab" aria-controls="pills-lmh" aria-selected="true">Main Function</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="pills-lmh-tab" data-toggle="pill" href="#pills-lmh-features" role="tab" aria-controls="pills-lmh" aria-selected="false">Features</a>
			</li>						
			</ul>
			<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-lmh-main-function" role="tabpanel" aria-labelledby="pills-lmh-main-function-tab">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> Auto loader/unloader for leadframes in stacks or magazines</li>
			<li><i class="ion-android-checkmark-circle"></i> Perform strip barcode marking on strip or code marking on molded package</li>
			<li><i class="ion-android-checkmark-circle"></i> Leadframe map creation/updates of loaded leadframe map</li>
			</ul>
			</div>
			<div class="tab-pane fade" id="pills-lmh-features" role="tabpanel" aria-labelledby="pills-lmh-features-tab">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> Servo-driven linear X table</li>
			<li><i class="ion-android-checkmark-circle"></i> Window platform with user-defined specifications</li>
			<li><i class="ion-android-checkmark-circle"></i> ALibrary based uploading for different types of leadframe</li>
			<li><i class="ion-android-checkmark-circle"></i> Upgrade-able with post-mark vision inspection system</li>
			<li><i class="ion-android-checkmark-circle"></i> Compatible with SECS-GEM integration</li>
			</ul>
			</div>						
			</div>
			</div>
			</div>
			</div>
			</div>
			
			<!-- Ink Marking Handler -->
			<div class="tab-pane fade" id="v-pills-imh" role="tabpanel" aria-labelledby="v-pills-imh-tab">
			<div class="container-fluid">
			<div class="row">
			<div class="col">
			<div class="section-header">
			<h3>Ink Marking Handler</h3>
			</div>
			</div>
			</div>
			<div class="row">
			<div class="col-4">
			<img id="imh" src="images/machine design/Picture6.png" class="img-fluid" alt="imh">
			
					<div class="row mt-1">
						<div class="col">
						  <img src="images/machine design/Picture6.png" style="cursor:pointer;" id="g1" alt="" class="d-inline-block w-25">
						  <img src="images/machine design/Picture601.jpg" style="cursor:pointer;" id="g2" alt="" class="d-inline-block w-25">	  
						</div>
					</div>				
			</div>
			<div class="col-8">	

			</div>
			</div>
			<div class="row">
			<div class="col">
			<div class="line"></div>
			</div>
			</div>						
			<div class="row">
			<div class="col-12">
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			<li class="nav-item">
			<a class="nav-link active" id="pills-imh-tab" data-toggle="pill" href="#pills-imh-main-function" role="tab" aria-controls="pills-imh" aria-selected="true">Main Function</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="pills-imh-tab" data-toggle="pill" href="#pills-imh-features" role="tab" aria-controls="pills-imh" aria-selected="false">Features</a>
			</li>						
			</ul>
			<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-imh-main-function" role="tabpanel" aria-labelledby="pills-imh-main-function-tab">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> Auto loader/unloader for units in stacks</li>
			<li><i class="ion-android-checkmark-circle"></i> Perform text or 2D marking on plastic material or on molded package</li>
			</ul>
			</div>
			<div class="tab-pane fade" id="pills-imh-features" role="tabpanel" aria-labelledby="pills-imh-features-tab">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> Servo-driven linear X table</li>
			<li><i class="ion-android-checkmark-circle"></i> Library based uploading for different types of units</li>
			<li><i class="ion-android-checkmark-circle"></i> Multi-tasking PLC-based controller</li>
			</ul>
			</div>						
			</div>
			</div>
			</div>
			</div>
			</div>
			
			<!-- Component Insert Handler -->
			<div class="tab-pane fade" id="v-pills-cih" role="tabpanel" aria-labelledby="v-pills-cih-tab">
			<div class="container-fluid">
			<div class="row">
			<div class="col">
			<div class="section-header">
			<h3>Component Insert Handler</h3>
			</div>
			</div>
			</div>
			<div class="row">
			<div class="col-4">
			<img id="cih" src="images/machine design/Picture7.png" class="img-fluid" alt="cih">
			
					<div class="row mt-1">
						<div class="col">
						  <img src="images/machine design/Picture7.png" style="cursor:pointer;" id="h1" alt="" class="d-inline-block w-25">
						  <img src="images/machine design/Picture701.png" style="cursor:pointer;" id="h2" alt="" class="d-inline-block w-25">	  
						</div>
					</div>				
			</div>
			<div class="col-8">	

			</div>
			</div>
			<div class="row">
			<div class="col">
			<div class="line"></div>
			</div>
			</div>						
			<div class="row">
			<div class="col-12">
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			<li class="nav-item">
			<a class="nav-link active" id="pills-cih-tab" data-toggle="pill" href="#pills-cih-applicable-components" role="tab" aria-controls="pills-cih" aria-selected="true">Applicable components</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="pills-cih-tab" data-toggle="pill" href="#pills-cih-features" role="tab" aria-controls="pills-cih" aria-selected="false">Features</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="pills-cih-tab" data-toggle="pill" href="#pills-cih-vision-inspection-options" role="tab" aria-controls="pills-cih" aria-selected="false">Vision inspection options</a>
			</li>								
			</ul>
			<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-cih-applicable-components" role="tabpanel" aria-labelledby="pills-cih-applicable-components-tab">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> Mainly for component assembly</li>
			</ul>
			</div>
			<div class="tab-pane fade" id="pills-cih-features" role="tabpanel" aria-labelledby="pills-cih-features-tab">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> Multiple component handling</li>
			<li><i class="ion-android-checkmark-circle"></i> Teflon claw to avoid cosmetic rejects</li>
			<li><i class="ion-android-checkmark-circle"></i> Multi-tasking PC-based controller</li>
			</ul>
			</div>
			<div class="tab-pane fade" id="pills-cih-vision-inspection-options" role="tabpanel" aria-labelledby="pills-cih-vision-inspection-options-tab">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> Marking inspection</li>
			</ul>
			</div>							
			</div>
			</div>
			</div>
			</div>
			</div>

			<!-- Pick & Place Handler -->
			<div class="tab-pane fade" id="v-pills-pph" role="tabpanel" aria-labelledby="v-pills-pph-tab">
			<div class="container-fluid">
			<div class="row">
			<div class="col">
			<div class="section-header">
			<h3>Pick & Place Handler</h3>
			</div>
			</div>
			</div>
			<div class="row">
			<div class="col-4">
			<img id="pph" src="images/machine design/Picture8.png" class="img-fluid" alt="pph">
					<div class="row mt-1">
						<div class="col">
						  <img src="images/machine design/Picture8.png" style="cursor:pointer;" id="i1" alt="" class="d-inline-block w-25">
						  <img src="images/machine design/Picture801.png" style="cursor:pointer;" id="i2" alt="" class="d-inline-block w-25">
						  <img src="images/machine design/Picture802.png" style="cursor:pointer;" id="i3" alt="" class="d-inline-block w-25">							  
						</div>
					</div>				
			</div>
			<div class="col-8">	

			</div>
			</div>
			<div class="row">
			<div class="col">
			<div class="line"></div>
			</div>
			</div>						
			<div class="row">
			<div class="col-12">
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			<li class="nav-item">
			<a class="nav-link active" id="pills-pph-tab" data-toggle="pill" href="#pills-pph-features" role="tab" aria-controls="pills-pph" aria-selected="true">Features</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="pills-pph-tab" data-toggle="pill" href="#pills-pph-vision-inspection-options" role="tab" aria-controls="pills-pph" aria-selected="false">Vision inspection options</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="pills-pph-tab" data-toggle="pill" href="#pills-pph-applicable-components" role="tab" aria-controls="pills-pph" aria-selected="false">Applicable components</a>
			</li>								
			</ul>
			<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-pph-features" role="tabpanel" aria-labelledby="pills-pph-features-tab">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> Single loader/unloader for input/output tray</li>
			<li><i class="ion-android-checkmark-circle"></i> Servo-driven linear pick and place system</li>
			<li><i class="ion-android-checkmark-circle"></i> High precision placement accuracy</li>
			<li><i class="ion-android-checkmark-circle"></i> Fine angular positioning</li>
			</ul>
			</div>
			<div class="tab-pane fade" id="pills-pph-vision-inspection-options" role="tabpanel" aria-labelledby="pills-pph-vision-inspection-options-tab">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> Position inspection</li>
			<li><i class="ion-android-checkmark-circle"></i> Orientation check</li>
			<li><i class="ion-android-checkmark-circle"></i> Mark inspection</li>
			<li><i class="ion-android-checkmark-circle"></i> 5-side inspection</li>
			<li><i class="ion-android-checkmark-circle"></i> Pad inspection</li>
			<li><i class="ion-android-checkmark-circle"></i> Angular position offset</li>
			</ul>
			</div>
			<div class="tab-pane fade" id="pills-pph-applicable-components" role="tabpanel" aria-labelledby="pills-pph-applicable=components-tab">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> QFN, DFN, MLP, QFP, CSP, BGA, VSOJ, etc.</li>
			</ul>
			</div>							
			</div>
			</div>
			</div>
			</div>
			</div>		

			<!-- Gravity Feed Test Handler -->
			<div class="tab-pane fade" id="v-pills-gfth" role="tabpanel" aria-labelledby="v-pills-gfth-tab">
			<div class="container-fluid">
			<div class="row">
			<div class="col">
			<div class="section-header">
			<h3>Gravity Feed Test Handler</h3>
			</div>
			</div>
			</div>
			<div class="row">
			<div class="col-4">
			<img src="images/machine design/Picture9.png" class="img-fluid" alt="gfth">
			</div>
			<div class="col-8">	

			</div>
			</div>
			<div class="row">
			<div class="col">
			<div class="line"></div>
			</div>
			</div>						
			<div class="row">
			<div class="col-12">
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			<li class="nav-item">
			<a class="nav-link active" id="pills-gfth-tab" data-toggle="pill" href="#pills-gfth-1" role="tab" aria-controls="pills-gfth" aria-selected="true">Main Function</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="pills-gfth-tab" data-toggle="pill" href="#pills-gfth-2" role="tab" aria-controls="pills-gfth" aria-selected="false">Features</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="pills-gfth-tab" data-toggle="pill" href="#pills-gfth-3" role="tab" aria-controls="pills-gfth" aria-selected="false">Applicable components</a>
			</li>								
			</ul>
			<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-gfth-1" role="tabpanel" aria-labelledby="pills-gfth-1-tab">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> Auto loader/unloader for units in tube form</li>
			<li><i class="ion-android-checkmark-circle"></i> Perform unit functional test</li>
			<li><i class="ion-android-checkmark-circle"></i> High precision placement accuracy</li>
			<li><i class="ion-android-checkmark-circle"></i> Auto-binning of tested units</li>
			</ul>
			</div>
			<div class="tab-pane fade" id="pills-gfth-2" role="tabpanel" aria-labelledby="pills-gfth-2-tab">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> Multiple bin output</li>
			<li><i class="ion-android-checkmark-circle"></i> Single/double-stack tube unloader</li>
			<li><i class="ion-android-checkmark-circle"></i> Multi-tasking PC-based controller</li>
			<li><i class="ion-android-checkmark-circle"></i> Poka yoke concept for sorting</li>
			<li><i class="ion-android-checkmark-circle"></i> Dynamic binning option</li>
			<li><i class="ion-android-checkmark-circle"></i> Capable of integrating with vision inspection station</li>
			</ul>
			</div>
			<div class="tab-pane fade" id="pills-gfth-3" role="tabpanel" aria-labelledby="pills-gfth-3-tab">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> LED</li>
			<li><i class="ion-android-checkmark-circle"></i> DIP, PDIP, TO</li>
			<li><i class="ion-android-checkmark-circle"></i> SOIC, SSOP, MSOP, QSOP, TSSOP</li>
			<li><i class="ion-android-checkmark-circle"></i> D2PAK, D-PAK, SO, SOL, SOJ, SOP</li>
			<li><i class="ion-android-checkmark-circle"></i> QFN/MLP</li>
			</ul>
			</div>							
			</div>
			</div>
			</div>
			</div>
			</div>

			<!-- Cartesian Test Handler -->
			<div class="tab-pane fade" id="v-pills-cth" role="tabpanel" aria-labelledby="v-pills-cth-tab">
			<div class="container-fluid">
			<div class="row">
			<div class="col">
			<div class="section-header">
			<h3>Cartesian Test Handler</h3>
			</div>
			</div>
			</div>
			<div class="row">
			<div class="col-4">
			<img src="images/machine design/Picture10.png" class="img-fluid" alt="cth">
			</div>
			<div class="col-8">	

			</div>
			</div>
			<div class="row">
			<div class="col">
			<div class="line"></div>
			</div>
			</div>						
			<div class="row">
			<div class="col-12">
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			<li class="nav-item">
			<a class="nav-link active" id="pills-cth-tab" data-toggle="pill" href="#pills-cth-1" role="tab" aria-controls="pills-cth" aria-selected="true">Main Function</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="pills-cth-tab" data-toggle="pill" href="#pills-cth-2" role="tab" aria-controls="pills-cth" aria-selected="false">Features</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="pills-cth-tab" data-toggle="pill" href="#pills-cth-3" role="tab" aria-controls="pills-cth" aria-selected="false">Applicable components</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="pills-cth-tab" data-toggle="pill" href="#pills-cth-4" role="tab" aria-controls="pills-cth" aria-selected="false">Vision inspection options</a>
			</li>								
			</ul>
			<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-cth-1" role="tabpanel" aria-labelledby="pills-cth-1-tab">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> Auto loader/unloader for units in tray form</li>
			<li><i class="ion-android-checkmark-circle"></i> Perform unit functional test</li>
			<li><i class="ion-android-checkmark-circle"></i> Auto-binning of tested units</li>
			</ul>
			</div>
			<div class="tab-pane fade" id="pills-cth-2" role="tabpanel" aria-labelledby="pills-cth-2-tab">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> Servo-driven linear XY pick and place system</li>
			<li><i class="ion-android-checkmark-circle"></i> Multi-tasking PC-based controller</li>
			<li><i class="ion-android-checkmark-circle"></i> Gang test (optional)</li>
			<li><i class="ion-android-checkmark-circle"></i> Fine pitch probing</li>
			</ul>
			</div>
			<div class="tab-pane fade" id="pills-cth-3" role="tabpanel" aria-labelledby="pills-cth-3-tab">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> QFN, DFN, MLP, QFP, CSP, BGA, VSOJ, etc</li>
			</ul>
			</div>
			<div class="tab-pane fade" id="pills-cth-4" role="tabpanel" aria-labelledby="pills-cth-4-tab">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> Orientation check</li>
			<li><i class="ion-android-checkmark-circle"></i> Mark inspection</li>
			<li><i class="ion-android-checkmark-circle"></i> 5-side inspection</li>
			<li><i class="ion-android-checkmark-circle"></i> Pad inspection</li>
			<li><i class="ion-android-checkmark-circle"></i> Package inspection</li>
			</ul>
			</div>								
			</div>
			</div>
			</div>
			</div>
			</div>

			<!-- Test & Tape Handler -->
			<div class="tab-pane fade" id="v-pills-tth1" role="tabpanel" aria-labelledby="v-pills-tth1-tab">
			<div class="container-fluid">
			<div class="row">
			<div class="col">
			<div class="section-header">
			<h3>Test & Tape Handler</h3>
			</div>
			</div>
			</div>
			<div class="row">
			<div class="col-4">
			<img src="images/machine design/Picture11.png" class="img-fluid" alt="tth1">
			</div>
			<div class="col-8">	

			</div>
			</div>
			<div class="row">
			<div class="col">
			<div class="line"></div>
			</div>
			</div>						
			<div class="row">
			<div class="col-12">
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			<li class="nav-item">
			<a class="nav-link active" id="pills-tth1-tab" data-toggle="pill" href="#pills-tth1-1" role="tab" aria-controls="pills-tth1" aria-selected="true">Main Function</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="pills-tth1-tab" data-toggle="pill" href="#pills-tth1-2" role="tab" aria-controls="pills-tth1" aria-selected="false">Features</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="pills-tth1-tab" data-toggle="pill" href="#pills-tth1-3" role="tab" aria-controls="pills-tth1" aria-selected="false">Applicable components</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="pills-tth1-tab" data-toggle="pill" href="#pills-tth1-4" role="tab" aria-controls="pills-tth1" aria-selected="false">Vision inspection options</a>
			</li>							
			</ul>
			<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-tth1-1" role="tabpanel" aria-labelledby="pills-tth1-1">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> Input units in tray form or bowl form</li>
			<li><i class="ion-android-checkmark-circle"></i> Perform unit functional test or polarity check</li>
			<li><i class="ion-android-checkmark-circle"></i> Perform tape & reel for output units</li>
			</ul>
			</div>
			<div class="tab-pane fade" id="pills-tth1-2" role="tabpanel" aria-labelledby="pills-tth1-2">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> Rotary pick and place system</li>
			<li><i class="ion-android-checkmark-circle"></i> Multi-tasking PC-based controller</li>
			<li><i class="ion-android-checkmark-circle"></i> Programmable leader & trailer</li>
			</ul>
			</div>
			<div class="tab-pane fade" id="pills-tth1-3" role="tabpanel" aria-labelledby="pills-tth1-3">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> QFN, DFN, MLP, QFP, CSP, BGA, VSOJ, etc</li>
			<li><i class="ion-android-checkmark-circle"></i> D2PAK, D-PAK, SO, SOL, SOJ, SOT, SC, SOIC</li>
			<li><i class="ion-android-checkmark-circle"></i> LED</li>
			</ul>
			</div>
			<div class="tab-pane fade" id="pills-tth1-4" role="tabpanel" aria-labelledby="pills-tth1-4">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> Orientation check</li>
			<li><i class="ion-android-checkmark-circle"></i> Mark inspection</li>
			<li><i class="ion-android-checkmark-circle"></i> Lead co-planarity inspection</li>
			<li><i class="ion-android-checkmark-circle"></i> In-pocket inspection</li>
			</ul>
			</div>							
			</div>
			</div>
			</div>
			</div>
			</div>

			<!-- Test & Tape Handler -->
			<div class="tab-pane fade" id="v-pills-tth2" role="tabpanel" aria-labelledby="v-pills-tth2-tab">
			<div class="container-fluid">
			<div class="row">
			<div class="col">
			<div class="section-header">
			<h3>Test & Tape Handler</h3>
			</div>
			</div>
			</div>
			<div class="row">
			<div class="col-4">
			<img src="images/machine design/Picture12.png" class="img-fluid" alt="tth2">
			</div>
			<div class="col-8">	

			</div>
			</div>
			<div class="row">
			<div class="col">
			<div class="line"></div>
			</div>
			</div>						
			<div class="row">
			<div class="col-12">
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			<li class="nav-item">
			<a class="nav-link active" id="pills-tth2-tab" data-toggle="pill" href="#pills-tth2-1" role="tab" aria-controls="pills-tth2" aria-selected="true">Main Function</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="pills-tth2-tab" data-toggle="pill" href="#pills-tth2-2" role="tab" aria-controls="pills-tth2" aria-selected="false">Features</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="pills-tth2-tab" data-toggle="pill" href="#pills-tth2-3" role="tab" aria-controls="pills-tth2" aria-selected="false">Applicable components</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="pills-tth2-tab" data-toggle="pill" href="#pills-tth2-4" role="tab" aria-controls="pills-tth2" aria-selected="false">Vision inspection options</a>
			</li>							
			</ul>
			<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-tth2-1" role="tabpanel" aria-labelledby="pills-tth2-1">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> Input: loose form</li>
			<li><i class="ion-android-checkmark-circle"></i> Output: loose form / tape & reel</li>
			</ul>
			</div>
			<div class="tab-pane fade" id="pills-tth2-2" role="tabpanel" aria-labelledby="pills-tth2-2">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> Rotary pick and place system</li>
			<li><i class="ion-android-checkmark-circle"></i> Multiple test stations</li>
			<li><i class="ion-android-checkmark-circle"></i> Multiple tape and reel modules (optional)</li>
			<li><i class="ion-android-checkmark-circle"></i> Multi-tasking PC-based controller</li>
			<li><i class="ion-android-checkmark-circle"></i> Programmable leader & trailer</li>
			</ul>
			</div>
			<div class="tab-pane fade" id="pills-tth2-3" role="tabpanel" aria-labelledby="pills-tth2-3">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> QFN, MLP, QFP, SSOP, MSOP, TSSOP, VSOJ</li>
			<li><i class="ion-android-checkmark-circle"></i> D2PAK, D-PAK, SO, SOL, SOJ, SOT, SC, SOIC</li>
			<li><i class="ion-android-checkmark-circle"></i> LED</li>
			</ul>
			</div>
			<div class="tab-pane fade" id="pills-tth2-4" role="tabpanel" aria-labelledby="pills-tth2-4">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> Orientation check</li>
			<li><i class="ion-android-checkmark-circle"></i> Mark inspection</li>
			<li><i class="ion-android-checkmark-circle"></i> Lead co-planarity inspection</li>
			<li><i class="ion-android-checkmark-circle"></i> In-pocket inspection</li>
			</ul>
			</div>							
			</div>
			</div>
			</div>
			</div>
			</div>

			<!-- Flip & Attach Handler -->
			<div class="tab-pane fade" id="v-pills-fah" role="tabpanel" aria-labelledby="v-pills-fah-tab">
			<div class="container-fluid">
			<div class="row">
			<div class="col">
			<div class="section-header">
			<h3>Flip & Attach Handler</h3>
			</div>
			</div>
			</div>
			<div class="row">
			<div class="col-4">
			<img src="images/machine design/Picture13.png" class="img-fluid" alt="fah">
			</div>
			<div class="col-8">	

			</div>
			</div>
			<div class="row">
			<div class="col">
			<div class="line"></div>
			</div>
			</div>						
			<div class="row">
			<div class="col-12">
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			<li class="nav-item">
			<a class="nav-link active" id="pills-fah-tab" data-toggle="pill" href="#pills-fah-1" role="tab" aria-controls="pills-fah-1" aria-selected="true">Features</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="pills-fah-tab" data-toggle="pill" href="#pills-fah-2" role="tab" aria-controls="pills-fah-2" aria-selected="false">Applicable components</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="pills-fah-tab" data-toggle="pill" href="#pills-fah-3" role="tab" aria-controls="pills-fah-3" aria-selected="false">Vision inspection options</a>
			</li>								
			</ul>
			<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-fah-1" role="tabpanel" aria-labelledby="pills-fah-1-tab">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> Servo-driven de-tape module</li>
			<li><i class="ion-android-checkmark-circle"></i> High speed flipper</li>
			<li><i class="ion-android-checkmark-circle"></i> Rotary pick-&-place method</li>
			<li><i class="ion-android-checkmark-circle"></i> Multi-tasking PC-based controller</li>
			<li><i class="ion-android-checkmark-circle"></i> Close-loop place positioning feedback</li>
			</ul>
			</div>
			<div class="tab-pane fade" id="pills-fah-2" role="tabpanel" aria-labelledby="pills-fah-2-tab">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> Mainly for level-2 modules etc</li>
			</ul>
			</div>
			<div class="tab-pane fade" id="pills-fah-3" role="tabpanel" aria-labelledby="pills-fah-3-tab">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> Position inspection</li>
			<li><i class="ion-android-checkmark-circle"></i> Orientation check</li>
			<li><i class="ion-android-checkmark-circle"></i> Glue inspection</li>
			<li><i class="ion-android-checkmark-circle"></i> Package inspection</li>
			</ul>
			</div>								
			</div>
			</div>
			</div>
			</div>
			</div>

			<!-- Robot Arm -->
			<div class="tab-pane fade" id="v-pills-ra" role="tabpanel" aria-labelledby="v-pills-ra-tab">
			<div class="container-fluid">
			<div class="row">
			<div class="col">
			<div class="section-header">
			<h3>Robot Arm</h3>
			</div>
			</div>
			</div>
			<div class="row">
			<div class="col-4">
			<img id="ra" src="images/machine design/Picture14.png" class="img-fluid" alt="ra">
			
					<div class="row mt-1">
						<div class="col">
						  <img src="images/machine design/Picture14.png" style="cursor:pointer;" id="j1" alt="" class="d-inline-block w-25">
						  <img src="images/machine design/picture1401.png" style="cursor:pointer;" id="j2" alt="" class="d-inline-block w-25">	  
						</div>
					</div>				
			</div>
			<div class="col-8">	

			</div>
			</div>
			<div class="row">
			<div class="col">
			<div class="line"></div>
			</div>
			</div>						
			<div class="row">
			<div class="col-12">
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			<li class="nav-item">
			<a class="nav-link active" id="pills-ra-tab" data-toggle="pill" href="#pills-ra-1" role="tab" aria-controls="pills-ra" aria-selected="true">Main Functions</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" id="pills-ra-tab" data-toggle="pill" href="#pills-ra-2" role="tab" aria-controls="pills-ra" aria-selected="false">Design Considerations</a>
			</li>								
			</ul>
			<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-ra-1" role="tabpanel" aria-labelledby="pills-ra-1-tab">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> Transfer parts between module to module</li>
			<li><i class="ion-android-checkmark-circle"></i> Detecting part presence before & after transfer</li>
			<li><i class="ion-android-checkmark-circle"></i> Hand-shaking between robot & machine</li>
			</ul>
			</div>
			<div class="tab-pane fade" id="pills-ra-2" role="tabpanel" aria-labelledby="pills-ra-2">
			<ul class="list-unstyled ds-list">
			<li><i class="ion-android-checkmark-circle"></i> Load calculation</li>
			<li><i class="ion-android-checkmark-circle"></i> Design to compensate positioning error of robot</li>
			<li><i class="ion-android-checkmark-circle"></i> Built-in feature to feedback part presence</li>
			</ul>
			</div>						
			</div>
			</div>
			</div>
			</div>
			</div>

			<!-- Misc Tester -->
			<div class="tab-pane fade" id="v-pills-mt" role="tabpanel" aria-labelledby="v-pills-mt-tab">
			<div class="container-fluid">
			<div class="row">
			<div class="col">
			<div class="section-header">
			<h3>Misc Tester</h3>
			</div>
			</div>
			</div>
			<div class="row mt-5">
			<div class="col-4">
			<h6 class="text-center">Board Functional Checker</h6>
			<img src="images/machine design/Picture15.png" class="img-fluid" alt="mt">
			</div>
			<div class="col-4">
			<h6 class="text-center">Metal Detector</h6>
			<img src="images/machine design/Picture16.png" class="img-fluid" alt="mt">
			</div>
			<div class="col-4">
			<h6 class="text-center">Bearing Accelerated Life Test</h6>
			<img src="images/machine design/Picture17.png" class="img-fluid" alt="mt">
			</div>					
			</div>
			<div class="row">
			<div class="col">
			<div class="line"></div>
			</div>
			</div>
			<div class="row">
			<div class="col-4">
			<h6 class="text-center">Bearing Spinning Rig</h6>
			<img src="images/machine design/Picture18.png" class="img-fluid" alt="mt">
			</div>
			<div class="col-4">
			<h6 class="text-center">Battery Charger Tester</h6>
			<img src="images/machine design/Picture19.png" class="img-fluid" alt="mt">
			</div>
			<div class="col-4">

			</div>					
			</div>
			<div class="row">
			<div class="col">
			<div class="line"></div>
			</div>
			</div>					
			</div>
			</div>					
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
