<div class="clearfix"></div>
<div class="ticker">
<div class="container">
<div class="LightSpeedTic section" id="hot-posts" name="Breaking Ticker"><div class="widget PopularPosts" data-version="2" id="PopularPosts3">
<div class="widget-title"><h3 class="title">Latest Updates</h3></div>
<div class="widget-content">

<div class="xx0xx-bticker">
    
    <?php

$sql="SELECT bp.id,bp.blog_title FROM `blog_post` bp JOIN `category` ct ON ct.id=bp.category_id ORDER BY reg_date DESC LIMIT 10";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    $it=0;
    $str="item".$it;
    while($row=mysqli_fetch_assoc($result)){
        $str="item".$it;
$id=$row["id"];
$blog_title=$row["blog_title"];
$weber=$web.$images;
$link=$linkr."/contents"."/".$id."/".$blog_title;


if($it==0){
echo "<div class='tickerNews ".$str." active'>
<h2 class='entry-title vcard'><a href='".$link."'>".$blog_title."</a></h2>
</div>";

 }else{
 echo "<div class='tickerNews ".$str."'>
<h2 class='entry-title vcard'><a href='".$link."'>".$blog_title."</a></h2>
</div>";
 }



    $it=$it+1;
  }
    
    }


?>



</div>
<div class="mydivs-bt">
<a class="prev" href="javascript:;" role="button"></a>
<a class="next" href="javascript:;" role="button"></a>
</div>
</div>
</div></div>
</div></div>