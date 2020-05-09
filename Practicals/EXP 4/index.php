<?php
echo "<hr style='border:2px solid black;'>";
echo "Demonstration of array_change_key_case()";
echo "<br><br>Given Array is : ";
$arr = array("name"=>'Furkhan','RoLl'=>'63');
print_r($arr);
echo "<br><br>Array After array_change_key_case() is : ";
print_r(array_change_key_case($arr,CASE_UPPER));
echo "<hr style='border:2px solid black;'>";

echo "Demonstration of array_column()";
$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Furkhan',
    'last_name' => 'Shaikh',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Prashant',
    'last_name' => 'Phulari',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Mayuresh',
    'last_name' => 'Pophale',
  )
);

$last_names = array_column($a, 'last_name');
echo "<br>Original Array is <br>";
print_r($a);
echo "<br>";
echo "<br>Array after Function is <br>";
print_r($last_names);
echo "<hr style='border:2px solid black;'>";

echo "Demonstration of array_combine()";
echo "<br><br>Given Arrays are : <br>";
$arr1 = array("name","roll");
print_r($arr1);
$arr2 = array("Furkhan","Shaikh");
print_r($arr2);
echo "<hr style='border:2px solid black;'>";

echo "Demonstration of array_count_values()<br>";
print_r(array_count_values($arr));
echo "<hr style='border:2px solid black;'>";

echo "Demonstration of array_diff()";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
echo "<br>";
print_r($a1);echo " - "; print_r($a2); echo " = "; print_r($result);
echo "<hr style='border:2px solid black;'>";

echo "Demonstration of array_diff_assoc()<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue");
print_r($a1);
print_r($a2);
$result=array_diff_assoc($a1,$a2);
print_r($result);
echo "<hr style='border:2px solid black;'>";

echo "Demonstration of array_diff_key()<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","c"=>"blue","d"=>"pink");

$result=array_diff_key($a1,$a2);
print_r($result);
echo "<hr style='border:2px solid black;'>";

echo "Demonstration of array_fill()<br>";
$a1=array_fill(3,4,"abc");
print_r($a1);
echo "<hr style='border:2px solid black;'>";

echo "Demonstration of array_flip()<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=array_flip($a1);
print_r($a1);
echo "<br>";
print_r($result);
echo "<hr style='border:2px solid black;'>";

echo "Demonstration of array_intersect()<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_intersect($a1,$a2);
print_r($a1);
echo "<br>";
print_r($a2);
echo "<br>";
print_r($result);
echo "<hr style='border:2px solid black;'>";

echo "Demonstration of array_keys()<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
print_r(array_keys($a));
echo "<hr style='border:2px solid black;'>";


echo "Demonstration of array_flip()<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=array_flip($a1);
echo "<br>Before Flip<br>";
print_r($a1);
echo "<br><br>After Flip<br>";
print_r($result);
echo "<hr style='border:2px solid black;'>";


echo "Demonstration of array_pad()<br>";
$a=array("red","green");
print_r(array_pad($a,5,"blue"));
echo "<hr style='border:2px solid black;'>";

echo "Demonstration of array_pop()<br>";
$a=array("red","green","blue");
array_pop($a);
print_r($a);
echo "<hr style='border:2px solid black;'>";

echo "Demonstration of array_product()<br>";
$a=array(5,5);
print_r($a);
echo " : ".(array_product($a));
echo "<hr style='border:2px solid black;'>";

echo "Demonstration of array_product()<br>";
$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);
echo "<hr style='border:2px solid black;'>";

?>