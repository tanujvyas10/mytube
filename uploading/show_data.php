 <?php
include('../inc/header.php');
include('connection.php');
$query="select *from record";
$res=mysqli_query($query);?>
<table border="1">
<tr>
<th>id</th>
<th>video</th></tr>
<tr>
<?php
while($row=mysqli_fetch_array($res))
{
$cat_id=$row['category_id'];
$video=$row['vid'];
$vname=$row['video'];
?>
<td width="200" height="200"><img src="upload/<?php echo $vname;?>" width="200" height="200" seamless></img>
<a href="watch.php?id=<?php echo $video;?>&cat_id=<?php echo $cat_id;?>"><?php echo $vname;?></a></td>
<?php
}
?>
</tr>
</table>
<p><a href="index.php">home page</a></p>

