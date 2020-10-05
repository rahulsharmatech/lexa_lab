<?php include 'header.php'; ?>

	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="mt-5 companyoverview"><strong>Company Overview</strong></h1>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-sm-12">
					<p style="font-size: 20px">Laxmi Distributors & Laxian Incorporation specializes in the marketing of pharmaceutical products. Laxian Incorporation constitutes, Laxian Healthcare, Atro Labs, La Essentials, Lexa Labs and Be Gleam in their cluster.</p>
					<img class="img-fluid aligncenter wp-image-1468 size-full" src="https://laxianincorporation.org/wp-content/uploads/2020/08/Infographics-3.png" alt="" width="1060" height="828" srcset="https://laxianincorporation.org/wp-content/uploads/2020/08/Infographics-3.png 1060w, https://laxianincorporation.org/wp-content/uploads/2020/08/Infographics-3-300x234.png 300w, https://laxianincorporation.org/wp-content/uploads/2020/08/Infographics-3-1024x800.png 1024w, https://laxianincorporation.org/wp-content/uploads/2020/08/Infographics-3-768x600.png 768w, https://laxianincorporation.org/wp-content/uploads/2020/08/Infographics-3-600x469.png 600w" sizes="(max-width: 1060px) 100vw, 1060px">
					<p style="font-size: 20px"> The company was established in 2001 with the aim and trust to provide stupendous services, the company is sustained and endorsed by highly qualified domain experts, with the experience of more than two decades in the pharmaceutical industry.</p>
				</div>
			</div>
			<div class="row mt-5 prow1">
				<div class="col-sm-12 col-md-6">
					<h1><strong>Our Objectives</strong></h1>
					<p>Our objective at Laxian Incorporation is to furnish the quality pharmaceutical and other associated products.</p>
				</div>
				<div class="col-sm-12 col-md-6">
					<img class="cimg img-fluid" src="https://www.penspen.com/wp-content/uploads/2019/04/8596_Penspen-Hub-Image-v2.png">
				</div>
			</div>

			<div class="row mt-5 prow2">
				<div class="col-sm-12 col-md-6">
					<img class="cimg img-fluid" src="https://vivanls.com/images/pageimages/one-ourvision-1576152691.jpg">
				</div>
				<div class="col-sm-12 col-md-6">
					<h1><strong>Our Vision</strong></h1>
					<p> We trust to reach the eminence, be the market leader, become a preferred partner and the most honored and reliable vendor in the pharma marketing industry.</p>
				</div>
			</div>

			<div class="row mt-5 prow3">
				<div class="col-sm-12 col-md-6">
					<h1><strong>Our Mission</strong></h1>
					<p>Our mission is to endorse premium quality products which are affordable and to be a problem solver in our industry.</p>
				</div>
				<div class="col-sm-12 col-md-6">
					<img class="cimg img-fluid" src="https://cdn.pixabay.com/photo/2018/01/11/10/49/businessman-3075839__340.jpg">
				</div>
			</div>
		</div>
	</div>

<script>
	$(document).ready(function(){
    $(window).scroll(function(){
    var positiontop = $(document).scrollTop();
    console.log(positiontop);

    if ((positiontop > 600 ) && (positiontop < 800 )){

    	$(".prow1").addClass("animate__animated animate__backInRight");
    }
    if ((positiontop > 1100 ) && (positiontop < 1300 )){

    	$(".prow2").addClass("animate__animated animate__backInLeft");
    }
    if ((positiontop > 1500 ) && (positiontop < 1700)){

    	$(".prow3").addClass("animate__animated animate__backInUp");
    }
   	if ((positiontop > 1900 ) && (positiontop < 1920)){

    	$(".footerleft").addClass("animate__animated animate__slideInLeft");
    }
  });
});
	
</script>

<!-- Start Footer -->
	<footer class="footer-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-12">
					<p class="footer-company-name">All Rights Reserved. &copy; 2020 <a href="#">Lexa Lab</a> Design By : <a href="#">TechStone Infotech</a></p>
				</div>
				<div class="col-md-6 col-lg-12">
					<div class="socialicon">
						<ul>
							<li>
								<a href="#" class="fa fa-facebook  text-white"></a>
								<a href="#" class="fa fa-twitter  text-white"></a>
								<a href="#" class="fa fa-youtube text-white"></a>
								<a href="#" class="fa fa-instagram text-white"></a>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script> 
	<script src="js/slider-index.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/TweenMax.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
	<script src="js/isotope.min.js"></script>	
	<script src="js/images-loded.min.js"></script>	
    <script src="js/custom.js"></script>
</body>




<!-- Mirrored from techstoneinfotech.com/demo1/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Sep 2020 07:57:09 GMT -->
</html>