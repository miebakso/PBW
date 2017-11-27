<?php
    include("startSession.php");
    include("connection.php");
    $courseTitle=substr($_POST['courseTitle'],0,strpos($_POST['courseTitle'],"/"));
    $query="INSERT INTO submissions (ID_A,ID_U,submitTime,fileDirectory) VALUES(".$_POST['ID_A'].",".$_SESSION['ID_U'].",".time().",/upload/".$_POST['actType']."/$courseTitle/".basename($_FILES["file"]["name"]).")";

    $target_dir="../upload/".$_POST['actType']."/$courseTitle/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    if (!file_exists($target_file)) {
        mkdir($target_dir, 0777, true);
    }
    $fileType=pathinfo($target_file,PATHINFO_EXTENSION);
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
?>