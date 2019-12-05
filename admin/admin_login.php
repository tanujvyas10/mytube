<link rel="stylesheet" href="../css/style.css" type="text/css" />
<div id="page-container">
<?php
include('header.php');
?>
<form action="admin_login_interface.php" method="post">
<link href="../css/admin_login.css " rel="stylesheet" type="text/css"/>
<table id="table1">
<tr style="border-bottom:1px solid #ccc;">
<td class="h3" colspan="2"><center>Login</center></td>
</tr>
<tr>
<td>Username</td>
<td><input type="text" class="textbox" name="username"/></td>
</tr>
<tr>
<td>Password</td>
<td><input type="text" class="textbox" name="pass"/></td>
</tr>
<tr>
<td colspan="2"><center><input type="submit" id="button" value="" name="login"/></a></center></td>
</tr>
</table>
</form>
 <?php
	include('../inc/footer.php');
	?>
</div>