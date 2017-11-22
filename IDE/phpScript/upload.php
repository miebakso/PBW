<?php
    include("startSession.php");
    include("connection.php");
    $courseTitle=substr($_POST['courseTitle'],0,strpos($_POST['courseTitle'],"/"));
    $query="INSERT INTO submissions (ID_A,ID_U,submitTime,fileDirectory) VALUES(".$_POST['ID_A'].",".$_SESSION['ID_U'].",".time().",/upload/".$_POST['actType']."/$courseTitle/<nama_file>";
    echo $query;

?>