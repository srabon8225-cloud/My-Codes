<?php
require_once '../../config/db.php';
if (isset($_POST['register'])){
    date_default_timezone_set('Asia/Dhaka');
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $terms = $_POST['terms'];
  $reg_time = date("y-m-d");
  $inputError = array();
  if(empty($full_name)){
    $inputError['full_name']="Full name is required";
  }
  if(empty($username)){
    $inputError['username']="Username is required";
  }
  if(empty($email)){
    $inputError['email']="Email is required";
  }
  if(empty($phone)){
    $inputError['phone']="Phone number is required";
  }
if(empty($password)){
    $inputError['password']="Password is required";
 }
 if(empty($confirm_password)){
    $inputError['confirm_password']="Confirm password is required";
 }
 if(empty($dob)){
    $inputError['dob']="Date of birth is required";
 }
//   $text = "My name is Srabon. I am in class 11 at madaripur govt. college. ";
// //   echo strlen($text);
// //   echo ucwords($text);
// //   echo ucfirst($text);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <link rel="stylesheet" href="css/registration.css">
</head>
<body>

    <div class="container">

        <div class="form-box">

            <h1>Create Account</h1>
            <p class="subtitle">Register your account to get started</p>

            <form action="register.php" method="POST">

                <div class="input-group">
                    <label for="fullname">Full Name</label>
                    <input
                        type="text"
                        id="full_name"
                        name="full_name"
                        placeholder="Enter your full name"
                        value ="<?php if(isset($full_name)){echo $full_name;}?>"
                        
                    >
                     <label style = "color:red" for =""><?php if(isset($inputError['full_name']))
                    {echo $inputError['full_name'];}?></label>
                </div>
               

                <div class="input-group">
                    <label for="username">Username</label>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Choose a username"
                        value ="<?php if(isset($username)){echo $username;}?>"
                    >
                    <label style = "color:red" for =""><?php if(isset($inputError['username']))
                        {echo $inputError['username'];}?></label>
                </div>

                <div class="input-group">
                    <label for="email">Email Address</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Enter your email"
                        value = "<?php if(isset($email)){echo $email;}?>"
                        
                    >
                    <label style = "color:red"for=""><?php if(isset($inputError ['email'])){echo $inputError ['email'];}?></label>
                </div>

                <div class="input-group">
                    <label for="phone">Phone Number</label>
                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        placeholder="Enter your phone number"
                        value = "<?php if(isset($inputError ['phone'])){echo $inputError ['phone'];}?>"
                    >
                    <label style = "color:red" for=""><?php if(isset($inputError['phone'])){echo $inputError ['phone'];}?></label>
                </div>

                <div class="row">

                    <div class="input-group">
                        <label for="password">Password</label>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Enter password"
                            value = "<?php if(isset($inputError ['password'])){echo $inputError ['password'];}?>"
                            
                        >
                        <label style = "color:red" for=""><?php if(isset($inputError['password'])){echo $inputError['password'];}?></label>
                    </div>

                    <div class="input-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input
                            type="password"
                            id="confirm_password"
                            name="confirm_password"
                            placeholder="Confirm password"
                            value = "<?php if(isset($inputError ['confirm_password'])){echo $inputError ['confirm_password'];}?>"
                        >
                        <label style = "color:red" for=""><?php if(isset($inputError['confirm_password'])){echo $inputError['confirm_password'];}?></label>
                    </div>

                </div>

                <div class="input-group">
                    <label for="gender">Gender</label>

                    <select id="gender" name="gender">
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="input-group">
                    <label for="dob">Date of Birth</label>
                    <input
                        type="date"
                        id="dob"
                        name="dob"
                        value = "<?php if(isset($inputError ['dob'])){echo $inputError ['dob'];}?>"
                    >
                    <label style = "color:red" for=""><?php if(isset($inputError['dob'])){echo $inputError['dob'];}?></label>
                </div>

                <div class="terms">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">
                        I agree to the Terms & Conditions
                    </label>
                </div>

                <button type="submit" name="register" class="register-btn">
                    Create Account
                </button>

                <p class="login-text">
                    Already have an account?
                    <a href="login.php">Login</a>
                </p>

            </form>

        </div>

    </div>

</body>
</html>