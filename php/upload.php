<!-- connecting with DB -->
<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  include_once "conn.php";
  include_once "update.php";



  // <!-- PHP code to upload data and store on DB -->

  if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $name = $_POST['user_name'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $num = $_POST['number'];
    $gender = $_POST['gender'];
    $jobrole = $_POST['ocupation'];
    $exam = $_POST['exam'];
    $gpa = $_POST['gpa'];
    $pass_year = $_POST['pass_year'];
    $dep = $_POST['department'];
    $img = $file_up_name;
    
    echo $sql = "INSERT INTO candidates (uname, dob, email, num, gender, jobrole, exam, gpa, pass_year, dep,pic) VALUES ('$name', '$dob', '$email', '$num', '$gender', '$jobrole', '$exam', '$gpa', '$pass_year', '$dep', '$img')";

    mysqli_query($conn,$sql);
    

  }


?>