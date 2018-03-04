<?php 
		include "connect.php";


		session_start();    


			if(!isset($_SESSION['mobile']))
			{
echo "Please Login to continue...";
			echo '</script>';
echo '<script language="javascript">';
echo 'window.location.replace("../html/signin_emp.php")';
echo '</script>';
session_destroy();
	
}


			//echo $_SESSION['mobile'];
		 ?>
		<html>
		    <head>
		        <meta charset="utf-8">
		        <meta name="viewport" content="width=device-width, initial-scale=1">
		        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
		            
		        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
		            </script>
		        </head>
		    <body>
		        <div class="navbar navbar-default navbar-static-top">
		            <div class="container">
		                <div class="navbar-header">
		                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
		                        <span class="sr-only">Toggle navigation</span>
		                        <span class="icon-bar"></span>
		                        <span class="icon-bar"></span>
		                        <span class="icon-bar"></span>
		                    </button>
		                    <a class="navbar-brand" href="about.php"><span>JobsForAll</span></a>
		                </div>
		                <div class="collapse navbar-collapse" id="navbar-ex-collapse">
		                    <ul class="nav navbar-nav navbar-right">
		                      
		                      <li class="active">
		              <a href="#">HOME</a>
		            </li>

		                     
	<style type="text/css">
	#jb{color:white;}
	#jb:hover{
		color:#337ab7;
		background-color:#fff; 
	}
	</style>
		                        <li>
		                            <a href="trial_pro_emp.php">Profile<br></a>
		                        </li>
		                        
		                  <li>      
		              <a href="../php/logoutemp.php">Log Out</a>
		            </li>
		                    </ul>
		                </div>
		            </div>
		        </div>




		<div class="tab-content">
		<div role="tabpanel" class="tab-pane fade in active" id="user">
		<div class="row">
		<div class="col-md-10 col-md-offset-1">
		<!-- <form role="form" method="POST" action="signupseeker.php" > enctype="multipart/form-data" --> 


		<center><h3>SEARCH TO FIND POTENTIAL EMPLOYEES!</h3></center>

		<hr>
		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Employees..">

	<table id="myTable">
	  <tr class="header">
	    <th style="width:60%;">NAME</th>
	    <th style="width:40%;">EXPERIENCE</th>
	  </tr>
	
	      <?php
	      $sql = "SELECT * FROM employer WHERE mobile = '" . $_SESSION['mobile'] . "'";
$result = mysqli_query($con,$sql) or trigger_error(mysql_error().$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$work = $row['work'];

// echo $work;
$num = $_SESSION['mobile'];
$sql = "SELECT * FROM jobseeker WHERE work = '" . $work . "'";
$result = mysqli_query($con,$sql) or trigger_error(mysql_error().$sql);
          while( $row = mysqli_fetch_array( $result,MYSQLI_ASSOC ) ){
          	$str=$row['fname'];
            echo
            "<tr>
              <td><a href='../php/searchemp.php?ser=$str&num=$num' style='display:block;'>{$row['fname']}</a></td>
              <td>{$row['experience']}</td>

            </tr>\n";
          }
        ?>
	  
	</table>


	<style type="text/css">
		
	#myInput {
	    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
	    background-position: 10px 12px; /* Position the search icon */
	    background-repeat: no-repeat; /* Do not repeat the icon image */
	    width: 100%; /* Full-width */
	    font-size: 16px; /* Increase font-size */
	    padding: 12px 20px 12px 40px; /* Add some padding */
	    border: 1px solid #ddd; /* Add a grey border */
	    margin-bottom: 12px; /* Add some space below the input */
	}

	#myTable {
	    border-collapse: collapse; /* Collapse borders */
	    width: 100%; /* Full-width */
	    border: 1px solid #ddd; /* Add a grey border */
	    font-size: 18px; /* Increase font-size */
background: transparent;

	}

	#myTable th, #myTable td {
	    text-align: left; /* Left-align text */
	    padding: 12px; /* Add padding */
	    background-color: rgba(241,241,241,.5);
	}

	#myTable tr {
	    /* Add a bottom border to all table rows */
	    border-bottom: 1px solid #ddd; 
	}

	#myTable tr.header, #myTable tr:hover {
	    /* Add a grey background color to the table header and on hover */
	    background-color: #f1f1f1;
	}

a{
	text-decoration: none;
	color: black;
}

body{

            background-image: url("../bg/job.png");
            background-color: #000;
            background-size: cover;
        }


	</style>


		<script>
	function myFunction() {
	  // Declare variables 
	  var input, filter, table, tr, td, i;
	  input = document.getElementById("myInput");
	  filter = input.value.toUpperCase();
	  table = document.getElementById("myTable");
	  tr = table.getElementsByTagName("tr");

	  // Loop through all table rows, and hide those who don't match the search query
	  for (i = 0; i < tr.length; i++) {
	    td = tr[i].getElementsByTagName("td")[0];
	    if (td) {
	      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
	        tr[i].style.display = "";
	      } else {
	        tr[i].style.display = "none";
	      }
	    } 
	  }
	}
	</script>
	</div></div></div></div>
	     </body>
		        </html>
      <!-- 

               while( $row = mysql_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row\['employee_id'\]}</td>
              <td>{$row\['employee_name'\]}</td>
              <td>{$row\['employee_dob'\]}</td>
              <td>{$row\['employee_addr'\]}</td>
              <td>{$row\['employee_dept'\]}</td>
              <td>{$row\['employee_sal'\]}</td> 
            </tr>\n";
          }
         endwhile 




 -->

<!-- 
$sql = "SELECT * FROM jobseeker WHERE mobile = '" . $_SESSION['mobile'] . "'";
$result = mysqli_query($con,$sql) or trigger_error(mysql_error().$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$work = $row['work'];

echo $work;

$sql = "SELECT * FROM employer WHERE work = 'sanitary'";
$result = mysqli_query($con,$sql) or trigger_error(mysql_error().$sql);
// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
// $name = $row['organization_name'];

while( $row = mysqli_fetch_array($result,MYSQLI_ASSOC)) :
	$name = $row['organization_name'];
	$des = $row['organization_des'];
	echo $name;
	echo $des;
endwhile;

while( $row = mysqli_fetch_array($result,MYSQLI_ASSOC)) :
	echo "<tr>
              <td>{$row['organization_name']}</td>
              <td>{$row['organization_des']}</td>
              
       </tr>\n";
endwhile;
	   -->