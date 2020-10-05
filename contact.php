<?php include 'header.php';?>

<img src="https://www.hometownurgentcare.com/wp-content/uploads/2019/02/privacy-1.jpeg" style="width: 100%;">

<?php 

$aa="select * from contact";
$bb=mysqli_query($conn,$aa);
$cc=mysqli_fetch_assoc($bb);

?>

<div id="contact" class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Contact us</h2>
						<img src="images/line.png" style="width: 185px;">
						<p></p>
					</div>
				</div>
			</div>
			<div class="row">

				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-location-arrow" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Admin Office</h4>
								<p><?php echo $cc['admin_add']; ?></p>
							</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-location-arrow" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Corporate Office</h4>
								<p><?php echo $cc['corp_add']; ?></p>
							</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Email</h4>
								<a href="#"><?php echo $cc['email']; ?></a>
							</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Phone Number</h4>
								<a href="#"><?php echo $cc['phone']; ?></a><br>
								<!-- <a href="#"><span>Toll-Free: </span>18008906410</a> -->
							</div>
					</div>
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-md-12 col-lg-6 col-xs-12">
					<div style="height: 450px;">
						<img class="img-fluid" src="images/contactus.png">
					</div>


				</div>


				<div class="col-md-12 col-lg-6 col-xs-12">
				  	<div class="contact-block">
						<form id="contactForm" class="bg-light" style=" background: #f8f9fa !important;box-shadow: 0px 0px 5px #ccc;" novalidate="true">
					  		<div class="row">
					  			<div class="col-md-12 text-center">
					  				<h2 class="mb-4 mt-2"><b>Inquiry</b></h2>
					  			</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required="" data-error="Please enter your name">
										<div class="help-block with-errors"></div>
									</div>                                 
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required="" data-error="Please enter your email">
										<div class="help-block with-errors"></div>
									</div> 
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" placeholder="Your number" id="number" class="form-control" name="number" required="" data-error="Please enter your number">
										<div class="help-block with-errors"></div>
									</div> 
								</div>
								<div class="col-md-12">
									<div class="form-group"> 
										<textarea class="form-control" id="message" placeholder="Your Message" rows="8" data-error="Write your message" required=""></textarea>
										<div class="help-block with-errors"></div>
									</div>
									<div class="submit-button text-center">
										<button class="btn btn-common disabled" id="submit" type="submit" style="pointer-events: all; cursor: pointer;">Send Message</button>
										<div id="msgSubmit" class="h3 text-center hidden"></div> 
										<div class="clearfix"></div> 
									</div>
								</div>
					  		</div>            
						</form>
				  	</div>
				</div>
			</div>
		</div>
	</div>







<?php include 'footer.php';?>