<?php
    function integerCheck($errno, $errstr) {
        echo "<b>Error:</b> [$errno] $errstr<br>";
        die();
    }

?>

<?php
    if(empty($_POST['A']) && empty($_POST['B'])){
        trigger_error("A and B can't be Empty");
        die();
    }

    $a = $_POST['A'];
    $b = $_POST['B'];

    set_error_handler("integerCheck",E_USER_WARNING);
    
    if(!is_int($a) && !is_int($b)){
        $error = "<span style='font-size:18px;font-weight:500;color:red;'>$a and $b are of type ".gettype($a)." Expecting Integer</span>";
        trigger_error($error);?>
        <br>
        <form action="mail.php" method="post">
            <button type="submit"> Notify Master?</button>
        </form>
    <?php }
?>

