<?php


include "config.php";

?>
<!DOCTYPE html>
<html>
	<head>    <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
		<link href="<?php echo $linkr;?>/lightspeed.css"  rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"  rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="<?php echo $linkr;?>/dist/ResizeSensor.js"></script>
        <script type="text/javascript" src="<?php echo $linkr;?>/dist/theia-sticky-sidebar.js"></script>
        <script type="text/javascript" src="<?php echo $linkr;?>/js/test.js"></script>
		<script type="text/javascript">
//<![CDATA[
(localStorage.getItem('mode')) === 'darkmode' ? document.querySelector('#mainContent').classList.add('dark'): document.querySelector('#mainContent').classList.remove('dark')
//]]>
 </script>
		<style>
    /* Default Layout: Three columns (content, left sidebar, right sidebar) */
    .content {
        width: 70%;
        float: left;
        position: relative;
    }

    .leftSidebar {
        width: 25%;
        float: left;
        padding: 0 30px 0 0;
        position: relative;
    }

    .rightSidebar {
        width: 25%;
        float: right;
        padding: 0 0 0 30px;
        position: relative;
    }

    button {
        margin: 0 0 30px 0;
    }

    /* Mobile Layout: Stack everything in one column */
    @media screen and (max-width: 768px) {
        .content, .leftSidebar, .rightSidebar {
            width: 100%;
            float: none;
            padding: 0;
            margin-bottom: 30px;
        }
        
        .leftSidebar {
            padding-right: 0;
        }

        .rightSidebar {
            padding-left: 0;
        }

        /* Optionally, reduce margin on buttons for mobile devices */
        button {
            margin: 0 0 20px 0;
        }
    }
</style>
	</head>
	<body id="mainContent">
	<?php
include("topmenu.php");
?>



<!-- ticker bar -->

<?php
include("tickerbar.php");
?>

	
		<div class="wrapper wrapperThreeColumns container">
			<div class="content box">
				<div class="theiaStickySidebar">
              

                <?php

$query=$_GET['q'];
?>


<div class="queryMessage">
<span class="query-info query-success">Showing posts matching the search for <span class="search-query"><?php echo $query;?></span></span><a class="show-more" href="<?php echo $linkr; ?>">Show all</a>
</div>
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
  $sql3="SELECT bp.id,bp.blog_title,bp.blog_post,bp.blog_likes,bp.blog_auth,bp.image,bp.reg_date,ct.category_name FROM `blog_post` bp JOIN `category` ct ON ct.id=bp.category_id WHERE 
    bp.blog_title LIKE '%$query%' ORDER BY bp.reg_date DESC LIMIT $start_from, $per_page_record";

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

    
    }else{
        echo "<div class=\"blog-posts hfeed container post-filter-wrap\">
        <div class=\"queryEmpty\">No results found</div>
        <div class=\"grid-posts\">
        </div>
        </div>";
        
    }


?>




                    </div>
                </div>



            </div>



        </div>




   <div class="blog-pager container" id="blog-pager">
   <?php  
        $query = "SELECT COUNT(*) FROM blog_post WHERE blog_title LIKE '%$query%' ";     
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
                                
      

                                <div class="xx0xx-wraprelated">
                                    <div class="LightSpeedWorks">


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
                    href='".$link."'>".$blog_title."</a></h2>
            <div class='post-snip'><span class='post-date'>May 29, 2024</span></div>
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
			
			<div class="rightSidebar">
				<div class="theiaStickySidebar">
					<div class="box">
					<?php include("sidebar.php"); ?>

					
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer">
		<?php include("footer.php"); ?>
		</div>
		
		<script>
			$(document).ready(function() {
				$('.leftSidebar, .content, .rightSidebar')
					.theiaStickySidebar({
						additionalMarginTop: 30
					});
			});
		</script>
<!-- Template LocalHost Plugins -->
<?php
include("alljavascript.php");
?>

<?php include("mobile_menu.php"); ?>
<!-- Blogger Default Widget Scripts -->


	</body>
</html>