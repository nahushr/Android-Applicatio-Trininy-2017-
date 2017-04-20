<?php 

$dbhost = "localhost";
$dbuser = "djtrinit_admin";
$dbpass = "bbhh2017";
$dbname = "djtrinit_main";


   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
 
    if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
  //use $dbname;   
   $sql = "SELECT title,descrip,venue,category,price,EXTRACT(MONTH from evtdate),EXTRACT(DAY from evtdate),coord,coord_no,poster_url,one_liners,regurl,EXTRACT(HOUR from stime),EXTRACT(HOUR from etime) from event order by evtdate desc;";

   $res = mysqli_query($conn,$sql);


$result = array();
 
while($row = mysqli_fetch_array($res)){
array_push($result,
array('title'=>$row[0],
'descrip'=>$row[1],
'venue'=>$row[2],
'category'=>$row[3],
'price'=>$row[4],
'eventmonth'=>$row[5],
'eventday'=>$row[6],
'coord'=>$row[7],
'coord_no'=>$row[8],
'poster_url'=>$row[9],
'one_liners'=>$row[10],
'regurl'=>$row[11],
'starthour'=>$row[12],
'endhour'=>$row[13]

));
}
 
echo json_encode(array("result"=>$result));
 
mysqli_close($conn);
?>