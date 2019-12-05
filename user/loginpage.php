<html lang="en"  class="body-error">
<head>
    <meta charset="utf-8">
    <title> Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link rel="stylesheet" href="../css/style.css" type="text/css" />
    <link href="../css/loginpage.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
  </head>
  <body>
  <div id="page-container">
  <div id="login_container">
   <?php
include("../inc/header.php");
?>
       <center> <div id="wrapper_login">
            <div class="form-login">
                <form action="user_login_interface.php" method="post" class="form-login"> 
                    <div class="content-login">
                    <div class="header">
                    <a href="../admin/admin_login.php">Admin</a>&nbsp;&nbsp;
                    Login</div>
                    
                    <div class="inputs">
                       <input name="email" type="text" placeholder="Email" />
                        <input name="pass" type="password" placeholder="Password" />
                    </div>
                    
                    <div class="link-1"><a href="register.php">Register</a></div>
                    <div class="link-2"><a href="#">Forgot Password?</a></div>
                    <div class="clear"></div>
                    <div class="button-login"><a href="login_interface.php"><input type="submit" name="button" class="" value="Sign In"></a></div>
                    </div>
                    
                    <div class="footer-login">
                     <div class="pull-left">Sing In With</div>
                     <div class="pull-right">
                       <ul class="social-links">
                          <li class="facebook"><a href="#"><span>facebook</span></a></li>
                          <li class="twitter"><a href="#"><span>twitter</span></a></li>
                          <li class="google-plus"><a href="#"><span>google</span></a></li>
                       </ul>
                     </div>
                     <div class="clear"></div>
                    </div>
                </form>

            </div>
     
             </div></center>
    </div>  
    <?php
	include('../inc/footer.php');
	?>
    </div>
    
   
    
    

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>


  </body>
</html>

