<!DOCTYPE html>
<html lang="en">
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





     <script>
     var f = 'bootstrap3';
     </script>




     <!-- CSS-JS-->
   <?php foreach($styles as $style){
       echo $style."\n";}?>



 </head>

  <body>

    <div class="container">
      <?php echo $content; ?>
         </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->