<?php
$text = $_POST['data'];

$file = fopen("readme.txt","a") or die("Unable to Open File");
$text = $text;
fwrite($file,"\n".$text."\n");
fclose($file);
header("Location: http://localhost/Furkhan/Practical_3_File_Handling/1.php"); 

?>