<?php
include("config.php");

$sql="SELECT bp.id,bp.blog_title,bp.reg_date,blog_post,ct.category_name,bp.image FROM `blog_post` bp JOIN `category` ct ON ct.id=bp.category_id ORDER BY reg_date DESC LIMIT 5";

$result=mysqli_query($conn,$sql);




?>
<div class="clearfix"></div>
<div class="mega-wrap">
    <div class="container">
        <div class="main-ads-pikihome no-items section" id="main-ads1" name="Ads Placement"></div>
        <div class="clearfix"></div>
        <div class="LoadsSpeedPro flex section" id="ft-post" name="Top Feature Section">
            <div class="widget PopularPosts" data-version="2" id="PopularPosts4">
                <div class="widget-content">
                    <div class="LightSpeed-holds">


                        <?php

if(mysqli_num_rows($result)>0){
    $it=0;
    $str="item".$it;
    while($row=mysqli_fetch_assoc($result)){
        $str="item".$it;
$id=$row["id"];
$blog_title=$row["blog_title"];
$images=$row["image"];
$reg_date=$row["reg_date"];
$category_name=$row["category_name"];

$weber=$web.$images;
$link=$linkr."/contents"."/".$id."/".$blog_title;


echo "<div class='LightSpeedArea ".$str."'>

<a class='post-filter-link background-layer image-nos image-nos' href='".$link."' title='".$blog_title."'>
<img alt='".$blog_title."' class='snip-thumbnail lazy-img' src='".$weber."'>
</a>
<div class='featured-meta'>
<span class='label-news-flex'>".$category_name."</span>
<h2 class='entry-title vcard'><a href='".$link."' rel='bookmark' title='".$blog_title."'>".$blog_title."</a></h2>
<div class='post-snip'><span class='post-date'><time class='published' datetime='".$reg_date."'>".$reg_date."</time></span></div>
</div>
</div>";

$it=$it+1;
    
    
    }

    
    }


?>






                    </div>
                </div>
            </div>
        </div>




        <!-- New be frsh update -->
        <div class="clearfix"></div>
        <div class="LightSpeedPro section" id="top-NewsPro-main-widget-2" name="Fresh Posts Section">
            <div class="widget HTML type-sgrid open-iki" data-version="2" id="HTML23">
                <div class="widget-title">
                    <h3 class="title">World Fresh Updates</h3><a class="simple-viewmore" href="/search">Show More</a>
                </div>
                <div class="widget-content">
                    <div class="LightSpeedWorks">


                    <?php
                    $sql3="SELECT bp.id,bp.blog_title,bp.reg_date,blog_post,ct.category_name,bp.image FROM `blog_post` bp JOIN `category` ct ON ct.id=bp.category_id ORDER BY reg_date DESC LIMIT 4";

$result=mysqli_query($conn,$sql3);
if(mysqli_num_rows($result)>0){

    while($row=mysqli_fetch_assoc($result)){
       
$id=$row["id"];
$blog_title=$row["blog_title"];
$images=$row["image"];
$reg_date=$row["reg_date"];
$weber=$web.$images;
$category_name=$row["category_name"];
$link=$linkr."/contents"."/".$id."/".$blog_title;


echo "    <div class='LightSpeedBot'>
                            <div class='LightSpeedSet-thumb'>
                                <a class='post-filter-link image-nos'
                                    href='".$link."'><img
                                        class='snip-thumbnail lazy-img' alt='".$blog_title."'
                                        src='".$weber."'></a>
                            </div>
                            <div class='LightSpeedSet-box'><span class='label-news-flex-anywhere'>".$category_name."</span>
                                <h2 class='entry-title'><a
                                        href='".$link."'>".$blog_title."</a></h2>
                                <div class='post-snip'><span class='post-date'>".$reg_date."</span></div>
                            </div>
                        </div>";

$it=$it+1;
   
    
    }

    
    }


?>


                    




                        
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>