<?php

include "config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>wordl Affairs</title>
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
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
 
    <?php

$sql="SELECT bp.id,bp.blog_title,bp.blog_post,bp.blog_likes,bp.blog_auth,bp.image,bp.reg_date,ct.category_name FROM `blog_post` bp JOIN `category` ct ON ct.id=bp.category_id where ct.id='8'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

while($rows=mysqli_fetch_assoc($result)){
  $title=$rows["blog_title"];

  $id=$rows["id"];
  $auth=$rows["blog_auth"];
  $reg_Date=$rows["reg_date"];
  $category_name=$rows["category_name"];
  $image=$rows["image"];


//echo "<span class='ex2' style='font-size:9px'>$reg_Date</span> <span class='ex2' style='font-size:9px'>$auth</span>";
echo "<div class='card' style='width: 18rem;margin:20px'>
<img src='$web"."$image' class='card-img-top' style='width: 100%;height:150px' alt='...'>
<div class='card-body'>
  <h5 class='card-title'>$category_name</h5>
  <a href='contents/$id/$title' class='card-text' style='text-decoration:none; color: black;'><b>$title</b><a/>
  <p class='card-text'><small class='text-muted'>$reg_Date</small></p>
</div>
</div>"
;

}
}
?>


  </div>
  </div>
  
  </div> 
  
</div>



</div>

</body>
</html>


