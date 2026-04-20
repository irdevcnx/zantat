<?php include 'header2.php';?>
<script src='https://www.google.com/recaptcha/api.js' async defer></script>
<style>
.page-header {
	background: linear-gradient(rgba(24, 29, 56, .5), rgba(24, 29, 56, .5)),
		url(img/banner/Corporate-Video-Banner.png);
	background-position: center center;
	background-repeat: no-repeat;
	background-size: cover;
	min-height: 500px;
}

.w-100 {
	width: 100%;
	margin-top: -46px;
}

.big-title {
	font-size: 48px;
	text-transform: uppercase;
	color: #005677;
	font-weight: 400;
}

.subti {
	color: #005677;
	font-size: 24px;
	line-height: 1.25;
	text-align: left;
}
</style>

<!-- Carousel Start -->

<!-- Header Start -->
<div
	class="container-fluid bg-primary py-5 page-header  d-flex justify-content-center align-items-center">
	<div class="container">
		<div class="row ">
			<div class="col-lg-12 text-center">
				<h1 class="text-white animated slideInDown">Corporate Video</h1>
			</div>
		</div>
	</div>
</div>
<!--   <img src="img/banner/about_overlay.png" class="w-100">-->
<!-- Header End -->

<!-- Carousel End -->


<section>
	<div class="container mb-5 mt-5">
		<div class="row">
			<!-- Video 1 -->
			<div id="video1" class="col-lg-8 col-md-8 wow fadeInUp"
				data-wow-delay="0.1s">
				<iframe width="100%" height="436px"
					src="https://www.youtube.com/embed/s9YU9w0CcMg?si=IG0O_1NqhpiXEHUZ"
					title="YouTube video player" frameborder="0"
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
					referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
			</div>
			<!-- Video 2 -->
			<div id="video2" class="col-lg-8 col-md-8 wow fadeInUp"
				data-wow-delay="0.1s" ">
				<iframe width="100%" height="436px"
					src="https://www.youtube.com/embed/UJ9lf_9bDe0?si=IXmgsQ2SO2GBngfX"
					title="YouTube video player" frameborder="0"
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
					referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
			</div>
			<!-- Images for switching videos -->
			<div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.3s">
				<div>
					<img src="img/ir/top.png" alt="Top Image"
						style="width: 100%; height: 210px; cursor: pointer;"
						onclick="toggleVideo('video1')">
				</div>
				<br>
				<div>
					<img src="img/ir/bottom.png" alt="Bottom Image"
						style="width: 100%; height: 210px; cursor: pointer;"
						onclick="toggleVideo('video2')">
				</div>

			</div>
		</div>
	</div>
</section>

<script>
    window.onload = function() {
        toggleVideo('video2');
    };
    function toggleVideo(videoId) {
        var video = document.getElementById(videoId);
        var otherVideoId = (videoId === 'video1') ? 'video2' : 'video1';
        var otherVideo = document.getElementById(otherVideoId);
        
        // Toggle the display of the clicked video
        if (video.style.display === 'none') {
            video.style.display = 'block';
            otherVideo.style.display = 'none';
        } else {
            video.style.display = 'none';
            otherVideo.style.display = 'block';
        }
    }

</script>







<?php include 'footer2.php';?>
