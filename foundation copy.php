<?php
include "config.php";
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <script type="text/javascript" src="dist/ResizeSensor.js"></script>
        <script type="text/javascript" src="dist/theia-sticky-sidebar.js"></script>
        <script type="text/javascript" src="js/test.js"></script>
        <link href="<?php echo $linkr;?>/lightspeed.css"  rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"  rel="stylesheet">
        <script type="text/javascript">
//<![CDATA[
(localStorage.getItem('mode')) === 'darkmode' ? document.querySelector('#mainContent').classList.add('dark'): document.querySelector('#mainContent').classList.remove('dark')
//]]>
 </script>
     
        <script type="text/javascript">
          //<![CDATA[
          

              var fixedSidebar = true;
            

              var fixedMenu = true;
            

              var showMoreText = "Show More";
            

          //]]>
          </script>
    </head>
    <body class="index home feed-view" id="mainContent" style="transform: none;">
    <?php
include("topmenu.php");
?>
<?php
include("tickerbar.php");
?>

<?php
include("mainbar.php");
?>

        <section>
            <div class="row">
            
                
                <div class="small-6 columns">
                    <div style="height: 1000px;width: 1000px;">
                    <?php include("maincenter.php"); ?>
                    <?php include("sidebar.php"); ?>
                    </div>
                </div>
                
            
                </div>
            </div>
        </section>

        <footer>
        <?php include("footer.php"); ?>

        </footer>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" type="text/javascript"></script>
<!-- Template LocalHost Plugins -->
<?php
include("alljavascript.php");
?>
        <script>        
            $(document).ready(function() {
                $('section .columns').theiaStickySidebar();
            });
        </script>
        
<?php include("mobile_menu.php"); ?>
<!-- Blogger Default Widget Scripts -->

    </body>
</html>
