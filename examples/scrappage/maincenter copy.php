<main id="feed-view" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 3593px;">
<div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: absolute; transform: translateY(1833px); top: 0px; width: 750px;">
<div class="main section" id="main" name="Main Recent Posts">
<div class="widget Blog" data-version="2" id="Blog1">
<div class="blog-posts hfeed container post-filter-wrap">
<div class="main-title"><h3 class="title"><span>Read more</span></h3><a class="simple-viewmore" href="/search">Show more</a></div>
<div class="grid-posts">


<?php
                    $sql3="SELECT bp.id,bp.blog_title,bp.reg_date,blog_post,ct.category_name,bp.image,blog_post FROM `blog_post` bp JOIN `category` ct ON ct.id=bp.category_id ORDER BY reg_date DESC LIMIT 4";

$result=mysqli_query($conn,$sql3);
if(mysqli_num_rows($result)>0){
    $it=0;
    $pot="post-";
    while($row=mysqli_fetch_assoc($result)){
       $pot=$pot.$it;
$id=$row["id"];
$blog_title=$row["blog_title"];
$blog_post=$row["blog_post"];
$images=$row["image"];
$category_name=$row["category_name"];
$reg_date=$row["reg_date"];
$weber=$web.$images;
$link=$linkr."/contents"."/".$id."/".$blog_title;
$string = substr($blog_post,0,200);

echo "<article class='blog-post hentry post-filter ".$pot."' itemscope='itemscope' itemtype='https://schema.org/CreativeWork'>
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
<span class='post-date published' datetime='2024-05-29T23:53:00-07:00'>May 29, 2024</span>
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
<a class="load-more" href="https://labwas.blogspot.com/search?updated-max=2024-05-22T20:56:00-07:00&amp;max-results=20#PageNo=2" title="Older Posts">
Load More
</a>
</div>
<div class="blog-pager container" id="blog-pager">
<a class="blog-pager-older-link" href="https://labwas.blogspot.com/search?updated-max=2024-05-22T20:56:00-07:00&amp;max-results=20" id="Blog1_blog-pager-older-link" title="Older Posts">
Older Posts
</a>
</div>

</div></div></div></main>