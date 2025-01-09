
        <div class="main section" id="main" name="Main Recent Posts">
            <div class="widget Blog" data-version="2" id="Blog1">
                <div class="blog-posts hfeed container post-filter-wrap">

                    <div class="grid-posts">

                    <?php  
      
      // Import the file where we defined the connection to Database.     
        
      
          $per_page_record =10;  // Number of entries to show in a page.   
          // Look for a GET variable page if not found default is 1.        
          if (isset($_GET["page"])) {    
              $page  = $_GET["page"];    
          }    
          else {    
            $page=1;    
          }    
      
          $start_from = ($page-1) * $per_page_record;     
      
       //  $query = "Newtazaa@123$ LIMIT $start_from, $per_page_record";     
       //   $rs_result = mysqli_query ($conn, $query);    
      ?>    
    

                        <?php
                    $sql3="SELECT bp.id,bp.blog_title,bp.blog_post,bp.blog_likes,bp.blog_auth,bp.image,bp.reg_date,ct.category_name FROM `blog_post` bp JOIN `category` ct ON ct.id=bp.category_id ORDER BY bp.reg_date DESC LIMIT $start_from, $per_page_record";

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
$string = substr($blog_post,0,200);

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



            </div>



        </div>




   <div class="blog-pager container" id="blog-pager">
   <?php  
        $query = "SELECT COUNT(*) FROM blog_post";     
        $rs_result = mysqli_query($conn, $query);     
        $row = mysqli_fetch_row($rs_result);     
        $total_records = $row[0];     
          
    echo "</br>";     
        // Number of pages required.   
        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = "";       
      
        if($page>=2){   
          $pages=$page-1;
        //    echo "<a href='$linkr/home/$page'>  Prev </a>";   

        
          echo "<a class='page-num page-prev' href='$linkr/all/$pages'></a>";
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
          //    $pagLink .= "<a class = 'active' href='$linkr/home/".$i."'>".$i." </a>";   
              $pagLink.= "<a class='page-num page-active' href='$linkr/all/".$i."'>".$i."</a>";
             
          }               
          else  {   
          //    $pagLink .= "<a href='$linkr/home/".$i."'>   
            //                                    ".$i." </a>";     
            $pagLink.= "<a class='page-num' href='$linkr/all/".$i."'>".$i."</a>";
             
          }   
        };     
        echo $pagLink;   
  
        if($page<$total_pages){   
          $pagesr=$page+1;
          //  echo "<a href='$linkr/home/$page'>  Next </a>";   
          echo "<a class='page-num page-next' href='$linkr/all/$pagesr'></a>";
        //     echo "  <li class='page-item'>
        //     <a class='page-link' href='$linkr/home/$pagesr'>Next</a>
        //   </li>";
        }   
  
      ?>  
    
    
    </div> 

<!--new include data-->

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
                    href='$link'>".$blog_title."</a></h2>
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
