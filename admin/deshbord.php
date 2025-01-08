<?php
session_start();
$username=$_SESSION['username'];

if($username==""){


  header("location:login.php");

}

$userird= $_SESSION["userenrollid"];
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Deshboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.tiny.cloud/1/c5a9b5105kgrkggjc4xw4t7nguty4kaxv4k6v9n3jpmr35ue/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });
</script>
<style>
    
    
    .images {
    height: inherit; 
    width: inherit; 
}
</style>

</head>
<body>
<?php 
include "navi.php";
?>



<div class="container">



<div class="row">
    <div class="col-sm">
    <div class="card">
    <div class="card-body">Basic card</div>
  </div>
    </div>
    <div class="col-sm">
    <div class="card">
    <div class="card-body">Basic card</div>
  </div>
    </div>
    <div class="col-sm">
    <div class="card">
    <div class="card-body">Basic card</div>
  </div>
    </div>
    
  </div>


  <table class="table table-bordered">
  <thead><tr><th>SN</th><th>title</th><th>image</th><th>Update</th><th>View</th></tr>    </thead>

<?php

$sql="SELECT bp.id,bp.blog_title,bp.blog_likes,bp.blog_auth,bp.image,bp.reg_date,ct.category_name FROM `blog_post` bp JOIN `category` ct ON ct.id=bp.category_id JOIN users us ON bp.blog_user_id=us.id WHERE us.id='$userird' order by id desc";
$result=mysqli_query($conn,$sql);

$sn=0;
if(mysqli_num_rows($result)>0){

  while($rows=mysqli_fetch_assoc($result)){
    $sn=$sn+1;


    $title= $rows["blog_title"];
    $images=$rows["image"];
    $idsd=$rows["id"];

   echo "<tr><td>$sn</td> <td>$title</td> <td><img src='https://aims-doc.com/admin/upload/$images' width='40px' /></td><td><a class='btn btn-danger' href='Update.php?ids=$idsd'>Update </a></td><td><a class='btn btn-danger' href='https://aims-doc.com/contents/$idsd/$title' target='_blank'>View</a></td></tr>";
  }




}



?>






  </table>


</div>





</body>
</html>
