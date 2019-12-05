<?php
include('../uploading/connection.php');
$catid=$_GET['catid'];
$query="delete from category where cid=$catid";
$res=mysqli_query($query);
if(!$res)
{
die("Could not delete data".mysqli_error());
}
else
{
echo"Delete successfully";
}
?>