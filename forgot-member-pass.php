<?php 
	require('dbconnect.php');
	// if (isset($_POST['Change'])) {
	// 	require('db-forgot-admin-pass.php');
	// }
?>

<!DOCTYPE html>
<html>
<!-- Mirrored from static.pixum.co/up-real-estate-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2019 05:43:21 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no"/>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon/1.ico"/>
	<title>Home page</title>
	<link rel="stylesheet" type="text/css" media="screen" href="css/lib/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="fonts/font-awesome-4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="vendors/jquery-ui-1.11.4/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="vendors/jcarousel/css/jquery.jcarousel.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
</head>
<body>
	<!-- include header -->

	

	<!-- banner -->

<div class="home-banner style-4">
    <div class="container">
      <div class="banner-content">
        <div class="banner-message">
          <div class="banner-entry">
            <span class="entry-title">Features</span>
            <span class="entry-message">Some text will be here</span>
          </div>
        </div>
      </div>
    </div>
</div>

    <!-- Container -->

    	<?php
    		if (isset($rr)) {
    			echo $rr;
    		}
    	?>
    	<div class="container">
			<div class="office-block">
				<div class="empty-space"></div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12">
						<div class="office-contact-form">
							<span class="heading">Forgot Password</span>
							<div class="contact-form">
								<form method="post" action="db-forgot-member-pass.php" autocomplete="autocomplete">
									<input type="text" class="form-control" placeholder="Society_Code *"  name="sc" required="required"><br>
									<input type="text" class="form-control" placeholder="User_Id *"  name="ui" required="required"><br>
									<input type="number" class="form-control" placeholder="Contact No. *"  name="cnt" required="required"><br>
									<input type="password" class="form-control" placeholder="New Password *"  name="np" required="required"><br>
									<input type="password" class="form-control" placeholder="Confirm New Password *"  name="cnp" required="required"><br>
									<span style="color: red;">
										<?php
											if (isset($error)) {
												echo $error;
											}
										?>
									</span>
									<button class="send-btn" name="Change">Change</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="empty-space"></div>
			</div>
		</div>
	<br>
	<br>
		<!-- Shows some of users-->

  		<?php 
    		require('some-users.php');
  		?>
		
		<!-- include footer -->

		<?php
			require('footer.php');
		?>

		<script type="text/javascript" src="js/libs/jquery.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="vendors/jquery-ui-1.11.4/jquery-ui.min.js"></script>
		<script type="text/javascript" src="vendors/languageswitcher/languageswitcher.js"></script>
		<script type="text/javascript" src="vendors/jcarousel/js/jquery.jcarousel.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	</body>
	
<!-- Mirrored from static.pixum.co/up-real-estate-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2019 05:44:00 GMT -->
</html>