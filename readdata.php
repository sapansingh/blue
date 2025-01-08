<main id="feed-view" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
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

        
          echo "<a class='page-num page-prev' href='$linkr/search/$pages'></a>";
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
          //    $pagLink .= "<a class = 'active' href='$linkr/home/".$i."'>".$i." </a>";   
              $pagLink.= "<a class='page-num page-active' href='$linkr/search/".$i."'>".$i."</a>";
             
          }               
          else  {   
          //    $pagLink .= "<a href='$linkr/home/".$i."'>   
            //                                    ".$i." </a>";     
            $pagLink.= "<a class='page-num' href='$linkr/search/".$i."'>".$i."</a>";
             
          }   
        };     
        echo $pagLink;   
  
        if($page<$total_pages){   
          $pagesr=$page+1;
          //  echo "<a href='$linkr/home/$page'>  Next </a>";   
          echo "<a class='page-num page-next' href='$linkr/search/$pagesr'></a>";
        //     echo "  <li class='page-item'>
        //     <a class='page-link' href='$linkr/home/$pagesr'>Next</a>
        //   </li>";
        }   
  
      ?>  
    
    
    </div> 

<!--new include data-->

        
  

</main>
