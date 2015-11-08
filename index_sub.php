<?php
session_start();
if(isset($_SESSION['param1']))
{
	
}	
else
{
	header("location:login/index.php");
	$_SESSION['param1']=nil;
}
?>
 <?php 
	  		include "../include/link.php";
	  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel | SRM mHealth</title>

	<!-- css files -->
	
	<!-- js files to be included -->


	<!-- inline js scripting -->
	</head>
<body>
		<header class="navbar navbar-inverse hero" role="banner" style="background:indigo">
  		<div class="container nothing" >
    		<div class="navbar-header">
		      	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		      	</button>
      			<a href="index.html" class="navbar-brand">mPower</a>
    		</div>
    		<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      			<ul class="nav navbar-nav navbar-right">
      				<li class="dropdown">
        				<a href="#">Home</a>
        			</li>
        			
        			<li class="dropdown">
          				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          					Test Report<b class="caret"></b>
          				</a>
          				<ul class="dropdown-menu">
							<li><a href="#">Sputum Test</a></li>
							<li><a href="#">Xray Test</a></li>
				        </ul>
        			</li>

        			<li class="dropdown">
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          					Trackers<b class="caret"></b>
          				</a>
          				<ul class="dropdown-menu">
							<li><a href="#">Monthly</a></li>
							<li><a href="#">Weekly</a></li>
							<li><a href="#">Summary</a></li>
				        </ul>
        			</li>

        			<li class="dropdown">
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          					Contact Us<b class="caret"></b>
          				</a>
          				<ul class="dropdown-menu">
							<li><a href="#">Dot Providers</a></li>
							<li><a href="#">Doctors</a></li>
				        </ul>
        			</li>
        			<li class="dropdown">
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          						<?php if(isset($_SESSION['username'])) 
          								echo $_SESSION['username']; 
          							  else 
          						  		echo "No User"; 
          						 ?>
          						<b class="caret"></b>
          				</a>
          				<ul class="dropdown-menu">
							<li><a class="Viewpatient" data-toggle="tab">Profile</a></li>
							<li><a href="#dropdown3" data-toggle="tab">Settings</a></li>
      						<li class="divider"></li>
    						<li><a class="logout" href="#" data-toggle="tab"><i class="fa fa-fw fa-power-off"></i>Log Out</a></li>


				        </ul>
        			</li>
      			</ul>
    		</nav>
  		</div>
	</header>

	<div id='wrapper'>
		<div id='container' >
			<div id='admin_panel_wrapper'>
				<div id='admin_panel_container'>
					
					<div id='admin_panel_contentholder'>

							<div id='_subscriber' class='contentHolder'>
									<div class='contentSideMenu'>
										<div>
											<ul>
											</ul>
										</div>
									</div>
									<div class='responseHolder'>
										
									</div>
							</div>
							
					</div>

				</div>
			</div>
		</div>
	</div>
</body>
</html>