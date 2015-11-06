<?php
include('dbcon.php'); 
error_reporting(E_ALL ^ E_NOTICE);
foreach($_REQUEST as $key=>$value)$$key=$value;
$limit=$length;
$srno=0;
if($start==""){$start=0;}
if($limit==""){$limit=10;}

$srno=$start+1;

$searchbox=$search['value'];
$orderby="";
$searchsql="";

if($searchbox!="")
{

$searchsql=$searchsql." AND (  ";
$searchsql=$searchsql." `institution` like '%".$searchbox."%'   || ";
$searchsql=$searchsql." )  ";

}

$mainsql="SELECT `id`, `institution`, `status` FROM `master_institution` WHERE 1";
$mysqlresult = mysql_query($mainsql);
$rtotal=0;
while($mysqlrow=mysql_fetch_array($mysqlresult)){$rtotal++;
if($rtotal==1)
{
for($e=0;$e<sizeof($order);$e++)
{
$orderbycol="";$orderbycollast="";if($e!=0){$orderby=$orderby.", ";}$z=0;foreach($mysqlrow as $xaa => $xaa_value) {if($order[$e]['column'] == $xaa){$orderbycol=$orderbycollast;}$orderbycollast=$xaa;$z++;}
if($orderbycol!=""){
$orderby=$orderby." ".$orderbycol." ".$order[$e]['dir'];
}
}
}
}

#print "<Hr> $orderby<hr>";

$mainsql=$mainsql."  ".$searchsql;

$mysqlresult = mysql_query($mainsql);
$rstotal=0;
while($mysqlrow=mysql_fetch_array($mysqlresult)){$rstotal++; }

if($orderby!="")
{
$mainsql=$mainsql." order by ".$orderby;
}

#print " Search --> $searchbox";
print '{"draw":'.$draw.',"recordsTotal":"'.$rtotal.'","recordsFiltered":"'.$rstotal.'","data":[';
$sqlxdata=$mainsql. " limit $start,$limit";

#print "<hr>$sqlxdata<hr>\n";
#exit;
$mysqlresult = mysql_query($sqlxdata);
$i=0;
while($mysqlrow=mysql_fetch_array($mysqlresult)){
$i++;
if($i!=1){print ",";}
print "[";
for($j=0;$j<sizeof($mysqlrow);$j++)
{
if($j==0){print "\"".$srno."\","; $srno++;}
if($j!=0){print ",";}

if($j==3 && $mysqlrow[$j]=="0"){$mysqlrow[$j]="InActive";}
if($j==3 && $mysqlrow[$j]=="1"){$mysqlrow[$j]="Active";}

print "\"".$mysqlrow[$j]."\"";
}
print "]";
print "";
}
print ']}';
?>
