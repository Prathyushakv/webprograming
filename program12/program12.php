<html>
<head>
<title>indian cricket players</title>
<style>
table{
width:50%;
border-collapse:collapse;
margin:20px auto;
}
th,td{
padding:10px;
text-align:crnter;
border:1px solid black;
}
th{
background-color:lightgrey;
}
</style>
</head>
<body>
<h2 align="center">list of indian cricket players</h2>
<?php
$players=array("Virat kohli",
		"Rohith sharma",
		"Sachin Tendulkar",
		"MS dhoni",
		"Shikhar dhawan",
		"KL rahul"
		);
echo"<table>";
echo"<tr><th>S.No</th><th>Player Name</th></tr>";
foreach($players as $x=>$player)
{
echo"<tr><td>".($x+1)."</td><td>".$player."</td></tr>";
}
echo"</table>";
?>
</body>
</html> 
