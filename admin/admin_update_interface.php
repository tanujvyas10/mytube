  <?php
$cat_id=$_GET['cat_id'];
$cat_name=$_GET['cat_name'];
$query="update category set cid=$cat_id";
$res=mysqli_query($query);
if($res)
{
die("Could not delete data".mysqli_error());
echo"Delete successfully";
}
?>
