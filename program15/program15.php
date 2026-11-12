<!DOCTYPE html>
<html>
<head>
<style>
div{
width:150px;
height:200px;
margin:auto;
margin-top:20px;
}
h2{
text-align:center;
}
</style>
</head>
<body>
<h2>Registration form</h2>
<div>
<form method="POST" action="#">
<label for="name">Name:</label>
<input type="text"name="name" id="name"><br>
<label for="email">Email:</label>
<input type="text" name="email" id="email"><br>
<label for="mobile">Mobile:</label>
<input type="text"name="mobile" id="mobile"><br>
<label for="password">Password:</label>
<input type="password" name="password" id="password"><br><br>
<input type="submit" value="register"><br><br><br>
</form>
</div><br><br><br>
<center>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
if(empty($_POST["name"]))
{
echo"<script>alert('name is requird')</script>";
}
else if(!preg_match("/^[a-zA-Z]*$/",$_POST["name"]))
{
echo"<script>alert('enter your name correctly')</script>";
}
else if(empty($_POST["email"]))
{
echo"<script>alert('email is required')</script>";
}
else if(!preg_match("/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,}$/",$_POST["email"]))
{
echo"<script>alert('email is not correct format')</script>";
}
else if(empty($_POST["mobile"]))
{
echo"<script>alert('mobile is required')</script>";
}
else if(strlen($_POST["mobile"])!=10)
{
echo"<script>alert('mobile number should be 10 number')</script>";
}
else if(empty($_POST["password"]))
{
echo"<script>alert('password is required')</script>";
}
else if(strlen($_POST["password"])<8)
{
echo"<script>alert('password must be atleast 8 characters');</script>";
}
else if(!preg_match("/^[a-zA-Z]+@[0-9]*$/",$_POST["password"]))
{
echo"<script>alert('password is not correct format')</script>";
}
else
{
echo"<h3>Form Submitted</h3>";
echo"<p><strong>Name:</strong>".$_POST["name"]."</p>";
echo"<p><strong>Email:</strong>".$_POST["email"]."</p>";
echo"<p><strong>Mobile:</strong>".$_POST["mobile"]."</p>";
}
}
?>
</center>
</body>
</html>

