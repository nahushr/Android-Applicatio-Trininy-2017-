<?php 

$dbhost = "localhost";
$dbuser = "djtrinit_admin";
$dbpass = "bbhh2017";
$dbname = "djtrinit_main";


   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
 
    if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $sql = "SELECT title from event;";

   $res = mysqli_query($conn,$sql);


while($row = mysqli_fetch_array($res)){
    $result='http://chart.apis.google.com/chart?cht=qr&chs=200x200&chl='.$row['title'];
    echo '<a href="'.$result.'" target="_blank">'.$row['title'].'</a><br>';
}
 
mysqli_close($conn);
?>