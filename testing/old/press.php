<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
		<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
			<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
				<?php include("includes/header.php"); ?>
				<!--[if lt IE 7]>
				<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
				<![endif]-->
	<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=114615118645359";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

				<?php include("includes/navbar.php"); ?>
				<div class="container" style="height:100%">
<?php
				if(isset($_GET['id'])){
				     include "pressreleases/release" . $_GET['id'] . ".html";
				}
				else{
				  include "pressreleases/release1.html";
				}
?>
            <div class="fb-comments" data-href="http://catalyst4success.org/" data-width="470" data-num-posts="10"></div>
				</div>
			<?php include("includes/footer.php"); ?>
<script>
$(document).ready(function(){
    changeCommentsUrl();
});
function getFullUrl(){
    return document.URL;
}
function changeCommentsUrl(){
    $(".fb-comments").attr('data-href',getFullUrl());
}
</script>
		</html>
