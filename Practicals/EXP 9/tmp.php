<?php
class emailException extends Exception {
  public function errorMessage() {
    //error message
    $errorMsg = '<span style="color:red;"> Hey, We Found an Error on line '.$this->getLine().' in '.$this->getFile()
    .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address </span>';
    return $errorMsg;
  }
}

function handleAllExceptions($exception) {
    echo "<b>Exception:</b> " . $exception->getMessage();
  }

set_exception_handler('handleAllExceptions');


$email = $_POST['email'];
$name = $_POST['name'];

try {
  //check if
  if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
    //throw exception if email is not valid
    throw new emailException($email);
  }

  if(strpos($email, "gmail") == FALSE){
    throw new Exception("Email should be of gmail domain");
  }

  if(strlen($name)<1){
    throw new Exception('Name is a Mandotory Field');
  }

}
catch (emailException $e) {
  //display custom message
  echo $e->errorMessage();
}
?>