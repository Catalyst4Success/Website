<!DOCTYPE html>
<!-- saved from url=(0030)http://bootswatch.com/default/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>Catalyst 4 Success</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="custom/custom-bootstrap.css" media="screen">
<link rel="stylesheet" href="files/styles.css" media="screen">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>
<body>
   <?php include("navbar.php") ?>
<br>
<center><h1 style="color: #A67CCF">Press Releases</h1></center>
<div class="container" style="width:55%">
<div class="col-md-10 col-md-offset-1">
<h3>10/1/13</h3><a href="press.php?id=11">UCSD Chancellor Emerita Marye Anne Fox Joins Catalyst Advisory Board</a>
<h3>9/13/13</h3><a href="press.php?id=10">Catalyst welcomes First County Official to Advisory Board</a>
<h3>9/7/13</h3><a href="press.php?id=9">New Year, New Experiments, New Chapters, No Stopping</a>
<h3>6/10/13</h3><a href="press.php?id=8">11,516: And We.re Just Getting Started</a>
<h3>4/19/13</h3><a href="press.php?id=7">ACS President Dr. Marinda Li Wu Joins Advisory Board</a>
<h3>4/12/13</h3><a href="press.php?id=6">Achievement and Expansion: A Week in Review</a>
<h3>3/23/13</h3><a href="press.php?id=5">Catalyst Welcomes New Advisory Board Members</a>
<h3>3/15/13</h3><a href="press.php?id=4">Catalyst is Recognized by PUSD Board of Education</a>
<h3>3/8/13</h3><a href="press.php?id=3">5 Weeks: 3000 Students</a>
<h3>2/22/13</h3><a href="press.php?id=2">1 Month: 1000 Students</a>
<h3>2/1/13</h3><a href="press.php?id=1">Catalyst for Success Has Its First Show</a>
        </div>
</div>
<div class="col-md-3">
<img>
</div>
<br>
   <?php include("footer.php") ?>
<script>

$(document).ready( function(){
        var welctop = $("#welcome").offset().top;
        var welcbottom = welctop + $("#welcome").height();
        $(window).scroll(function(){
            var top = $(window).scrollTop();
            var bottom = top + $(window).height();
            if(top > welcbottom || $(window).width() < 767){
            $("#navbar").prop('class', 'navbar navbar-default navbar-fixed-top');
            }
            else{
            $("#navbar").prop('class', 'navbar navbar-default');
            }
            });
        });
</script>
<script>
function goToByScroll(id){
    // Scroll
    $('html,body').animate({
scrollTop: $("#"+id).offset().top},
'slow');
    // Scroll
}

</script>

<script>
var width = $(window).width();
var hoverover;
$(document).ready( function(){

        navbarCollapseCheck();
        $(".hover-active-dropdown").hover(
            function() { $(this).attr("class", "dropdown hover-active-dropdown active")},
            function() { $(this).attr("class", "dropdown hover-active-dropdown")}
            );

        $(".hover-active").hover(
            function() { $(this).attr("class", "hover-active active")},
            function() { $(this).attr("class", "hover-active")}
            );
        });

function navbarCollapseCheck(){
    var width = $(window).width();
    if(width < 767){
        $(".dropdown-toggle").attr("data-toggle", "dropdown"); 
        $("#navbar").prop('class', 'navbar navbar-default navbar-fixed-top');
    }
    else{
        $(".dropdown-toggle").attr("data-toggle", " "); 
        $("#navbar").prop('class', 'navbar navbar-default');
    }
}


$(window).on('resize', function() {
        navbarCollapseCheck();
        });

</script>

</body></html>
