<?php include 'header2.php';?>
<style>

.overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6); /* Adjust overlay background color and opacity as needed */
    padding: 30px;
    box-sizing: border-box;
}

.product-container {
    position: relative;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: center; /* Center vertically */
    margin-top: 40px;
    height: auto;
}
.btn-primary {
    color: #000;
    background-color: #005677;
    border-color: #005677;
}

.test:hover {
  font-size: 0;
}

.pxsa:hover .test:hover:before {
  font-size: 20px;
  content: attr(data-hover);
}


.playful figure {
  cursor: pointer;
  float: left;
  margin: 10px 1%;
   max-height: 350px;
   max-width: 575px;
  overflow: hidden;
  position: relative;
  width: 100%;
}

.playful figure figcaption,
.playful figure figcaption > a {
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
}

.playful figure figcaption {
  backface-visibility: hidden;
  color: #fff;
/*   font-size: 1.25em; */
/*   text-transform: uppercase; */
}

.playful figure h4,
.playful figure p {
  margin: 0;
}

.playful figure h4 {
  color: #fff;
/*   font-size: 20px; */
/*   font-weight: 800; */
  word-spacing: -0.15em;
}

.playful figure p {
/*   font-size: 18px; */
/*   font-weight: 100; */
  color: #fff;
/*   letter-spacing: 1px; */
}

.playful figure h2,
.playful figure p {
  margin: 0;
}

.playful figure.softeffect {
  background: none repeat scroll 0 0 #000000;
}

.playful figure.softeffect img {
  transition: opacity .35s ease 0s, transform .35s ease 0s;
}

figure.softeffect:hover img {
  opacity: 0.35;
  transform: scale(1);
}

.playful figure.softeffect figcaption:before,
.playful figure.softeffect p {
  opacity: 0;
  transition: opacity 0.35s ease 0s, transform 0.35s ease 0s;
}

.playful figure.softeffect h4 {
  opacity: 0;
  padding: 20% 0 20px;
  transition: opacity 0.35s ease 0s, transform 0.35s ease 0s;
}

.playful figure.softeffect p {
  margin: 0 auto;
/*   max-width: 200px; */
/*   transform: scale(1.5); */
}

.playful figure.softeffect:hover figcaption:before,
.playful figure.softeffect:hover p {
  opacity: 1;
  transform: scale(1);
  padding: 25px;
  text-align: justify;
}

.playful figure.softeffect:hover h4 {
  opacity: 1;
  transform: scale(1);
}

.playful figure img {
  display: block;
  max-width: 100%;
  min-height: 100%;
  opacity: 1;
  position: relative;
}

figure.softeffect {
  background: none repeat scroll 0 0 transparent;
}

figure.softeffect:hover {
  background: none repeat scroll 0 0 #000000;
  /* Cyan: #00aeef */
}

figure.softeffect img {
  transform: scale(1);
  transition: opacity .35s ease 0s, transform .35s ease 0s;
}

figure.softeffect:hover img {
  opacity: 0.40;
  transform: scale(1.15);
  filter: blur(2px);
}

.bg-1{padding:60px 0;}

/*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/

/* DEMO GENERAL ============================== */
.hover {
  overflow: hidden;
  position: relative;
  padding-bottom: 60%;
}

.hover-overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 90;
  transition: all 0.4s;
}

.hover img {
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  transition: all 0.3s;
}

.hover-content {
  position: relative;
  z-index: 99;
}


/* DEMO 1 ============================== */
.hover-1 img {
  width: 105%;
  position: absolute;
  top: 0;
  left: -5%;
  transition: all 0.6s;
}

.hover-1-content {
  position: absolute;
  bottom: 0;
  left: 0;
  z-index: 99;
  transition: all 0.8s;
}

.hover-1 .hover-overlay {
  background: rgba(0, 0, 0, 0.5);
}
.hover-1-description {
  transform: translateY(0.5rem);
  transition: all 0.7s;
  opacity: 0;
}

.hover-1:hover .hover-1-content {
  bottom: 2rem;
}

.hover-1:hover .hover-1-description {
  opacity: 1;
  transform: none;
}

.hover-1:hover img {
  left: 0;
}

.hover-1:hover .hover-overlay {
  opacity: 1;
}

.bt{
    margin: 7px 0;
    width: 45px;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #FFFFFF;
    background: transparent;
    border: 1px solid #FFFFFF;
    font-size: 22px;
    transition: .5s;
   }
.hover-1:hover .bt {
  display:none;
}


