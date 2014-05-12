<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>ratneck.com</title>

      <!-- Bootstrap -->
      <link href="./bootstrap-3.1.1/css/bootstrap.min.css" rel="stylesheet">
      <link href="./css/style.css" rel="stylesheet">

      <link href="./fancybox/source/jquery.fancybox.css" rel="stylesheet">

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
                    
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>

                    <div class="row">
                    <!--
                        <div class="col-xs-6">
                            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="20" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
                        </div>
                        <div class="col-xs-6">
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://ratneck.com">Tweet</a>
                        </div>
                    -->
                    </div>
                    
                    <!--
                      <div id="xs-fb-button" class="fb-like visible-xs" data-href="https://developers.facebook.com/docs/plugins/" data-width="20" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
                    <div id="md-fb-button" class="fb-like hidden-xs" data-href="https://developers.facebook.com/docs/plugins/" data-width="20" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
                    -->
                    
                    <!--
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://ratneck.com">Tweet</a>
                    -->

                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="news">News</a></li>
                      <li><a href="music">Music</a></li>
                      <li><a href="video">Video</a></li>
                      <!--<li><a href="dates">Dates</a></li>-->
                      <!--<li><a href="band">Band</a></li>-->
                      </ul>


                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
</nav>


            @yield('content')
            
            
            <div class="row" id="footer">
                Footer
            </div>

        </div><!-- Container -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="./bootstrap-3.1.1/js/bootstrap.min.js"></script>
        <script src="./fancybox/source/jquery.fancybox.js"></script>
        <script src="./js/script.js"></script>
        
    </body>
</html>
