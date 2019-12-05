<link rel="stylesheet" href="../css/style.css" type="text/css" />
<div id="page-container">
<?php
include('../inc/header.php');
include('../inc/connection.php');
$catid=$_GET['catid'];
$query="select *from record where category_id=$catid";
$res=mysqli_query($query);
$sno=0;
?>
<table id="ltable">
<tr>
<th>Sno</th>
<th>Video Name</th>
<th>Category_id</th>
<th>Date</th>
<th>Popularity</th>
</tr>
<?php
while($row=mysqli_fetch_array($res))
{
$video=$row['video'];
$catid=$row['category_id'];
$date=$row['date'];
$popularity=$row['popularity'];
$sno=$sno+1;
?>
<tr>
<td><?php echo $sno?></td>
<td><?php echo $video?></td>
<td><?php echo $catid?></td>
<td><?php echo $date?></td>
<td><?php echo $popularity?></td>
<td>Delete</td>
<td>Update</td>
</tr>
<?php
}
?>
</table>
 <?php
	include('../inc/footer.php');
	?>
</div>