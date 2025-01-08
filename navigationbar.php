<?php
// set expires header
// remove header
header_remove('ETag');
header_remove('Pragma');
header_remove('Cache-Control');
header_remove('Last-Modified');
header_remove('Expires');

// set header
header('Expires: Thu, 1 Jan 1970 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Cache-Control: post-check=0, pre-check=0',false);
header('Pragma: no-cache');


include "config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-adsense-account" content="ca-pub-9994499269501525">
    <meta name="google-site-verification" content="djL9yadqQSbZ7Un35MF4Y8yu6ffgTAZibRJelmEj0KE" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="<?php echo $linkr;?>/style.css"  rel="stylesheet">
</head>
<body>

<?php include "navigation.php"; ?>

<div class="container mt-3">
 

<div class="text-center">


<div class="col">
    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4">
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

$sql="SELECT bp.id,bp.blog_title,bp.blog_post,bp.blog_likes,bp.blog_auth,bp.image,bp.reg_date,ct.category_name FROM `blog_post` bp JOIN `category` ct ON ct.id=bp.category_id ORDER BY bp.reg_date DESC LIMIT $start_from, $per_page_record";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

while($rows=mysqli_fetch_assoc($result)){
  $title=$rows["blog_title"];

  $id=$rows["id"];
  $auth=$rows["blog_auth"];
  $reg_Date=$rows["reg_date"];
  $category_name=$rows["category_name"];
  $image=$rows["image"];



  echo "<div class='container'><a href='$linkr/contents/$id/$title' style=' color: white;'>
  <img src='$web"."$image' alt='Snow' style='width:100%;height: 90%; border-radius: 10%;'>
  
  <div class='top-left btn btn-danger'>$category_name</div>
  
  
  <div class='centered content'><h5>$title<h5></div>
  <a/></div>";
  
  

}
}
?>


  </div>
  </div>
  
  </div> 
  <nav aria-label="Page navigation example"> 
  <ul class="pagination justify-content-center">
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

            echo "<li class='page-item'>
            <a class='page-link' href='$linkr/home/$pages' tabindex='-' aria-disabled='true'>Previous</a>
          </li>";
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
          //    $pagLink .= "<a class = 'active' href='$linkr/home/".$i."'>".$i." </a>";   
              $pagLink.= "<li class='page-item'><a class='page-link active' href='$linkr/home/"  
              .$i."'>".$i."</a></li>";
          }               
          else  {   
          //    $pagLink .= "<a href='$linkr/home/".$i."'>   
            //                                    ".$i." </a>";     
            $pagLink.= "<li class='page-item'><a class='page-link' href='$linkr/home/"  
            .$i."'>".$i."</a></li>";
          }   
        };     
        echo $pagLink;   
  
        if($page<$total_pages){   
          $pagesr=$page+1;
          //  echo "<a href='$linkr/home/$page'>  Next </a>";   

            echo "  <li class='page-item'>
            <a class='page-link' href='$linkr/home/$pagesr'>Next</a>
          </li>";
        }   
  
      ?>    
  </ul>
  </nav>

      </div>  
</div>



</div>
<?php include "footer.php";?>
</body>
</html>


