<?php
include('dbcon.php'); 
error_reporting(E_ALL ^ E_NOTICE);

$limit=$length;
if($start==""){$start=0;}
if($limit==""){$limit=10;}

$json_response = array();
$mainsql="SELECT `id`, `institution`, `status` FROM `master_institution` WHERE 1";
$sqlxdata=$mainsql. " limit $start,$limit";
#print "<hr>$sqlxdata<hr>\n";
#exit;
$mysqlresult = mysql_query($sqlxdata);
while ($row = mysql_fetch_array($mysqlresult)) {
$row_array['id'] = $row['id'];  
$row_array['institution'] = $row['institution'];  
$row_array['status'] = $row['status'];  

//push the values in the array
   array_push($json_response,$row_array);
}
$json= json_encode($json_response);
echo $json; 
?>
