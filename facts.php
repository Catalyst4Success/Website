<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
		<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
			<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
				<?php include ("includes/header.php"); ?>
				<!--[if lt IE 7]>
				<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
				<![endif]-->
				<?php include("includes/navbar.php"); ?>
        <div class="span12">
            <h1>Previous Facts of the Day</h1>
            <hr>
            <p> <?php
  $old_facts_file = 'assets/files/oldfacts.txt';
    echo file_get_contents($old_facts_file);
?></p>
        </div>
							<?php include("includes/footer.php"); ?>
				<script type="text/javascript" charset="utf-8">
                               </script>
</html>