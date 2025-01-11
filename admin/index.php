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
  <title>Create new Blog</title>
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

?>

<div class="container mt-3">
 <!-- <input type="text" name="imagesd" id="imagesd" placeholder="Image URL"><button id="imagebtn" class="btn btn-primary">getImgage</button> -->
  <form action="submit.php" method="post" id="submiter" enctype="multipart/form-data">
    <div class="form-floating mb-3 mt-3">
      <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title">
      <label for="title">Title</label>
    </div>


  <?php
  
  include "../config.php";
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
      echo "<option value='$cat_id'>$categ</option>";
    }
  }
  mysqli_close($conn);

  ?>

  </select>
  <label for="sel1" class="form-label">Select list (select one):</label>
</div>
</div>

<!-- <div class="col">
<div class="form-floating">
      <input type="text" class="form-control" id="url" placeholder="Enter url" name="url">
      <label for="title">URL</label>
    </div>
</div>  -->

<div class="col">
      <input type="file" class="form-control" id="imger" placeholder="Enter img" name="imger">
     


</div> 
</div> 

<div name="blog_post" id="editor">

</div>
    <textarea name="blog_post" id="summernote"></textarea>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>



<!-- The Modal -->
<!--<div class="modal" id="myModal">-->
<!--  <div class="modal-dialog">-->
<!--    <div class="modal-content">-->

      <!-- Modal Header -->
<!--      <div class="modal-header">-->
<!--        <h4 class="modal-title">download images by link</h4>-->
<!--        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>-->
<!--      </div>-->

      <!-- Modal body -->
<!--      <div class="modal-body" id="imgload">-->
<!--     <input type="text" name="imagesd" id="imagesd" placeholder="Image URL"><input placeholder="Image Name" type="text" name="iamgename" id="iamgename"><button id="imagebtn" class="btn btn-primary">getImgage</button>-->
<!--      </div>-->
      
      <!-- Modal footer -->
<!--      <div class="modal-footer">-->
<!--        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>-->
<!--      </div>-->

<!--    </div>-->
<!--  </div>-->
<!--</div>-->
 <script>
// const toolbarOptions = [
//   ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
//   ['blockquote', 'code-block'],
//   ['link', 'image', 'video', 'formula'],

//   [{ 'header': 1 }, { 'header': 2 }],               // custom button values
//   [{ 'list': 'ordered'}, { 'list': 'bullet' }, { 'list': 'check' }],
//   [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
//   [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
//   [{ 'direction': 'rtl' }],                         // text direction

//   [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
//   [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

//   [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
//   [{ 'font': [] }],
//   [{ 'align': [] }],

//   ['clean']                                         // remove formatting button
// ];

// const quill = new Quill('#editor', {
//   modules: {
//     toolbar: toolbarOptions
//   },
//   theme: 'snow'
// });
//   var form = document.getElementById('submiter');
//     var hiddenTextarea = document.getElementById('hidden-textarea');

//     form.onsubmit = function() {
//       hiddenTextarea.value = quill.root.innerHTML;
//     };
</script>


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
     $(".note-editable").append("<img width='50%' height='70%'  onclick='copyToClipboard('#p123')' src='"+response.url+"' />");
     
  
    }
  });  
}

});


</script>


</body>
</html>
