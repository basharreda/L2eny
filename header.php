
   <!-- Start Navabar-->
    	<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
     <div class="container">
        <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
			<a class="navbar-brand page-scroll" href="index.php"> <i class="fa fa-paper-plane-o"></i> LA2ENY</a> </div>
			
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			<ul class="nav navbar-nav">
				<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
								<li><a class="page-scroll" href="index.php">Home</a></li>
								<li><a class="page-scroll" href="store.php">STORE</a></li>
								<li><a class="page-scroll" href="lost.php">LOST ITEMS</a></li>
								<li><a class="page-scroll" href="found.php">FOUND ITEMS</a></li>
								<li>
                                    <?php  if (isset($_SESSION['UserName'])) : ?>
                                    <a class="page-scroll" href="create.php">CREATE ITEM</a>
                                    <?php endif ?>
                                </li>
								
								<li><a class="page-scroll" href="contact.php">CONTACT</a></li>
								
								<li><a class="page-scroll" href="aboutus.php">ABOUT US</a></li>
                                    <?php  if (!isset($_SESSION['UserName'])) : ?>
									<li><a class="page-scroll" href="login.php">Login</a></li>
                                    <?php endif ?>
                                </li>
								<li>
                                    <?php  if (!isset($_SESSION['UserName'])) : ?>
									<li><a class="page-scroll" href="reg.php" class="button special">Sign Up</a></li>
                                    <?php endif ?>
                                </li>
								<li>

                                <li>
                                    <?php  if (isset($_SESSION['UserName'])) : ?>
                                    <a class="page-scroll" href="profile.php">PROFILE</a>
                                    <?php endif ?>
                                </li>
                                <li>
                                    <?php  if (isset($_SESSION['UserName'])) : ?>
                                    <a class="page-scroll" href="index.php?logout='1'">LOGOUT</a>
                                    <?php endif ?>
                                </li>			
                            </ul>
			</div>
				<!-- /.navbar-collapse --> 
			</div>
		<!-- /.container --> 
		</nav>		
              


