<?php 

$dbhost = "localhost";
$dbuser = "djtrinit_admin";
$dbpass = "bbhh2017";
$dbname = "djtrinit_main";

 
$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$sql = "SELECT points FROM idpt_points ORDER BY sr DESC LIMIT 1;";
$res = mysqli_query($con,$sql);
$names = array('bioprod','comps','chemical','elex','extc','it','mech');

while($row = mysqli_fetch_array($res)){
//
	$scores=$row['points'];
}

$names = array('bioprod','comps','chemical','elex','extc','it','mech');
$arr=array();
$count=0;
$scores=explode(',',$scores);



foreach ($names as $key => $value) {
	$arr[$value]=$scores[$key];
}

echo json_encode(array("result"=>[$arr]));
 
mysqli_close($con);
 
?>