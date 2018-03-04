<?php 
include "connect.php";
session_start();
echo "Redirecting...";

$filename = $_FILES['picture1']['name'];
$filetmp = $_FILES['picture1']['tmp_name'];
$filesize = $_FILES['picture1']['size'];
$file_basename = basename($_FILES['picture1']['name']);


//echo $filename;

$dir = "../upload/seeker";
$final_dir = $dir.$file_basename;
move_uploaded_file($filetmp, $final_dir);



//$picture = $_POST['picture'];
// $city = "Indore";
//$check = $_POST['check'];

$mobile = $_SESSION['mobile'];
$query = "UPDATE jobseeker SET img_name='$file_basename', img_path='$final_dir' WHERE mobile = '$mobile';";
$result = mysqli_query($con,$query);

// echo $mobile;
// echo "             ".$query;
echo '</script>';
echo '<script language="javascript">';
echo 'window.location.replace("../html/trial_pro_seek.php")';
echo '</script>';

 ?>