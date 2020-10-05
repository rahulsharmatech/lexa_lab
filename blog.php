<?php include 'header.php';?>




<div id="blog" class="blog-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box" style="text-align: center;">
						<h2 style="text-align: center;">Blog</h2>
						<img src="images/line.png" style="width: 120px;">
						<p></p>
					</div>
				</div>
			</div>
			<div class="row">


			<?php
                
               $aa="select * from blogs";
               $bb=mysqli_query($conn,$aa);
               while($cc=mysqli_fetch_assoc($bb)) 
               {
               
				 ?>

				<div class="col-lg-3 col-md-6 col-sm-12">
					<div class="blog-inner" style="height: 500px;">
						<div class="blog-img">
							<img class="img-fluid" src="images/<?php echo $cc['image']; ?>" alt="" style="width: 100%; height: 200px;">
						</div>
						<div class="item-meta">
							<span class="dti"><?php echo $cc['datee']; ?></span>
						</div>
						<h2><?php echo $cc['title']; ?></h2>
						<p><?php echo $cc['content']; ?></p>
						<a class="new-btn-d br-2" href="#">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					</div>
				</div>


			  <?php  }  ?>


			</div>


			<hr>

		

			</div>

	</div>




<?php include 'footer.php';?>