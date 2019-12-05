 <?php
 session_start();?><head>
 <?php
	   include('inc/connection.php');
	   ?>
<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("ul").toggle();
  });
  $("#show").click(function(){
    $("ul").toggle();
  });
});
</script>
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
$(".search").keyup(function() 
{ 
var searchid = $(this).val();
var dataString = 'search='+ searchid;
if(searchid!='')
{
	$.ajax({
	type: "POST",
	url: "search.php",
	data: dataString,
	cache: false,
	success: function(html)
	{
	$("#result").html(html).show();
	}
	});
}return false;    
});

jQuery("#result").live("click",function(e){ 
	var $clicked = $(e.target);
	var $name = $clicked.find('.name').html();
	var decoded = $("<div/>").html($name).text();
	$('#searchid').val(decoded);
});
jQuery(document).live("click", function(e) { 
	var $clicked = $(e.target);
	if (! $clicked.hasClass("search")){
	jQuery("#result").fadeOut(); 
	}
});
$('#searchid').click(function(){
	jQuery("#result").fadeIn();
});
});
</script>
</head>

<link rel="stylesheet" href="css/style.css" type="text/css">
<div id="page-container">
<div id="container">
<div id="logo"><img src="icons/logo.png" width="93" height="39"> <button id="hide"><img src="icons/Menu.png"></button>
</div>

  <div id="search1"> <div class="content">
<input type="text" name="search" class="search" id="textbox"><input type="submit" value="" class="button"></div>
<div id=result></div></div>
 <div id="login">
     <?php
          if(isset($_SESSION['user']))
	 {
          echo $_SESSION['user'];
       }
          if(isset($_SESSION['user']))
	 {
	 ?>
 <a href="uploading/index.php"><input type="submit" value="Upload" class="button1" ></a> &nbsp; &nbsp;
  <?php
  }
  else
  {
  ?>
   <a href ="user/loginpage.php"><input type="submit" value="Upload" class="button1"></a> &nbsp; &nbsp;
    <?php
    }
  ?>
     <?php
     if(!isset($_SESSION['user']))
	 {
	 ?>
  <a href ="user/loginpage.php"><input type="submit" value="Login" class="button1"></a>
  <?php
  }
  else
  {
  ?>
   <a href ="user/user_logout.php"><input type="submit" value="Logout" class="button1"></a>
   <?php
   }
   ?>
 </div>
 </div>
  <div id="wrapper">
  <div id="left_container">
    <div id="frist_section"> <img src="icons/channel2.png" />&nbsp;&nbsp;what to Watch  </div>
    <div id="secound_section"><strong>Best of Mytube</strong> <ul><br />
											<a href="popular.php"><li><img src="icons/fav.png" />&nbsp;&nbsp;Popular</li></a>
											<a href="category.php?catid=<?php echo 101;?>"><li><img src="icons/music-record-xxl.png" />&nbsp;&nbsp;Music</li>
											<a href="category.php?catid=<?php echo 103;?>"><li><img src="icons/sport-xxl.png" />&nbsp;&nbsp;Sport</li>
											<a href="category.php?catid=<?php echo 104;?>"><li><img src="icons/games.png" />&nbsp;&nbsp;Funny</li>
											<li><img src="icons/MovieMaker.png" />&nbsp;&nbsp;Movies</li>
                                            <li><img src="icons/monitor-xxl.png" />&nbsp;&nbsp;Tv Shows</li>
										</ul><br><br>
    <strong>Channel for you</strong><ul><br/>
    										<li><img src="icons/Spotlight.png" />&nbsp;&nbsp;My Spotlight</li>
                                            <li><img src="icons/YouTube-Icon.png">&nbsp;&nbsp;Mytube Nation</li>
                                            <li><img src="icons/tv-512.png">&nbsp;&nbsp;WoW Tv Movies</li>
                                            <li><img src="icons/Cute-Ball-Favorites-icon.png">&nbsp;&nbsp;VikiTelenovelas</li>
                                          </ul>  
      </div>
	  </div>
      
      <div id="right_container">
      
<div id="add">  </div>
  
  <div id="main_section">
  <div id="video">
  <?php
  $query="select *from record order by popularity DESC limit 2";
  $res=mysqli_query($con,$query);
     while($row=mysqli_fetch_array($res))
   {
   $video_id=$row['vid'];
   $catid=$row['category_id'];
   $video=$row['video'];
   $snap=$row['snap'];?>+
   <a href="watch.php?id=<?php echo $video_id?>&cat_id=<?php echo $catid?>">
   <img width="99%" height="99%" src="uploading/snapshot/<?php echo $snap?> ">
</img> </a>

<?php
   }
   ?>
   </div>
   <div id="top_right"> <a href="watch.php?id=<?php echo $video_id?>&cat_id=<?php echo $catid?>">
   <img width="90%" height="30%" src="uploading/snapshot/<?php echo $snap?>"></img></a> 
   </div>
       </div>
   </div>
   
   <div id="video_container">
      <?php
       $query1="select *from category";
$res1=mysqli_query($con,$query1);
while($row1=mysqli_fetch_array($res1))
{
$catname=$row1['category_name'];
$catid=$row1['cid'];
?>
 <div id=cat_video_container><h2><?php echo $catname;?></h2>
  <?php
   $query2="select *from record order by vid";
   $res2=mysqli_query($con,$query2);
   $count=0;
   while($row2=mysqli_fetch_array($res2))
   {
   $snap=$row2['snap'];
   $vid=$row2['vid'];
   $vname=$row2['vname'];
   $rec_catid=$row2['category_id'];
   $snap=$row2['snap'];
   if($catid==$rec_catid)
   {
   $count=1+$count;
   if($count<=5)
   {
   ?>
   <p><div id="video_content">
   <img src="uploading/snapshot/<?php echo $snap;?>" height="100" width="177"></img>
   <p style="text-decoration:none;"><a href="watch.php?id=<?php echo $vid?>&cat_id=<?php echo $rec_catid?>"><?php echo $vname;?></a></p>
   </div></p> 
   <?php
   }
   }
   }
   ?>
   <div id="see_more"><a href="category.php?catid=<?php echo $catid;?>"><h3>see more</h3></a></div>
</div>
<?php
}
?> 
</div>
<div id="footer">
<table>
  <tr>
    <th ><img src="icons/Android.png" width="60%" height="60%"></th>
    <th ><img src="icons/Facebook.png" width="60%" height="60%"></th>
    <th ><img src="icons/Blogger.png" width="60%" height="60%"></th>
    <th ><img src="icons/Dropbox.png" width="60%" height="60%"></th>
    <th scope="col"><img src="icons/Google+.png" width="60%" height="60%"></th>
  </tr>
</table>
</div>
</div>
</div>
