<?php
session_start();
if (!isset($_SESSION['num1']) && !isset($_SESSION['num2'])) {
$_SESSION['num1'] = rand(1,5);
$_SESSION['num2'] = rand(1,5);
}
?>
<!DOCTYPE HTML>

<html>
	<head>

	<meta name="keywords"  content="Chicago, auto, auto reconditioning, detail, pdr, alloy wheel repair, body shop  " />
    <meta name="description" content="Chicago-based consultants that build scalable, stress-free, simple solutions for large dealerships, fleet accounts, and retail automotive cosmetic service shops." />
    <meta name="author" content="James Blacher" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Sky Consulting Chicago</title>

<!--Start Stylesheets and fonts -->
	<link rel="stylesheet" href="css/skel-noscript.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/style-wide.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
<!--End Stylesheets and fonts -->

	<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->


<!--Start Javascript -->
	<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/skel.min.js"></script>
	<script src="js/init.js"></script>
	<script src="js/modernizr.js"></script>

	<script type="text/javascript">
$(document).ready(function() {
  $.validator.addMethod("nourl", function(value, element) {
    return !/http\:\/\/|www\.|link\=|url\=/.test(value);
  }, "No URL's");

  $("form").validate({
    rules: {
      company: {
        required: true
      },
      contact: {
        required: true
      },
      phone: {
        required: true
      },
      email: {
        required: true,
        email: true
      },
      address: {
        required: true
      },
      city: {
        required: true
      },
      state: {
        required: true
        maxlength: 2,
      },
      zip: {
        required: true
        maxlength: 5,
      },
      comments: {
        required: true,
        minlength: 4,
        nourl: true
      },
      captcha: {
        required: true,
        remote: {
          url: "validation-captcha-page.php",
          type: "post"
        }
      }
    },
    messages: {
		company: "Please enter a company name",
		contact: "Please enter a contact person",
		phone: "Please enter a phone number",
		email: "Please enter an valid email address",
		address: "Please enter an address",
		city: "Please enter a city",
		state: "Please enter a state",
		zip: "Please enter a zipcode",
		messages:,
		captcha: "That is incorrect"
		}
  });
});
</script>
<!--End Javascript -->

	</head>


	<body>


		<!-- Header -->
			<section id="header" class="dark">

				<header>
					<h1>We build simple, stress-free, profitable auto reconditioning solutions.</h1>
				</header>

				<footer>
					<a href="#fourth" class="button scrolly">Start the process</a>
				</footer>

			</section>
			
		<!-- First -->
			<section id="first" class="main">
				<header class="content dark">
					<div class="container">

						<h2>Sky Consulting Clients and Partners</h2>

						<div class="partners"><img src="./images/partner-placeholder.jpg" alt=""></div>
					    <div class="partners"><img src="./images/partner-placeholder.jpg" alt=""></div>
					    <div class="partners"><img src="./images/partner-placeholder.jpg" alt=""></div>
					    <div class="partners"><img src="./images/partner-placeholder.jpg" alt=""></div>
					    <div class="partners"><img src="./images/partner-placeholder.jpg" alt=""></div>
      
      					<footer>
							<a href="#about" class="button scrolly about">More about us</a>
						</footer>
						
					</div>
				</header>
			</section>

			<section id="about" class="4u">

					<div class="close-about">
		                <img src="images/icon-close-box.png">
		            </div>
				
					<header class="content">
						<h2>About Us</h2>
					</header>
				
					<p>With 25 years of experience, Sky Consulting Chicago quickly learned the core values of the relationship between auto reconditioning and customer service which gave birth to an experimental company known as Total Recon in 2008.</p>
						
					<p>Total Recon streamlined the process of auto recondition by providing a &quot;one stop shop&quot; with 3 day turn-around time for standard dealership reconditioning services within a small space, providing dealerships now had a designated facility to drop off recon cars for repairs.</p>

					<p>In 2010, Dent Recon combined the Total Recon experience with current technology trends by introducing an industry-first white label technology platform to assist its partners in the organization of reconditioning vehicles for large fleet companies. Dent Recon assisted in the modernization and efficency of each EPA compliant facility to produce profitable results while providing a stress-free solution. The success of this experiment increased Dent Recon's profit margin to $4 million within 3 years, and a presence in more than 20 cities.</p>

					<p>Sky Consulting expands on the Dent Recon experience by creating or transforming reconditioning facilities that caters to the specialized needs of individual client.</p>

					
				
				
			</section>

		<!-- Second -->
			<section id="second" class="main">
				<div class="content dark style1">
					<div class="container">
							
						<header>
							<div class="container">
								<h2>&quot;Sky&quot; is the Limit</h2>
								
								<p>Sky Consulting creates simplicity for your automotive reconditioning process by providing streamlined organization to your fingertips</p>
							</div>
						</header>

					<!-- image - Mission Graphic -->
						<div id="mission-cars"><img src="./images/img-mission-graphic.png" alt="mission-graphic"></div>
	
					</div>
				</div>
			</section>

		<!-- Third -->
			<section id="third" class="main">
				<header class="content dark">
					<div class="container">

						<h2>We make it easy for you to get started. </h2>

						<p>Follow the process and let Sky Consulting Chicago handle the hard work while you continue to run the important aspects of your business.</p>
					</div>
				</header>
			</section>

		<!-- Fourth -->
			<section id="fourth" class="main">
				<header>
					<div class="container">
						<h2>We call you to get the basics...</h2>
					</div>
				</header>
				<div class="content style2">
					<div class="container">
						<div class="row">
							<div class="6u">
								<section>
									<h3><span style="color: #05A1D7">Free</span> 15 Minute Phone Call</h3>

									<ul id="list-process-01" class="process-lists">
									        <li>Estimate is generated prior to phone call through the online query.</li>
									        <li>Brainstorm the pros, cons, goals for the existing facility.</li>
									        <li>Create an individualized automated platform that is tailor-made for each partner.</li>
									</ul>
								</section>
							</div>

							<div class="6u">
								<div class="row no-collapse">
									<video autoplay loop poster="mobile-phone.png" id="mobile-phone">
									    <source src="./videos/mobile-phone.oggtheora" type="video/ogg">
									    <source src="./videos/mobile-phone.mp4" type="video/mp4">
									</video>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>

			<hr>

		<!-- Fifth -->

		<section id="fifth" class="main">
				<header>
					<div class="container">
						<h2>We evaluate your existing facility...</h2>
					</div>
				</header>
				<div class="content style2">
					<div class="container">
						<div class="row">
							<div class="6u">

								<section>
									<header>
										<h3>Onsite Visit</h3>
									</header>

									<ul id="list-process-02" class="process-lists">
								        <li>Analyze the current facility for capacity, through-put, workflow and current services.</li>
								        <li>Analyze the compliance of federal and local EPA standards.</li>
								        <li>Analyze facility for construction and modernization.</li> 
								    </ul>

								</section>
							</div>

								<div class="6u">
									<div class="row no-collapse">
										<div class="slide-image"><img src="./images/explorer.png" alt=""></div>
									</div>
								</div>

						</div>
					</div>
				</div>
			</section>

			<hr>

		<!-- Sixth -->	
			<section id="sixth" class="main">
				<header>
					<div class="container">
						<h2>We map out the plan...</h2>
					</div>
				</header>

				<div class="content style2">
					<div class="container">
						<div class="row">
							<div class="6u">
								<section>			
									<header>
										<h3>Formal Proposal</h3>
									</header>

									<ul id="list-process-03" class="process-lists">
								        <li>Create a complete business model.</li>
								        <li>Build a detailed timeline to completion.</li>
								        <li>Generate a final estimate for the entire process.</li> 
								    </ul>
								</section>
							</div>

							<div class="6u">
								<div class="row no-collapse">
									<div class="slide-image"><img src="./images/graphic-process-03.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<hr>

		<!-- Seventh -->
			<section id="seventh" class="main">
				<header>
					<div class="container">
						<h2>We execute the plan...</h2>
					</div>
				</header>

				<div class="content style5">
					<div class="container">
						<div class="row">
							<div class="6u">
								<section>
									<h3>Project Execution</h3>
									<ul id="list-process-04" class="process-lists">
								        <li>Receive a core team of Head of Product, IT Specialist, Recruiter and Trainer.</li>
								        <li>Oversee the facility construction and upgrades.</li>
								        <li>Manage recruitment and training of new hires.</li> 
								        <li>Supply KPI report card with new services in place.</li> 
								      </ul>
								</section>
							</div>

							<div class="6u">
								<div class="row no-collapse">
									<div class="slide-image"><img src="./images/graphic-process-04.jpg" alt=""></div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>	

		<!-- Eighth -->

			<section id="eighth" class="main">
				
				<div class="content dark style3">
					<div class="container">
						<header>
							<h2>Features you will enjoy...</h2>
						</header>
						
						<div class="row">
							<div class="6u">
								<ul class="list-features">
						          <li>A Core team of specialist that oversee construction, recruiting, training, and fine-tuner to efficiency for you.</li>
						          <li>S.M.A.R.T (Small Medium Automotive Reconditioning Technology.</li>
						          <li>Advanced paint drying system that cuts paint drying time to 30 minutes.</li> 
						          <li>Water-based paint system compliant with local and federal EPA standards.</li>
						        </ul>
						    </div>

							<div class="6u">
								<ul class="list-features">
						          <li>Advanced PDR technology with increased accuracy, reduced turn-around time and effort.</li> 
						          <li>Personalized big data through Key Performance Indicator (KPI), provided by reputable IT companies.</li>  
						          <li>Automated system eliminates dependency on unreliable and improperly trained vendors.</li>  
						        </ul>
							</div>
						</div>
					</div>
				</div>
			</section>
		
		<!-- Ninth -->

			<section id="ninth" class="main dark">

				<header>
					<div class="container">
						<h2>Contact and Stay in Touch...</h2>
					</div>
				</header>

					<div class="content style4 featured">
						<div class="container small">
							<form method="post" name="contact_form" action="form-mail.php">
								
								<div class="row half">
									<div class="6u"><input type="text" id="company" placeholder="Company Name" /></div>
									<div class="6u"><input type="text" id="contact" placeholder="Contact Person" /></div>
									<div class="6u"><input type="tel" id="phone" placeholder="Phone" /></div>
									<div class="6u"><input type="email" id="email" placeholder="Email" /></div>
									<div class="6u"><input type="text" id="address" placeholder="Address" /></div>
									<div class="6u"><input type="text" id="city" placeholder="City" /></div>
									<div class="6u"><input type="text" id="state" placeholder="State" /></div>
									<div class="6u"><input type="text" id="zip" placeholder="Zip" /></div>
								</div>

								<div class="row half">
									<div class="12u"><textarea name="message" placeholder="Message"></textarea></div>
								</div>

								<div class="row">
									<div class="12u">
										<ul class="actions">
											<li><input type="submit" class="button" value="Send Message" /></li>
											<li><input type="reset" class="button alt" value="Clear Form" /></li>
										</ul>
									</div>
								</div>

							</form>
						</div>
					</div>
			</section>

			
		<!-- Footer -->
			<section id="footer">
				<ul class="icons">
					<li><a href="#" class="fa fa-twitter solo"><span>Twitter</span></a></li>
					<li><a href="#" class="fa fa-facebook solo"><span>Facebook</span></a></li>
					<li><a href="#" class="fa fa-google-plus solo"><span>Google+</span></a></li>
				</ul>

				<div class="copyright dark">
					<ul class="menu">
						<li>&copy; Sky Chicago Consulting. All rights reserved.</li>
					</ul>
				</div>
			</section>


<script>
		 $(document).ready(function() {
	  	   var navwidth = ($("#about").width());
			$(".about").click(function() {
			$("#about").fadeIn(100).animate({marginRight: "0px"},100),
			$(".close-about").fadeIn(300),
			$(".site").animate({"left": - (navwidth - 30)}, 370);
	  });
		
	
		
		$(".close-about").click(function() {
			var navwidth = ($("#about").width());
			$("#about").fadeOut(300).animate({marginRight: - navwidth}, 50),
			$(".close-about").fadeOut(400),
			$(".site").animate({"left": 0}, 500);
		});
	});


</script>

	</body>
</html>