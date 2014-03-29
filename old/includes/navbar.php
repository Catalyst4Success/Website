
<body>
	<div id="wrapper">
		<div class="navbar navbar-fixed-top" style="min-height: 45px; height: 40px; width:100%;">
   <div class="navbar-inner" style="min-height: 45px; height:40px; width:100%; max-width:100%;">
				<div class="container" style="min-height: 45px; height: 40px;">
					<a style="padding-top: 0px;" class="brand" href="index.php">
						<img src="assets/img/logo.png" alt="logo" style="height: 45px;"/>
						Catalyst for Success
					</a>
<!--					<div class="nav-collapse">-->
                                                <ul style="padding-left: 10px; padding-top: 0px;"  class="nav">
							<?php
							$page = $_SERVER['REQUEST_URI'];
							?>
						<!--	<li <?php if ($page == '/index.php' or $page == NULL){ echo 'class="active"'; } ?>><a href="index.php"><i class="icon-home"></i >Home</a></li>
                -->
            <li class="dropdown hidden-desktop visible-tablet visible-phone" >
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-question-sign"></i> About</a>
                <ul class="dropdown-menu">
                    <li><a href="/goal.php">Our Goal</a></li>
                    <li><a href="/members.php">Members</a></li>
                    <li><a href="/board.php">Advisory Board</a></li>
            <!--        <li><a href="/curriculum.php">Curriculum</a></li>-->
                    <li><a href="/videos.php">Videos</a></li>
                    <li><a href="/pressrelease.php">Press Releases</a></li>
<!--                    <li><a href="/faq.php">FAQ</a></li>-->
                </ul>
            </li>

            <li class="dropdown hidden-phone hidden-tablet">
							<a href="/goal.php" ><i class="icon-question-sign"></i> About</a>
                <ul class="dropdown-menu">
                    <li><a href="/goal.php">Our Goal</a></li>
                    <li><a href="/members.php">Members</a></li>
                    <li><a href="/board.php">Advisory Board</a></li>
            <!--        <li><a href="/curriculum.php">Curriculum</a></li>-->
                    <li><a href="/videos.php">Videos</a></li>
                    <li><a href="/pressrelease.php">Press Releases</a></li>
<!--                    <li><a href="/faq.php">FAQ</a></li>-->
                </ul>
            </li>


            <li><a href="/members.php"><i class="icon-user"></i>Members</a></li>
            <li><a href="/board.php"><i class="icon-globe"></i>Advisory Board</a></li>

<!--

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" <?php if ($page == '/chapters.php'){ echo 'class="active"'; } ?>><i class="icon-file"></i> Chapters</a>
                <ul class="dropdown-menu">
                    <li><a href="http://dn.catalyst4success.org">Del Norte</a></li>
                    <li><a href="http://wv.catalyst4success.org">Westview</a></li>
                    <li><a href="http://rb.catalyst4success.org">Rancho Bernardo</a></li>
                </ul>
            </li>
-->
            <li class="dropdown hidden-phone hidden-tablet">
              <a href="/signup.php" class="dropdown-toggle" <?php if ($page == '/signup.php'){ echo 'class="active"'; } ?>><i class="icon-envelope"></i> Contact Us</a>
                <ul class="dropdown-menu">
                    <li><a href="/signup.php">FAQ:</a></li>
                    <li><a href="/signup.php#admin">Administrators</a></li>
                    <li><a href="/signup.php#sponsors">Sponsors</a></li>
                    <li><a href="/signup.php#members">Prospective members</a></li>
                </ul>
            </li>

    <li class="dropdown visible-phone visible-tablet hidden-desktop">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" <?php if ($page == '/signup.php'){ echo 'class="active"'; } ?>><i class="icon-envelope"></i> Contact Us</a>
                <ul class="dropdown-menu">
                    <li><a href="/signup.php">FAQ:</a></li>
                    <li><a href="/signup.php#admin">Administrators</a></li>
                    <li><a href="/signup.php#sponsors">Sponsors</a></li>
                    <li><a href="/signup.php#members">Prospective members</a></li>
                </ul>
            </li>


				    <!--<li <?php if ($page == '/accolades.php'){ echo 'class="active"'; } ?>><a href="accolades.php"><i class="icon-envelope"></i> Accolades</a></li>-->
              <li><a href="donate.php"><i class="icon-gift"></i> Donate</a></li>
					 	</ul>
					<!--</div>/.nav-collapse -->
				</div>
			</div>
		</div>
<div id='content'>
