<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Atella_Studio
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="mobile-video-1">
			<div class="container-fluid">
				<div class="row pt-3 d-flex justify-content-center">
					<div class="mobile-video-1__video-container col-12 overflow-hidden">
						<!-- <iframe src="https://www.youtube.com/embed/F-r-06BTtLU?controls=0&autoplay=1&mute=1&playsinline=1&loop=1&playlist=Yj2iELI6OeI"></iframe> -->
							<!-- <video autoplay loop muted playsinline>
								<source src="<?php //echo get_template_directory_uri() ?>/videos/frame1.mp4" type="video/mp4" />
							Your browser does not support the video tag.
							</video> -->
							<div class="wistia_responsive_padding" style="padding:166.67% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><iframe src="https://fast.wistia.net/embed/iframe/cqo49pb7rq?seo=true&videoFoam=true" title="frame1 Video" allow="autoplay; fullscreen" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" msallowfullscreen width="100%" height="100%"></iframe></div></div>
					</div>
					<div class="col-12">
						<div class="mobile-video-1__text-container">
							<div class="pixels__text-content d-flex flex-column align-items-center rounded-5 p-4">
								<h2>Ecommerce2 </br>Rendering Expert</h2>
								<p>contact us today to discuss your project, explore ideas, and experience the transformative power of 3D modeling. Your vision is just a click away from becoming a stunning reality!</p>
								<a href="#" class="btn btn-light btn-lg rounded-5 w-50 mt-2 text-black">Get Started</a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>

		<section class="mobile-brands">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 px-0 mobile d-lg-none d-sm-block">
						<img src="<?php echo get_template_directory_uri() ?>/img/brands.png" width="100%" alt="">
					</div>
					<div class="col-12 px-0 mobile d-none d-sm-none d-lg-block">
						<img src="<?php echo get_template_directory_uri() ?>/img/brandsdesktop.jpg" width="100%" alt="">
					</div>
					<!-- <div class="col-12 d-inline-flex flex-column align-items-center">
						<h2>Brands We Have </br>Worked With</h2>
						<p>We are proud to have collaborated with some of the most innovative and influential brands in the world. Here are some of the amazing projects we have worked on with our partners.</p>
					</div> -->
				</div>
			</div>
		</section>

		<section class="mobile-swipe">
			<div class="container px-4">
				<div class="row py-4">
					<div class="col-12">
						<h1 class="header-title">What you get when </br> you work with us</h1>
					</div>
				</div>
				<div class="row d-lg-none d-sm-block">
					<div class="col-12">
						<div class="swiper mySwiper">
							<div class="swiper-wrapper">

								<div class="swiper-slide">
									<img src="<?php echo get_template_directory_uri() ?>/img/savetime1.png" alt="">
									<div class="swiper-content px-3 py-3">
										<h1>Save time & money</h1>
										<p>
											Atella Studios Rendering is a complex and time-consuming process that requires specialized skills and equipment
										</p>
										<a href="#" class="btn btn-dark btn-lg rounded-5 w-35 mt-2 text-white fs-6">Get Started</a>
									</div>
								</div>

								<div class="swiper-slide">
									<img src="<?php echo get_template_directory_uri() ?>/img/savetime2.png" alt="">
									<div class="swiper-content px-3 py-3">
										<h1>Save time & money</h1>
										<p>
											Atella Studios Rendering is a complex and time-consuming process that requires specialized skills and equipment
										</p>
										<a href="#" class="btn btn-dark btn-lg rounded-5 w-35 mt-2 text-white fs-6">Get Started</a>
									</div>
								</div>
								
								<div class="swiper-slide">
									<img src="<?php echo get_template_directory_uri() ?>/img/savetime3.png" alt="">
									<div class="swiper-content px-3 py-3">
										<h1>Save time & money</h1>
										<p>
											Atella Studios Rendering is a complex and time-consuming process that requires specialized skills and equipment
										</p>
										<a href="#" class="btn btn-dark btn-lg rounded-5 w-35 mt-2 text-white fs-6">Get Started</a>
									</div>
								</div>
							</div>

						</div>
						<div class="d-flex flex-row justify-content-center gap-5 my-5">
							
							<div class="swiper-button-prev">
								<i class="bi bi-arrow-left-circle fs-1 text-black"></i>
							</div>
							<div class="swiper-button-next">
								<i class="bi bi-arrow-right-circle fs-1 text-black"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="mobile-pricing">
			<div class="container">
				<div class="row py-5">
					<h1 class="header-title">Pricing Plans</h1>
				</div>
				<div class="row row-cols-1 row-cols-md-2 g-4">
					<div class="col">
						<div class="card">
							<img src="<?php echo get_template_directory_uri() ?>/img/price1.png" class="card-img-top" alt="...">
							<div class="card-body">
								<div class="card-body__top">
									<div class="row">
										<div class="col-5 px-0">
											<h5 class="card-title">Park of 1 </br> Modelling</h5>
										</div>
										<div class="col-7 px-0">
											<a href="#" class="btn btn-light btn-sm rounded-5 w-100 mt-2 fs-6 py-2">25/30 Slots available</a>
										</div>
									</div>
								</div>
								
								<div class="row first-info">
									<div class="col-8 first-info__left d-flex align-items-baseline px-0">
										<h1>25</h1>
										<p class="px-2">Seconds Models</p>
									</div>
									
								</div>
								<div class="row">
									<div class="col-7 px-0">
										<ul>
											<li>Product Details</li>
											<li>More Product Details</li>
											<li>More Product Detais</li>
											<li>More Product Details</li>
										</ul>
									</div>
									<div class="col-5 d-flex align-items-end mb-3 px-0">
										<div class="col-12">
											<a href="#" class="btn btn-light btn-sm rounded-5 w-100 mt-2 text-black fs-6 py-2">More Details</a>
										</div>
									</div>
								</div>
								
								<h1 class="price-amount">$300</h1>
								<a href="#" class="btn btn-dark btn-lg rounded-5 w-100 text-white mt-2">Get Started</a>
								<p class="w-100 mt-2 text-center"><a class="text-black" href="#" >See Sampling</a></p>
								
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="<?php echo get_template_directory_uri() ?>/img/price2.png" class="card-img-top" alt="...">
							<div class="card-body">
								<div class="card-body__top">
									<div class="row">
										<div class="col-5 px-0">
											<h5 class="card-title">Park of 1 </br> Modelling</h5>
										</div>
										<div class="col-7 px-0">
											<a href="#" class="btn btn-light btn-sm rounded-5 w-100 mt-2 fs-6 py-2">25/30 Slots available</a>
										</div>
									</div>
								</div>
								
								<div class="row first-info">
									<div class="col-8 first-info__left d-flex align-items-baseline px-0">
										<h1>25</h1>
										<p class="px-2">Seconds Models</p>
									</div>
									
								</div>
								<div class="row">
									<div class="col-7 px-0">
										<ul>
											<li>Product Details</li>
											<li>More Product Details</li>
											<li>More Product Detais</li>
											<li>More Product Details</li>
										</ul>
									</div>
									<div class="col-5 d-flex align-items-end mb-3 px-0">
										<div class="col-12">
											<a href="#" class="btn btn-light btn-sm rounded-5 w-100 mt-2 text-black fs-6 py-2">More Details</a>
										</div>
									</div>
								</div>
								
								<h1 class="price-amount">$300</h1>
								<a href="#" class="btn btn-dark btn-lg rounded-5 w-100 text-white mt-2">Get Started</a>
								<p class="w-100 mt-2 text-center"><a class="text-black" href="#" >See Sampling</a></p>
								
							</div>
						</div>
					</div>
					
				</div>
				<!-- <div class="row">
					<div class="col-12 d-inline-flex flex-column align-items-center">
						<h2 class="header-title">Did not find whAT FITS  </br>YOUR GOALS OR BRAND?</h2>
						<p> contact us to get a custom quote on your brand goals and models that could be tailored specifically to what works best for you</p>

						<a href="#" class="btn btn-dark btn-lg rounded-5 w-100 text-white mt-2">Get A Quote</a>
					</div>
				</div> -->
			</div>				
		</section>

		<section class="how-it-works bg-black rounded-top-4">
			<div class="container">
				<div class="row py-5 d-flex flex-column align-items-center">
					<h1 class="header-title text-white">How it Works</h1>
					<a href="#" class="btn btn-dark btn-lg rounded-5 w-25 text-white border-white mt-2 fs-6 border-white">Steps</a>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="row  d-flex flex-row align-items-center">
							<div class="col-2">
								<p class="text-white step-text float-end">01</p>
							</div>
							<div class="col-10 px-2">
								<div class="video-wrapper">
									<div class="wistia_responsive_padding" style="padding:0 0 0 0;position:relative; height: 40vh;">
										<div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
											<iframe src="https://fast.wistia.net/embed/iframe/5mglgts44t?seo=true&videoFoam=true" title="frame1 Video" allow="autoplay; fullscreen" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed2" name="wistia_embed" msallowfullscreen></iframe>
										</div>
										<!-- <span class="position-absolute top-0"> submission</span> -->
										<a href="#" class="top-text position-absolute top-0 btn btn-secondary btn-dm rounded-5 d-inline text-white mt-3 mx-4 fs-6">SUBMISSION</a>
										<div class="video-content position-absolute bottom-0 d-flex flex-row w-100 p-3 rounded-bottom-5 justify-content-center">
											<h6 class="w-50">Submit picture idea </br> to be rendered</h6>
											<a href="#" class="w-50 btn btn-dark btn-dm rounded-5 d-inline text-white mt-2 fs-6">Get started</a>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="row  d-flex flex-row align-items-center">
							<div class="col-2">
								<p class="text-white step-text float-end">02</p>
							</div>
							<div class="col-10 px-2">
								<div class="video-wrapper">
									<div class="wistia_responsive_padding" style="padding:0 0 0 0;position:relative; height: 40vh;">
										<div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
											<iframe src="https://fast.wistia.net/embed/iframe/ukw5zq7zek?seo=true&videoFoam=true" title="frame1 Video" allow="autoplay; fullscreen" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed2" name="wistia_embed" msallowfullscreen></iframe>
										</div>
										<!-- <span class="position-absolute top-0"> submission</span> -->
										<a href="#" class="top-text position-absolute top-0 btn btn-secondary btn-dm rounded-5 d-inline text-white mt-3 mx-4 fs-6">SUBMISSION</a>
										<div class="video-content position-absolute bottom-0 d-flex flex-row w-100 p-3 rounded-bottom-5 justify-content-center">
											<h6 class="w-50">Submit picture idea </br> to be rendered</h6>
											<a href="#" class="w-50 btn btn-dark btn-dm rounded-5 d-inline text-white mt-2 fs-6">Get started</a>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="row  d-flex flex-row align-items-center">
							<div class="col-2">
								<p class="text-white step-text float-end">03</p>
							</div>
							<div class="col-10 px-2">
								<div class="video-wrapper">
									<div class="wistia_responsive_padding" style="padding:0 0 0 0;position:relative; height: 40vh;">
										<div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
											<iframe src="https://fast.wistia.net/embed/iframe/cqo49pb7rq?seo=true&videoFoam=true" title="frame1 Video" allow="autoplay; fullscreen" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed2" name="wistia_embed" msallowfullscreen></iframe>
										</div>
										<!-- <span class="position-absolute top-0"> submission</span> -->
										<a href="#" class="top-text position-absolute top-0 btn btn-secondary btn-dm rounded-5 d-inline text-white mt-3 mx-4 fs-6">SUBMISSION</a>
										<div class="video-content position-absolute bottom-0 d-flex flex-row w-100 p-3 rounded-bottom-5 justify-content-center">
											<h6 class="w-50">Submit picture idea </br> to be rendered</h6>
											<a href="#" class="w-50 btn btn-dark btn-dm rounded-5 d-inline text-white mt-2 fs-6">Get started</a>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
				<div class="row py-5 d-flex flex-column align-items-center">
					<h1 class="header-title text-white">See Your </br> Vision in 3D</h1>
					<div class="col-12 px-2 mobile d-lg-none d-sm-block">
						<img src="<?php echo get_template_directory_uri() ?>/img/vision.png" width="100%" alt="">
					</div>
				</div>
			</div>
		</section>

		<section class="past-work">
			<div class="container">
				<div class="row py-4 d-flex flex-column align-items-center">
					<h1 class="header-title">Past Work</h1>
				</div>
				<div class="row">
					<div class="col-12 px-0">
						<!-- PAST WORK STARTS -->
							<div class="past-faq-item open rounded-top-5 position-relative" style="background-image: url(/img/1.jpg);">
								<div class="video-wrapper position-absolute">
									<div class="wistia_responsive_padding" style="padding:0 0 0 0;position:relative; height: 40vh;">
										<div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
											<iframe src="https://fast.wistia.net/embed/iframe/5mglgts44t?seo=true&videoFoam=true" title="frame1 Video" allow="autoplay; fullscreen" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed2" name="wistia_embed" msallowfullscreen></iframe>
										</div>
										<!-- <span class="position-absolute top-0"> submission</span> -->
									</div>
								</div>
								<button class="past-faq-question position-absolute top-0">
									<p class="px-3"style="margin: 0;">Vibes Only</p>
									<i class="bi bi-plus fs-2 px-3"></i>
								</button>
							</div>
						
							<div class="past-faq-item rounded-top-5 overflow-x-hiddden" >
								<button class="past-faq-question rounded-top-5" style="background:#FBFBFB;">
									<p style="margin: 0;">HOA</p>
									<i class="bi bi-plus fs-2"></i>
								</button>
								<div class="past-faq-answer">
									<p style="visibility: hidden;">Answer to Question 2 goes here.</p>
								</div>
							</div>
						
							<div class="past-faq-item rounded-top-5" >
								<button class="past-faq-question" style="background:#F0F0F0;">
									<p style="margin: 0;">Daddy Sounds</p>
									<i class="bi bi-plus fs-2"></i>
								</button>
								<div class="past-faq-answer">
									<p style="visibility: hidden;">Answer to Question 3 goes here.</p>
								</div>
							</div>

							<div class="past-faq-item rounded-top-5" >
								<button class="past-faq-question" style="background:#E3E3E3;">
								<p style="margin: 0;">Good Water</p>
								<i class="bi bi-plus fs-2"></i>
								</button>
								<div class="past-faq-answer">
									<p style="visibility: hidden;">Answer to Question 3 goes here.</p>
								</div>
							</div>

							<div class="past-faq-item rounded-top-5">
								<button class="past-faq-question" style="background:#D1D1D1;">
								<p style="margin: 0;">Climb On Sight</p>
								<i class="bi bi-plus fs-2"></i>
								</button>
								<div class="past-faq-answer">
									<p style="visibility: hidden;">Answer to Question 3 goes here.</p>
								</div>
							</div>

							<div class="past-faq-item rounded-top-5">
								<button class="past-faq-question" style="background:#ADADAD;">
								<p style="margin: 0;">Re-Origin</p>
								<i class="bi bi-plus fs-2"></i>
								</button>
								<div class="past-faq-answer">
									<p style="visibility: hidden;">Answer to Question 3 goes here.</p>
								</div>
							</div>

							<div class="past-faq-item rounded-top-5 rounded-bottom-5" style="background:#000;">
								<button class="past-faq-question text-white pb-4" style="background:#000;">
								<p style="margin: 0;">Atella</p>
								<i class="bi bi-plus fs-2"></i>
								</button>
								<div class="past-faq-answer">
									<p style="visibility: hidden;">Answer to Question 3 goes here.</p>
								</div>
							</div>
					</div>
					<!-- <div class="col-12 px-0">
							<div class="past-faq-item open rounded-top-5" style="background-image: url(/img/1.jpg);">
								<div class="wistia_responsive_padding" style="padding:0 0 0 0;position:relative; height: 40vh;">
									<div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
										<iframe src="https://fast.wistia.net/embed/iframe/5mglgts44t?seo=true&videoFoam=true" title="frame1 Video" allow="autoplay; fullscreen" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed2" name="wistia_embed" msallowfullscreen></iframe>
									</div>
								</div>
								<button class="past-faq-question">
									<p style="margin: 0;">Vibes Only</p>
									<i class="bi bi-plus fs-2"></i>
								</button>
								<div class="past-faq-answer">
									<p style="visibility: hidden;">Answer to Question 1 goes here.</p>
								</div>
							</div>
						
							<div class="past-faq-item rounded-top-5" style="background-image: url(/img/2.jpg);">
								<button class="past-faq-question" style="background:#FBFBFB;">
									<p style="margin: 0;">HOA</p>
									<i class="bi bi-plus fs-2"></i>
								</button>
								<div class="past-faq-answer">
									<p style="visibility: hidden;">Answer to Question 2 goes here.</p>
								</div>
							</div>
						
							<div class="past-faq-item rounded-top-5" style="background-image: url(/img/3.webp);">
								<button class="past-faq-question" style="background:#F0F0F0;">
									<p style="margin: 0;">Daddy Sounds</p>
									<i class="bi bi-plus fs-2"></i>
								</button>
								<div class="past-faq-answer">
									<p style="visibility: hidden;">Answer to Question 3 goes here.</p>
								</div>
							</div>

							<div class="past-faq-item rounded-top-5" style="background-image: url(/img/4.webp);">
								<button class="past-faq-question" style="background:#E3E3E3;">
								<p style="margin: 0;">Good Water</p>
								<i class="bi bi-plus fs-2"></i>
								</button>
								<div class="past-faq-answer">
									<p style="visibility: hidden;">Answer to Question 3 goes here.</p>
								</div>
							</div>

							<div class="past-faq-item rounded-top-5" style="background-image: url(/img/5.jpg);">
								<button class="past-faq-question" style="background:#D1D1D1;">
								<p style="margin: 0;">Climb On Sight</p>
								<i class="bi bi-plus fs-2"></i>
								</button>
								<div class="past-faq-answer">
									<p style="visibility: hidden;">Answer to Question 3 goes here.</p>
								</div>
							</div>

							<div class="past-faq-item rounded-top-5" style="background-image: url(/img/1.jpg);">
								<button class="past-faq-question" style="background:#ADADAD;">
								<p style="margin: 0;">Re-Origin</p>
								<i class="bi bi-plus fs-2"></i>
								</button>
								<div class="past-faq-answer">
									<p style="visibility: hidden;">Answer to Question 3 goes here.</p>
								</div>
							</div>

							<div class="past-faq-item rounded-top-5 rounded-bottom-5" style="background:#000;" style="background-image: url(/img/2.jpg);">
								<button class="past-faq-question text-white pb-4" style="background:#000;">
								<p style="margin: 0;">Atella</p>
								<i class="bi bi-plus fs-2"></i>
								</button>
								<div class="past-faq-answer">
									<p style="visibility: hidden;">Answer to Question 3 goes here.</p>
								</div>
							</div>
					</div> -->
				</div>
			</div>
		</section>


		<section class="faq">
			<div class="container">
				<div class="row pt-5">
					<h1 class="header-title">FAQs</h1>
				</div>
				<div class="row">
					<div class="col-12 px-0">
						<div class="faq-container">
							<div class="faq-item open">
								<button class="faq-question">
									<p>How long does each modelling take 1</p>
									<i class="bi bi-plus fs-2"></i>
								</button>
								<div class="faq-answer">
									<p>
										Witness your vision come to life with unparalleled precision. 
										Our meticulous 3D modeling ensures every detail is captured, 
										creating a visual masterpiece that exceeds expectations.
									</p>
								</div>
							</div>
						
							<div class="faq-item">
								<button class="faq-question">
									<p>How long does each modelling take 2</p>
									<i class="bi bi-plus fs-2"></i>
								</button>
								<div class="faq-answer">
									<p>
									Witness your vision come to life with unparalleled precision. 
									Our meticulous 3D modeling ensures every detail is captured, 
									creating a visual masterpiece that exceeds expectations.
									</p>
								</div>
							</div>
						
							<div class="faq-item">
								<button class="faq-question">
									<p>How long does each modelling take 3</p>
									<i class="bi bi-plus fs-2"></i>
								</button>
								<div class="faq-answer">
									<p>
									Witness your vision come to life with unparalleled precision. 
									Our meticulous 3D modeling ensures every detail is captured, 
									creating a visual masterpiece that exceeds expectations.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</section>

		<section class="innovation">
			<div class="container">
				<div class="row py-3 d-flex flex-column align-items-center">
					<h1 class="header-title">Innovation Beyond </br> Boundaries</h1>
				</div>
				<div class="row">
					<div class="col-12 px-0">
						<div class="swiper myInnovationSwiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide position-relative">
									<img src="<?php echo get_template_directory_uri() ?>/img/innoslide2.png" class="position-absolute" alt="">
									<div class="inno-bottom-content d-flex position-absolute bottom-0 py-2 w-100 justify-content-center">
										<h4 class="text-white">NIKE SPORT AD </br> CAMPAING</h4>
									</div>
								</div>
								<div class="swiper-slide position-relative">
									<img src="<?php echo get_template_directory_uri() ?>/img/innoslide1.png" class="position-absolute" alt="">
									<div class="inno-bottom-content d-flex position-absolute bottom-0 py-3 w-100 justify-content-center">
										<h4>ROSES CREAM</h4>
									</div>
								</div>
								<div class="swiper-slide position-relative">
									<img src="<?php echo get_template_directory_uri() ?>/img/innoslide3.png" class="position-absolute" alt="">
									<div class="inno-bottom-content d-flex position-absolute bottom-0 py-2 w-100 justify-content-center">
										<h4 class="text-white">NIKE SPORT AD </br> CAMPAING</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="pixels">
			<div class="container">
				<div class="row d-flex flex-column">
					<div class="col-12 rounded-top-5 overflow-hidden">
						<img class="rounded-top-5" src="<?php echo get_template_directory_uri() ?>/img/pixel.png" alt="">
					</div>
					<div class="col-12 rounded-bottom-5  overflow-y-hidden">
						<div class="pixels__text-wrapper p-3 rounded-bottom-5">
							<div class="pixels__text-content d-flex flex-column align-items-center rounded-5 p-4">
								<h1>Pixel To Precision </br> Perfection</h1>
								<p>
									contact us today to discuss your project, explore ideas, and experience the transformative power of 3D modeling. Your vision is just a click away from becoming a stunning reality!
								</p>
								<a href="#" class="btn btn-dark btn-lg fs-6 rounded-5 w-50 mt-2 text-white">Get Started</a>
							</div>				
						</div>			
					</div>
				</div>
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
