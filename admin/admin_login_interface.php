<?php
session_start();
include('../inc/connection.php');
$username=$_POST['username'];
$password=$_POST['pass'];
if(isset($_POST['login']))
{
       $result="select * from admin_record where username='$username' and password='$password'";
			$res=mysqli_query($result);
			$row=mysqli_num_rows($res);
   if($row==1)
			{

				$_SESSION['admin']=$username;
				$_SESSION['logged']=true;
				echo "<h1>you have loged in successfully</h1>";
				echo"<script>location.href='admin_category.php'</script>";
			}
	else
			{
				echo "wrong pawssword or username, please try again";
				/*echo"<script>location.href='admin_login.php'</script>";*/
			}
		}
?>