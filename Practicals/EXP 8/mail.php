<?php
//error handler function
function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr<br>";
  echo "Webmaster has been notified";
  error_log("Error: [$errno] $errstr",1,
  "29furkhanshaikh@gmail.com","From: furkhan1999@gmail.com");
}

//set error handler
set_error_handler("customError",E_USER_WARNING);
$error = "Expecting Integer";
trigger_error($error,E_USER_WARNING);
?>