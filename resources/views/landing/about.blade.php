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
					<!-- 
			=============================================
				Inner Banner
			============================================== 
			-->
			<div class="inner-banner pos-r banner-bg bg-style-one" style="background-image: url(images/about/company.jpg);">
				<div class="opacity">
					<div class="container">
						<p>About us</p>
						<h2>Company Story</h2>
					</div>
				</div>
			</div> <!-- /.inner-banner -->

			
			
			<!-- 
			=============================================
				Feature Block
			============================================== 
			-->
			<div class="about-feature pos-r">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-sm-6">
							<div class="feature-block-two md-mb-40 text-center">
								<img src="images/icon/icon11.svg" alt="" class="icon">
								<h5 class="pt-25 pb-35">Berpengalaman</h5>
								<p>Inisiasi oleh anak-anak muda kreatif yang kini menjelma menjadi para profesional yang multi talenta dan berpengalaman sejak 2013.</p>
							</div> <!-- /.feature-block-two -->
						</div> <!-- /.col- -->
						<div class="col-lg-4 col-sm-6">
							<div class="feature-block-two md-mb-40 text-center">
								<img src="images/icon/icon12.svg" alt="" class="icon">
								<h5 class="pt-25 pb-35">Bersahabat</h5>
								<p>Berkonsultasi kapan saja dan gratis. Kami juga bisa diundang untuk memberikan seminar/workshop dunia IT secara gratis.</p>
							</div> <!-- /.feature-block-two -->
						</div> <!-- /.col- -->
						<div class="col-lg-4 m-auto">
							<div class="feature-block-two md-mb-40 text-center">
								<img src="images/icon/icon13.svg" alt="" class="icon">
								<h5 class="pt-25 pb-35">Cepat</h5>
								<p>Pendekatan efektif dan efisien  untuk terus memberikan karya-karya terbaik sebagai solusi dari beragam masalah Anda.</p>
							</div> <!-- /.feature-block-two -->
						</div> <!-- /.col- -->
					</div> <!-- /.row -->
				</div>
			</div>
			

			<!-- 
			=============================================
				About Text Block
			============================================== 
			-->
			<div class="about-us-text bg-color pt-200 pos-r pb-200 md-pt-50 md-pb-50">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="theme-title-one">
								<div class="upper-title mb-5">Tentang Kami</div>
								<h2 class="main-title">Diinisiasi Sejak 2013</h2>
							</div> <!-- /.theme-title-one -->
						</div>
						<div class="col-lg-4 about-text-one">
							<h4 class="pb-20 md-pt-50">Our Vision </h4>
							<p>Digital bukan lagi masa depan, digital sudah kita alami dan rasakan setiap hari. Inovasi teknologi akan terus bertransformasi dan mempermudah cara hidup manusia. </p>
							<p>Transformasi ini juga menjadi pemicu perubahan gaya hidup, sehingga semua elemen bisnispun harus terus bersinergi mengikuti iklim bisnis yang dinamis.</p>
							<p>Cara perusahaan mendekatkan diri pada market juga terus menerus berkembang.</p>
						
						</div>
						<div class="col-lg-4 about-text-one">
							<h4 class="pb-20 md-pt-50">&nbsp;  </h4>
							<p> Perilaku konsumen yang dinamis di era digital ini harus senantiasa diadaptasi agar perusahaan mampu mencuri perhatian market dan melekat di hati masing-masing pelanggan.</p>
							<p>Agility dan teknologi menjadi hal yang wajib dimiliki bagi setiap perusahaan agar tetap dekat di hati konsumen. Dan kami percaya bahwa Esteh Creative adalah tim tepat yang bisa mendukung visi dan misi Anda untuk memenangkan hati masyarakat Indonesia.</p>
						
						</div>
					</div> <!-- /.row -->

				
				</div> <!-- /.container -->
			</div> <!-- /.about-us-text -->



			<!-- 
			=============================================
				Achivement Section
			============================================== 
			-->
			<div class="achivement-section pt-300 pb-300 md-pt-130 md-pb-150 pos-r">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 order-lg-last">
							<div class="theme-title-one">
								<div class="upper-title mb-5">Achievement</div>
								<h2 class="main-title underline">Over 30+ Completed work & Still counting.</h2>
							</div> <!-- /.theme-title-one -->
							<p class="pt-55">Dipercaya baik perusahaan nasional maupun internasional. Berkolaborasi bersama untuk memanfaatkan teknologi guna meningkatkan efektivitas, efisiensi dan produktivitas.</p>
						</div>

						<div class="col-lg-7 order-lg-first">
							<div class="theme-counter-one pos-r md-mt-100 md-mb-110 sm-mt-60 sm-mb-10">
								<div class="shape-wrapper">
									<img src="images/shape/45.svg" alt="" class="shape-one img-shape">
									<img src="images/shape/4.svg" alt="" class="shape-two img-shape">
									<img src="images/shape/23.svg" alt="" class="shape-three img-shape">
									<img src="images/shape/9.svg" alt="" class="shape-four img-shape">
									<img src="images/shape/17.svg" alt="" class="shape-five img-shape">
									<img src="images/shape/24.svg" alt="" class="shape-six img-shape">
									<img src="images/shape/25.svg" alt="" class="shape-seven img-shape">
								</div>
								<div class="inner-round-shape pos-r">
									<div class="counter-box-one pos-a">
										<h2 class="number color-one"><span class="timer" data-from="0" data-to="2" data-speed="1200" data-refresh-interval="5">2</span></h2>
							      		<p>Offices</p>
									</div> <!-- /.counter-box-one -->
									<div class="counter-box-one pos-a">
										<h2 class="number color-two"><span class="timer" data-from="0" data-to="7" data-speed="1200" data-refresh-interval="5">7</span>+</h2>
							      		<p>Experiences</p>
									</div> <!-- /.counter-box-one -->
									<div class="counter-box-one pos-a">
										<h2 class="number color-three"><span class="timer" data-from="0" data-to="15" data-speed="1200" data-refresh-interval="5">15</span>+</h2>
							      		<p>Warriors</p>
									</div> <!-- /.counter-box-one -->
									<div class="counter-box-one pos-a">
										<h2 class="number color-four"><span class="timer" data-from="0" data-to="50" data-speed="1200" data-refresh-interval="5">50</span>+</h2>
							      		<p>Projects</p>
									</div> <!-- /.counter-box-one -->
									<div class="center-shape pos-a"><img src="images/shape/44.svg" alt=""></div>
								</div> <!-- /.inner-round-shape -->
							</div> <!-- /.theme-counter-one -->
						</div>
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.achivement-section -->

			<!--
			=====================================================
				Partner Section
			=====================================================
			-->
			<div class="op-partner-section-one pt-80 pb-110 sm-pb-60">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-4 col-6">
							<div class="img-box bx-a">
								<a href="#"><img src="images/client/bni.png" style="width: 70%;" alt=""></a>
							</div> <!-- /.img-box -->
						</div>
						<div class="col-lg-2 col-md-4 col-6">
							<div class="img-box bx-b">
								<a href="#"><img src="images/client/bpjs.png" style="width: 80%;" alt=""></a>
							</div> <!-- /.img-box -->
						</div>
						<div class="col-lg-3 col-md-4 col-6">
							<div class="img-box bx-c">
								<a href="#"><img src="images/client/kemnaker.png" style="width: 70%;" alt=""></a>
							</div> <!-- /.img-box -->
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4 col-6">
							<div class="img-box bx-d">
								<a href="#"><img src="images/client/logo.png" alt=""></a>
							</div> <!-- /.img-box -->
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4 col-6">
							<div class="img-box bx-e">
								<a href="#"><img class="p-3" src="images/client/logo-brainloka.png" alt=""></a>
							</div> <!-- /.img-box -->
						</div>
						<div class="col-xl-4 col-lg-2 col-md-4 col-6">
							<div class="img-box bx-f">
								<a href="#"><img class="p-1" src="images/client/logo-kemendikbud.png" alt=""></a>
							</div> <!-- /.img-box -->
						</div>
						<div class="col-xl-2 col-lg-3 col-md-4 col-6">
							<div class="img-box bx-g">
								<a href="#"><img src="images/client/logo-cei.png" alt=""></a>
							</div> <!-- /.img-box -->
						</div>
						<div class="col-xl-3 col-lg-3 col-md-4 col-6">
							<div class="img-box bx-h">
								<a href="#"><img class="p-4" src="images/client/logo-sizra.png" alt=""></a>
							</div> <!-- /.img-box -->
						</div>
						<div class="col-xl-3 col-lg-11 col-md-4 col-6">
							<div class="img-box bx-i">
								<a href="#"><img class="p-1" src="images/client/logo-bssn.png" alt=""></a>
							</div> <!-- /.img-box -->
						</div>
					</div>
				</div>
			</div> <!-- /.op-partner-section-one -->



	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>


			<div id="path-shape-wrapper">
				<div>
					<svg height="0" width="0">
						<defs>
						    <clipPath id="path-shape-one">
						     	<path fill-rule="evenodd"  fill="url(#PSgrad_0)"
								 d="M205.167,7.943 C196.497,5.430 187.599,3.410 178.431,1.968 C128.511,-5.887 71.772,9.587 43.924,51.651 C19.381,88.722 21.921,137.016 28.728,180.915 C36.372,230.212 42.902,274.488 30.686,323.548 C22.073,358.142 10.514,392.042 3.990,427.142 C-9.427,499.346 8.748,558.050 93.045,555.629 C129.787,554.575 165.485,540.991 199.389,527.944 C222.170,519.186 249.687,504.720 274.747,508.015 C298.508,511.143 314.810,529.991 331.946,542.158 C360.484,562.425 393.173,576.700 432.090,577.905 C544.608,581.383 647.199,488.167 663.495,395.667 C683.050,284.674 584.750,212.456 485.909,166.645 C447.031,148.625 408.266,133.864 373.136,108.990 C319.781,71.209 268.682,26.354 205.167,7.943 "/>
						    </clipPath>
						</defs>
					</svg>
				</div>
			</div> <!-- /#path-shape-wrapper -->
			


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
		<!-- Tilt js -->
		<script src="vendor/tilt.jquery.js"></script>
		<!-- Fancybox -->
		<script src="vendor/fancybox/dist/jquery.fancybox.min.js"></script>


		<!-- Theme js -->
		<script src="js/theme.js"></script>
		</div> <!-- /.main-page-wrapper -->
	</body>
</html>
@endsection