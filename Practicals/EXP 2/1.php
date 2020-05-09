
<?php
/* This Code Reads The Data From readme.txt and Prints Result into Browser*/
echo "<b><i>Demonstration of Readfile";
echo "<br><br>";
echo readfile("readme.txt");
echo "<br><br>";
echo "Demonstration of fopen, die and fread()<br><br>";
$file = fopen("readme.txt","r") or die("Unable to Open File");
echo fread($file,filesize("readme.txt"));
fclose($file);

$file = fopen("readme.txt","r") or die("Unable to Open File");
echo "<br><br>Now, We will read a file line by line using fgets() and use feof() to check end of file<br><br>";
while(!feof($file)){
	echo fgets($file);
	echo "<br>";
}
fclose($file);

echo "<br><br>Now, We will Update the Data of File Using TextField<br><br>";
?>
<html>
	<form action="another.php" method="POST">
		Enter HERE:<input type="text" name="data"/>
		<br>
		<input type="submit" value="Enter"/>
	</form>
</html>
<?php
$file = fopen("readme.txt","r") or die("Unable to Open File");
while(!feof($file)){
	echo fgets($file);
	echo "<br>";
}
fclose($file);
?>

