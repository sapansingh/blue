<?php


$contentid=$_GET['pl'];
include "config.php";

$sql="SELECT * FROM `policy` WHERE title='$contentid'";

$resultd=mysqli_query($conn,$sql);
if(mysqli_num_rows($resultd)>0){
$row=mysqli_fetch_assoc($resultd);

$title=$row["title"];
$phead=$row["phead"];



}
?>
<main id="feed-view" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">


        <div class="main section" id="main" name="Main Recent Posts">
            <div class="widget Blog" data-version="2" id="Blog1">
                <div class="blog-posts hfeed container item-post-wrap">
                    <article class="blog-post hentry item-post" itemscope="itemscope"
                        itemtype="https://schema.org/CreativeWork">
                        <div class="post-inner-area">
                        


                        <!-- breadcome  heading -->
                            <nav id="breadcrumb"><a href="/">Home</a><em
                                    class="delimiter"></em><a class="b-label"
                                    href="/"><?php echo $category_name;?></a><em
                                    class="delimiter"></em><span class="current"><?php echo $title;?></span>
                            </nav>


                            <!-- title  heading -->
                            <h1 class="entry-title">
                            <?php echo $title;?>
                            </h1>

                            
                            <div class="post-body entry-content">
                             




                                <p>&nbsp;</p>
                            

<!-- content post main-->

<?php echo $phead;?>                                     
                            </div>
                         
                            <span class="post-author vcard">
                            </span>
                       








<!-- 
                            <ul class="xx0o-postnav">
                                <li class="post-next">
                                    <a rel="next">
                                        <div class="xx0o-postnav-inner post-xxqo-menuaflex-open"><span>Newer</span>
                                            <p>
                                                Operation system currently use
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li class="post-prev">
                                    <a class="prev-post-link" href="https://labwas.blogspot.com/2024/05/2022.html"
                                        id="Blog1_blog-pager-older-link" rel="previous">
                                        <div class="xx0o-postnav-inner"><span>Older</span>
                                            <p>
                                                Godhra train burning incident गोधरा काण्ड 2022
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul> -->
                        </div>

                        <div class="post-footer">
                            <div class="related-light type-related open-iki">
                                
                                <!-- <div class="widget-title">
                                    <h3 class="title">You May Like</h3>
                                    <a class="simple-viewmore"
                                        href="https://labwas.blogspot.com/search/label/Technology">
                                        Show more</a>
                                </div> -->



<!--Suggestion tool-->

                                <div class="xx0xx-wraprelated">
                                    <div class="LightSpeedWorks">
                                    
<!--                                     
                                    <div class="LightSpeedSet">
                                            <div class="LightSpeedSet-thumb"><a class="post-filter-link image-nos"
                                                    href="https://labwas.blogspot.com/2024/05/operation-system-currently-use.html"><img
                                                        class="snip-thumbnail lazy-img"
                                                        alt="Operation system currently use"
                                                        src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi-NTjicjPwHybOYhcPb6raFW59KulWhcFUk3b410uwR6ez5_Vh6LKUqORycfTkElU7rfnaGI1dJsmniOJwgh_EdNKLK9vQSr5sYj7OGSVJ3GFu6m6Td4wLU4f0R6r447uuaGF02egQ28-0Q9jxWdZzhOKCYbuUrYqho6MV6af1zPBoifoG8_y8WlP81dc/w74-h74-p-k-no-nu/download.jpg"></a>
                                            </div>
                                            <div class="LightSpeedSet-box">
                                                <h2 class="entry-title"><a
                                                        href="https://labwas.blogspot.com/2024/05/operation-system-currently-use.html">Operation
                                                        system currently use</a></h2>
                                                <div class="post-snip"><span class="post-date">May 29, 2024</span></div>
                                            </div>
                                        </div> -->



                                        <?php
                                        include("config.php");
                    $sql3="SELECT bp.id,bp.blog_title,bp.reg_date,blog_post,ct.category_name,bp.image FROM `blog_post` bp JOIN `category` ct ON ct.id=bp.category_id ORDER BY reg_date DESC LIMIT 3";

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

echo "<div class='LightSpeedSet'>
        <div class='LightSpeedSet-thumb'><a class='post-filter-link image-nos'
                href='$link'><img
                    class='snip-thumbnail lazy-img'
                    alt='Operation system currently use'
                    src='".$weber."'></a>
        </div>
        <div class='LightSpeedSet-box'>
            <h2 class='entry-title'><a
                    href='".$blog_title."'>".$blog_title."</a></h2>
            <div class='post-snip'><span class='post-date'>May 29, 2024</span></div>
        </div>
    </div>";

$it=$it+1;
   
    
    }

    
    }


?>


                                    





                                    </div>
                                </div>
<!--Suggestion tool-->


                                
                            </div>
                        </div>
                    </article>
                 
                </div>

         
      


        </div>


        <div class="clearfix"></div>
    </div>
</main>