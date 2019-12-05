<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<div id="page-container">
</head>
<?php 
include('header.php');
   include('inc/connection.php');
?>
       <?php
	   $cat_id=$_GET['catid'];
		if(!empty($cat_id))
		{
       $query="select *from category where cid =$cat_id";
	   }
	   else
	   {
	    $query="select *from record where category_id =$cat_id";
		}
$res=mysqli_query($query);
?>
 <div id="see_more_container">
 <?php
while($row=mysqli_fetch_array($res))
{
$catname=$row['category_name'];
$catid=$row['cid'];
?>
 <h2><?php echo $catname;?></h2>
  <?php
   $query2="select *from record";
   $res2=mysqli_query($query2);
   while($row2=mysqli_fetch_array($res2))
   {
   $vid=$row2['vid'];
   $video=$row2['video'];
   $snap=$row2['snap'];
   $rec_catid=$row2['category_id'];
   if($catid==$rec_catid)
   {
   ?>
   <div id="seemore_video_content">
   <img src="uploading/snapshot/<?php echo $snap;?>" height="100" width="177"></img>
   <p> <a href="watch.php?id=<?php echo $vid;?>&cat_id=<?php echo $rec_catid;?>"><?php echo $video;?></a></p></div>
   <?php
   }
   }
   ?>
<?php
}
?>
</div>
</div>
