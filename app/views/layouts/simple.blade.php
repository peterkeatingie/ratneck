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
   
            @yield('content')

        </div><!-- Container -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="./bootstrap-3.1.1/js/bootstrap.min.js"></script>
        <script src="./fancybox/source/jquery.fancybox.js"></script>
        <script src="./js/script.js"></script>
        
    </body>
</html>
