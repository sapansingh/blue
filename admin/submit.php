<?php
session_start();
$username = $_SESSION['username'];
$userenrollid = $_SESSION['userenrollid'];
include "config.php";
$conn = mysqli_connect($server, $user, $pass, $db, $port);
$title = mysqli_real_escape_string($conn, $_POST["title"]);
$bodyt = $_POST["blog_post"];
$categ = $_POST["categ"];

$file_name = $_FILES['imger']['name'];
$filenametmp = $_FILES["imger"]["tmp_name"];
$today = date("Y-m-d");

$body = mysqli_real_escape_string($conn, $bodyt);

$sqlrtr = "SELECT total_post FROM `category` WHERE id='$categ'";
$restr = mysqli_query($conn, $sqlrtr);
$bdate = date("Y-m-d");
$row = mysqli_fetch_assoc($restr);
$couter = $row['total_post'];
$coutr = (int)$couter;

if ($title != "" && $body != "") {
    $sql = "INSERT INTO `blog_post` (blog_title, blog_post, category_id, blog_auth, blog_user_id) 
            VALUE('$title','$body','$categ','$username','$userenrollid');";
    
    if (mysqli_query($conn, $sql)) {
        $last_id = mysqli_insert_id($conn);
        $imag = $last_id . ".jpg";
        $coutr++;
        $sqrsl = "UPDATE category SET total_post='$coutr' WHERE id='$categ'";
        mysqli_query($conn, $sqrsl);
    } else {
        echo "Failed to submit the post.";
    }
}

if ($file_name != "") {
    move_uploaded_file($filenametmp, 'upload/' . $imag);
} else {
    $newpath = $_POST["url"];
    $path = "upload";
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }
    define('BUFSIZ', 4095);
    $url = $newpath;
    $rfile = fopen($url, 'r');
    
    $mypath = basename($url);
    $lfile = fopen($path . "/" . $imag, 'w');
    while (!feof($rfile)) {
        fwrite($lfile, fread($rfile, BUFSIZ), BUFSIZ);
    }
    fclose($rfile);
    fclose($lfile);
}

$tirer = htmlspecialchars($title);

if (file_exists("sitemap.xml")) {
    // Load the sitemap and check for errors
    $members = @simplexml_load_file('../sitemap.xml');
    if ($members === false) {
        echo "Error loading sitemap.xml";
        exit;
    }

    // Ensure the linter variable is set correctly
    if (empty($linter)) {
        echo "Error: linter is not set!";
        exit;
    }

    // Add a new URL entry to the sitemap
    $member = $members->addChild('url');
    $member->addChild('loc', $linter . "/contents/" . $last_id . "/" . $tirer);
    $member->addChild('lastmod', $bdate);
    $member->addChild('priority', "0.8");

    // Write back to the sitemap
    if (file_put_contents('../sitemap.xml', $members->asXML()) === false) {
        echo "Failed to write to sitemap.xml";
    } else {
        echo "Sitemap successfully updated!";
    }
}

$sql = "UPDATE `blog_post` SET image='$imag' WHERE id='$last_id';";
mysqli_query($conn, $sql);

header("Location: index.php");
exit();
?>
