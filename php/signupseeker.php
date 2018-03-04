<?php 

include "connect.php";
// if(isset($_POST['submit']))
{


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$ssc_year = $_POST['ssc_year'];
$stream = $_POST['stream'];
$ssc_percent = $_POST['ssc_percent'];
$grad_year = $_POST['grad_year'];
$grad_percent = $_POST['grad_percent'];
$work = $_POST['work'];
$experience = $_POST['experience'];
$pass = $_POST['password'];
$con_pass = $_POST['con_password'];


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


$query = "INSERT INTO jobseeker VALUES('$fname','$lname',$mobile,'$email',$ssc_year,'$stream',$ssc_percent,$grad_year,$grad_percent,'$work','$experience','$pass','$file_basename','$final_dir');";
$result = mysqli_query($con,$query);
// echo "$fname.$work.$stream";
	// echo $query;
	// echo "string";
echo '</script>';
echo '<script language="javascript">';
echo 'window.location.replace("../html/signin_seeker.php")';
echo '</script>';


}
?>