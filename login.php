<?php
include 'connection.php';


session_start();

// Check if the form is submitted
if (isset($_POST['submit'])) {


    // Get the form data
    $Fullname= $_POST['reg_id'];
    $Email = $_POST['reg_email'];
    $Password = $_POST['reg_pass'];
    $rewrite_password = $_POST['reg_department'];
    $error= array();

    //checking any duplicate value does exist
    $checkUser="SELECT * from registered_member where Email='$Email'";
    $resultn= mysqli_query($conn,$checkUser);
    $count = mysqli_num_rows($resultn);
    if ($count>0){
        echo "user already singned up";
    }

    
    else{

    // Insert the data into the database
    $sql = "INSERT INTO registered_member (Fullname, Email, Password, rewrite_password) VALUES ('$Fullname', '$Email','$Password','$rewrite_password')";
    $result = mysqli_query($conn, $sql);
    
    // Check if the data is inserted successfully
    if ($result) {
        $_SESSION['Fullname'] = $Fullname;
        header('location:index.php?Fullname='.$Fullname.'');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
}

// Close the database connection
mysqli_close($conn);
?>


<?php
//login part start from here 
include 'connection.php';

if(isset($_POST['submit'])){
   
    $Email=$_POST['log_mail'];
    $Password=$_POST['log_pass'];
    $sql = "SELECT * FROM registered_member WHERE Email='$Email' AND Password='$Password'";
    $result = mysqli_query($conn, $sql);

    // Check if there is a match
    if (mysqli_num_rows($result) == 1) {
      // Successful login
      $_SESSION['Fullname'] = $Fullname;
        header('location:index.php?Fullname='.$Fullname.'');
    } else {
      // Invalid username or password
      echo "Invalid username or password";
    }
}
mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="png" href="images/icon/android-chrome-512x512.png">
	<title>CSEasy/Login_SignUp</title>
	<link rel="stylesheet" type="text/css" href="loginStyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- It will redirect to the Home Page after submitting the form -->
  <script>
  $(document).ready(function(){
    $("form").submit(function(){
      alert("Great Job !");
    });
  });
  </script>
</head>
<body>
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" id="log" onclick="login()" style="color: #fff;">Log In</button>
				<button type="button" class="toggle-btn" id="reg" onclick="register()">Register</button>
			</div>
			<div class="social-icons">
				<img src="images/icon/fb2.png">
				<img src="images/icon/insta2.png">
				<img src="images/icon/tt2.png">
			</div>
			
			<!-- Login Form -->
			<form id="login" class="input-group" action="index.php">
				<div class="inp">
					<img src="images/icon/user.png"><input type="text" id="email" class="input-field" placeholder="User Email" name="log_mail" style="width: 88%; border:none;" required="required">
				</div>
				<div class="inp">
					<img src="images/icon/password.png"><input type="password" id="password" class="input-field" placeholder="Password" name="log_pass" style="width: 88%; border: none;" required="required">
				</div>
				<input type="checkbox" class="check-box">Remember Password
				<button type="submit" class="submit-btn" name="submit">Log In</button>
			</form>
<!--dhjfjhfjf-->

			<div class="other" id="other">
				<div class="instead">
					<h3>or</h3>
				</div>
				<button class="connect" onclick="google()">
					<img src="images/icon/google.png"><span>Sign in with Google</span>
				</button>
			</div>
			
			<!-- Registration Form -->
			<form id="register" class="input-group" method="post">
				<input type="text" class="input-field" placeholder="Full Name" name="reg_id" required="required">
				<input type="email" class="input-field" placeholder="Email Address" name="reg_email" required="required">
				<input type="password" class="input-field" placeholder="Create Password" name="reg_pass" required="required">
				<input type="password" class="input-field" placeholder="Confirm Password" name="reg_department" required="required">
				<input type="checkbox" class="check-box" id="chkAgree" onclick="goFurther()">I agree to the Terms & Conditions
				<button type="submit" id="btnSubmit" class="submit-btn reg-btn" name="submit" >Register</button>
			</form>
		</div>
		<script type="text/javascript" src="script.js"></script>
</body>
</html>