
<body>
	<div id="wrapper">
		<div class="navbar navbar-fixed-top" style="min-height: 45px; height: 40px; width:100%;">
   <div class="navbar-inner" style="min-height: 45px; height:40px; width:100%; max-width:100%;">
				<div class="container" style="min-height: 45px; height: 40px;">
					<a style="padding-top: 0px;" class="brand" href="index.php">
						<img src="assets/img/logo.png" alt="logo" style="height: 45px;"/>
   Catalyst for Success: RBHS Chapter
					</a>
<!--					<div class="nav-collapse">-->
                                                <ul style="padding-left: 10px; padding-top: 0px;"  class="nav">
							<?php
							$page = $_SERVER['REQUEST_URI'];
							?>
							<li <?php if ($page == '/index.php' or $page == NULL){ echo 'class="active"'; } ?>><a href="index.php"><i class="icon-home"></i > Home</a></li>
							<li><a href="http://catalyst4success.org"><i class="icon-exclamation-sign"></i> Organization</a></li>
							<li <?php if ($page == '/members.php'){ echo 'class="active"'; } ?>><a href="members.php"><i class="icon-user"></i> Members</a></li>
                                                        <li <?php if ($page == '/advisors.php'){ echo 'class="active"'; } ?>><a href="advisors.php"><i class="icon-briefcase"></i> Advisors</a></li>
							<li <?php if ($page == '/contact.php'){ echo 'class="active"'; } ?>><a href="calendar.php"><i class="icon-calendar"></i> Contact Us</a></li>
						</ul>
							
					<a style="padding-top: 0px;" class="brand">
                                                 <img src="assets/img/rblogo.jpg" style="height:45px;"/>
                                        </a>
				 </div>
			</div>
		</div>
		<div id="content">
