<?php
$conn = mysqli_connect("localhost","root","root","studentdb");

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];

$sql="INSERT INTO students(name,email,password,mobile)
VALUES('$name','$email','$password','$mobile')";

mysqli_query($conn,$sql);
echo "Registration Successful";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>

<style>

body{
font-family:Arial;
background:linear-gradient(to right,#b8c6db,#f5f7fa);
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.container{
background:white;
padding:40px;
border-radius:10px;
width:350px;
box-shadow:0 0 10px rgba(0,0,0,0.2);
}

input{
width:100%;
padding:10px;
margin-top:10px;
}

button{
width:100%;
padding:10px;
margin-top:20px;
background:green;
color:white;
border:none;
}

</style>

</head>

<body>

<div class="container">

<h2>Aditya Ghorpade Registration Form</h2>

<form method="POST">

<input type="text" name="name" placeholder="Name" required>

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<input type="text" name="mobile" placeholder="Mobile Number" required>

<button type="submit" name="submit">Register</button>

</form>

</div>

</body>
</html>