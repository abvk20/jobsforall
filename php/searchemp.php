<?php 

include "connect.php";

session_start();

$num = $_GET['num'];
//echo $num;
$ser = $_GET['ser'];
//echo $ser;




 ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
        
        </head>
    <body>


<style type="text/css">
    


#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}


body{

            background-image: url("../bg/yesnoblur.jpg");
            background-color: #000;
            background-size: cover;
        }


</style>



        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><span>JobsForAll</span></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                    <ul class="nav navbar-nav navbar-right">
                      
                      <li class="active">
                            <a href="#">Profile<br></a>
                        </li>
                        <li>
              <a href="../html/homeemp.php">HOME</a>
            </li>
                  <li>      
              <a href="../php/logout.php">Log Out</a>
            </li>
                    </ul>
                </div>
            </div>
        </div>




<center><h2><?php echo "$ser"; ?></h2></center>


<?php

$sql = "SELECT * FROM jobseeker WHERE fname = '$ser'";
$result = mysqli_query($con,$sql) or trigger_error(mysql_error().$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$src = $row['img_path'];


?>
















<div class="row">
    <div class="col-md-5"></div>
        <div class="imgteaser">

            
            <img id="profileImg" src="<?php echo $src ?>"" class="img-circle" alt="user" width="200" height="200">
        </div>

    <center>
        <div class="btn btn-default">
            <a class="btn-default" onclick="myFunction()" <?php echo "href='applyemp.php?num=$num&org=$ser'"?> style="text-decoration: none">NOTIFY CANDIDATE</a>
            </div>



    </center>
            
    
</div>



<div id="snackbar">Candidate Notified , Please check your EMAIL</div>






<script>






function myFunction() {


    var x = document.getElementById("snackbar")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 10000);

    function delay (URL) {
    setTimeout( function() { window.location = URL }, 100000 );
}
}

</script>                       























<?php       
if(!isset($_SESSION['mobile']))
{
    session_start();
}


 ?>




<hr width="25%" style="border-color: black;">             
<center>    <h3>Personal Details</h3>   </center>
<hr width="25%" style="border-color: black;">









<div class="container">
                <div class="row">

                    <div class="col-md-4">      </div>

                    <div class="col-md-2">    <strong style="">MOBILE</strong>     </div>

                    <div class="col-md-2">    <?php
    
                                              $sql = "SELECT * FROM jobseeker WHERE fname = '$ser'";
                                                $result = mysqli_query($con,$sql) or trigger_error(mysql_error().$sql);
                                                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                                                $mobile = $row['mobile'];

                                                echo $mobile;

                                                    ?>
       </div>

                    <div class="col-md-4">      </div>


                </div>

</div>












<div class="container">
                <div class="row">
                
                    <div class="col-md-4">      </div>

                    <div class="col-md-2">    <strong style="">EMAIL</strong>     </div>

                    <div class="col-md-2">    <?php
                                                    $sql = "SELECT * FROM jobseeker WHERE fname = '$ser'";
                                                    $result = mysqli_query($con,$sql) or trigger_error(mysql_error().$sql);
                                                    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                                                    $email = $row['email'];

                                                    echo $email;
                                                            // $_SESSION['email'] = $email;


                                                            //  echo $_SESSION['email'];

                                                 ?>     
                      </div>

                    <div class="col-md-4">      </div>


                </div>

</div>









<hr width="25%" style="border-color: black;">
<center><h3>EDUCATION</h3></center>
<hr width="25%" style="border-color: black;">











<div class="container">
                <div class="row">
                
                    <div class="col-md-4">      </div>

                    <div class="col-md-2">    <strong style="">Year of Passing 12th</strong>     </div>

                    <div class="col-md-2">    <?php

                                               $sql = "SELECT * FROM jobseeker WHERE fname = '$ser'";
                                                $result = mysqli_query($con,$sql) or trigger_error(mysql_error().$sql);
                                                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                                                $ssc_year = $row['ssc_year'];

                                                echo $ssc_year;                              // $_SESSION['email'] = $email;


                                                            //  echo $_SESSION['email'];

                                                 ?>     
                      </div>

                    <div class="col-md-4">      </div>


                </div>

</div>











<div class="container">
                <div class="row">
                
                    <div class="col-md-4">      </div>

                    <div class="col-md-2">    <strong style="">STREAM</strong>     </div>

                    <div class="col-md-2">    <?php

                                               
$sql = "SELECT * FROM jobseeker WHERE fname = '$ser'";
$result = mysqli_query($con,$sql) or trigger_error(mysql_error().$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$stream = $row['stream'];

echo $stream;                             // $_SESSION['email'] = $email;


                                                            //  echo $_SESSION['email'];

                                                 ?>     
                      </div>

                    <div class="col-md-4">      </div>


                </div>

</div>












<div class="container">
                <div class="row">
                
                    <div class="col-md-4">      </div>

                    <div class="col-md-2">    <strong style="">GRADUATING YEAR</strong>     </div>

                    <div class="col-md-2">    <?php

                                                           $sql = "SELECT * FROM jobseeker WHERE fname = '$ser'";
$result = mysqli_query($con,$sql) or trigger_error(mysql_error().$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$grad_year = $row['grad_year'];

echo $grad_year;
                                                            // $_SESSION['email'] = $email;


                                                            //  echo $_SESSION['email'];

                                                 ?>     
                      </div>

                    <div class="col-md-4">      </div>


                </div>

</div>




















<div class="container">
                <div class="row">
                
                    <div class="col-md-4">      </div>

                    <div class="col-md-2">    <strong style="">GRADUATING PERCENT</strong>     </div>

                    <div class="col-md-2">    <?php

                                                           $sql = "SELECT * FROM jobseeker WHERE fname = '$ser'";
$result = mysqli_query($con,$sql) or trigger_error(mysql_error().$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$grad_percent = $row['grad_percent'];

echo $grad_percent;
                                                            // $_SESSION['email'] = $email;


                                                            //  echo $_SESSION['email'];

                                                 ?>     
                      </div>

                    <div class="col-md-4">      </div>


                </div>

</div>





















<div class="container">
                <div class="row">
                
                    <div class="col-md-4">      </div>

                    <div class="col-md-2">    <strong style="">TYPE OF WORK</strong>     </div>

                    <div class="col-md-2">    <?php

                                                           $sql = "SELECT * FROM jobseeker WHERE fname = '$ser'";
$result = mysqli_query($con,$sql) or trigger_error(mysql_error().$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$work = $row['work'];

echo "<h4>".$work."</h4>";
                                                            // $_SESSION['email'] = $email;


                                                            //  echo $_SESSION['email'];

                                                 ?>     
                      </div>

                    <div class="col-md-4">      </div>


                </div>

</div>












</div>
        </body>
        </html>