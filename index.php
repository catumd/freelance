<!DOCTYPE html>
<?php include("admin/include/connection.php"); ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Clean - One Page Personal Portfolio</title>

	<!-- CSS -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="css/simple-line-icons.css" rel="stylesheet" media="screen">
	<link href="css/animate.css" rel="stylesheet">
    
	<!-- Custom styles CSS -->
	<link href="css/style.css" rel="stylesheet" media="screen">
    
    <script src="js/modernizr.custom.js"></script>
    <!-- Fonts-->
    <link href="admin/vendors/jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
       
</head>
<body>

	<!-- Preloader -->

	<div id="preloader">
		<div id="status"></div>
	</div>
<?php
	$selectarraypersonal=mysql_fetch_array(mysql_query("select * from `personal`"));
?>
	<!-- Home start -->

	<section id="home" class="pfblock-image screen-height">
        <div class="home-overlay"></div>
		<div class="intro">
			<div class="start">Hello, my name is Cat and I am</div>
			<h1>Full Stack Web Developer</h1>
			<div class="start">creating modern and responsive Web Application</div>
		</div>

        <a href="#services">
		<div class="scroll-down">
            <span>
                <i class="fa fa-angle-down fa-2x"></i>
            </span>
		</div>
        </a>

	</section>

	<!-- Home end -->

	<!-- Navigation start -->

	<header class="header">

		<nav class="navbar navbar-custom" role="navigation">

			<div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">John Doe</a>
				</div>

				<div class="collapse navbar-collapse" id="custom-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#home">Home</a></li>
						<li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Works</a></li>
                        <li><a href="#skills">Skills</a></li>
						<li><a href="#testimonials">Testimonials</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>

			</div><!-- .container -->

		</nav>

	</header>

	<!-- Navigation end -->

    <!-- Services start -->

	<section id="services" class="pfblock pfblock-gray">
		<div class="container">
			<div class="row">
               <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="name"><?php echo $selectarraypersonal['name']; ?></span>
                        <hr class="star-light">
                        <span class="skills"><?php echo $selectarraypersonal['experience']; ?></span>
                    </div>

				</div>

			</div>

			<div class="row">

				<div class="col-sm-3">

					<div class="iconbox wow slideInLeft">
						<div class="iconbox-icon">
							<span class="icon-magic-wand"></span>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">Web Design</h3>
							<div class="iconbox-desc">
								Good things come to those who wait, but only the things left by those who hustle
							</div>
						</div>
					</div>

				</div>

				<div class="col-sm-3">

					<div class="iconbox wow slideInLeft">
						<div class="iconbox-icon">
							<span class="icon-puzzle"></span>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">Web Programming</h3>
							<div class="iconbox-desc">
								Good things come to those who wait, but only the things left by those who hustle
							</div>
						</div>
					</div>

				</div>

				<div class="col-sm-3">

					<div class="iconbox wow slideInRight">
						<div class="iconbox-icon">
							<span class="icon-badge"></span>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">Branding</h3>
							<div class="iconbox-desc">
								Good things come to those who wait, but only the things left by those who hustle
							</div>
						</div>
					</div>

				</div>

				<div class="col-sm-3">

					<div class="iconbox wow slideInRight">
						<div class="iconbox-icon">
							<span class="icon-question"></span>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">Consultation</h3>
							<div class="iconbox-desc">
								Good things come to those who wait, but only the things left by those who hustle
							</div>
						</div>
					</div>

				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<!-- Services end -->
    
	<!-- Portfolio start -->

	<section id="portfolio" class="pfblock">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title"><?php echo $selectarraypersonal['col1']; ?></h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle"><?php echo $selectarraypersonal['col2']; ?></div>
					</div>

				</div>

			</div><!-- .row -->
            
            
            <div class="row">
                
                <div class="col-xs-12 col-sm-4 col-md-4">
                    
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="img/item-1.jpg" alt="img01"/>
                            <figcaption>
                                <h2>Crazy <span>Shark</span></h2>
                                <p>Lily likes to play with crayons and pencils</p>
                            </figcaption>			
                        </figure>
                    </div>
                    
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
            
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="img/item-2.jpg" alt="img01"/>
                            <figcaption>
                                <h2>Funny <span>Tortoise</span></h2>
                                <p>Lily likes to play with crayons and pencils</p>
                            </figcaption>			
                        </figure>
                    </div>
                    
                </div>
                
                <div class="col-xs-12 col-sm-4 col-md-4">
            
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="img/item-3.jpg" alt="img01"/>
                            <figcaption>
                                <h2>The <span>Hat</span></h2>
                                <p>Lily likes to play with crayons and pencils</p>
                            </figcaption>			
                        </figure>
                    </div>
                    
                </div>
                
                <div class="col-xs-12 col-sm-4 col-md-4">
            
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="img/item-4.jpg" alt="img01"/>
                            <figcaption>
                                <h2>Bang <span>Bang</span></h2>
                                <p>Lily likes to play with crayons and pencils</p>
                            </figcaption>			
                        </figure>
                    </div>
                    
                </div>
                
                <div class="col-xs-12 col-sm-4 col-md-4">
            
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="img/item-5.jpg" alt="img01"/>
                            <figcaption>
                                <h2>Crypton <span>Dude</span></h2>
                                <p>Lily likes to play with crayons and pencils</p>
                            </figcaption>			
                        </figure>
                    </div>
                    
                </div>
                
                <div class="col-xs-12 col-sm-4 col-md-4">
            
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="img/item-6.jpg" alt="img01"/>
                            <figcaption>
                                <h2>Don't <span>Poke</span></h2>
                                <p>Lily likes to play with crayons and pencils</p>
                            </figcaption>			
                        </figure>
                    </div>
                    
                </div>
                
            </div>


		</div><!-- .contaier -->

	</section>

	<!-- Portfolio end -->
    
    <!-- Skills start -->
    
    <section class="pfblock pfblock-gray" id="skills">
		
			<div class="container">
			
				<div class="row skills">
					
					<div class="row">

                        <div class="col-sm-6 col-sm-offset-3">

                            <div class="pfblock-header wow fadeInUp">
                                <h2 class="pfblock-title">My Skills</h2>
                                <div class="pfblock-line"></div>
                                <div class="pfblock-subtitle">
                                    No one lights a lamp in order to hide it behind the door: the purpose of light is to create more light, to open people’s eyes, to reveal the marvels around.
                                </div>
                            </div>

                        </div>

                    </div><!-- .row -->
					
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="<?php echo $selectarraypersonal['prog'] ?> " class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent"><?php echo $selectarraypersonal['prog']; ?></span>
                        </span>
						<h3 class="text-center">Programming</h3>
					</div>
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="90" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">90</span>
                        </span>
						<h3 class="text-center">Design</h3>
					</div>
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="85" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">85</span>
                        </span>
						<h3 class="text-center">Marketing</h3>
					</div>
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="95" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">95</span>
                        </span>
						<h3 class="text-center">UI / UX</h3>
					</div>
					
				</div><!--End row -->
			
			</div>
		
    </section>
    
    <!-- Skills end -->

	<!-- CallToAction start -->

	<section class="calltoaction">
		<div class="container">

			<div class="row">

				<div class="col-md-12 col-lg-12">
					<h2 class="wow slideInRight" data-wow-delay=".1s">ARE YOU READY TO START?</h2>
					<div class="calltoaction-decription wow slideInRight" data-wow-delay=".2s">
						I'm available for freelance projects.
					</div>
				</div>

				<div class="col-md-12 col-lg-12 calltoaction-btn wow slideInRight" data-wow-delay=".3s">
					<a href="#contact" class="btn btn-lg">Hire Me</a>
				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<!-- CallToAction end -->

	<!-- Testimonials start -->

	<section id="testimonials" class="pfblock pfblock-gray">

		<div class="container">
            
            <div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">What my clients say</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							No one lights a lamp in order to hide it behind the door: the purpose of light is to create more light, to open people’s eyes, to reveal the marvels around.
						</div>
					</div>

				</div>

			</div><!-- .row -->

            <div class="row">

			<div id="cbp-qtrotator" class="cbp-qtrotator">
                <div class="cbp-qtcontent">
                    <img src="img/client-1.jpg" alt="client-1" />
                    <blockquote>
                      <p>Work with John was a pleasure. He understood exactly what I wanted and created an awesome site for my company.</p>
                      <footer>Pino Caruso</footer>
                    </blockquote>
                </div>
                <div class="cbp-qtcontent">
                    <img src="img/client-2.jpg" alt="client-2" />
                    <blockquote>
                      <p>I'm really happy with the results. Get 100% satisfaction is difficult but Alex got it without problems.</p>
                      <footer>Jane Doe</footer>
                    </blockquote>
                </div>

            </div>		

            </div><!-- .row -->

					
		</div><!-- .row -->
	</section>

	<!-- Testimonial end -->


	<!-- Contact start -->

	<section id="contact" class="pfblock">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header">
						<h2 class="pfblock-title">Drop me a line</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							No one lights a lamp in order to hide it behind the door: the purpose of light is to create more light, to open people’s eyes, to reveal the marvels around.
						</div>
					</div>

				</div>

			</div><!-- .row -->

			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<form id="contact-form" role="form">
						<div class="ajax-hidden">
							<div class="form-group wow fadeInUp">
								<label class="sr-only" for="c_name">Name</label>
								<input type="text" id="c_name" class="form-control" name="c_name" placeholder="Name">
							</div>

							<div class="form-group wow fadeInUp" data-wow-delay=".1s">
								<label class="sr-only" for="c_email">Email</label>
								<input type="email" id="c_email" class="form-control" name="c_email" placeholder="E-mail">
							</div>

							<div class="form-group wow fadeInUp" data-wow-delay=".2s">
								<textarea class="form-control" id="c_message" name="c_message" rows="7" placeholder="Message"></textarea>
							</div>

							<button type="submit" class="btn btn-lg btn-block wow fadeInUp" data-wow-delay=".3s">Send Message</button>
						</div>
						<div class="ajax-response"></div>
					</form>

				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<!-- Contact end -->

	<!-- Footer start -->

	<footer id="footer">
		<div class="container">
			<div class="row">

				<div class="col-sm-12">

					<ul class="social-links">
						<li><a href="index.html#" class="wow fadeInUp"><i class="fa fa-facebook"></i></a></li>
						<li><a href="index.html#" class="wow fadeInUp" data-wow-delay=".1s"><i class="fa fa-twitter"></i></a></li>
						<li><a href="index.html#" class="wow fadeInUp" data-wow-delay=".2s"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="index.html#" class="wow fadeInUp" data-wow-delay=".4s"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="index.html#" class="wow fadeInUp" data-wow-delay=".5s"><i class="fa fa-envelope"></i></a></li>
					</ul>

					<p class="heart">
                    </p>
                    <p class="copyright">
                        © 2017
					</p>

				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</footer>

	<!-- Footer end -->

	<!-- Scroll to top -->

	<div class="scroll-up">
		<a href="#home"><i class="fa fa-angle-up"></i></a>
	</div>
    
    <!-- Scroll to top end-->

	<!-- Javascript files -->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/jquery.parallax-1.1.3.js"></script>
	<script src="js/imagesloaded.pkgd.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/wow.min.js"></script>
    <script src="js/jquery.easypiechart.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.cbpQTRotator.js"></script>
	<script src="js/custom.js"></script>

</body>
</html>