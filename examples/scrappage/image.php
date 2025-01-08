<?php
header('Content-Type:application/json');
$data=json_decode(file_get_contents("php://input"),true);

$imageurl=$data['images'];
//$imageurl="https://img.freepik.com/free-photo/beautiful-scenery-summit-mount-everest-covered-with-snow-white-clouds_181624-21317.jpg";
$newpath=$imageurl;
$path = "customupload";
if (!file_exists($path)) {
    mkdir($path, 0777, true);
}
define('BUFSIZ', 4095);
$url = $newpath;
$rfile = fopen($url, 'r');

$mypath=basename($url);
$lfile = fopen($path."/".$mypath, 'w');
while(!feof($rfile))
fwrite($lfile, fread($rfile, BUFSIZ), BUFSIZ);
fclose($rfile);
fclose($lfile);

echo json_encode(array("url"=>"https://newstazaat.com/customupload/$mypath"));


?>