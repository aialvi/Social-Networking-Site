<?php
$con = mysqli_connect("localhost","root","","social");

if(mysqli_connect_errno()){
    echo "failed to connect: " . mysqli_connect_errno();
}

$fname = ""; // First Name
$lname = ""; // Last Name
$em = ""; // Email
$em2 = ""; // Email Confirmation
$password = ""; // Password
$date = ""; // Sign up date
$password2 = ""; // Password Confirmation

if(isset($_POST['register_button'])){
    
    //Registration form values

    //first Name
    $fname = strip_tags($_POST['reg_fname']); //removes html tags
    $fname = str_replace(' ', '', $fname); // removes space
    $fname = ucfirst(strtolower($fname)); // capitalize first letter

    //Last Name
    $lname = strip_tags($_POST['reg_lname']); //removes html tags
    $lname = str_replace(' ', '', $lname); // removes space
    $lname = ucfirst(strtolower($lname)); // capitalize first letter
    $

    //Email
    $em = strip_tags($_POST['reg_email']); //removes html tags
    $em = str_replace(' ', '', $em); // removes space
    $em = ucfirst(strtolower($em)); // capitalize first letter

    //Email 2

    $em2 = strip_tags($_POST['reg_email2']); //removes html tags
    $em2 = str_replace(' ', '', $em2); // removes space
    $em2 = ucfirst(strtolower($em2)); // capitalize first letter

    //password
    $password = strip_tags($_POST['reg_password']); //removes html tags
    $password2 = strip_tags($_POST['reg_password2']); //removes html tags

    $date = date("Y-m-d"); //Current date

    if($em == $em2){
        // check if email is in valid format
        if(filter_var($em, FILTER_VALIDATE_EMAIL)){
            $em = filter_var($em, FILTER_VALIDATE_EMAIL);
        }
        else{
            echo "Invalid format";
        }
    }
    else
        echo "Emails don't match"; 
    

}




?>



<html>
<head>
<title> Welcome to Amiggo</title>
</head>
<body>

<form action="register.php" method="post">
    <input type="text" name="reg_fname" placeholder="First Name" required> 
    <br>   
    <input type="text" name="reg_lname" placeholder="Last Name" required>
    <br>
    <input type="email" name="reg_email" placeholder="Email" required> 
    <br>   
    <input type="email" name="reg_email2" placeholder="Confirm Email" required>
    <br>
    <input type="password" name="reg_password" placeholder="Password" required> 
    <br>   
    <input type="password" name="reg_password2" placeholder="Confirm Password" required>
    <br>
    <input type="submit" name="register_button" placeholder="First Name" required> 
    <br>   
    
   
</form>


</body>
</html> 