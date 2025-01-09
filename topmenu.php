<?php

$getsocial="SELECT * FROM `social`";

$result=mysqli_query($conn,$getsocial);

if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){

      
        $facebook=$row['facebook'];

       
        $twitter=$row['twitter'];
        $whatsapp=$row['whatsapp'];
        $instagram=$row['instagram'];
        $youtube=$row['youtube'];
    }
}



?>
<!-- Top Menu Wrapper -->
<div class="top-bar ">
    <div class="container">
        <div class="row">
            <div id="top-menu">
                <div class="menu-top section" id="menu-top" name="Top Menu">
                    <div class="widget LinkList" data-version="2" id="LinkList3">
                        <div class="widget-content">
                            <ul class="nav1">
                                <li>
                                    <a href="<?php echo $linkr."/home/about-us"?>">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $linkr."/home/Contact-us"?>">
                                        Contact us
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $linkr."/home/Privacy_Policy"?>">
                                        Privacy Policy
                                    </a>
                                </li>
                                <li>
                             <a href="<?php echo $linkr."/home/Disclaimer"?>">
                                        Disclaimer
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="top-social">
                <div class="social-sec section" id="social-sec" name="Top Social icons">
                    <div class="widget LinkList" data-version="2" id="LinkList4">
                        <div class="widget-content">
                            <ul class="social">
                                <li><a class="facebook" href="<?php echo $facebook;?>"
                                        rel="noopener noreferrer" target="_blank"></a></li>
                                <li><a class="whatsapp" href="<?php echo $whatsapp;?>" rel="noopener noreferrer" target="_blank"></a></li>
                                <li><a class="telegram" href="<?php echo $telegram;?>" rel="noopener noreferrer" target="_blank"></a></li>
                                <li><a class="twitter" href="<?php echo $twitter;?>"
                                        rel="noopener noreferrer" target="_blank"></a></li>
                                <li><a class="instagram" href="<?php echo $instagram;?>"
                                rel="noopener noreferrer" target="_blank"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Header Wrapper -->
<header id="Menu-light" itemscope="itemscope" class="" itemtype="https://schema.org/WPHeader" role="banner">
    <div class="pro-light-wrap">
        <div class="pro-light show">
            <div class="container">
                <div class="SuperLogo-wrap">
                    <div class="row-1 ">
                        <div class="header-section">
                            <div class="header-left">
                                <div class="SuperLogo section" id="SuperLogo" name="Main Logo">
                                    <div class="widget Header" data-version="2" id="Header1">
                                        <a class="show-SpeedL-container" href="javascript:;"></a>
                                        <a class="SuperLogo-img" href="https://newstazaat.com/">
                                            <img alt="Labwas" data-height="150" data-width="150"
                                                src="https://blogger.googleusercontent.com/img/a/AVvXsEgln6Pf0X6O60R5vPIYJYkI-er9_rcPtPmeSwJnuIZ6EHMuryRcLSMS9nUDzY7sdtkcbby_8hiQ9pcEpq-sEjJl0W7Ol094wD3bzxy6MEp2oKc5wkg3K6Bn_ZGvNwabsmMIdEE4nRYQ3-v-7a_YCvBGEi_ePaGypO-7EnEUx58KQdwYwkWmersmP3JgbD8=s150">
                                        </a>
                                    </div>
                                </div>
                                <div class="xx0xx-promenu section" id="xx0xx-promenu" name="Main Menu">
                                    <div class="widget LinkList show-menu" data-version="2" id="LinkList56">
                                        <ul id="xxqo-menuaflex-list" role="menubar">
                                            <li itemprop="name"><a href="/" itemprop="url">Home</a></li>
                                            <li itemprop="name" class="sub-tab mega-menu"><a href="/search"
                                                    itemprop="url">Mega Menu</a>
                                                <div class="LightSpeed-open">
                                                    <div class="LightSpeedMys">


                                                    <?php
                                        include("config.php");
                    $sql3="SELECT bp.id,bp.blog_title,bp.reg_date,blog_post,ct.category_name,bp.image FROM `blog_post` bp JOIN `category` ct ON ct.id=bp.category_id ORDER BY reg_date DESC LIMIT 5";

$result=mysqli_query($conn,$sql3);
if(mysqli_num_rows($result)>0){
    $it=0;
    while($row=mysqli_fetch_assoc($result)){
       
$id=$row["id"];
$blog_title=$row["blog_title"];
$images=$row["image"];
$category_name=$row["category_name"];
$reg_date=$row["reg_date"];
$weber=$web.$images;
$link=$linkr."/contents"."/".$id."/".$blog_title;

echo "<div class='LightSpeedMy'>
     <div class='mega-menu-thumb'>
        <div class='post-filter-link image-nos'><a
            class='snip-thumbnail lazy-img background-layer'
            href='".$blog_title."'><img
                class='snip-thumbnail lazy-img'
                alt='".$blog_title."'
                src='".$weber."'></a>
    </div>
</div>
<div class='featured-meta'>
    <h2 class='entry-title'><a
            href='".$link."'>Operation
            system currently use</a></h2>
</div>
</div>";

$it=$it+1;
   
    
    }

    
    }


?>
                                              



                                              
                                              
                                          
                                             
                                                    </div>
                                                </div>
                                            </li>
                                            <li itemprop="name" class="sub-tab"><a href="#" itemprop="url">Features</a>
                                                <ul class="sub-menu m-sub">
                                                    <li itemprop="name"><a href="#" itemprop="url">Featured Posts</a>
                                                    </li>
                                                    <li itemprop="name" class="sub-tab"><a href="#" itemprop="url">Post
                                                            ShortCodes</a>
                                                        <ul class="sub-menu2 m-sub">
                                                            <li itemprop="name"><a
                                                                    href="/2020/01/the-difference-between-winning-and.html"
                                                                    itemprop="url">Left Sidebar</a></li>
                                                            <li itemprop="name"><a
                                                                    href="/2020/01/life-is-fragile-were-not-guaranteed.html"
                                                                    itemprop="url">Right Sidebar</a></li>
                                                            <li itemprop="name"><a
                                                                    href="/2020/01/i-will-prepare-and-some-day-my-chance.html"
                                                                    itemprop="url">Full Width</a></li>
                                                        </ul>
                                                    </li>
                                                    <li itemprop="name"><a href="/pikitemplates" itemprop="url">Error
                                                            Page</a></li>
                                                    <li itemprop="name"><a href="#" itemprop="url">Contact us</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="header-right">
                                <div class="search-wrap">
                                    <div class="mega-mode">
                                        <input class="dark-button dark-mode" id="dark" type="checkbox">
                                        <span class="dark-toggle"></span>
                                    </div>
                                    <a class="search-button" href="#"></a>
                                </div>
                            </div>
                            <div class="search-container-overlay">
                                <a class="search-container-close" href="#"></a>
                                <div class="search-container-wrapper">
                                    <div class="search-msg">Type Here to Get Search Results !</div>
                                    <form action="<?php echo $linkr; ?>/search" class="search-container" method="get" role="search">
                                        <input class="search-input" name="q" placeholder="Search Here..."
                                            spellcheck="false" type="text">
                                        <i class="fa fa-search">
                                            <input type="submit" value="">
                                        </i>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>