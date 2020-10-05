<?php
$page_id='change_password';
include('header.php');

if(isset($_POST['change_submit']))
{
	$newp=$_POST['newPass'];
	$oldp=md5($_POST['oldPass']);
	
	$cnfmP=$_POST['confirmPass'];
	
	//checking old password 
	$sql="select * from admin_login where user_name='$_SESSION[admin_username]' and password='$oldp'";
				
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		if(strcmp($newp,$cnfmP)==0){
			$newp=md5($_POST['newPass']);
			$cnfmP=md5($_POST['confirmPass']);
			$sql="UPDATE admin_login SET  password ='$newp' WHERE  user_name='$_SESSION[admin_username]'";
			
			if($conn->query($sql)===true)
			{
				echo "<script>alert('Password Changed!');window.location.href='logout.php';</script>";
			}
			else
			{
				echo "<script>alert('something went wrong!!');</script>";
			}
		}else{
			echo "<script>alert('Your new password did not match to your confirm password');</script>";
		}
	}else{
		echo "<script>alert('Your old password is not correct');</script>";
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
						<!--ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							
							<li class="active">Wallet</li>
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
								<a href="member tools/">Home</a>
								<small>
									<a href="wallet"><i class="ace-icon fa fa-angle-double-right"></i>
									Setting</a>
								</small>
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Profile
								</small>
								
							</h1>
						</div><!-- /.page-header -->
						<form id="contact-form" method="post" role="form">
                            							 
							<div class="row">
								
							<label class="col-sm-2 col-sm-2 control-label">Old Password: </label>
                              <div class="col-sm-4">
							  <input type="password" class="form-control" name="oldPass" required />
                                 
                                  <label id="pwd_error" style="color:#FF4242;"></label>
                              </div>
							</div>
							<div class="row">
								
								<label class="col-sm-2 col-sm-2 control-label">New Password</label>
                              <div class="col-sm-4">
                              <input type="password" class="form-control" name="newPass" required />
							  <label id="pwd_error" style="color:#FF4242;"></label>
                              </div>
							  <label class="col-sm-2 col-sm-2 control-label">Confirm Password</label>
                              <div class="col-sm-4">
                              <input type="password" class="form-control" name="confirmPass" required />
							  <label id="pwd_error" style="color:#FF4242;"></label>
                              </div>
							</div>
							
							<div class="row">
								
								<div class="col-md-12">
                                    <input type="submit" id="update_submit" class="btn btn-success btn-send" name="change_submit" value="Update">
                                </div>
							</div>
												
                          
				
				
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<?php
include('footer.php');
?>