<?php include('login_process.php') ?>


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel="stylesheet" href="CSS/form.css">
    
    <script src="confirm_login.js"></script>
  
</head>

<body >
   



<form name="logform" onsubmit="return validate();"  method="post" action="">
	<?php include('errors.php'); ?>
    <div class="login-wrap">
    
	<div class="login-html">
        
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab"><a href="login.php">Sign In</a></label>
        
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"><a href="reg.php">Sign UP</a></label>
		<div class="login-form">
            
			<div class="sign-in-htm">
                
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input" name="user" placeholder=" Enter USER Name">
				</div>
                
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password " name="pass" placeholder=" Enter PASSWORD">
				</div>
                
				
                
				<div class="group">
					<input type="submit" name="login_user" class="button" value="Sign In">
				</div>
                
				<div class="hr"></div>
                
				<div class="foot-lnk">
					<a href="#">Forgot Password?</a>
				</div>
            
                <div class="foot-lnk">
					<a href="reg.php">NOT USER YET FOR SIGN UP</a>
				</div>
				
				<div class="foot-lnk">
					<a href="index.php">GO TO HOME PAGE</a>
				</div>
            </div>
            
            
            
            
			
        </div>
        
        
	</div>
</div>
  
    </form>
                
    






</body>
</html>