<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head> 
		<?php get_header(); ?>
		<?php get_footer(); ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="style.css">
        <!-- build:js scripts/vendor/modernizr.js --> 
        <script src="<%=themeRoot%>/bower_components/modernizr/modernizr.js"></script>
        <!-- endbuild -->
    </head>
    <body>
		<header class="masthead">
			<div class="container">
					<ul class="nav nav-pills pull-right">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					<h3 class="muted">Eru Penkman</h3>
			</div>
		</header>
		<div class="main-content">
			<div class="container">
				<div class="jumbotron">
					<h1>Front End Software Engineer</h1>
					<div class="lead">
						Reinvent, "architect networks robust clicks-and-mortar world-class cutting-edge synergistic intuitive networking functionalities," niches e-enable user-contributed disintermediate benchmark
					</div>
				</div>
				<div id="myCarousel" class="carousel slide">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<!-- Carousel items -->
					<div class="carousel-inner">
						<div class="active item">
							<img src="http://www.placekitten.com/960/500"/>
							<div class="carousel-caption">
								<h4>Thumbnail label</h4>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							</div>
						</div>
						<div class="item">
							<img src="http://www.placekitten.com/960/499"/>
							<div class="carousel-caption">
								<h4>Thumbnail label</h4>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							</div>
						</div>
						<div class="item">
							<img src="http://www.placekitten.com/960/501"/>
							<div class="carousel-caption">
								<h4>Thumbnail label</h4>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							</div>
						</div>
					</div>
					<!-- Carousel nav -->
					<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
				</div>
				
				<hr/>
				
				<ul id="portfoio-masonry" class="thumbnails">
					<li  class="span4">
						<a href="#" class="thumbnail">
							<img src="http://www.placekitten.com/201/100" />
							<div class="caption">
								<h3>Thumbnail label</h3>
								<p>Front-end vortals e-business intuitive bricks-and-clicks reintermediate proactive. Extend utilize killer design web-readiness cross-media e-business drive user-centric e-markets web-readiness widgets</p>
							</div>
						</a>
					</li>
					<li class="span8">
						<a href="#" class="thumbnail">
							<img src="http://www.placekitten.com/302/99"/>
							<div class="caption">
								<h3>Thumbnail label</h3>
								<p>Compelling integrated, models 24/365 cultivate dot-com collaborative communities harness cross-media bleeding-edge Cluetrain blogging</p>
							</div>
						</a>
					</li>
					<li class="span4">
						<a href="#" class="thumbnail">
							<img src="http://www.placekitten.com/205/100"/>
							<div class="caption">
								<h3>Thumbnail label</h3>
								<p>acilitate mesh synthesize; efficient architectures aggregate enable semantic e-commerce facilitate innovative repurpose</p>
							</div>
						</a>
					</li>
					<li class="span4">
						<a href="#" class="thumbnail">
							<img src="http://www.placekitten.com/400/200"/>
						</a>
					</li>
					<li class="span4">
						<a href="#" class="thumbnail">
							<img src="http://www.placekitten.com/599/301"/>
						</a>
					</li>
					<li class="span4">
						<a href="#" class="thumbnail">
							<img src="http://www.placekitten.com/203/100"/>
						</a>
					</li>
					<li class="span4">
						<a href="#" class="thumbnail">
							<img src="http://www.placekitten.com/600/299"/>
						</a>
					</li>
					<li class="span4">
						<a href="#" class="thumbnail">
							<img src="http://www.placekitten.com/201/100"/>
						</a>
					</li>
					<li class="span4">
						<a href="#" class="thumbnail">
							<img src="http://www.placekitten.com/600/300"/>
						</a>
					</li>
					<li class="span4">
						<a href="#" class="thumbnail">
							<img src="http://www.placekitten.com/200/100"/>
						</a>
					</li>
				</ul>
				
			</div>
		</div>
		<footer class="footer">
			<div class="container"> 
				© 2013 Eru Penkman
			</div>
		</footer>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>

        <!-- build:js scripts/vendor.js -->
        <script src="<%=themeRoot%>/bower_components/jquery/jquery.js"></script>
        <script src="<%=themeRoot%>/bower_components/underscore/underscore.js"></script>
        <script src="<%=themeRoot%>/bower_components/backbone/backbone.js"></script>
        <!-- endbuild -->

        <!-- build:js scripts/plugins.js -->
        <script src="<%=themeRoot%>/bower_components/sass-bootstrap/js/bootstrap-affix.js"></script>
        <script src="<%=themeRoot%>/bower_components/sass-bootstrap/js/bootstrap-alert.js"></script>
        <script src="<%=themeRoot%>/bower_components/sass-bootstrap/js/bootstrap-dropdown.js"></script>
        <script src="<%=themeRoot%>/bower_components/sass-bootstrap/js/bootstrap-tooltip.js"></script>
        <script src="<%=themeRoot%>/bower_components/sass-bootstrap/js/bootstrap-modal.js"></script>
        <script src="<%=themeRoot%>/bower_components/sass-bootstrap/js/bootstrap-transition.js"></script>
        <script src="<%=themeRoot%>/bower_components/sass-bootstrap/js/bootstrap-button.js"></script>
        <script src="<%=themeRoot%>/bower_components/sass-bootstrap/js/bootstrap-popover.js"></script>
        <script src="<%=themeRoot%>/bower_components/sass-bootstrap/js/bootstrap-typeahead.js"></script>
        <script src="<%=themeRoot%>/bower_components/sass-bootstrap/js/bootstrap-carousel.js"></script>
        <script src="<%=themeRoot%>/bower_components/sass-bootstrap/js/bootstrap-scrollspy.js"></script>
        <script src="<%=themeRoot%>/bower_components/sass-bootstrap/js/bootstrap-collapse.js"></script>
        <script src="<%=themeRoot%>/bower_components/sass-bootstrap/js/bootstrap-tab.js"></script>
		
        <!-- endbuild -->
		
        <!-- build:js scripts/masonry.js -->
			<script src="<%=themeRoot%>/bower_components/eventEmitter/EventEmitter.js"></script>
			<script src="<%=themeRoot%>/bower_components/eventie/eventie.js"></script>
			<script src="<%=themeRoot%>/bower_components/doc-ready/doc-ready.js"></script>
			<script src="<%=themeRoot%>/bower_components/get-style-property/get-style-property.js"></script>
			<script src="<%=themeRoot%>/bower_components/get-size/get-size.js"></script>
			<script src="<%=themeRoot%>/bower_components/jquery-bridget/jquery.bridget.js"></script>
			<script src="<%=themeRoot%>/bower_components/matches-selector/matches-selector.js"></script>
			<script src="<%=themeRoot%>/bower_components/outlayer/item.js"></script>
			<script src="<%=themeRoot%>/bower_components/outlayer/outlayer.js"></script>
			
			<script src="<%=themeRoot%>/bower_components/imagesloaded/imagesloaded.js"></script>

			<script src="<%=themeRoot%>/bower_components/masonry/masonry.js"></script>
        <!-- endbuild -->

        <!-- build:js({.tmp,app}) scripts/main.js -->
			<script src="<%=themeRoot%>/scripts/models/post.js"></script>
			<script src="<%=themeRoot%>/scripts/collections/post.js"></script>
			<script src="<%=themeRoot%>/scripts/routes/post.js"></script>
			<script src="<%=themeRoot%>/scripts/views/portfolio.js"></script>
			<script src="<%=themeRoot%>/scripts/templates/portfolio.jst"></script>
			<script src="<%=themeRoot%>/scripts/main.js"></script>
        <!-- endbuild -->
</body>
</html>
