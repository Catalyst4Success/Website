<?php
$page = $_SERVER['REQUEST_URI'];
?>
<body <?php if ($page == '/index.php' || $page == '/'){ echo 'class="pull_top"';} ?>>
    <div id="wrapper">
        <div class="navbar navbar-inverse <?php if($page == '/index.php' || $page == '/'){ echo 'transparent navbar-fixed-top'; } else { echo 'navbar-static-top'; } ?>">
            <div class="navbar-inner" >
<div class="row-fluid">
         <div class="span7 offset1">      
          
                    <a style="padding: 0px; padding-left:25px;" class="brand" href="index.php">
                        <img src="assets/img/logo.png" alt="logo" style="height: 45px;"/>
                        <big>Catalyst for Success</big>
                    </a>
                    <!--<div class="nav-collapse">-->
                        <ul style="padding-left: 10px; padding-top: 0px;"  class="nav">
                                <li class="dropdown hidden-desktop visible-tablet visible-phone" >
                                <a href="#" class="dropdown-toggle    <?php if($page == '/goal.php' || $page == '/videos.php' || $page == '/members.php' || $page == '/board.php' || $page == '/pressrelease.php') echo 'active';?>  " data-toggle="dropdown"><i class="icon-question-sign icon-white"></i> <big> ABOUT</big></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/goal.php">Our Goal</a></li>
                                    <!--        <li><a href="/curriculum.php">Curriculum</a></li>-->
                                    <li><a href="/videos.php">Videos</a></li>
                                    <li><a href="/pressrelease.php">Press Releases</a></li>
                                    <!--                    <li><a href="/faq.php">FAQ</a></li>-->
                                </ul>
                                </li>

                                <li class="dropdown hidden-phone hidden-tablet">
                                <a href="/goal.php"   <?php if($page == '/goal.php' || $page == '/videos.php' || $page == '/members.php' || $page == '/board.php' || $page == '/pressrelease.php') echo "class='active'";?> ><i class="icon-question-sign icon-white"></i><big> ABOUT</big></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/goal.php">Our Goal</a></li>
                                    <!--        <li><a href="/curriculum.php">Curriculum</a></li>-->
                                    <li><a href="/videos.php">Videos</a></li>
                                    <li><a href="/pressrelease.php">Press Releases</a></li>
                                    <!--                    <li><a href="/faq.php">FAQ</a></li>-->
                                </ul>
                                </li>


                                <li><a href="/members.php" <?php if($page == '/members.php') echo "class='active'";?>  ><i class="icon-user icon-white"></i><big> OUR TEAM</big></a></li>
                                <li><a href="/board.php"  <?php if($page == '/board.php') echo "class='active'";?> ><i class="icon-globe icon-white"></i><big> ADVISORY BOARD</big></a></li>

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
                                <a href="/signup.php" class="dropdown-toggle    <?php if($page == '/signup.php') echo 'active';?>"><i class="icon-envelope icon-white"></i> <big> CONTACT US</big></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/signup.php">FAQ:</a></li>
                                    <li><a href="/signup.php#admin">Administrators</a></li>
                                    <li><a href="/signup.php#sponsors">Sponsors</a></li>
                                    <li><a href="/signup.php#members">Prospective members</a></li>
                                </ul>
                                </li>

                                <li class="dropdown visible-phone visible-tablet hidden-desktop">
                                <a href="#" class="dropdown-toggle   <?php if($page == '/signup.php') echo "active";?>  " data-toggle="dropdown" <?php if ($page == '/signup.php'){ echo 'class="active"'; } ?>><i class="icon-envelope icon-white"></i> <big> CONTACT US</big></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/signup.php">FAQ:</a></li>
                                    <li><a href="/signup.php#admin">Administrators</a></li>
                                    <li><a href="/signup.php#sponsors">Sponsors</a></li>
                                    <li><a href="/signup.php#members">Prospective members</a></li>
                                </ul>
                                </li>


                                <!--<li <?php if ($page == '/accolades.php'){ echo 'class="active"'; } ?>><a href="accolades.php"><i class="icon-envelope"></i> <big>ACCOLADES</big></a></li>-->
                                <li><a href="donate.php"  <?php if($page == '/donate.php') echo "class='active'";?>  ><i class="icon-gift icon-white"></i> <big> DONATE</big></a></li>
                            </ul>
                            <!--</div>/.nav-collapse -->
          </div>
            <div class="span3" style="height:40px; margin-left:0;">  		
                <div class="row-fluid" style="height:40px;">
                <div class="span6">
<center><h4 id="students" style="margin:0; color:#CD6889;">17,000</h4><h5 style="color:rgb(170,170,170);">STUDENTS REACHED TODAY</h5></center>
                </div>
                <!--<div class="span1" style="height:50px;">
                   <div style="height: 50px; width: 2px; background-color: rgb(0,0,0);"></div>
                </div>-->
                <div class="span4" >
                   <center><h4 id="hours" style="margin:0; color:#2B60DE;">50</h4><h5 style="color:rgb(170,170,170);" >HOURS PERFORMED</h5></center>
                </div>
             </div>
</div>
</div>
		    </div>
      
            </div>
            <div id='content'>
