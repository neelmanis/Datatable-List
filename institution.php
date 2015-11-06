<?php 
include('header.php');  
include('dbcon.php');  
error_reporting(E_ALL ^ E_NOTICE);
?>

<?php
$action=$_REQUEST['action'];
$getid=$_REQUEST['id'];
$status=$_REQUEST['status'];

if (($action=='active') && ($getid!=''))
{
$neelx="UPDATE `master_institution` SET `modified_date`=NOW(),`status`='$status' where id='$getid'";
$active_result = mysql_query($neelx)or die(mysql_error());
if($active_result)
{ header('location:institution.php'); } else {  die('Error: ' . mysql_error()); }
}
?>

<div class="container">
<div class="margin-top">
<div class="row">	
<div class="span12">	
<div class="alert alert-info">Institution </div>
<a href="institution_add.php" ><i class="fa fa-plus"></i>&nbsp;<strong>Add Institution</strong></a>

<table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
<thead>
<tr>
<th>ID</th>                                            
<th>Institution</th>                                                                
<th>Action</th>
</tr>
</thead>
<tbody>
							 
<?php 
$neelx="SELECT `id`, `institution`, `status` FROM `master_institution` WHERE 1";
$result = mysql_query($neelx);
while($row=mysql_fetch_array($result)){
//print_r($row);
$getid=$row['id'];  ?>
<tr>
<td><?php echo $getid; ?></td>                              
<td><?php echo $row['institution']; ?></td>
<?php $status=$row['status']; ?>
						  
<td width="200">
<?php if($status == 1) { ?> <a href="institution.php?id=<?php echo $getid; ?>&status=0&action=active" onClick="return(window.confirm('Are you sure you want to Deactivate.'));" class="btn btn-success">Active</a><?php } else { ?><a  href="institution.php?id=<?php echo $getid; ?>&status=1&action=active" onClick="return(window.confirm('Are you sure you want to Activate.'));" class="btn btn-warning">Inactive</a><?php } ?>
&nbsp;<a title="View" href="institution_edit.php?uid=<?php echo $getid;?>" class="btn btn-info">Edit</a> 
</td>									
</tr>
<?php  }  ?>                           
</tbody>
</table>

</div>		
</div>
</div>
</div>
