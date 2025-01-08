<?php


header('Content-Type:application/json');
$data=json_decode(file_get_contents("php://input"),true);

$imageurl=$data['images'];
$imahename=$data['imagename'];

$newpath=$imageurl;
$path = "customupload";
if (!file_exists($path)) {
    mkdir($path, 0777, true);
}
define('BUFSIZ', 4095);
$url = $newpath;
$rfile = fopen($url, 'r');

$mypath=basename($url);
$lfile = fopen($path."/".$imahename, 'w');
while(!feof($rfile))
fwrite($lfile, fread($rfile, BUFSIZ), BUFSIZ);
fclose($rfile);
fclose($lfile);
echo json_encode(array("url"=>"https://newstazaat.com/customupload/$imahename"));


?>