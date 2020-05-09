
<?php

if (isset($_FILES)) {
    $files = array();
    foreach ($_FILES as $name => $file){
    	// echo "Idhar B Aao";
        $file_name = $file['name'];
        $temp_name = $file['tmp_name'];
        $file_type = $file['type'];
        $path_parts = pathinfo($file_name);
        $ext = $path_parts['extension'];
        array_push($files, $file);
    }
    // echo $file_name;


    $to = $_POST['email'];
    $from = "furkhan1999@gmail.com";  //your website email type here
    $subject = $_POST['subject'];
    $message =  $_POST['body'];
    $headers = "From: $from";


    $semi_rand = md5(time());
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";


    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
    $message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";
    $message .= "--{$mime_boundary}\n";

    // preparing attachments
    for ($x = 0; $x < count($files); $x++) {
        $file = fopen($files[$x]['tmp_name'], "rb");
        $data = fread($file, filesize($files[$x]['tmp_name']));
        fclose($file);
        $data = chunk_split(base64_encode($data));
        $name = $files[$x]['name'];
        $message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" .
                "Content-Disposition: attachment;\n" . " filename=\"$name\"\n" .
                "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
        $message .= "--{$mime_boundary}\n";
    }
    // send

    $ok = mail($to, $subject, $message, $headers);
    if ($ok) {
        echo "<p style='color:green;tex-align:center'>mail sent to $to!</p>";
    } else {
        echo "<p>mail could not be sent!</p>";
    }
}
?>

