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

    <link href="<?php echo $linkr;?>/lightspeed.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link href="<?php echo $linkr;?>/style.css" rel="stylesheet">
    <style>


    </style>
</head>

<body class="index home feed-view" id="mainContent" style="transform: none;">
    <script type="text/javascript">
    //<![CDATA[
    (localStorage.getItem('mode')) === 'darkmode' ? document.querySelector('#mainContent').classList.add('dark'):
        document.querySelector('#mainContent').classList.remove('dark')
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

            </div>
        </div>
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
                <!-- Main Wrapper -->



                <main id="feed-view"
                    style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">



                    <div class="theiaStickySidebar"
                        style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                        <div class="main section" id="main" name="Main Recent Posts">
                            <div class="widget Blog" data-version="2" id="Blog1">
                                <div class="errorPage">
                                    <h3>404</h3>
                                    <h4>There's nothing here!</h4>
                                    <p>Sorry, the page you were looking for in this blog does not exist.</p>
                                    <a class="homepage" href="<?php echo $linkr;?>"><i class="fa fa-home"></i>
                                        Home</a>
                                </div>
                                <div class="blog-posts hfeed container">
                                </div>

                            </div>
                        
                        </div>
                       
                        <div class="clearfix"></div>
                    </div>
                </main>

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