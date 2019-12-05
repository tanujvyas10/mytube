<?php
include('connection.php');
if($_POST)
{
$q=$_POST['search'];
$sql_res=mysqli_query("select *from record where name like '%$q%' or email like '%$q%'");
while($row=mysqli_fetch_array($sql_res))
{
$username=$row['name'];
$email=$row['email'];
$b_username='<strong>'.$q.'</strong>';
$b_email='<strong>'.$q.'</strong>';
$final_username = str_ireplace($q, $b_username, $username);
$final_email = str_ireplace($q, $b_email, $email);
?>
<div class="show" align="left">
<img src="author.PNG" style="width:50px; height:50px; float:left; margin-right:6px;" /><span class="name"><?php echo $final_username; ?></span>&nbsp;<br/><?php echo $final_email; ?><br/>
</div>
<?php
}
}
?>
