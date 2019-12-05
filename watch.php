<link rel="stylesheet" href="css/watch.css" type="text/css" />
<script type="text/javascript" src="addlyrics-0.js"></script>
<div id="page-container">
<?php
include('header.php');
include('inc/connection.php');
$id=$_GET['id'];
$query3="update record set popularity=(popularity+1) where vid=$id limit 1";
$res3=mysqli_query($con,$query3);
?>
<div id="page">
<div id="left_div">
<?php
if(!empty($id))
{
$query1="select *from record where vid='$id' limit 1";
}
else
{
$query1="select *from record order by vid limit 1";
}
$res1=mysqli_query($con,$query1);
while($row1=mysqli_fetch_array($res1))
{
$video1=$row1['video'];
$seen=$row1['popularity'];
?>
<video width="675" height="381" src="uploading/upload/<?php echo $video1?>" controls></video>
<p><h2><?php echo $video1;?></h2></p>
        <div id="popularity">Popularity:-<?php echo $seen;?>&nbsp;Views</div>
<?php
}
?>
</div>
<div id="right_div">
<div id="right_div_ad"><object width="300" height="250" allowscriptaccess="always" wmode="opaque" data="WLBidRequestHandler_data_002/5be3b07408aa9de08cee3a3f5516cc21.swf" type="application/x-shockwave-flash"></object>
</div>
<?php
echo $cat_id=$_GET['cat_id'];
if(!empty($cat_id))
{
$query2="select *from record where category_id='$cat_id'";
}
else
{
$query2="select *from record order by vid";
}
$res2=mysqli_query($con,$query2);
while($row2=mysqli_fetch_array($res2))
{
$category_id=$row2['category_id'];
$video2=$row2['vid'];
$vname=$row2['vname'];
$snap=$row2['snap'];
$popular=$row2['popularity'];
?>
<div id="right_div_contents">
<div id="videos">
<img src="uploading/snapshot/<?php echo $snap;?>" width="200" height="150" alt="icon"></img>
</div>
<div id="video_info">
<a href="watch.php?id=<?php echo $video2;?>&cat_id=<?php echo $category_id;?>">
<?php echo $vname;?></a></div>
</div>
<?php
}
?>
</div>
  <?php
	include('inc/footer.php');
	?>
</div>

