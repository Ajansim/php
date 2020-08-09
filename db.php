<?php
    $sr = "localhost";
    $user = "root";
    $pass = "";
    $db = "akon";
    $conn = new mysqli($sr,$user,$pass,$db);
    if($conn->connect_error){
        die("Error: We have got a problem".$conn->connect_error);
    }else{echo "CONNECTED <br>";}

?>