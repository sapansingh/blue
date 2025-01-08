
<?php
$contentid=$_GET['i'];
$title=$_GET['t'];
include "config.php";
$sql="SELECT bp.id,bp.blog_title,bp.blog_likes,bp.blog_auth,bp.blog_post,bp.image,bp.reg_date,bp.hit_count,ct.category_name FROM `blog_post` bp JOIN `category` ct ON ct.id=bp.category_id JOIN users us ON bp.blog_user_id=us.id WHERE bp.id='$contentid'";
$resultd=mysqli_query($conn,$sql);
if(mysqli_num_rows($resultd)>0){
$row=mysqli_fetch_assoc($resultd);
$title=$row["blog_title"];
$reg_date=$row["reg_date"];
$blog_auth=$row["blog_auth"];
$blog=$row["blog_post"];
$reg_date=$row["reg_date"];
$image=$row["image"];
$category_name=$row["category_name"];
$hit_count=$row["hit_count"];
$hitcount=$hit_count+1;
$srkl="update blog_post set hit_count='$hitcount' where id='$contentid'";
$lister=$linkr."/contents"."/".$contentid."/".$title;
mysqli_query($conn,$srkl);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $title;?></title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-adsense-account" content="ca-pub-9994499269501525">
    <meta name="google-site-verification" content="djL9yadqQSbZ7Un35MF4Y8yu6ffgTAZibRJelmEj0KE" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Descriptive, <?php echo $title;?>">
  <link href="<?php echo $linkr;?>/lightspeed.css"  rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"  rel="stylesheet">
  <link href="<?php echo $linkr;?>/style.css"  rel="stylesheet">
      <link rel="canonical" href="<?php echo $lister;?>">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N9B582ZV');</script>
<!-- End Google Tag Manager -->
  
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-56VHR9EP8Z"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-56VHR9EP8Z');
</script>

</head>
<body class="index home feed-view" id="mainContent" style="transform: none;">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N9B582ZV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
include("feedview.php");
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
<?php include("footer.php"); ?>
</body>

    </html>


