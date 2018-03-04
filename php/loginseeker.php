<?php 

include "connect.php";

$mobile = $_POST['mobile'];
$password = $_POST['password'];

//echo $mobile;
$query="select * from jobseeker";
$msg = "wrong password";
$result = mysqli_query($con,$query);
$i=0;
// echo $result;
while($values = mysqli_fetch_array($result,MYSQLI_ASSOC)) 
{
	// echo $values['mobile']." has a store which is a ".$values['password']." store<br>";
	if($mobile==$values['mobile'] && $password==$values['password'])
	{
		echo "Redirecting.....";
		session_start();
		$_SESSION['mobile']=$mobile;
		$sql = "SELECT * FROM jobseeker WHERE mobile = '" . $_SESSION['mobile'] . "'";
$result = mysqli_query($con,$sql) or trigger_error(mysql_error().$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				$fname = $row['fname'];
				$_SESSION['fname'] = $fname;
				$lname = $row['lname'];
				$_SESSION['lname'] = $lname;
				$email = $row['email'];
				$_SESSION['email'] = $email;
				$ssc_year = $row['ssc_year'];
				$_SESSION['ssc_year'] = $ssc_year;
				$stream = $row['stream'];
				$_SESSION['stream'] = $stream;
				$ssc_percent = $row['ssc_percent'];
				$_SESSION['ssc_percent'] = $ssc_percent;
				$grad_year = $row['grad_year'];
				$_SESSION['grad_year'] = $grad_year;
				$grad_percent = $row['grad_percent'];
				$_SESSION['grad_percent'] = $grad_percent;
				$work = $row['work'];
				$_SESSION['work'] = $work;
// echo "Hello, " . $row['fname'] . " (" . $row['lname'] . ").";
				echo '</script>';
		echo '<script language="javascript">';
		echo 'window.location.replace("../html/trial_pro_seek.php")';
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
		echo 'window.location.replace("../html/signin_seeker.php")';
		echo '</script>';
exit;

	}
}

 ?>