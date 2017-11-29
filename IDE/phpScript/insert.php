<?php
	include("startSession.php");
  include("connection.php");



  $ID_A = $_POST['ID_A'];
  //$ID_C = $_POST['ID_C'];
  $ID_U = $_SESSION['ID_U'];
  $course_code = $_POST['course_code'];
  
  $date = date("Y-m-d h:i:sa");
  
  $name = $_FILES['file']['name'];
  $temp_name = $_FILES['file']["tmp_name"];
  $path = "/upload/assignments/$course_code/answer/";
  $final = "$path$ID_U-$name";
  echo $path."<br>";
  $query="INSERT INTO submissions (ID_A, ID_U, submitTime,fileDirectory) VALUES ($ID_A,$ID_U,'$date','$final')";
  
  echo $query;
  if($conn->query($query)){
      $target_dir= "../".$path;
      $target_file = "../".$final;
      if (!file_exists( $target_dir)) {
          mkdir($target_dir, 0777, true);
      }
      $fileType=pathinfo($target_dir,PATHINFO_EXTENSION);
      move_uploaded_file($temp_name, $target_file);
      header('Location:'."../pages/student/submit.php?&ID_A=$ID_A");

      $query = "UPDATE activities SET submissions = submissions + 1 WHERE ID_A = $ID_A";
      $conn->query($query);
  }
  
?>