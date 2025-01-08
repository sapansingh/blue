<?php


include "config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-adsense-account" content="ca-pub-9994499269501525">
    <meta name="google-site-verification" content="djL9yadqQSbZ7Un35MF4Y8yu6ffgTAZibRJelmEj0KE" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="<?php echo $linkr;?>/lightspeed.css"  rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"  rel="stylesheet">
  <link href="<?php echo $linkr;?>/style.css"  rel="stylesheet">
  
</head>
<body class="index home feed-view" id="mainContent" style="transform: none;">
<script type="text/javascript">
//<![CDATA[
(localStorage.getItem('mode')) === 'darkmode' ? document.querySelector('#mainContent').classList.add('dark'): document.querySelector('#mainContent').classList.remove('dark')
//]]>
 </script>
<div class="admin-area" style="display:none">
<div class="admin-section section" id="admin" name="Theme Options (Admin Panel)">
<div class="widget LinkList" data-version="2" id="LinkList27">

          <script type="text/javascript">
          //<![CDATA[
          

              var fixedSidebar = true;
            

              var fixedMenu = true;
            

              var showMoreText = "Show More";
            

          //]]>
          </script>
        
</div></div>
</div>
<!-- Outer Wrapper -->
<div id="outer-wrapper" style="transform: none;">

<!-- menu -->
<?php
include("topmenu.php");
?>



<!-- ticker bar -->

<?php
include("tickerbar.php");
?>






<div class="clearfix"></div>
<!-- Content Wrapper -->
<div id="center-container" style="transform: none;">
<div class="container outer-container" style="transform: none;">
<?php
include("about.php");
?>

<!-- side bar -->

<?php include("sidebar.php"); ?>

</div>
</div>
</div>






</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" type="text/javascript"></script>
<!-- Template LocalHost Plugins -->
<?php
include("alljavascript.php");
?>

<?php include("mobile_menu.php"); ?>
<!-- Blogger Default Widget Scripts -->

</body>

    </html>


