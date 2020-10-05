<?php include 'header.php'; ?>


<!-- Start Banner -->
	<div class="ulockd-home-slider">
		<div class="container-fluid">
			<div class="row">
				<div class="pogoSlider" id="js-main-slider">


					<?php
                    
                    $bx="select * from home_slider";
                    $by=mysqli_query($conn,$bx);
                    while($bz=mysqli_fetch_assoc($by)) 
                    {
                    
                
					 ?>


					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/<?php echo $bz['image']; ?>);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1><?php echo $bz['title']; ?></h1>
								<p><?php echo $bz['content']; ?></p>
								<a href="#" class="btn">Contact Us</a>
							</div>
						</div>
					</div>


				<?php   }  ?>


				</div><!-- .pogoSlider -->
			</div>
		</div>
	</div>
	<!-- End Banner -->
	
	<!-- Start About us -->
	<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">


				<?php
                
                $nj="select * from about_cont";
                $nk=mysqli_query($conn,$nj);
                $nl=mysqli_fetch_assoc($nk);


				 ?>
				
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row align-items-center about-main-info">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<h2> About Us </h2>
								<img src="images/line.png" style="width: 130px;">
								<p><?php echo $nl['cont']; ?></p>
								<a href="#" class="new-btn-d br-2">Read More</a>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="about-m">
									<ul id="banner">

										<?php
                                          
                                          $ha="select * from about_gallery";
                                          $hb=mysqli_query($conn,$ha);
                                          while($hc=mysqli_fetch_assoc($hb)) 
                                          {
                                          
										 ?>

										<li>
											<img src="images/<?php echo $hc['image']; ?>" alt="">
										</li>

										  <?php   }  ?> 

									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- Start Gallery -->
	<div id="gallery" class="gallery-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Gallery</h2>
						<img src="images/line.png" style="width: 120px;">
						<p></p>
					</div>
				</div>
			</div>
			
			<div class="popup-gallery row clearfix">

		    <?php 
             
             $vv="select * from home_gallery order by id DESC LIMIT 8";
             $bb=mysqli_query($conn,$vv);
             while($aa=mysqli_fetch_assoc($bb)) 
             {
             	
		    ?>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/<?php echo $aa['image']; ?>" alt="">
						<div class="box-content">	
							<h3 class="title"><?php echo $aa['title']; ?></h3>
							<ul class="icon">
								<li><a href="images/<?php echo $aa['image']; ?>"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>


		    <?php } ?>

				
			</div>

			<div class="about-main-info text-center">
			<a href="gallery.php" class="new-btn-d br-2 "> See All </a>
			</div>
		</div>
	</div>
	<!-- End Gallery -->
	
	
	<!-- Start Blog -->
	<div id="blog" class="blog-box">
		<div class="container">

			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Blog</h2>
						<img src="images/line.png" style="width: 85px;">
						<p></p>
					</div>
				</div>
			</div>
			<div class="row">

			<?php 

			$mm="select * from blogs order by id DESC LIMIT 4";
			$nm=mysqli_query($conn,$mm);
			while ($jj=mysqli_fetch_assoc($nm)) 
			{
	
			?>

				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="blog-inner" style="height: 500px;">
						<div class="blog-img">
							<img class="img-fluid" src="images/<?php echo $jj['image']; ?>" alt="" style="width: 100%; height: 200px;" />
						</div>
						<div class="item-meta">
							
<!-- 							<a href="#"><i class="fa fa-comments-o"></i> 5 Comment </a>
							<a href="#"><i class="fa fa-user-o"></i> Admin</a> -->
							<span class="dti"><?php echo $jj['datee']; ?></span>
						</div>
						<h2><?php echo $jj['title']; ?></h2>
						<p><?php echo $jj['content']; ?></p>
						<a class="new-btn-d br-2" href="#">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					</div>
				</div>

			<?php } ?>

				


			</div>
		</div>
		<div class="about-main-info text-center">
			<a href="blog.php" class="new-btn-d br-2 "> See All Blogs </a>
		</div>
	</div>
	<!-- End Blog -->
	
	<!-- Start Contact -->
	<div id="contact" class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box" style="text-align: center; margin: 3% 0 5% 0;">
						<h2 style="text-align: center;">Contact us</h2>
						<img src="images/line.png" style="width: 185px;">
						<p></p>
					</div>
				</div>
			</div>
          
          <?php 
          
          $nn="select * from contact";
          $jj=mysqli_query($conn,$nn);
          $ll=mysqli_fetch_assoc($jj);

          ?>

			<div class="row">

				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-location-arrow" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Admin Office</h4>
								<p><?php echo $ll['admin_add']; ?></p>
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
								<p><?php echo $ll['corp_add']; ?></p>
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
								<a href="#"><?php echo $ll['email']; ?></a>
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
								<a href="#"><?php echo $ll['phone']; ?></a><br>
								<!-- <a href="#"><span>Toll-Free: </span>18008906410</a> -->
							</div>
					</div>
				</div>
			</div>

			<div class="row mt-4">

				<div class="col-md-12 col-lg-6 col-xs-12">
					<div class="con_img">
						<img class="img-fluid" src="images/contactus.png">
					</div>
				</div>


				<div class="col-md-12 col-lg-6 col-xs-12">
				  	<div class="contact-block">
						<form id="contactForm" class="bg-light" style=" background: #f8f9fa !important;box-shadow: 0px 0px 5px #ccc;">
					  		<div class="row">
					  			<div class="col-md-12 text-center">
					  				<h2 class="mb-4 mt-2"><b>Inquiry</b></h2>
					  			</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
										<div class="help-block with-errors"></div>
									</div>                                 
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
										<div class="help-block with-errors"></div>
									</div> 
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" placeholder="Your number" id="number" class="form-control" name="number" required data-error="Please enter your number">
										<div class="help-block with-errors"></div>
									</div> 
								</div>
								<div class="col-md-12">
									<div class="form-group"> 
										<textarea class="form-control" id="message" placeholder="Your Message" rows="8" data-error="Write your message" required></textarea>
										<div class="help-block with-errors"></div>
									</div>
									<div class="submit-button text-center">
										<button class="btn btn-common" id="submit" type="submit">Send Message</button>
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





	<!-- End Contact -->
	



	<?php include 'footer.php';?>