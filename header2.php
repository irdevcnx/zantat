<?php include 'ini.inc.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Zantat</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="keywords">
<meta content="" name="description">

<!-- Favicon -->
<link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
	href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
	rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
	rel="stylesheet">
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
	rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css"
	rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EDDWTH6XG8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EDDWTH6XG8');
</script>

</head>
<style>
h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6 {
	margin-top: 0;
	margin-bottom: 0.5rem;
	font-family: "Montserrat", sans-serif;
	font-weight: 700;
	line-height: 1.2;
	color: #181d38;
}

.logo-size {
	width: 140px;
	margin-left: 0;
	top: 0;
	position: relative;
}

.box-go {
	max-width: 900px;
	margin: auto;
}

.bg-1 {
	width: 100%;
	background: url(img/banner/Reliable-Determined-Resilient-Background.png)
		top center;
	background-size: cover;
	position: relative;
	display: flex;
	position: relative;
	width: calc(100% - var(--padding)* 2);
	margin: 0 auto;
	padding: 30px 0;
}

.pxsa {
	
}

.pxsa h2 {
	color: #005677;
}

.bg-blue {
	width: 100%;
	background: #005677;
	background-size: cover;
	position: relative;
	display: flex;
	position: relative;
	width: calc(100% - var(--padding)* 2);
	margin: 0 auto;
	padding: 30px 0;
}

.sd {
	max-width: 575px;
}

.text-blue {
	color: #005677;
}

.bg-whiter {
	width: 100%;
	background: #fff;
	background-size: cover;
	position: relative;
	display: flex;
	position: relative;
	width: calc(100% - var(--padding)* 2);
	margin: 0 auto;
	padding: 30px 0;
}

.bg-3 {
	width: 100%;
	background: url(img/banners/Determination-To-Excel-Background.png) top
		center;
	background-size: cover;
	position: relative;
	display: flex;
	position: relative;
	width: calc(100% - var(--padding)* 2);
	margin: 0 auto;
	padding: 30px 0;
}

.text-justify {
	text-align: justify;
}

.bluebox {
	background: #005677;
	padding: 25px;
	border-radius: 15px;
}

.bluebox-- {
	background: #005677;
	padding: 25px;
	min-height: 300px;
}

.d {
	max-width: 480px;
	margin-left: auto;
}

.e {
	max-width: 600px;
	margin: auto;
}

.g {
	max-width: 480px;
	margin: auto;
}

.f {
	max-width: 600px;
	margin: auto;
}

.bg-4 {
	width: 100%;
	background: url(img/banners/Our-History-BG.png) top center;
	background-size: cover;
	position: relative;
	display: flex;
	position: relative;
	width: calc(100% - var(--padding)* 2);
	margin: 0 auto;
	padding: 25px;
	min-height: 300px;
}

.f-500 {
	font-weight: 500;
}

.fon54 {
	font-size: 54px;
}

.footer {
	background: #808284;
}

@media ( min-width : 768px) {
	.seven-cols .col-md-1, .seven-cols .col-sm-1, .seven-cols .col-lg-1 {
		width: 100%;
		*width: 100%;
	}
}

@media ( min-width : 992px) {
	.seven-cols .col-md-1, .seven-cols .col-sm-1, .seven-cols .col-lg-1 {
		width: 14.285714285714285714285714285714%;
		*width: 14.285714285714285714285714285714%;
	}
}

/**
 *  The following is not really needed in this case
 *  Only to demonstrate the usage of @media for large screens
 */
