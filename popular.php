<link rel="stylesheet" href="css/style.css" type="text/css"  /> 
<div id="page-container">
<?php 
include('header.php');
include('inc/connection.php');
?>
 <div id="see_more_container">
 <?php
   $query="select *from record order by popularity DESC limit 30";
   $res=mysqli_query($query);
   while($row=mysqli_fetch_array($res))
   {
   $vid=$row['vid'];
   $cat_id=$row['category_id'];
   $video=$row['video'];
   $snap=$row['snap'];
   ?>
      <div id="seemore_video_content">
   <img src="uploading/snapshot/<?php echo $snap;?>" height="100" width="177"></img>
   <p> <a href="watch.php?id=<?php echo $vid;?>&cat_id=<?php echo $category_id;?>"><?php echo $video;?></p>
   </div>
   <?php
   }
?>
</div>
 <?php
	include('/inc/footer.php');
	?>
</div>