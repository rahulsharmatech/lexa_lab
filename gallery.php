<?php include 'header.php'; ?>



<div id="gallery" class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box" style="text-align: center;">
						<h2 style="text-align: center;">Gallery</h2>
						<img src="images/line.png" style="width: 150px;">
						<p></p>
					</div>
				</div>
			</div>
			
			<div class="popup-gallery row clearfix">

			<?php 

			$ab="select * from home_gallery";
            $ac=mysqli_query($conn,$ab);
            while($ad=mysqli_fetch_assoc($ac)) 
            {
 
			?>

				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/<?php echo $ad['image']; ?>" alt="">
						<div class="box-content">	
							<h3 class="title"><?php echo $ad['title']; ?></h3>
							<ul class="icon">
								<li><a href="images/<?php echo $ad['image']; ?>"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>

			

		    <?php	}  ?>

			</div>
		</div>
	</div>




<?php include 'footer.php';?>