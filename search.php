<?php
include('inc/connection.php');
if($_POST)
{
$q=$_POST['search'];
$sql_res=mysqli_query("select *from record where vname like '%$q%'");
while($row=mysqli_fetch_array($sql_res))
{
$vname=$row['vname'];
$vid=$row['vid'];
$cat_id=$row['category_id'];
$snap=$row['snap'];
$b_vname='<strong>'.$q.'</strong>';
$final_vname = str_ireplace($q, $b_vname, $vname);?>
<div class="show" align="left">
<img src="uploading/snapshot/<?php echo $snap?>" style="width:50px; height:50px; float:left; margin-right:6px;" />
<span class="name">
<a href="watch.php?id=<?php echo $vid?>&<?php echo $cat_id?>"><?php echo $final_vname; ?></a>
</span>&nbsp;<br/>;<br/>
</div>
<?php
}
}
?>
