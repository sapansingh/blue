
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
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
  <link href="<?php echo $linkr;?>/lightspeed.css"  rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"  rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="dist/ResizeSensor.js"></script>
        <script type="text/javascript" src="dist/theia-sticky-sidebar.js"></script>
        <script type="text/javascript" src="js/test.js"></script>
		<script type="text/javascript">
//<![CDATA[
(localStorage.getItem('mode')) === 'darkmode' ? document.querySelector('#mainContent').classList.add('dark'): document.querySelector('#mainContent').classList.remove('dark')
//]]>
 </script>
		<style>
			.content {
				width: 75%;
				float: left;
				position: relative;
			}

			.leftSidebar {
				width: 25%;
				float: left;
				padding: 0 30px 0 0;
				position: relative;
			}

			.rightSidebar {
				width: 25%;
				float: right;
				padding: 0 0 0 30px;
				position: relative;
			}
			
			button {
                margin: 0 0 30px 0;
			}
		</style>

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


