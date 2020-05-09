<?php
echo "<hr style='border:2px solid black;'>";
echo "<br>Demonstration of addcslashes()<br>";
$str = addcslashes("Hello World!","W");
echo($str);
echo "<hr style='border:2px solid black;'>";

echo "<br>Demonstration of addslashes()<br>";
$str = addslashes('What does "yolo" mean?');
echo($str);
echo "<hr style='border:2px solid black;'>";

echo "<br>Demonstration of bin2hex()<br>";
$str = bin2hex("Hello World!");
echo($str);
echo "<hr style='border:2px solid black;'>";

echo "<br>Demonstration of chop()<br>";
$str = "Hello World!";
echo $str . "<br>";
echo chop($str,"World!");
echo "<hr style='border:2px solid black;'>";

echo "<br>Demonstration of chr()<br>";
echo chr(52) . "<br>"; // Decimal value
echo chr(052) . "<br>"; // Octal value
echo chr(0x52) . "<br>"; // Hex value
echo "<hr style='border:2px solid black;'>";

echo "<br>Demonstration of chunk_split()<br>";
$str = "Hello world!";
echo chunk_split($str,1,".");
echo "<hr style='border:2px solid black;'>";

echo "<br>Demonstration of convert_cyr_string()<br>";
$str = "Hello world! æøå";
echo $str . "<br>";
echo convert_cyr_string($str,'w','a');
echo "<hr style='border:2px solid black;'>";

echo "<br>Demonstration of convert_uudecode()<br>";
$str = ",2&5L;&\@=V]R;&0A `";
echo convert_uudecode($str);
echo "<hr style='border:2px solid black;'>";

echo "<br>Demonstration of crc32()<br>";
$str = crc32("Hello World!");
printf("%u\n",$str);
echo "<hr style='border:2px solid black;'>";

echo "<br>Demonstration of implode()<br>";
$arr = array('Hello','World!','Beautiful','Day!');
echo implode("%",$arr);
echo "<hr style='border:2px solid black;'>";

echo "<br>Demonstration of join()<br>";
$arr = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr);
echo "<hr style='border:2px solid black;'>";

echo "<br>Demonstration of lcfirst()<br>";
echo lcfirst("Hello world!");
echo "<hr style='border:2px solid black;'>";

echo "<br>Demonstration of levenshtein()<br>";
echo levenshtein("Hello World","ello World");
echo "<br>";
echo levenshtein("Hello World","ello World",10,20,30);
echo "<hr style='border:2px solid black;'>";

echo "<br>Demonstration of md5()<br>";
$str = "Hello";
echo md5($str);
echo "<hr style='border:2px solid black;'>";

echo "<br>Demonstration of ord()<br>";
echo ord("h")."<br>";
echo ord("hello")."<br>";
echo "<hr style='border:2px solid black;'>";

echo "<br>Demonstration of rtrim()<br>";
$str = "Hello World!";
echo $str . "<br>";
echo rtrim($str,"World!");
echo "<hr style='border:2px solid black;'>";

echo "<br>Demonstration of str_pad()<br>";
$str = "Hello World";
echo str_pad($str,20,".");
echo "<hr style='border:2px solid black;'>";

echo "<br>Demonstration of str_repeat()<br>";
echo str_repeat("Wow",13);
echo "<hr style='border:2px solid black;'>";

echo "<br>Demonstration of str_replace()<br>";
echo str_replace("world","Peter","Hello world!");
echo($str);
echo "<hr style='border:2px solid black;'>";

echo "<br>Demonstration of strcmp()<br>";
echo strcmp("Hello world!","Hello world!");
echo "<hr style='border:2px solid black;'>";

echo "<br>Demonstration of strip_tags()<br>";
echo strip_tags("Hello <i>world!</i>");
echo "<hr style='border:2px solid black;'>";

echo "<br>Demonstration of strrev()<br>";
echo strrev("Hello World!");
echo "<hr style='border:2px solid black;'>";

?>