.fixed {
    width: 100%;
    position: fixed;
    z-index: 999;
    text-align: left;
/*     margin-top: 280px; */
    max-width: 900px;
    margin-left: 120px;
}
.hover-1-content{padding:35px;}
@media (max-width: 768px){
.fixed {
   max-width: 350px;
   margin-left: 15px;
}

}


.mobileonly{display:none;}
.mbloly{display:none;}
@media (max-width: 992px) {
.mobile-none{
display:none!important;

}
.mobileonly{display:block;}
.hover-1-content{padding:15px;}
.hover {
    min-height: 320px;
}
.hover-1 img {
   min-height: 320px;
}

.hover-1-description {
    transform: translateY(0.5rem);
    transition: all 0.7s;
    opacity: 1;
}
.hover-1:hover .hover-1-content {
    bottom: 0rem;
}

}



@media (min-width: 992px)and (max-width: 1245px) {
.wbonly{
display:none!important;

}
.mbloly{display:block;}
}

.grey-board{
   background: #F4F4F4;
    padding: 30px;
    max-width: 400px;
    margin: auto;
    min-height: 250px;   
}
</style>

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-0">
	<div class="fixed position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center mobile-none">
        <div class="">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h2 class="display-3 text-white animated slideInDown">Zantat</h2>
                                <p class="fs-5 text-white mb-4 pb-2">We take great care and patience in communicating with our customers and better understand their needs. We can be counted on to deliver valued customised solutions, leading them towards business sustainability and efficiency.</p>
                                <a href="about.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Know More</a>
                                <a href="contact-us.php" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
	<div class="owl-carousel header-carousel position-relative">
		  <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/banner/Zantat-Corporate-Home-Banner.png" alt="">
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/banner/Zantat-Home-Banner-00.png" alt="">
                
            </div>
            
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/banner/Group-165.png" alt="">
            </div>
	</div>
</div>
<!-- Carousel End -->

<section class="bg-1" style = "height:auto;">

  					<div class="container ">
                        <div class="row justify-content-start mobileonly">
                            <div class="col-sm-12 col-lg-12">
                                <h2 class="display-3 text-blue animated slideInDown">Zantat</h2>
                                <p class="fs-5  mb-4 pb-2">We take great care and patience in communicating with our customers and better understand their needs. We can be counted on to deliver valued customised solutions, leading them towards business sustainability and efficiency.</p>
                                <a href="about.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft ">Know More</a>
                                <a href="contact-us.php" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                            </div>
                        </div>
                        
    <div class="container py-5">
        <div class="row">
        <div class="col-lg-12 col-sm-12 text-center wow fadeInUp pxsa" data-wow-delay="0.1s">
                <h2 class="title mb-4 text-blue">Who we are</h2>
                
                <p>Zantat Sdn Bhd is one of the leading producers of Calcium
					Carbonate in Malaysia.<br/> We provide lasting value for our customers
					by delivering high-quality products and excellent services.</p>
            </div>
          <!-- DEMO 1 Item-->
           <div class="col-lg-2 mb-3 mb-lg-0"></div>
          <div class="col-lg-4 mb-3 mb-lg-0">
          	<div class="grey-board text-center d-flex  justify-content-center align-items-center">
          		<div>
          			<img alt="" src="img/icon/Calcium-Carbonate-Powder.png" class="img-fluid">
          			<h5 class="mb-0">Calcium Carbonate Powder</h5>
          		</div>
          	</div>
          </div> 
          <div class="col-lg-4 mb-3 mb-lg-0">
          	<div class="grey-board text-center d-flex justify-content-center align-items-center">
          		<div>
          		<img alt="" src="img/icon/Calcium-Carbonate-Dispersion.png" class="img-fluid">
          		<h5 class="mb-0">Calcium Carbonate Dispersion</h5>
          	</div>
          </div>
    	</div>
    	<div class="col-lg-2 mb-3 mb-lg-0"></div>
</section>




<section class="bg-blue">
	<div class="container">
		<div class="row">
			<div class="col-lg-12  col-sm-12 text-center wow fadeInUp pxsa"
				data-wow-delay="0.1s">
				<h2 class="title mb-4 text-white">Get in Touch with Us</h2>
			</div>
			<div class="col-lg-12 col-sm-12 text-center wow fadeInUp pxsa"
				data-wow-delay="0.1s">
				<p class="mb-4 text-center text-white">Have a question relating to business
					matters?</p>

				<h5 class="mb-4 text-center bolder text-white">Contact Our Customer Service</h5>
			</div>
		</div>
	</div>
</section>




<?php include 'footer2.php';?>

<script>

$(document).ready(function() {
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});
</script>