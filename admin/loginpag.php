<?php
session_start();
$username=$_POST['email'];
$password=$_POST['password'];


include "config.php";



$sql="SELECT * FROM `users` WHERE (email='$username') AND (pass='$password')";
echo $sql;
if($result=mysqli_query($conn,$sql)){


    if(mysqli_num_rows($result)>0){

        $rows=mysqli_fetch_assoc($result);

        $_SESSION["username"]=$rows['user_name'];
        $_SESSION["email"]=$rows['email'];
        $_SESSION["userenrollid"]=$rows['id'];

        header("location: deshbord.php");
    }
    
    
}



?>