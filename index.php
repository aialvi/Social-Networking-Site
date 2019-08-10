<?php
$con = mysqli_connect("localhost","root","","social");

if(mysqli_connect_errno()){
    echo "failed to connect: " . mysqli_connect_errno();
}

$query = mysqli_query($con, "INSERT INTO test VALUES('','Alif')");
?>


<html>
<head>
<title>Amiggo | Get Social</title>
</head>
<body>



</body>
</html> 