<?php
session_start();
include('../inc/connection.php');
$email=$_POST['email'];
$pass=$_POST['pass'];
if(isset($_POST['button']))
	{
			$result="select *from user_record where email='$email' and password='$pass'";
			$res=mysqli_query($result);
			$row=mysqli_num_rows($res);
			if($row==1)
			{
			
				$_SESSION[user]=$email;
				$_SESSION[logged]=true;
				echo"<h1>you have loged in successfully</h1>";
				echo "<script>location.href='../index.php'</script>";
			}
					else
			{
				echo "wrong pawssword or username, please try again";
				echo "<script>location.href='loginpage.php'</script>";
			}
		}
			
?>			