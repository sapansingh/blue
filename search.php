<?php


include "config.php";

?>
<!DOCTYPE html>
<html>
	<head>
		<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
		<link href="<?php echo $linkr;?>/lightspeed.css"  rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"  rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="<?php echo $linkr;?>/dist/ResizeSensor.js"></script>
        <script type="text/javascript" src="<?php echo $linkr;?>/dist/theia-sticky-sidebar.js"></script>
        <script type="text/javascript" src="<?php echo $linkr;?>/js/test.js"></script>
		<script type="text/javascript">
//<![CDATA[
(localStorage.getItem('mode')) === 'darkmode' ? document.querySelector('#mainContent').classList.add('dark'): document.querySelector('#mainContent').classList.remove('dark')
//]]>
 </script>
		<style>
    /* Default Layout: Three columns (content, left sidebar, right sidebar) */
    .content {
        width: 70%;
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

    /* Mobile Layout: Stack everything in one column */
    @media screen and (max-width: 768px) {
        .content, .leftSidebar, .rightSidebar {
            width: 100%;
            float: none;
            padding: 0;
            margin-bottom: 30px;
        }
        
        .leftSidebar {
            padding-right: 0;
        }

        .rightSidebar {
            padding-left: 0;
        }

        /* Optionally, reduce margin on buttons for mobile devices */
        button {
            margin: 0 0 20px 0;
        }
    }
</style>
	</head>
	<body id="mainContent">
	<?php
include("topmenu.php");
?>



<!-- ticker bar -->

<?php
include("tickerbar.php");
?>

	
		<div class="wrapper wrapperThreeColumns container">
			<div class="content box">
				<div class="theiaStickySidebar">
                <?php include("readdata.php"); ?>

				</div>
			</div>
			
			<div class="rightSidebar">
				<div class="theiaStickySidebar">
					<div class="box">
					<?php include("sidebar.php"); ?>

					
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer">
		<?php include("footer.php"); ?>


		</div>
		
		<script>
			$(document).ready(function() {
				$('.leftSidebar, .content, .rightSidebar')
					.theiaStickySidebar({
						additionalMarginTop: 30
					});
			});
		</script>
<!-- Template LocalHost Plugins -->
<?php
include("alljavascript.php");
?>

<?php include("mobile_menu.php"); ?>
<!-- Blogger Default Widget Scripts -->


	</body>
</html>