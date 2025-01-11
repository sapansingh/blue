<?php
session_start();
$username=$_SESSION['username'];
include "../config.php";
$userenrollid=$_SESSION['userenrollid'];
$conn=mysqli_connect($server,$user,$pass,$db,$port);
$title=mysqli_real_escape_string($conn,$_POST["title"]);
$body=mysqli_real_escape_string($conn,$_POST["blog_post"]);


$categ=$_POST["categ"];
$pid=$_POST["pid"];
$precat=$_POST["precat"];
$precount=$_POST["precount"];
$recout=(int)$precount;
$recout=$recout-1;
$today=date("yyyy-m-d");

$file_name = $_FILES['imger']['name'];
$filenametmp=$_FILES["imger"]["tmp_name"];


$sqlrtr="SELECT total_post FROM `category` WHERE id='$categ'";

$restr=mysqli_query($conn,$sqlrtr);

$row=mysqli_fetch_assoc($restr);
$couter=$row['total_post'];
$coutr=(int)$couter;


$sql="update blog_post set blog_title='$title',blog_post='$body',category_id='$categ' where id='$pid'";


if(mysqli_query($conn,$sql)){
    $coutr=$coutr+1;

    $sqrsl="Update category set total_post='$coutr' WHERE id='$categ'";
    mysqli_query($conn,$sqrsl);
   


    $sqrsdl="Update category set total_post='$recout' WHERE id='$precat'";
    mysqli_query($conn,$sqrsdl);
 
    $imag=$pid.".jpg";
}

if($file_name!=""){

    move_uploaded_file($filenametmp,'upload/'.$imag);
}else{
    $newpath=$_POST["url"];
    $path = "upload";
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }
    define('BUFSIZ', 4095);
    $url = $newpath;
    $rfile = fopen($url, 'r');
    
    $mypath=basename($url);
    $lfile = fopen($path."/".$imag, 'w');
    while(!feof($rfile))
    fwrite($lfile, fread($rfile, BUFSIZ), BUFSIZ);
    fclose($rfile);
    fclose($lfile);
}





$sql="UPDATE `blog_post` SET image='$imag' WHERE id='$pid';";
mysqli_query($conn,$sql);


header("location: deshbord.php");

mysqli_close($conn);

?>