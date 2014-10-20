<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ratneck.com</title>

		<!-- Bootstrap -->
		<link href="/bootstrap-3.1.1/css/bootstrap.min.css" rel="stylesheet">

		<!-- Blueimp gallery -->
		<link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">

		<!-- Site style -->
		<link href="/css/style.css" rel="stylesheet">
		
		<!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        
		<!-- Bootstrap -->
		<script src="/bootstrap-3.1.1/js/bootstrap.min.js"></script>
		
		<!-- Blueimp Gallery -->
		<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
				
		<!-- Site js -->
        <script src="/js/script.js"></script>
		  
	  
		<!-- Google Analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-46002278-1', 'ratneck.com');
		  ga('send', 'pageview');

		</script>
			
    </head>

    <body>

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=586572544731660";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <div class="container">
            
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    
                    <button type="button" id="nav-button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>

                    <div class="row">
                    
                        <div class="col-xs-3 col-md-5">
							<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
                        
							<!-- Like with names -->
							<!-- <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div> -->
						
						</div>
						
						<div class="col-xs-3 col-md-5">
							<a href="https://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                        
							<!-- Twitter with count -->
							<!--
							<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							-->
						</div>
                    
                    </div>
                    
                 
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="/news">News</a></li>
                      <li><a href="/music">Music</a></li>
                      <li><a href="/video">Video</a></li>
                      <li><a href="/gallery">Gallery</a></li>
                      <!--<li><a href="band">Band</a></li>-->
                      </ul>


                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
</nav>


            @yield('content')
            
            
            <div class="row" id="footer">
                <div class="col-md-12">
					<div class="panel panel-default" id="footer">
						<div class="panel-body">
						
						<div class="col-md-6">
								Copyright Rat Neck 2014<br />
								<a href="mailto:info@ratneck.com?Subject=ratneck.com" target="_top">info@ratneck.com</a>
							</div>
							
							<div class="col-md-6">
								<!-- Social -->
								
									<div class="col-xs-2 small-padding">
										<a href="https://www.facebook.com/ratneck" target="_blank"><img class="img-responsive social-icon" src="/images/social_icons/facebook_icon_colour_48.png" /></a>
									</div>
									<div class="col-xs-2 small-padding">
										<a href="https://www.twitter.com/ratneckband" target="_blank"><img class="img-responsive social-icon" src="/images/social_icons/twitter_icon_colour_48.png" /></a>
									</div>
									<div class="col-xs-2 small-padding">
										<a href="https://www.youtube.com/channel/UCgLO3QnqY36mum6uTqCcZUA" target="_blank"><img class="img-responsive social-icon" src="/images/social_icons/youtube_icon_colour_48.png" /></a>
									</div>
									<div class="col-xs-2 small-padding">
										<a href="http://ratneck.bandcamp.com/" target="_blank"><img class="img-responsive social-icon" src="/images/social_icons/bandcamp_icon_colour_48.png" /></a>
									</div>
									<div class="col-xs-2 small-padding">
										<a href="http://www.breakingtunes.com/ratneck" target="_blank"><img class="img-responsive social-icon" src="/images/social_icons/breakingtunes_icon_colour_48.png" /></a>
									</div>
									<div class="col-xs-2 small-padding">
										<a href="https://soundcloud.com/ratneck" target="_blank"><img class="img-responsive social-icon" src="/images/social_icons/soundcloud_icon_colour_48.png" /></a>
									</div>
									
							</div>
						</div>
					</div>
				</div>
            </div>

        </div><!-- Container -->

		
        
    </body>
</html>
