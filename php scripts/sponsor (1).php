<?php 

$dbhost = "localhost";
$dbuser = "djtrinit_admin";
$dbpass = "bbhh2017";
$dbname = "djtrinit_main";

 
$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$sql = "SELECT name,image,site FROM sponsors;";
 
$res = mysqli_query($con,$sql);

$result = array();
 
while($row = mysqli_fetch_array($res)){
array_push($result,array('name'=>$row['name'],'image'=>$row['image'],'site'=>$row['site']));
}
 
echo json_encode(array("result"=>$result));
 
mysqli_close($con);
 
?>