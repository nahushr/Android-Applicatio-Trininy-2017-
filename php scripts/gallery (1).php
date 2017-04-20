<?php 

$dbhost = "localhost";
$dbuser = "djtrinit_admin";
$dbpass = "bbhh2017";
$dbname = "djtrinit_main";

 
$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$sql = "SELECT event_url FROM event_gallery;";
 
$res = mysqli_query($con,$sql);

$result = array();
 
while($row = mysqli_fetch_array($res)){
array_push($result,array('url'=>$row[0]));
}
 
echo json_encode(array("result"=>$result));
 
mysqli_close($con);
 
?>