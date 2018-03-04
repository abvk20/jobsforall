<?php 

session_start();
if(isset($_SESSION['mobile']))
{
	unset($_SESSION['mobile']);
	
	//header("location:../html/signin_seeker.php");

echo '</script>';
echo '<script language="javascript">';
echo 'window.location.replace("../html/signin_seeker.php")';
echo '</script>';
session_destroy();
	
}

 ?>