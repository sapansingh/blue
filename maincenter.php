<div class="main section" id="main" name="Main Recent Posts"><div class="widget Blog" data-version="2" id="Blog1">
<div class="blog-posts hfeed post-filter-wrap">
<div class="main-title"><h3 class="title"><span>Read more</span></h3><a class="simple-viewmore" href="/search">Show more</a></div>
<div class="grid-posts">



<?php
                    $sql3="SELECT bp.id,bp.blog_title,bp.reg_date,blog_post,ct.category_name,bp.image,blog_post FROM `blog_post` bp JOIN `category` ct ON ct.id=bp.category_id ORDER BY reg_date DESC LIMIT 10";

$result=mysqli_query($conn,$sql3);
if(mysqli_num_rows($result)>0){

    while($row=mysqli_fetch_assoc($result)){
       
$id=$row["id"];
$blog_title=$row["blog_title"];
$blog_post=$row["blog_post"];
$images=$row["image"];
$category_name=$row["category_name"];
$reg_date=$row["reg_date"];
$weber=$web.$images;
$link=$linkr."/contents"."/".$id."/".$blog_title;
$string = substr($blog_post,0,100);

echo "<article class='blog-post hentry post-filter post-0' itemscope='itemscope' itemtype='https://schema.org/CreativeWork'>
<div class='post-filter-inside-wrap'>
<div class='post-filter-image' itemprop='image' itemscope='itemscope' itemtype='https://schema.org/ImageObject'>
<a class='post-filter-link image-nos' href='".$link."'>
<img alt='".$blog_title."' class='snip-thumbnail lazy-img' itemprop='url' src='".$weber."'>
</a>
</div>
<div class='LightSpeedSet-box'>
<span class='label-news-flex post-flex'>
".$category_name."
</span>
<h2 class='entry-title vcard' itemprop='mainEntityOfPage' itemtype='https://schema.org/mainEntityOfPage'>
<a href='".$link."' rel='bookmark' title='".$blog_title."'><span itemprop='name'>".$blog_title."</span></a>
</h2>
<div class='post-snip' itemprop='author' itemscope='itemscope' itemtype='https://schema.org/Person'>
<p class='post-snippet'>".$string."…</p>
<span class='post-date published' datetime='".$reg_date."'>".$reg_date."</span>
</div>
</div>
</div>
</article>";

$it=$it+1;
   
    }
    }
?>
</div>
</div>
<div class="blog-pager-ok container" id="blog-pager-ok">
<a class="load-more" href="<?php echo $linkr."/all/1";?>" title="Older Posts">
Load More
</a>

</div>


</div>



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
                href='$link/contents/'><img
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