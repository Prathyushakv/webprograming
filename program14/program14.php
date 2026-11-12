<html>
<head>
<title>Electricity bill</title>
</head>
<body>
<center>
<h2>Electricity bill</h2>
<form name="form"action=""method="POST">
<label for="name">Enter your name:</label><br>
<input type="text" name="name"><br><br>
<label for="units">How muchunits are used</label><br>
<input type="number" name="unit"><br><br><br>
<input type="submit" value="submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name=$_POST["name"];
$units=$_POST["unit"];
$rate1=0.50;
$rate2=1;
$rate3=1.5;
if(empty($name))
{
echo"<script>alert('please enter your name correctly')</script>";
}
else if(empty($units))
{
echo"<script>alert('units must be required')</script>";
}
else
{
if($units<=100)
{
$bill=$units*$rate1;
}
else if($units<=2000)
{
$bill=$units*$rate3;
}
echo"Name:$name<br>";
echo"Electricity bill:$bill";
}
}
?>
</center>
</body>
</html>

