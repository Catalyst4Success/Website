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
					<ul id="mainnav" class="nav nav-tabs">
						<li class="active"><a href="#balloon" data-toggle="tab">Exploding Balloon</a></li>
						<li><a href="#flag" data-toggle="tab">American Flag</a></li>
						<li><a href="#BvG" data-toggle="tab">Black vs Gold</a></li>
						<li><a href="#CO2" data-toggle="tab">CO2 Staircase</a></li>
						<li><a href="#combustion" data-toggle="tab">Combustion Reaction</a></li>
					</ul>
					<br>
					<div class="tab-content">
						<div class="tab-pane active" id="balloon"><center>
							<div class="video-container">
								<iframe src="http://www.youtube.com/embed/9dkvP6MhdcQ?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
							</div></center>
						</div>
						<div class="tab-pane" id="flag"><center>
							<div class="video-container">
								<iframe src="http://www.youtube.com/embed/ryGMWYSvTVg?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
							</div></center>
						</div>
						<div class="tab-pane" id="BvG"><center>
							<div class="video-container">
								<iframe src="http://www.youtube.com/embed/vzeL6Ruvlq0?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
							</div></center>
						</div>
						<div class="tab-pane" id="CO2"><center>
							<div class="video-container">
								<iframe src="http://www.youtube.com/embed/l7PpHhnCO-I?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
							</div></center>
						</div>
						<div class="tab-pane" id="combustion"><center>
							<div class="video-container">
								<iframe src="http://www.youtube.com/embed/hQWyFAR8yXI?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
							</div></center>
						</div>
					</div> <!--End all tab content-->
				</div>
                </div>
				<?php include ("includes/footer.php"); ?>
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

</html>

