<?php 

include "connect.php";
{
//$_SESSION[''];

//session_start();
//$_SESSION['mobile'];
   
$organization_name = $_POST['organization_name'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$organization_des = $_POST['organization_des'];
$establish_year = $_POST['establish_year'];

$work = $_POST['work'];
$address = $_POST['address'];
// $experience = $_POST['experience'];
$pass = $_POST['password'];
$con_pass = $_POST['con_password'];
// $city = "Indore";
//$check = $_POST['check'];


$filename = $_FILES['picture']['name'];
$filetmp = $_FILES['picture']['tmp_name'];
$filesize = $_FILES['picture']['size'];
$file_basename = basename($_FILES['picture']['name']);


//echo $filename;

	$dir = "../uploademp/employer";
	$final_dir = $dir.$file_basename;
			move_uploaded_file($filetmp, $final_dir);



$query = "INSERT INTO employer VALUES('$organization_name','$fname','$lname',$mobile,'$email','$organization_des','$establish_year','$work','$address','$pass','$file_basename','$final_dir');";
$result = mysqli_query($con,$query);

	// echo $query;
	// echo "string";

echo '</script>';
echo '<script language="javascript">';
echo 'window.location.replace("../html/signin_emp.php")';
echo '</script>';
}
?>