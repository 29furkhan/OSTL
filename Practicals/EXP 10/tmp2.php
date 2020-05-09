
<?php
    $nameout = $_POST['name'];
	$emailout = $_POST['email'];
	$ageout = $_POST['age'];
	$casidout = $_POST['casid'];

	$dataout = array(
		'name' => $nameout,
		'age' =>$ageout,
		'email' =>$emailout,
		'casid' =>$casidout
    );
    
    $conn = new mysqli("localhost", "root", "","tmp");
    $sql = "INSERT INTO data1 values('$nameout', '$emailout', '$ageout','$casidout')";
            
    if ($conn->query($sql) === TRUE) {
        echo "Data Inserted Successfully";
    } 

?>