<?php
    include("startSession.php");
    include("connection.php");
    $courseTitle=substr($_POST['courseTitle'],0,strpos($_POST['courseTitle'],"/"));
    // $query="INSERT INTO submissions (ID_A,ID_U,submitTime,fileDirectory) VALUES(".$_POST['ID_A'].",".$_SESSION['ID_U'].",".time().",/upload/".$_POST['actType']."/$courseTitle/".basename($_FILES["file"]["name"]).")";
    $startdate=isset($_POST['isStartdate'])?$_POST['startdate']:"null";
    $duedate=isset($_POST['isDuedate'])?$_POST['duedate']:"null";
    $topic=$_POST['topic'];
    $query="INSERT INTO submissions (ID_AT,ID_C,dateOpen,dateClose,submissions,title,topic,fileDir) VALUES(".$_POST['ID_A'].','.$_POST['ID'].",$startdate,$duedate,0,".$_POST['title'].",$topic".",'/upload/".$_POST['actType']."/$courseTitle/".basename($_FILES["file"]["name"])."')";
    $conn->query($query);

    $target_dir="../upload/".$_POST['actType']."/$courseTitle/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    if (!file_exists($target_file)) {
        mkdir($target_dir, 0777, true);
    }
    $fileType=pathinfo($target_file,PATHINFO_EXTENSION);
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
?>
