<?php
    include_once('db.php');
    echo "<h1>Thank  you</h1>";
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $title = $_POST['title'];
        $contents = $_POST['contents']; 

        $di = "INSERT INTO posts(title,content) VALUES ('$title','$contents')";

        if($conn->query($di)== TRUE){
            echo "DONE";
        }else{
            echo "Not yet";
        }
    }else{
        
    }
    $conn->close();


?>