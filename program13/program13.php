<?php
$names=array(
	"s1"=>"sam",
	"s2"=>"amal",
	"s3"=>"deepu",
	"s4"=>"babu"
	);

echo"<center>";
echo"<h2>Original student list</h2>";
echo"<pre>";
print_r($names);
echo"</pre>";
asort($names);
echo"<h2>Asscending order</h2><br>";
echo"<pre>";
print_r($names);
echo"</pre>";
arsort($names);
echo"<h2>descending order:</h2><br>";
echo"<pre>";
print_r($names);
echo"</pre>";
echo"</center>";
?>
