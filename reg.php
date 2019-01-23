<?php include('signup_process.php'); ?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>REGSTRATION Form</title>
  
  
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
  <link rel="stylesheet" href="CSS/form.css">
  <script src="confirm_login.js"></script>

  
</head>


<body>

    <form name="regform" onsubmit="return formValidation();" method="post" action="">
    <?php include('errors.php'); ?>
    <div class="login-wrap">
    
        <div class="login-html">
            
		<input id="tab-1" type="radio" name="tab" class="sign-in" ><label for="tab-1" class="tab"><a href="login.php">Sign In</a></label>
        
		<input id="tab-2" type="radio" name="tab" class="sign-up"checked><label for="tab-2" class="tab"><a href="reg.php">Sign UP</a></label>
            <div class="login-form">
                
                <div class="sign-in-htm">
                    
                    <div class="group">
                        <label for="user" class="label">UserNAME</label>
                        <input id="user" type="text" class="input" value="<?php echo $username; ?>" name="user" placeholder=" Enter USER Name"  >
                    </div>

                    <div class="group">
                        <label for="phone" class="label">PHONE</label>
                        <input id="phone" type="tel" class="input"value="<?php echo $phone; ?>" name="phone" placeholder=" Enter PHONE"> 
                    </div>

                    <div class="group">
                        <label for="country" class="label">COUNTRY</label>
                        <input id="country" type="text" class="input" value="<?php echo $country; ?>" name="country" placeholder=" Enter COUNTRY" >
                    </div>

                    <div class="group">
                        <label for="city" class="label">CITY</label>
                        <input id="city" type="text" class="input" value="<?php echo $city; ?>" name="city" placeholder=" Enter CITY">
                    </div>

                    <div class="group">
                        <label for="email" class="label">EMAIL</label>
                        <input id="email" type="email" class="input" value="<?php echo $email; ?>" name="email" placeholder=" Enter EMAIL">
                    </div>

                    <div class="group">
                        <label for="password" class="label">Password</label>
                        <input id="password" type="password" class="input" data-type="password" value="<?php echo $password; ?>" name="password"  placeholder=" Enter PASSWORD">
                    </div>
                    
                    <div class="group">
                            <label for="ppassword_2" class="label">RE-Password</label>
                            <input id="password_2" type="password" class="input" data-type="password" name="password_2"placeholder=" Enter CONFIRM PASSWORD" >
                        </div>
                   
                    <div class="group">
                        <input type="submit" class="button" value="Sign up" name="reg_user">
                    </div>
                    
                    <div class="foot-lnk">
					<a href="index.php">IF DO YOU WANT TO GO TO HOME PAGE</a>
				    </div>
                
				
			

                
                </div>
    </form>






</body>
</html>

