@media ( min-width : 1200px) {
	.seven-cols .col-md-1, .seven-cols .col-sm-1, .seven-cols .col-lg-1 {
		width: 14.285714285714285714285714285714%;
		*width: 14.285714285714285714285714285714%;
	}
}
</style>
<body>
	<!-- Spinner Start -->
	<div id="spinner"
		class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
		<div class="spinner-border text-primary"
			style="width: 3rem; height: 3rem;" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>
	<!-- Spinner End -->


	<!-- Navbar Start -->
	<nav
		class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
		<div class="container">
			<a href="<?=$co_link?>corporate-homepage.php"
				class="navbar-brand d-flex align-items-center px-4 px-lg-5"> <img
				alt="" src="img/logo.png" class="logo-size">
			</a>
			<button type="button" class="navbar-toggler me-4"
				data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<div class="navbar-nav ms-auto p-4 p-lg-0">
					
					<div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle"
							data-bs-toggle="dropdown">About Us</a>
						<div class="dropdown-menu fade-down m-0">
							<!-- <a href="<?=$co_link?>about.php" class="dropdown-item">Overview</a>  -->
							<a href="<?=$co_link?>our-brand.php" class="dropdown-item">Our Brand</a> 
							<a href="<?=$co_link?>who-we-are.php" class="dropdown-item">Who We are</a>
							<a href="<?=$co_link?>bod.php" class="dropdown-item">Board of Directors</a> 
							<a href="<?=$co_link?>management.php" class="dropdown-item">Key Senior Management</a> 
							<a href="<?=$co_link?>awards.php" class="dropdown-item">Awards</a> 
							<a href="<?=$co_link?>quality.php" class="dropdown-item">Quality &amp; Service Assurance</a> 
							<a href="<?=$co_link?>corporate-information.php" class="dropdown-item">Corporate Information</a>
							<a href="<?=$co_link?>corporate-structure.php" class="dropdown-item">Corporate Structure</a>
						</div>
					</div>
					<a href="<?=$co_link?>corporate-sustainability.php" class="nav-item nav-link">Corporate Sustainability</a>
					<div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle"
							data-bs-toggle="dropdown">Products</a>
						<div class="dropdown-menu fade-down m-0">
							<a href="<?=$co_link?>product-applications.php" class="dropdown-item">Product Applications</a> 
							<a href="<?=$co_link?>product-types.php" class="dropdown-item">Product Types</a>
						</div>
					</div>
					
					<div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle"
							data-bs-toggle="dropdown">Facilities</a>
						<div class="dropdown-menu fade-down m-0">
							<a href="<?=$co_link?>production-plants.php" class="dropdown-item">Production Plant</a> 
							<a href="<?=$co_link?>quaries.php" class="dropdown-item">Quarries</a>
							<a href="<?=$co_link?>operation-workflow.php" class="dropdown-item">Operation Workflow</a>
							<a href="<?=$co_link?>quality-control-measures.php" class="dropdown-item">Quality Control Measures</a>
						</div>
					</div>
					
					<div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle"
							data-bs-toggle="dropdown">Investor Relations</a>
						<div class="dropdown-menu fade-down m-0">
							<a href="<?=$ir_link?>ir-homepage.php" class="dropdown-item">Overview</a> 
							<a href="<?=$ir_link?>stock-information.php" class="dropdown-item">Stock Information</a> 
							<a href="<?=$ir_link?>corporategovernance.php" class="dropdown-item">Corporate Governance</a>
							<a href="<?=$ir_link?>annual-reports.php" class="dropdown-item">Annual Reports</a>
							<a href="<?=$ir_link?>quarterly-reports.php" class="dropdown-item">Quarterly Reports</a>
							<a href="<?=$ir_link?>prospectus.php" class="dropdown-item">Prospectus</a>
							<a href="<?=$ir_link?>agm.php" class="dropdown-item">Annual General Meeting</a>
							<a href="<?=$ir_link?>announcement.php" class="dropdown-item">Bursa Announcement</a>
							
						</div>
					</div>
					<div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle"
							data-bs-toggle="dropdown">Media</a>
						<div class="dropdown-menu fade-down m-0">
							<a href="https://www.facebook.com/ZantatSdnBhd/"
								class="dropdown-item">Media News</a> <a href="<?=$co_link?>corporate-video.php"
								class="dropdown-item">Corporate video</a> <a
								href="<?=$co_link?>docs/zantat brochure.pdf" class="dropdown-item">Corporate Brochure</a>
						</div>
					</div>
					<a href="<?=$co_link?>contactus.php" class="nav-item nav-link">Contact</a>
				</div>
			</div>
		</div>
	</nav>
	<!-- Navbar End -->