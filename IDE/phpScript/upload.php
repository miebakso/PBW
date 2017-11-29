<?php
    include("startSession.php");
    include("connection.php");
    $courseTitle=substr($_POST['courseTitle'],0,strpos($_POST['courseTitle'],"/"));
    // $query="INSERT INTO submissions (ID_A,ID_U,submitTime,fileDirectory) VALUES(".$_POST['ID_A'].",".$_SESSION['ID_U'].",".time().",/upload/".$_POST['actType']."/$courseTitle/".basename($_FILES["file"]["name"]).")";
    $startdate=isset($_POST['isStartdate'])?$_POST['startdate']:"NULL";
    $startdate = strtotime($startdate);
    $startdate = strtr($startdate, '/', '-');
    $startdate = date('Y-m-d',  $startdate);
    $startdate="'".$startdate."'";


    $duedate= isset($_POST['isDuedate'])?$_POST['duedate']:"NULL";
    $duedate = strtotime($duedate);
    $duedate = strtr($duedate, '/', '-');
    $duedate = date('Y-m-d',  $duedate);
    $duedate="'".$duedate."'";
    $topic=$_POST['topic'];
    
    $query="INSERT INTO activities (ID_AT,ID_C,dateOpen,dateClose,submissions,title,topic,fileDir) VALUES(".$_POST['ID_A'].','.$_POST['ID'].",$startdate,$duedate,0,'".$_POST['title']."',$topic".",'/upload/".$_POST['actType']."/$courseTitle/".basename($_FILES["file"]["name"])."')";
    echo $query;
    if($conn->query($query)){
        $target_dir="../upload/".$_POST['actType']."/$courseTitle/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $fileType=pathinfo($target_file,PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
        header('Location:'."../pages/lecturer/course.php?&id=".$_POST['ID']."&courseTitle=".$_POST['courseTitle']);
    }
    
?>
