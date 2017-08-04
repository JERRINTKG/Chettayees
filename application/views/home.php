<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Official chettayees clan</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Animated Swatch Book with CSS3 and jQuery" />
        <meta name="keywords" content="swatch book, css3, jquery, animated, rotation, transition, folding fan" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="assets/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/style2.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="assets/js/modernizr.custom.79639.js"></script> 
		<!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    </head>
    <body>
        <div class="container">
		
		
			
			<header>
			
				<h1><span>Chettayees</span>          </h1>
				<h2>Official chettayees clan</h2>
				
				
				
				<div class="support-note"><!-- let's check browser support with modernizr -->
					<!--span class="no-cssanimations">CSS animations are not supported in your browser</span-->
					<span class="no-csstransforms">CSS transforms are not supported in your browser</span>
					<!--span class="no-csstransforms3d">CSS 3D transforms are not supported in your browser</span-->
					<span class="no-csstransitions">CSS transitions are not supported in your browser</span>
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			
			<section class="main">
			
				<div id="sb-container" class="sb-container">
				
					<div>
						<span class="sb-icon icon-cog"></span>
						<h4><span>All Settings</span></h4>
					</div>
					<div>
						<span class="sb-icon icon-flight"></span>
						<h4><span>User Modes</span></h4>
					</div>	
					<div>
						<span class="sb-icon icon-eye"></span>
						<h4><span>Browse All</span></h4>
					</div>	
					<div>
						<span class="sb-icon icon-install"></span>
						<h4><span>Install App</span></h4>
					</div>	
					<div>
						<span class="sb-icon icon-bag"></span>
						<h4><span>Productivity</span></h4>
					</div>	
					<div>
						<span class="sb-icon icon-globe"></span>
						<h4><span>All Options</span></h4>
					</div>	
					<div>
						<span class="sb-icon icon-picture"></span>
						<h4><span>User Images</span></h4>											
					</div>	
					<div>
						<img src="assets/img/jerr.png" >
						<h4><span>Jerrin Thomas</span></h4>											
					</div>	
					<div>
						<img src="assets/img/jik.png" >
						<h4><span>Jikku Jose</span></h4>Most Powerful player in the clan											
					</div>	
					<div>
						<img src="assets/img/sum.png" >
						<h4><span>Sumin Varghese</span></h4>											
					</div>
					<div>
						<img src="assets/img/jeb.png" >
						<h4><span>Jebin Thomas</span></h4>											
					</div>
					<div>
						<h4><span>Clashers Profile</span></h4>
						<span class="sb-toggle">Click to open/close</span>
						  <h5> <span>&nbsp CHETTAYEES  </span></h5>											
					</div>
					
					
				</div><!-- sb-container -->
				
			</section>
			
        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.swatchbook.js"></script>
		<script type="text/javascript">
			$(function() {
			
				$( '#sb-container' ).swatchbook( {
					// number of degrees that is between each item
					angleInc : -10,
					// amount in degrees for the opened item's next sibling
					proximity : -45,
					neighbor : -4,
					// index of the element that when clicked, triggers the open/close function
					// by default there is no such element
					closeIdx : 11
				} );
			
			});
		</script>
    </body>
</html>