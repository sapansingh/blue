<?php


include "config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aims-Doc.com</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <meta name="description" content="Newstazaat: Your Gateway to Fresh News and Cutting-Edge Technology Insights Welcome to Newstazaat, your premier destination for the latest news and in-depth technology insights. Our blog is dedicated to keeping you informed and ahead of the curve in today's fast-paced world. Here's what you can expect from Newstazaat">
  <link href="<?php echo $linkr;?>/lightspeed.css"  rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"  rel="stylesheet">
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <script type="text/javascript" src="dist/ResizeSensor.js"></script>
        <script type="text/javascript" src="dist/theia-sticky-sidebar.js"></script>
        <script type="text/javascript" src="js/test.js"></script>
      
  <!--<link href="<?php echo $linkr;?>/style.css"  rel="stylesheet">-->
<!-- Google Tag Manager -->

<!-- End Google Tag Manager -->
<!-- Google tag (gtag.js) -->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-56VHR9EP8Z');
</script>

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

<?php
include("mainbar.php");
?>


<div class="clearfix"></div>
<!-- Content Wrapper -->
<div id="center-container" style="transform: none;">
<div class="container outer-container" style="transform: none;">
<!-- Main Wrapper -->
<?php include("maincenter.php"); ?>

<!-- side bar -->

<?php include("sidebar.php"); ?>

</div>
</div>

</div>
<?php include("footer.php"); ?>





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


