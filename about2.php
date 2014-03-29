<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
		<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
			<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
				<?php include("includes/header.php"); ?>
				<!--[if lt IE 7]>
				<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
				<![endif]-->
				<?php include("includes/navbar.php"); ?>
				<div class="container">
        <?php include ("includes/subnavbar.php"); ?>
				</div>
				<?php include ("includes/footer.php"); ?>
<!--
				<script type="text/javascript" charset="utf-8">
					$(document).ready(function(){
							if(window.location.hash){
							var hash = document.location.hash;
							var prefix = "tab_";
							if (hash) {
							$('#mainnav a[href='+hash.replace(prefix,"")+']').tab('show');
							}
							window.scrollTo(0,0);
							// Change hash for page-reload
							$('#mainnav a').on('shown', function (e) {
								window.location.hash = e.target.hash.replace("#", "#" + prefix);
								});

							}
							});
$(window).bind('hashchange',function(){
		if(window.location.hash){
		var hash = document.location.hash;
		var prefix = "tab_";
		if (hash) {
		$('#mainnav a[href='+hash.replace(prefix,"")+']').tab('show');
		} 
		window.scrollTo(0,0);
		// Change hash for page-reload
		$('#mainnav a').on('shown', function (e) {
			window.location.hash = e.target.hash.replace("#", "#" + prefix);
			});
		}
		})
</script>
-->

</html>

