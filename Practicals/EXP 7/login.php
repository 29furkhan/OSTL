<?php
//login.php
session_start();
$connect = mysqli_connect("localhost", "root", "", "testing");
if(isset($_POST["username"]) && isset($_POST["password"]))
{
 $username = $_POST["username"];
 $password = $_POST["password"];
 $sql = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'";
 $result = mysqli_query($connect, $sql);
 $num_row = mysqli_num_rows($result);
 if($num_row > 0)
 {
  $data = mysqli_fetch_array($result);
  $_SESSION["username"] = $data["username"];
  echo $data["username"];
 }
}
?>