<?php
ini_set('max_execution_time', 300);  // 300 seconds = 5 minutes

session_start();
$username=$_SESSION['username'];

if($username==""){


  header("location:login.php");

}




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!--<script src="https://cdn.tiny.cloud/1/c5a9b5105kgrkggjc4xw4t7nguty4kaxv4k6v9n3jpmr35ue/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>-->
  <!--<link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />-->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
  <script>
//   tinymce.init({
//     selector: 'textarea',
//     plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
//     toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
//   });
</script>


    <script>
      $(document).ready(function(){

        $('#summernote').summernote({
      
          styleTags: [
    'p',
        { title: 'Blockquote', tag: 'blockquote', className: 'blockquote', value: 'blockquote' },
       
        { title: 'card', tag: 'div', className: 'card', value: 'div' },

        'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'
	],

  
});

      });
  
    </script>

</head>
<body>



<?php


include "navi.php";
$idsr=$_GET["ids"]; 


include "config.php";

$sqld="SELECT bp.id,bp.blog_title,bp.blog_likes,bp.blog_auth,bp.blog_post,bp.image,bp.reg_date,ct.category_name,bp.category_id FROM `blog_post` bp JOIN `category` ct ON ct.id=bp.category_id JOIN users us ON bp.blog_user_id=us.id WHERE bp.id='$idsr'";

$imgurl="https://aims-doc.com/admin/upload/";
$resustr=mysqli_query($conn,$sqld);

if(mysqli_num_rows($resustr)>0){


while($rows=mysqli_fetch_assoc($resustr)){

   $title=$rows['blog_title'];
   $blog_post=$rows['blog_post'];
   $image=$imgurl.$rows['image'];
   $category_id=$rows['category_id'];
   $pid=$rows['id'];

}


$sqlrtr="SELECT total_post FROM `category` WHERE id='$category_id'";

$restr=mysqli_query($conn,$sqlrtr);

$row=mysqli_fetch_assoc($restr);
$couter=$row['total_post'];


}

mysqli_close($conn);


?>

<div class="container mt-3">
 
<?php
  include "../config.php";

?>
     <!-- <input type="text" name="imagesd" id="imagesd" placeholder="Image URL"><button id="imagebtn" class="btn btn-primary">getImgage</button> -->


  <form action="updatecontent.php" id="submiter" method="post" enctype="multipart/form-data">
    <div class="form-floating mb-3 mt-3">
      <input type='hidden' name='pid' value="<?php echo $pid;?>">
      <input type="text" class="form-control" id="title" placeholder="Enter Title" value="<?php echo $title; ?>" name="title">
      <label for="title">Title</label>
    </div>


  <?php
  
  include "config.php";
  $sql="SELECT * FROM `category`";

  $result=mysqli_query($conn,$sql);
  
  ?>
<div class="row">
  <div class="col">
    <div class="form-floating">
  <select class="form-select" id="categ" name="categ">
  <?php
  
  if(mysqli_num_rows($result)>0){
    while($rows=mysqli_fetch_assoc($result)){

      $categ=$rows['category_name'];
      $cat_id=$rows['id'];
      if($cat_id==$category_id){
        echo "<option  value='$cat_id' selected>$categ</option>";
      }else{

        echo "<option value='$cat_id'>$categ</option>";


      }


    }
  }

  ?>
  </select>

  <input type="hidden" value="<?php echo $category_id?>" name="precat">
  <input type="hidden" value="<?php echo $couter?>" name="precount">
  <label for="sel1" class="form-label">Select list (select one):</label>
</div>
</div>

<div class="col">
<input type="hidden" class="form-control" id="url" value="<?php echo  $image;?>" placeholder="Enter url" name="url">

<!-- <div class="form-floating">
      <input type="hidden" class="form-control" id="url" value="<?php echo  $image;?>" placeholder="Enter url" name="url">
      <label for="title">URL</label>
    </div>

</div>  -->
<div class="col">
or
      <input type="file" class="form-control" id="imger" placeholder="Enter img" name="imger">
     


</div> 
</div> 



<div id="editor">

</div>
    <textarea name="blog_post" id="summernote"><?php echo  $blog_post; ?></textarea>

<input type="hidden" value="<?php echo $category_id?>" name="precat">
<input type="hidden" value="<?php echo $couter?>" name="precount">

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>




<script>
$(document).ready(function(){

  $("#imagebtn").on("click", function () {
    
    imageload();

  });
function imageload(){


  var imagesd=$("#imagesd").val();
 // var iamgename=$("#iamgename").val();
  
  var okn={"images":imagesd};
  var jsdata=JSON.stringify(okn);
  $.ajax({
    type: "post",
    url: "https://newstazaat.com/image.php",
    data: jsdata,
    dataType: "JSON",
    success: function (response) {
        
   //$("#blog_post_id").append("<img  width='200px' height='200px'  src='"+response.url+"' />");
    // $(".ql-editor").append("<img  width='50%' height='70%' src='"+response.url+"' />");
     $(".note-editable").append("<img  width='50%' height='70%'  src='"+response.url+"' />");
    
    }
  });  
}
});

  
</script>

</body>
</html>
