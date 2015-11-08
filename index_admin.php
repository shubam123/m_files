
<?php
session_start();
if(isset($_SESSION['param1']))
{
	
}	
else
{
	header("location:login.php");
	$_SESSION['param1']=nil;
}
?>
<!DOCTYPE html>
<html>
<head>
	 <?php 
	  		include "../include/link.php";
	  ?>
	<title>Admin Panel | SRM mHealth</title>

	<!-- css files -->
	  
	<!-- js files to be included -->


	<!-- inline js scripting -->
	</head>
<body>
	<header class="navbar navbar-inverse hero" role="banner" style="background:indigo;">
  		<div class="container nothing">
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
        				<a href="#" class="home">Home</a>
        			</li>
        			<li class="dropdown">
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          					Subscriber <b class="caret"></b>
          				</a>
          				<ul class="dropdown-menu">
							<li><a class="addSubscriber" href="#">Add Subscriber</a></li>
							<li><a class="search_sub" href="#">View Subscriber</a></li>
				        </ul>
        			</li>
        			<li class="dropdown">
          				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          					Test<b class="caret"></b>
          				</a>
          				<ul class="dropdown-menu">
							<li><a href="#" class="sputum">Sputum Test</a></li>
							<li><a href="#" class="xray">Xray Test</a></li>
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
          					<?php if(isset($_SESSION['user'])) echo $_SESSION['username']; else echo "No User"; ?><b class="caret"></b>
          				</a>
          				<ul class="dropdown-menu">
							<li><a href="#dropdown1" data-toggle="tab">Profile</a></li>
							<li><a href="#dropdown3" data-toggle="tab">Settings</a></li>
      						<li class="divider"></li>
    						<li><a class="logout" href="#" data-toggle="tab"><i class="fa fa-fw fa-power-off"></i>Log Out</a></li>


				        </ul>
        			</li>
      			</ul>
    		</nav>
  		</div>
	</header>

	<div class='responseHolder'>
										
	</div>

</body>
</html>