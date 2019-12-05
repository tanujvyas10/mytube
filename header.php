<html>
<head>
<?php
 session_start();
include('inc/connection.php');
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
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
<body>
<link rel="stylesheet" href="css/style.css" type="text/css">

<div id="main_container">
<div id="container">
<div id="logo"><img src="icons/logo.png" width="93" height="39"> <button id="hide"><img src="icons/Menu.png"></button>

</div>

  <div id="search1"> <div class="content">
<input type="text" name="search" class="search" id="textbox"><input type="submit" value="" class="button"></div><div id=result></div></div>
   <?php
          if(isset($_SESSION['user']))
	 {
          echo $_SESSION['user'];
       }
    ?>
    <div id="login"><a href="uploading/index.php"><input type="submit" value="Upload" class="button1" ></a>&nbsp; &nbsp;
    <?php
     if(!isset($_SESSION['user']))
	 {
	 ?>
  <a href="user/loginpage.php"><input type="submit" value="login" class="button1"></a></div></div>
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
</body>
</html>