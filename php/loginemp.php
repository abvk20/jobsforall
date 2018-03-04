<?php 

include "connect.php";

$mobile = $_POST['mobile'];
$password = $_POST['password'];

// echo "$mobile";
$query="select * from employer";
$msg = "wrong password";
$result = mysqli_query($con,$query);
$i=0;
// echo $result;
while($values = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
	// echo $values['mobile']." has a store which is a ".$values['password']." store<br>";
	if($mobile==$values['mobile'] && $password==$values['password'])
	{
		


session_start();
$_SESSION['mobile']=$mobile;
		$sql = "SELECT * FROM jobseeker WHERE mobile = '" . $_SESSION['mobile'] . "'";
$result = mysqli_query($con,$sql) or trigger_error(mysql_error().$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

// header("location:../html/trial_pro_emp.php");

	// $organization_name = $row['organization_name'];
	// $_SESSION['organization_name'] = $organization_name;
// $lname = $row['lname'];
// $_SESSION['lname'] = $lname;
				$email = $row['email'];
				$_SESSION['email'] = $email;
				$establish_year = $row['establish_year'];
				$_SESSION['establish_year'] = $establish_year;
				$adress = $row['adress'];
				$_SESSION['adress'] = $adress;
				$organization_des = $row['organization_des'];
				$_SESSION['organization_des'] = $organization_des;

				$work = $row['work'];
				$_SESSION['work'] = $work;
// echo "Hello, " . $row['fname'] . " (" . $row['lname'] . ").";
		echo '</script>';
echo '<script language="javascript">';
echo 'window.location.replace("../html/trial_pro_emp.php")';
echo '</script>';




		$i=0;
		exit;
	}
	else{
		$i=1;
	}
	
}
if($i==1)
{
	{
	echo '<script language="javascript">';
echo 'alert("WRONG PASSWORD")';

echo '</script>';
echo '<script language="javascript">';
echo 'window.location.replace("../html/signin_emp.php")';
echo '</script>';
exit;

	}
}

 ?>