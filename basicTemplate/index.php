<html>
	<head>
		<title>Project</title>
		<link rel="stylesheet" type="text/css" href="stylesheet1.css">
		<link rel="stylesheet" type="text/css" href="camera1/css/camera.css">
	
	<script src="jquery-1.10.1.js" type="text/javascript"></script>
	<script src="camera1/scripts/camera.js" type="text/javascript"></script>
	<script src="camera1/scripts/jquery.min.js" type="text/javascript"></script>
	<script src="camera1/scripts/camera.min.js" type="text/javascript"></script>
	<script src="camera1/scripts/jquery.easing.1.3.js" type="text/javascript"></script>
	
	
	<script>
		jQuery(function(){
			
			jQuery('#camera_wrap_1').camera({
				thumbnails: true
			});

			
		});
	</script>
	<style>
	#back_to_camera {
			clear: both;
			display: block;
			height: 80px;
			line-height: 40px;
			padding: 20px;
		}
		.fluid_container {
			margin: 0 auto;
			height:400px;
			width:50%;
			}
	</style>
	</head>
	<body >
		
		<div id='top'><p style= "text-align:right;color:grey;margin-right:30px">Login</p></div>
		
		<div id='header'>
			<h1 style="text-align : right;position : relative;top : 20px;margin-right : 10px">Tourism Development Corporation</h1>
			<h4 style="text-align : right;position : relative;top : 5px;margin-right : 10px">Tamil Nadu 620-015</h4>
		</div>
		
		<div id='menu'>	
			<ul id="menubar">
				<li><a>Home</a></li>
				<li><a>Tourism Department</a>
					<ul>
						<li><a>Data Entry</a></li>
						<li><a>Analysis</a></li>
					</ul>
				</li>
				<li><a>Tourist</a>
					<ul>
						<li><a>New Tourist</a></li>
						<li><a>Regular Tourist</a></li>
					</ul>
				</li>
				<li><a>Places</a></li>
				<li><a>Tours</a></li>
				<li><a>New Offers</a></li>
				<li><a>Most Popular</a></li>
			</ul>
		</div>
		
		
		<div id='image'>
			<div class="fluid_container">
    	<p>Pagination circles with the height relative to the width</p>
        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            <div data-thumb="camera1/images/slides/thumbs/bridge.jpg" data-src="camera1/images/slides/bridge.jpg">
                <div class="camera_caption fadeFromBottom">
                    Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
                </div>
            </div>
            <div data-thumb="camera1/images/slides/thumbs/leaf.jpg" data-src="camera1/images/slides/leaf.jpg">
                <div class="camera_caption fadeFromBottom">
                    It uses a light version of jQuery mobile, <em>navigate the slides by swiping with your fingers</em>
                </div>
            </div>
            <div data-thumb="camera1/images/slides/thumbs/sea.jpg" data-src="camera1/images/slides/sea.jpg">
                <div class="camera_caption fadeFromBottom">
                    Camera slideshow provides many options <em>to customize your project</em> as more as possible
                </div>
            </div>
            
            <div data-thumb="camera1/images/slides/thumbs/tree.jpg" data-src="camera1/images/slides/tree.jpg">
                <div class="camera_caption fadeFromBottom">
                    Different color skins and layouts available, <em>fullscreen ready too</em>
                </div>
            </div>
        </div><!-- #camera_wrap_1 -->

    	    </div><!-- .fluid_container -->
		</div>
		<div id='footer'><h2>About Us :</h2> 
			<h3><p>This is a site developed for the tourism development. Like, now a days tourism is becoming a big source of business in each state.
			This site not only focuses on tourism developement of tourism but also helps the tourist to guide them. Here, u can make ur account as tourist
			and find the relative information about a particular place in Tamil Nadu.</h3>
		</div>
	</body>
</html>
<?php
?>