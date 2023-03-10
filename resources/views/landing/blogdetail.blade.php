@extends('landing.layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="keywords" content="software house, IT Konsultan, IT, Web Development, Mobile Apps Development, Startup, Android">
		<meta name="author" content="estehcreative">
		<meta name="description" content="Esteh Creative, Innovating Technology to Deliver Happiness.">
		<meta name='og:image' content='images/home/ogg.png'>
		<!-- <link rel="apple-touch-icon" sizes="57x57" href="images/logo/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="images/logo/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/logo/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/logo/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/logo/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/logo/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="images/logo/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="images/logo/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="images/logo/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="images/logo/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="images/logo/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="images/logo/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="images/logo/favicon-16x16.png"> -->
		<link rel="manifest" href="images/logo/manifest.json">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#fff">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#fff">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#fff">
		<title>Esteh Creative - Innovating Technology to Deliver Happiness</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/favicon-esteh.ico">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">
		<link rel="stylesheet" type="text/css" href="css/esteh.css">

		<!-- Fix Internet Explorer ______________________________________-->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->	
		<!-- Hotjar Tracking Code for https://esteh.id -->
<script>
	(function(h,o,t,j,a,r){
			h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
			h._hjSettings={hjid:1665578,hjsv:6};
			a=o.getElementsByTagName('head')[0];
			r=o.createElement('script');r.async=1;
			r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
			a.appendChild(r);
	})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157475869-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-157475869-1');
</script>

	</head>

	<body>
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<!-- Preloader -->
			<!-- <section>
				<div id="preloader">
					<div id="ctn-preloader" class="ctn-preloader">
						<div class="animation-preloader">
							<div class="icon"><img src="images/1.svg" alt=""></div>
							<div class="txt-loading">
								<span data-text-preloader="R" class="letters-loading">
									R
								</span>
								<span data-text-preloader="O" class="letters-loading">
									O
								</span>
								<span data-text-preloader="G" class="letters-loading">
									G
								</span>
								<span data-text-preloader="A" class="letters-loading">
									A
								</span>
								<span data-text-preloader="N" class="letters-loading">
									N
								</span>
							</div>
						</div>	
					</div>
				</div>
			</section> -->



			<!-- 
			=============================================
				Blog Details
			============================================== 
			-->
			<div class="our-blog blog-details blog-details-fg pb-200 md-pb-120">
				<div class="blog-hero-banner" style="background-image: url(images/blog/bg2.jpg);">
					<div class="blog-custom-container">
						<a href="#" class="date">{{$artikeldetail->date}}</a>
						<h2 class="blog-title">{{$artikeldetail->title}}</h2>
					</div> <!-- /.blog-custom-container -->
				</div> <!-- /.blog-hero-banner -->
				<div class="blog-fg-data">
					<div class="post-data">
						<div class="blog-custom-container">
							<div class="custom-container-bg">
								<p class="pt-50">This response is important for our ability to learn from mistakes, but it alsogives self-criticism, because it is part of the threat-protection system. In other words, what keeps us safe can go too </p>
								<p>One touch of a red-hot stove is usually all we need to avoid that kind of discomfort in future. The same is true as we experience the emotional sensation of stress from our first instances of social rejection ridicule. We quickly learn to fear and thus automatically avoid potentially stressful situations of all kinds, including the most common of all: making mistakes.</p>
								<blockquote>A brand for a company is like a reputation for a person. You earn reputation by trying to do hard things well.</blockquote>
								<h4>How We Achive It Togather.</h4>
								<p>One touch of a red-hot stove is usually all we need to avoid that kind of discomfort in future. The same is true as we experience the emotional sensation of stress from our first instances of social rejection ridicule. We quickly learn to fear and thus automatically avoid potentially stressful situations of all kinds, including the most common of all: making mistakes.</p>
								<p>This response is important for our ability to learn from mistakes, but it alsogives self-criticism, because it is part of the threat-protection system. In other words, what keeps us safe can go too </p>
								<div class="blog-img-gallery">
									<div class="row">
										<div class="col-sm-6"><img src="images/blog/32.jpg" alt=""></div>
										<div class="col-sm-6"><img src="images/blog/33.jpg" alt=""></div>
									</div>
								</div>
								<h5>This response is important for our ability to learn from mistakes, but it alsogives rise to self-criticism, because it is part of the threat-protection system. </h5>
								<p>One touch of a red-hot stove is usually all we need to avoid that kind of discomfort in the future. The same is true as weexperience the emotional sensation of stress from our first instances of social rejection ridicule. We quickly learn to fear and thusautomatically.</p>
								<h4>Work Harder & Gain Succsess.</h4>
								<p>One touch of a red-hot stove is usually all we need to avoid that kind of discomfort in future. The same is true as we experience the emotional sensation of stress from our first ins social rejection ridicule. We quickly learn to fear and thus automatically. automatically avoid potentially stressful situation of all kinds, including the most common of all: making mistakes.</p>
							</div> <!-- /.custom-container-bg -->
						</div> <!-- /.blog-custom-container -->

						<div class="video-banner-blog">
							<a data-fancybox="" href="https://www.youtube.com/embed/vVXAXDvgPiQ" class="fancybox video-button"><i class="flaticon-play-button-2"></i></a>
						</div> <!-- /.video-banner-blog -->
						<div class="blog-custom-container">
							<div class="custom-container-bg">
								<strong>One touch of a red-hot stove is usually all we need to avoid that kind of discomfort in the future. <span></span></strong>
								<h4 class="sub-heading">Let???s Start Now.</h4>
								<p>One touch of a red-hot stove is usually all we need to avoid that kind of discomfort future. The same is true as we experience the emotional sensation of stress from our first instances of social rejection with ridicule. We quickly learn to fear and thus automatically.</p>
							</div> <!-- /.custom-container-bg -->
						</div> <!-- /.blog-custom-container -->
					</div> <!-- /.post-data -->

					<div class="blog-custom-container">
						<div class="custom-container-bg">
							<div class="post-tag-area d-md-flex justify-content-between align-items-center pt-50">
								<ul class="tags">
									<li>Tag:</li>
									<li><a href="#">Adventure,</a></li>
									<li><a href="#">Landscape,</a></li>
									<li><a href="#">Nature</a></li>
								</ul>
								<ul class="share-icon">
									<li>Share:</li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div> <!-- /.post-tag-area -->

							<div class="user-comment-area pt-150 md-pt-100">
								<h3 class="inner-block-title">2 Comments</h3>
								<div class="comment-wrapper">
							  		<div class="single-comment d-sm-flex align-items-top">
							  			<img src="images/home/2.jpg" alt="" class="user-img">
							  			<div class="user-comment-data">
							  				<h6 class="name">Rashed ka.</h6>
							  				<div class="date">13 June, 2018, 7:30pm</div>
											<p>One touch of a red-hot stove is usually all we need to avoid that kind of discomfort in future. The same true we experience the emotional sensation.</p>
											<button class="reply">Reply</button>
							  			</div> <!-- /.user-comment-data -->
							  		</div> <!-- /.single-comment -->
							  		<div class="single-comment comment-reply d-sm-flex align-items-top">
							  			<img src="images/home/3.jpg" alt="" class="user-img">
							  			<div class="user-comment-data">
							  				<h6 class="name">Rashed ka.</h6>
							  				<div class="date">13 June, 2018, 7:30pm</div>
											<p>One touch of a red-hot stove is usually all we need to avoid that kind of discomfort in future. The same true sensation.</p>
											<button class="reply">Reply</button>
							  			</div> <!-- /.user-comment-data -->
							  		</div> <!-- /.single-comment -->
							  		<div class="single-comment d-sm-flex align-items-top">
							  			<img src="images/home/4.jpg" alt="" class="user-img">
							  			<div class="user-comment-data">
							  				<h6 class="name">Zubayer hasan</h6>
							  				<div class="date">12 June, 2018, 3:30pm</div>
											<p>One touch of a red-hot stove is usually all we need to avoid that kind of discomfort in future. The same true we experience the emotional sensation.</p>
											<button class="reply">Reply</button>
							  			</div> <!-- /.user-comment-data -->
							  		</div> <!-- /.single-comment -->
							  	</div> <!-- /.comment-wrapper -->
							</div> <!-- /.user-comment-area -->
						</div> <!-- /.custom-container-bg -->
					</div> <!-- /.blog-custom-container -->

					<div class="comment-form-area mt-100 md-mt-70">
						<div class="blog-custom-container">
							<div class="custom-container-bg">
								<h3 class="inner-block-title">Leave A Comment</h3>
								<p>Sing in to post your comment or singup if you dont have any account.</p>
								<form action="#" class="theme-form-style-three">
									<div class="row">
										<div class="col-md-6"><input type="text" placeholder="Your Name*"></div>
										<div class="col-md-6"><input type="email" placeholder="Your Email*"></div>
										<div class="col-12"><textarea placeholder="Your Comment*"></textarea></div>
									</div>
									<button class="theme-button-three">Post Comment</button>
								</form>
							</div> <!-- /.custom-container-bg -->
						</div> <!-- /.blog-custom-container -->		
					</div> <!-- /.comment-form-area -->
				</div> <!-- /.blog-fg-data -->
			</div> <!-- /.our-blog -->
			



			<!--
			=====================================================
				Footer
			=====================================================
			-->

	        

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>
			


		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="vendor/jquery.2.2.3.min.js"></script>
		<!-- Popper js -->
		<script src="vendor/popper.js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	    <!-- menu  -->
		<script src="vendor/mega-menu/assets/js/custom.js"></script>
		<!-- AOS js -->
		<script src="vendor/aos-next/dist/aos.js"></script>
		<!-- WOW js -->
		<script src="vendor/WOW-master/dist/wow.min.js"></script>
		<!-- owl.carousel -->
		<script src="vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- Fancybox -->
		<script src="vendor/fancybox/dist/jquery.fancybox.min.js"></script>

		<!-- Theme js -->
		<script src="js/theme.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>
@endsection