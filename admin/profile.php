<?php
	include("header.php");

	if(isset($_POST['edit'])){

		$name = $_POST['name'];
		$user_name = $_POST['u_name'];
		$email = $_POST['email'];
		$phone = $_POST['mob'];
		$address = $_POST['add'];

	// Logo upload section
		$img_new_name=$_POST['pre_logo'];
		$img_name=$_FILES['image']['name'];
		if($img_name!=""){
			$img_tmp=$_FILES['image']['tmp_name'];
			list($width, $height, $type, $attr) = getimagesize($_FILES['image']['tmp_name']);
			$store="../img/".$img_name;
			$img_new_name=$img_name;
			move_uploaded_file($img_tmp, $store);
		}

		$x = "UPDATE admin_login SET name='$name', user_name='$user_name', email='$email', contact='$phone', address='$address', image='$img_new_name' WHERE user_name='$_SESSION[admin_username]'";

		if($conn->query($x)){

			echo "<script>alert('Profile Updated Successfully');window.location.href='index.php';</script>";
		}
		else{
			echo $conn->error;
		}
	}
?>


	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>
</div>

<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="#">Home</a>
				</li>
               <li>
					<i class="ace-icon"></i>
					<a href="#">Setting</a>
				</li>

				
				<li class="active">Profile</li>
			</ul><!-- /.breadcrumb -->

			<div class="nav-search" id="nav-search">
				<form class="form-search">
					<span class="input-icon">
						<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
						<i class="ace-icon fa fa-search nav-search-icon"></i>
					</span>
				</form>
			</div><!-- /.nav-search -->
		</div>

		<div class="page-content">
			<div class="ace-settings-container" id="ace-settings-container">
				<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
					<i class="ace-icon fa fa-cog bigger-130"></i>
				</div>

				<div class="ace-settings-box clearfix" id="ace-settings-box">
					<div class="pull-left width-50">
						<div class="ace-settings-item">
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="no-skin" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
							<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
							<label class="lbl" for="ace-settings-add-container">
								Inside
								<b>.container</b>
							</label>
						</div>
					</div><!-- /.pull-left -->

					<div class="pull-left width-50">
						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
							<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
							<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
						</div>

						<div class="ace-settings-item">
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
							<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
						</div>
					</div><!-- /.pull-left -->
				</div><!-- /.ace-settings-box -->
			</div><!-- /.ace-settings-container -->

			<div class="page-header">
				<h1>
					Settings
					<small>
						<i class="ace-icon fa fa-angle-double-right"></i>
						Profile
					</small>
				</h1>
			</div><!-- /.page-header -->

		<?php
			$a = "SELECT * FROM admin_login WHERE user_name = '$_SESSION[admin_username]'";
			$rs = $conn->query($a);
			$rss = $rs->fetch_assoc();
		?>
		<?=$_SESSION['admin_username'];?>
		<script>
			var loadFile = function(event){
				var a = document.getElementById("output");
				a.src = URL.createObjectURL(event.target.files[0]);

			}
		</script>
			<div class="container">
				<form method="post" enctype="multipart/form-data">
					<input type="hidden" name="pre_logo" value="<?php echo $rss['image'];?>">
					<div class="row">
						<div class="form-group">
							<div class="col-md-3">
								<img src="../img/<?php echo $rss['image'];?>" alt="<?php echo $rss['image'];?>" style="height:30%;width:50%" id="output">
								<input type="file" onchange="loadFile(event)" name="image" class="btn btn-primary form-control">
							</div>

							<div class="col-md-8">
								<label class="label-control" for="u_name"><i class="fa fa-user-circle"></i>&nbsp; Name : &nbsp;</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input style="width:70%" type="text" name="name" value="<?php echo $rss['name'];?>">
							</div><br><br>

							<div class="col-md-8">
								<label class="label-control" for="u_name"><i class="fa fa-user-circle-o"></i>&nbsp; User Name : </label>&nbsp;
								<input style="width:70%" type="text" name="u_name" value="<?php echo $rss['user_name'];?>">
							</div><br><br>

							<div class="col-md-8">
								<label class="label-control" for="mob"><i class="fa fa-phone"></i>&nbsp; Contact No.: &nbsp;</label>
								<input style="width:70%" type="text" name="mob" value="<?php echo $rss['contact'];?>">
							</div><br><br>
							
							<div class="col-md-8">
								<label class="label-control" for="email"><i class="fa fa-envelope"></i>&nbsp; Email Id : &nbsp;</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input style="width:70%" type="email" name="email" value="<?php echo $rss['email'];?>">
							</div><br><br>

							<div class="col-md-8">
								<label class="label-control" for="add_2" style="margin-top:-10px"><i class="fa fa-address-book-o"></i>&nbsp; Address :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<textarea style="width:70%" type="text" name="add" value="<?php echo $rss['address']; ?>" row="3"><?php echo $rss['address']; ?></textarea>
							</div>
						</div>
					</div><br>
					
					<div class="row">
						<div class="form-group">
							<div class="col-md-offset-5">
								<div class="col-md-7" style="padding-top: 10px">
									<input type="submit" name="edit" class="btn btn-primary" value="Update">									
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>



<?php
	include("footer.php");
?>