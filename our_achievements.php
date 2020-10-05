<?php  include 'header.php';   ?>
<div class="container-fluid">
	<div class="container">
		<div class="row mt-5">
			<div class="col-sm-12">
				<h1 class="mt-5 companyoverview"><strong>Our Achievements</strong></h1>
			</div>
		</div>


		<div class="row mt-5">
			<div class="col-md-12 col-lg-6">
				<img class="cimg img-fluid" src="https://us.123rf.com/450wm/stnazkul/stnazkul1904/stnazkul190400377/121620951-winning-team-raise-trophy-cup-with-digital-background-digital-achievement-conceptual.jpg?ver=6">
			</div>	
			<div class="col-md-12 col-lg-6 achive">
				<p>Laxian Incorporation has a strong Pharmaceutical distribution network. It has the ability to reach its customer in a very short time.</p>
				<p>The staff of Laxian Incorporation are proud of this strength and it is the main reason for the success of the company.</p>
				<p>All areas operated are visited at least twice monthly and customers receive their goods within 24 hours after placing their orders.</p>
			</div>	
		</div>

		<div class="row Milestones mt-3">
			<img class="img-fluid" width="1920" height="1500" src="https://laxianincorporation.org/wp-content/uploads/2020/09/Website.jpg" class="vc_single_image-img attachment-full" alt="" srcset="https://laxianincorporation.org/wp-content/uploads/2020/09/Website.jpg 1920w, https://laxianincorporation.org/wp-content/uploads/2020/09/Website-300x234.jpg 300w, https://laxianincorporation.org/wp-content/uploads/2020/09/Website-1024x800.jpg 1024w, https://laxianincorporation.org/wp-content/uploads/2020/09/Website-768x600.jpg 768w, https://laxianincorporation.org/wp-content/uploads/2020/09/Website-1536x1200.jpg 1536w, https://laxianincorporation.org/wp-content/uploads/2020/09/Website-600x469.jpg 600w" sizes="(max-width: 1920px) 100vw, 1920px">
		</div>
	</div>
</div>
<br>


<script>
	$(document).ready(function(){
    $(window).scroll(function(){
    var positiontop = $(document).scrollTop();
    console.log(positiontop);

    if ((positiontop > 150 ) && (positiontop < 500 )){

    	$(".Milestones").addClass("animate__animated animate__backInUp");
    }
    if ((positiontop > 880 ) && (positiontop < 900 )){

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
					<div class="socialicon ">
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