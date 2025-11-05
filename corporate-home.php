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
</style>

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-0">
	<div class="owl-carousel header-carousel position-relative">
		  <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/banner/Zantat-Corporate-Home-Banner.png" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
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
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/banner/Zantat-Corporate-Home-Banner.png" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
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
	</div>
</div>
<!-- Carousel End -->



<section class="bg-1 d-none">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-sm-6 text-center wow fadeInUp pxsa"
				data-wow-delay="0.1s">
				<img alt="" src="img/icon/reliable-icon.png" class="mb-2">
				<h2>RELIABLE</h2>
			</div>
			<div class="col-lg-4 col-sm-6 text-center wow fadeInUp pxsa"
				data-wow-delay="0.1s">
				<img alt="" src="img/icon/DETERMINED-icon.png" class="mb-2">
				<h2>DETERMINED</h2>
			</div>
			<div class="col-lg-4 col-sm-6 text-center wow fadeInUp pxsa"
				data-wow-delay="0.1s">
				<img alt="" src="img/icon/RESILIENT-icon.png" class="mb-2">
				<h2>RESILIENT</h2>
			</div>
			<div class="col-md-2"></div>
			<div class="col-lg-8 mt-4 col-sm-8 text-center wow fadeInUp pxsa"
				data-wow-delay="0.1s">
				<p>Zantat Sdn Bhd is one of the leading producers of Calcium
					Carbonate in Malaysia. We provide lasting value for our customers
					by delivering high-quality products and excellent services.</p>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</section>

<section class="bg-1" style = "height:auto;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center wow fadeInUp pxsa" data-wow-delay="0.1s">
                <h2 class="title mb-4 text-blue">Who we are</h2>
                
                <p>Zantat Sdn Bhd is one of the leading producers of Calcium
					Carbonate in Malaysia.<br/> We provide lasting value for our customers
					by delivering high-quality products and excellent services.</p>
            </div>
            <div class="col-sm-6 playful">
              <a href="img/Product-Powder.png" class="fancybox" rel="gallery1">
                <figure class="softeffect">
                  <img src="img/Product-Powder.png" class="img-responsive" alt="Trail Through Woods - Winona" />
                  <figcaption class="d-flex align-items-end">
                   	<div>
                   		<p class="text-white text-sm mb-2 pb-1" style="font-size: 1.25rem;font-weight: 700;line-height: 1.2;">CALCIUM CARBONATE POWDER</p>
        			 	<p class="text-white text-sm mb-0">Calcium Carbonate powder is typically used as fillers in the production of plastics, papers, paints, coatings and rubbers. It can also be used as functional filler to alter the chemical and physical properties of a final product. Its natural whiteness makes it one of the cheapest pigments to provide whitening of materials.</p>
                   	</div>                  	
                  </figcaption>
                </figure>
              </a>
            </div>
            <!-- end columns -->
            <div class="col-sm-6 playful">
              <a href="img/Product-Dispersion.png" class="fancybox" rel="gallery1">
                <figure class="softeffect">
                  <img src="img/Product-Dispersion.png" class="img-responsive" alt="Sea Caves - Apostle Islands" />
                  <figcaption class="d-flex align-items-end">
                   	<div>
                   		<p class="text-white text-sm mb-2 pb-1" style="font-size: 1.25rem;font-weight: 700;line-height: 1.2;">CALCIUM CARBONATE DISPERSION</p>
        			 	<p class="text-white text-sm mb-0">Calcium Carbonate is pre-dispersed in slurry form to be used as a filler material to achieve maximum savings in material and production costs. Our Calcium Carbonate dispersion is specially developed to be used as fillers in the latex gloves and paper industries.</p>
                   	</div>                  	
                  </figcaption>
                </figure>
              </a>
            </div>
        </div>
    </div>
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