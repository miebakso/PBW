<?php
    //Create connection
    //Urutan parameter mysqli(server,username,password,database)
    $conn=new mysqli("localhost", "root", "", "ide");

    //Check connection
    if($conn->connect_errno){
        echo "Failed to connect.";
    }
?>

