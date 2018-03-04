<?php 
include "connect.php";


session_start();    


// echo "HEEEEEEEEEEEEEEEEEE";
if(!isset($_SESSION['mobile']))
            {
echo "Please Login to continue...";
            echo '</script>';
echo '<script language="javascript">';
echo 'window.location.replace("../html/signin_seeker.php")';
echo '</script>';
session_destroy();
// echo "Your registration is: ".$_SESSION['mobile'].".";
// echo "Your passthru is: ".$_SESSION['password'].".";

}
 ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
            
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
<script src="../lib/parallax.js-1.4.2/parallax.js"></script>
    

            </script>
        </head>
    <body>

<div class="parallax-window" data-parallax="scroll" data-image-src="../bg/cvblur.jpg" data-android-fix="true" data-speed="0.8">

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
              <a href="home.php">HOME</a>
            </li>
                  <li>      
              <a href="../php/logout.php">Log Out</a>
            </li>
                    </ul>
                </div>
            </div>
        </div>





<div class="row">

<form role="form" method="POST" action="../php/changedpseeker.php"  enctype="multipart/form-data" > 


<center><h2 style="color: #db5f23">YOUR PROFILE</h2></center>

<?php

$sql = "SELECT * FROM jobseeker WHERE mobile = '" . $_SESSION['mobile'] . "'";
$result = mysqli_query($con,$sql) or trigger_error(mysql_error().$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$src = $row['img_path'];
// echo $src;


?>

<span class="desc">
<span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
</span>



    <div class="row">
        <div class="col-md-5"></div>
            <div class="imgteaser">
                <a data-toggle="modal" data-target="#myModal">
                <img id="profileImg" src="<?php echo $src ?>"" class="img-circle" alt="user" width="200" height="200"/>
                <span class="desc">
                <span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
                </span>
                </a>
            </div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Upload Image Profile</h4>
                </div>
                
                <div class="modal-body">

                    <input type="file" name="picture1" accept="image/*" onchange="loadFile(event);"/>
                    <center>    <img id="output2" src="../img/profileemp_icon.jpg" class="img-circle" alt="user" width="300" height="300"/> </center>
                        <script>
                            var loadFile = function(event) 
                            {var output2 = document.getElementById('output2');
                            output2.src = URL.createObjectURL(event.target.files[0]);
                            };
                            var changeImage = function(){
                            var profileImg = document.getElementById('profileImg');
                            var output2 = document.getElementById('output2');
                            profileImg.src = output2.src;
                            };
                        </script>                       
                </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" onclick="changeImage(); data-dismiss="modal" >Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
                    </div>

            </div>
        </div>
    </div>

    </form>
</div>













<center>
                <h3>
    <?php   
            echo $_SESSION['fname']." ".$_SESSION['lname'];
    // $sql = "SELECT fname, lname,email FROM seeker WHERE mobile = '" . $_SESSION['mobile'] . "'";
    // $result = mysqli_query($con,$sql);
    // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    // echo "Hello, " . $row['name'] . " (" . $row['fname'] . ").";

     ?>
         
 </h3>
    
</center>


<hr width="25%" style="border-color: black;">             
<center>    <h3>Personal Details</h3>   </center>
<hr width="25%" style="border-color: black;">
<div class="container">
                <div class="row">

                    <div class="col-md-4">      </div>

                    <div class="col-md-2">    <strong style="">MOBILE</strong>     </div>

                    <div class="col-md-2">    <?php echo $_SESSION['mobile'];   //9562584562 ?>        </div>

                    <div class="col-md-4">      </div>


                </div>

</div>








<div class="container">
                <div class="row">
                
                    <div class="col-md-4">      </div>

                    <div class="col-md-2">    <strong style="">EMAIL</strong>     </div>

                    <div class="col-md-2">    <?php

                                                            $sql = "SELECT * FROM jobseeker WHERE mobile = '" . $_SESSION['mobile'] . "'";
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

                                                            $sql = "SELECT * FROM jobseeker WHERE mobile = '" . $_SESSION['mobile'] . "'";
                                                            $result = mysqli_query($con,$sql) or trigger_error(mysql_error().$sql);
                                                            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                                                            $ssc_year = $row['ssc_year'];

                                                            echo $ssc_year;
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

                    <div class="col-md-2">    <strong style="">STREAM</strong>     </div>

                    <div class="col-md-2">    <?php

                                                            $sql = "SELECT * FROM jobseeker WHERE mobile = '" . $_SESSION['mobile'] . "'";
                                                            $result = mysqli_query($con,$sql) or trigger_error(mysql_error().$sql);
                                                            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                                                            $stream = $row['stream'];

                                                            echo $stream;
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

                    <div class="col-md-2">    <strong style="">GRADUATING YEAR</strong>     </div>

                    <div class="col-md-2">    <?php

                                                            
                                                            $sql = "SELECT * FROM jobseeker WHERE mobile = '" . $_SESSION['mobile'] . "'";
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

                                                            
                                                            $sql = "SELECT * FROM jobseeker WHERE mobile = '" . $_SESSION['mobile'] . "'";
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

                                                            
                                                            $sql = "SELECT * FROM jobseeker WHERE mobile = '" . $_SESSION['mobile'] . "'";
                                                            $result = mysqli_query($con,$sql) or trigger_error(mysql_error().$sql);
                                                            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                                                            $work = $row['work'];

                                                            echo /*"<h4>".*/$work/*."</h4>"*/;
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