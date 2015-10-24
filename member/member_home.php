<?php
session_start();



?>

<!DOCTYPE html>
<html lang="" >
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Instarent</title>

		<!-- Bootstrap CSS -->
		<link href="../dashboard/plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="../dashboard/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">		
		<link href="../dashboard/css/style_v1.css" rel="stylesheet">

		
		
				
		<script src="../hide_modal.js"></script>
		<!-- Bootstrap JavaScript -->
				
		<script src="../dashboard/plugins/jquery/jquery.min.js"></script>
		<script src="../dashboard/plugins/jquery-ui/jquery-ui.min.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		
		<script src="../dashboard/plugins/justified-gallery/jquery.justifiedGallery.min.js"></script>

		
		<script src = "../Angular/js/angular.min.js"></script>
    	<script src ="app.js"></script>
		


	</head>

	<body >


<!-- <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<a class="navbar-brand" href="//localhost">InstaRent</a>
	<ul class="nav navbar-nav navbar-right">
		<li>
			<a href="#" data-toggle ="modal">Host a Space</a>
		</li>
		<li>
			<a href="#" data-toggle ="modal">Messages &nbsp <img src ="message.png" class="img-rounded">  </a>

		</li>
		<li>
			<a href="#" data-toggle ="modal"> <img src="aaron-ramsey.jpg" alt="" class="img-circle"> </a>
		</li>

		<li> &nbsp &nbsp &nbsp</li>
	</ul>
</nav>
 -->

<div id="screensaver">
	<canvas id="canvas"></canvas>
	<i class="fa fa-lock" id="screen_unlock"></i>
</div>
<div id="modalbox">
	<div class="devoops-modal">
		<div class="devoops-modal-header">
			<div class="modal-header-name">
				<span>Basic table</span>
			</div>
			<div class="box-icons">
				<a class="close-link">
					<i class="fa fa-times"></i>
				</a>
			</div>
		</div>
		<div class="devoops-modal-inner">
		</div>
		<div class="devoops-modal-bottom">
		</div>
	</div>
</div>
<header class="navbar">
	<div class="container-fluid expanded-panel">
		<div class="row">
			<div id="logo" class="col-xs-12 col-sm-2">
				<a href="#">InstaRent</a>
			</div>
			<div id="top-panel" class="col-xs-12 col-sm-10">
				<div class="row">
					<div class="col-xs-8 col-sm-4">
						
					</div>
					<div class="col-xs-4 col-sm-8 top-panel-right">
						
						
						<ul class="nav navbar-nav pull-right panel-menu">
							
							<li class="hidden-xs">
								<a href="#" class="modal-link">
									<div class="host"> Host  
									<i class="fa fa-building"></i>
									<span class="badge">7</span>
									</div>
								</a>
							</li>
							<li>
								&nbsp&nbsp&nbsp&nbsp
							</li>




							<li class="hidden-xs">
								<a href="#" class="modal-link">
									<i class="fa fa-bell"></i>
									<span class="badge">7</span>
								</a>
							</li>



							
							<li class="hidden-xs">
								<a href="../ajax/page_messages.html" class="ajax-link">
									<i class="fa fa-envelope"></i>
									<span class="badge">7</span>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle account" data-toggle="dropdown">
									<div class="avatar">
										<img src="../img/avatar.jpg" class="img-circle" alt="avatar" />
									</div>
									<i class="fa fa-angle-down pull-right"></i>
									<div class="user-mini pull-right" >
										<span class="welcome">Welcome,</span>
										<span><?php echo $_SESSION["fullname"]  ?></span>
									</div>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a href="#">
											<i class="fa fa-user"></i>
											<span>Profile</span>
										</a>
									</li>
									<li>
										<a href="../ajax/page_messages.html" class="ajax-link">
											<i class="fa fa-envelope"></i>
											<span>Messages</span>
										</a>
									</li>
									
									<li>
										<a href="#">
											<i class="fa fa-cog"></i>
											<span>Settings</span>
										</a>
									</li>
									<li>
										<a href="logout.php">
											<i class="fa fa-power-off"></i>
											<span>Logout</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>


<div id="image-content" class="img-responsive">
</div> 	 
<div class="image-navbar">
	<form class="navbar-form pull-right">
		<input type="text" style="width:200px;">
		<button type="submit" class="btn btn-default" style="height:28px;line-height:10px">Submit</button>
	</form>
	
</div>






</body>
</html>