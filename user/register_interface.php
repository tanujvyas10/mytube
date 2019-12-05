<?php
include('../inc/connection.php');
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$month=$_POST['month'];
$date=$_POST['date'];
$year=$_POST['year'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$country=$_POST['location'];
if($cpass==$pass)
{
echo $query="insert into user_record (firstname ,lastname ,email ,password,dob,gender ,mobile ,country)
VALUES ('$firstname','$lastname','$email','$pass',date('$month $date $year'),'$gender','$mobile','$country')";
$res=mysqli_query($query);
echo "you are registred successfully";
die("!could not inserted".mysqli_error());
}
else
{
echo "!oops Password Not Match";
}
?>
