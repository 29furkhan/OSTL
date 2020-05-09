<?php
    $server = "localhost";
    $user = "root";
    $pass = "";

    $conn = new mysqli($server,$user,$pass,"OSTL");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   
    if(isset($_POST['insert']) and !empty($_POST['name']))
    {
        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $class = $_POST['class'];

        
        $sql = "INSERT INTO students values('$name', $roll, '$class')";

        if ($conn->query($sql) === TRUE) {
            echo "New record Inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
    }
    else if(isset($_POST['proc'])){
        $sql = "CALL GetStud()";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        ?>
            <table style="margin-top:20px;">
            <tr>
                <th>Name</th>
                <th>Roll</th>
                <th>Class</th>
            </tr>
       
            <?php 
            while($row = $result->fetch_assoc())
            {?>
                <tr>
                    <td><?php echo $row['Name'] ?></td>
                    <td><?php echo $row['Roll'] ?></td>
                    <td><?php echo $row['Class'] ?></td>  
                </tr>
            <?php
            }
        }
    }
    else if(isset($_POST['delete'])){
        $roll = $_POST['roll'];
        $sql = "delete from students where roll = $roll";
        if ($conn->query($sql) === TRUE) {
            echo "Record for $roll is Deleted  successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

?>

<html>
<head>
<style>
    table,th,td{
        border:1px solid black;
        border-collapse:collapse;
    }
</style>
</head>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Name: <input type="text" name="name" id=""/><br><br>
        Roll: <input type="number" name="roll" id=""/><br><br>
        Class: <input type="text" name="class" id=""/><br><br>
        <input type="submit" name="insert" value="Insert">
        <input type="submit" name="delete" value="Delete">
        <input type="submit" name="proc" value="CALL_PROCEDURE">
        
    </form>
</html>