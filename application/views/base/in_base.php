<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title><?php echo $title;?></title>
      <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
      <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->



      <style type="text/css">
          #comments:hover {
              background-color: #FFFFC0;
              cursor: text;
          }
      </style>

      <script>
      var f = 'bootstrap3';
      </script>




      <!-- CSS-JS-->
    <?php foreach($styles as $style){
        echo $style."\n";}?>



  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">BTC</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-left">
            <?php
                foreach($menu as $key => $item){
                    echo '<li><a href="'.$item.'">'.$key.'</a></li>';
                }
            ?>

          </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><?= HTML::anchor('', $user); ?></li>
                 <li><?= HTML::anchor('user/logout', 'Logout'); ?></li>

                      </ul>
          <p></p>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><?php echo $title;?></h1>
            <?php echo $content;?>
        </div>
      </div>
    </div>
    <?php if (Kohana::$environment !== Kohana::PRODUCTION) : ?>
        <div class="footer">
            <?php //echo View::factory('profiler/stats'); ?>
        </div>
    <?php endif ?>

  </body>
</html>
