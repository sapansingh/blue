<!-- Sidebar Wrapper -->
<div id="sidebar-container" class="sidebarer" itemscope="itemscope" role="banner" style="">



<div class="sidebar section" id="social-widget" name="Social Widget"><div class="widget LinkList" data-version="2" id="LinkList76">
<div class="widget-title"><h3 class="title">Social Plugin</h3></div>
<div class="widget-content">
<ul class="socialFilter social-bg social">
<li>
<a class="facebook" href="http://fb.com/pikitemplates" rel="noopener noreferrer" target="_blank" title="facebook">
facebook
</a>
</li>
<li>
<a class="twitter" href="#" rel="noopener noreferrer" target="_blank" title="twitter">
twitter
</a>
</li>
<li>
<a class="whatsapp" href="https://whatsapp.com/channel/0029VaainmVLNSaClyuQEk2p" rel="noopener noreferrer" target="_blank" title="whatsapp">
whatsapp
</a>
</li>
<li>
<a class="instagram" href="#" rel="noopener noreferrer" target="_blank" title="instagram">
instagram
</a>
</li>
<li>
<a class="youtube" href="#" rel="noopener noreferrer" target="_blank" title="youtube">
youtube
</a>
</li>
</ul>
</div>
</div></div>





<div class="sidebar widget-control section" id="sidebar" name="Sidebar Right (B)">

 <div class="widget PopularPosts" data-version="2" id="PopularPosts1">
<div class="widget-title"><h3 class="title">Popular Posts</h3></div>
<div class="widget-content sidebar-posts">

<?php

$sql="SELECT bp.id,bp.blog_title,bp.reg_date,blog_post,ct.category_name,bp.image FROM `blog_post` bp JOIN `category` ct ON ct.id=bp.category_id ORDER BY bp.hit_count DESC LIMIT 5";

$result=mysqli_query($conn,$sql);
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
$blog_post=$row["blog_post"];
$weber=$web.$images;
$link=$linkr."/contents"."/".$id."/".$blog_title;


if($it==0){
echo "<div class='popular-post post gaint-post ".$str."'>
<a class='post-filter-link background-layer image-nos image-nos' href='".$link."' title='".$blog_title."'>
<img alt='".$blog_title."' class='snip-thumbnail lazy-img' src='".$weber."'>
</a>
<div class='LightSpeedSet-box'>
<span class='label-news-flex'>".$category_name."</span>
<h2 class='entry-title vcard'><a href='".$link."' rel='bookmark' title='".$blog_title."'>".$blog_title."</a></h2>
<div class='post-snip'><span class='post-date'><time class='published' datetime='".$reg_date."'>".$reg_date."</time></span></div>
</div>
</div>
";   
 }else{
  echo "<div class='popular-post post".$str."'>
<a class='post-filter-link background-layer image-nos image-nos' href='".$link."' title='".$blog_title."'>
<img alt='".$blog_title."' class='snip-thumbnail lazy-img' src='".$weber."'>
</a>
<div class='LightSpeedSet-box'>
<span class='label-news-flex'>".$category_name."</span>
<h2 class='entry-title vcard'><a href='".$link."' rel='bookmark' title='".$blog_title."'>".$blog_title."</a></h2>
<div class='post-snip'><span class='post-date'><time class='published' datetime='".$reg_date."'>".$reg_date."</time></span></div>
</div>
</div>";
 }



    $it=$it+1;
  }
    
    }


?>


</div>
</div>

<div class="widget Label" data-version="2" id="Label2">
<div class="widget-title"><h3 class="title">Labels</h3></div>

<div class="widget-content cloud-label">
<ul>

<?php
include("config.php");
$sql="SELECT ct.category_name FROM `blog_post` bp JOIN `category` ct ON ct.id=bp.category_id GROUP BY category_name";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
   $ot=0;
    while($row=mysqli_fetch_assoc($result)){
    
$category_name=$row["category_name"];
$link=$linkr."/labels"."/".$category_name;


echo "<li>
<a class='label-name' href='".$link."'>
".$category_name."
<span class='label-count'>".$ot."</span>
</a>
</li>
";   
 



$ot=$ot+1;


  }
    
    }


?>




</ul>
</div>
</div>


<div class="widget Label" data-version="2" id="Label3">
<div class="widget-title"><h3 class="title">Categories</h3></div>
<div class="widget-content list-label">
<ul>


<?php
include("config.php");
$sql="SELECT ct.category_name,ct.total_post FROM `blog_post` bp JOIN `category` ct ON ct.id=bp.category_id group by ct.id";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
   
    while($row=mysqli_fetch_assoc($result)){
    
$category_name=$row["category_name"];
$total_post=$row["total_post"];
$link=$linkr."/labels"."/".$category_name;


echo "<li>
<a class='label-name' href='".$link."'>
".$category_name."
<span class='label-count'>".$total_post."</span>
</a>
</li>";   
 





  }
    
    }


?>



</ul>
</div>
</div>





<div class="widget BlogSearch" data-version="2" id="BlogSearch1">
<div class="widget-title"><h3 class="title">Search This Blog</h3></div>
<div class="widget-content" role="search">
<form action="https://newstazaat.com/search" class="search-form" target="_top">
<input aria-label="Search this blog" autocomplete="off" class="search-input" name="q" placeholder="Search this blog" value="">
<input class="search-action" type="submit" value="Search">
</form>
</div>
</div>


<!-- <div class="widget Profile" data-version="2" id="Profile1">
<div class="widget-title"><h3 class="title">About Me</h3></div>
<div class="widget-content individual">
<a href="https://www.blogger.com/profile/07865532278980536827" rel="nofollow">
<div class="default-avatar"></div>
</a>
<div class="profile-info">
<dl class="profile-datablock">
<dt class="profile-data">
<a class="profile-link g-profile" href="https://www.blogger.com/profile/07865532278980536827" rel="author nofollow">
sapan singh
</a>
</dt>
</dl>
<a class="profile-link" href="https://www.blogger.com/profile/07865532278980536827" rel="author nofollow">
View my complete profile
</a>
</div>
</div>
</div> -->

</div></div>