<?php  session_start();
  
  if(isset($_POST['submit'])){
	$bring = $_POST['submit'];
	$fullname = $_POST['fullname'];
	$number = $_POST['number'];
    $Mail = $_POST['email'];
    $city = $_POST['city'];
	$_SESSION['name'] = $fullname;
	$_SESSION['number'] = $number;
    $_SESSION['email'] = $Mail;
    $_SESSION['city'] = $city;
	header('location:dashBoard.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp|Form</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<main>
            <div class="info">
                    <h3>Create </h3> 
                    <h3>Your Account</h3>
            </div>  
        <div class="login-form form-control">
            <form  method="POST" id="form">
                <div id="input" class="input4"><input type="text" name="fullname" id="name" placeholder="Full Name" autofocus></div>
                <div id="input" class="input1"><input type="text" name="number" id="number" placeholder="Phone Number" autofocus></div>
                <div id="input" class="input2"><input type="email" name="email" id="email" placeholder="Email" autofocus></div>
                <div id="input" class="input5"><input type="city" name="city" id="city" placeholder="City" autofocus></div>
                <div id="input" class="input3"><input type="password" name="pswd" id="password" placeholder="Password" autofocus></div>

                <div class="form-break">
                    <p><a href="forgotaccount.html">Forgot Account?</a></p>
                    <input type="submit" value="SIGN UP" id="signup" name='submit'>
                </div>
            </form>
            <div class="line">
                    <hr style="width:220px; height:0;"> <p>or</p> <hr style="width:220px; height:0;">
            </div>
            <div class="icons">
                    <div class="fonts">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> </a> 
                            <a href="#"> <i class="fa fa-google" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a>
                    </div>
                    <p>Allready have an account? <a href="index.html">Login</a></p>
            </div>
            
        </div>
    </main> 
</body>
</html>