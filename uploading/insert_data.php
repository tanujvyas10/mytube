<?php
include('../inc/connection.php'); 
      move_uploaded_file($_FILES["file"]["tmp_name"],
	  "upload/". $_FILES["file"]["name"]);
$FileName=$_FILES["file"]["name"];
 move_uploaded_file($_FILES["snap"]["tmp_name"],
	  "snapshot/". $_FILES["snap"]["name"]);
	  $snap=$_FILES["snap"]["name"];
	  $vname=$_POST['name'];
	  $cid=$_POST['id'];
$query="insert into record(video,snap,vname,category_id,date,time) values('$FileName','$snap','$vname',$cid,sysdate(),curtime())";
$res=mysqli_query($query);
if($res)
{
echo "Success!";
echo "<script>location.href='../index.php'</script>";
}
else
{
echo 'Could not insertel!'.mysqli_error();
}
?>