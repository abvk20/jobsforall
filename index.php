<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
            
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="lib/parallax.js-1.4.2/parallax.js"></script>
    <title></title>
 <style type="text/css">

            



            .imgteaser {
                 margin: 0;
                overflow: hidden;
                float: left;
                position: relative;
            }
            .imgteaser a {
                text-decoration: none;
                float: left;
            }
            .imgteaser a:hover {
                cursor: pointer;
            }
            .imgteaser a .more {
                position: absolute;
                /* positioning of the learn more text */
                right: 20px;
                bottom: 20px;
                font-size: 1em;/* size of the learn more text */
                color: #fff;
                background: #000;
                padding: 5px 10px;
                filter:alpha(opacity=65);
                opacity:.65;
            }
            .imgteaser a:hover .desc{
                display: block;
                font-size: 1em;/* size of the text inside the hover */
                background: #111;
                opacity:.75;
                color: #fff;
                position: absolute;
                /* positioning for the hover div. change to top for top align */
                bottom: 25px;
                left: 135px;
                padding: 10px;/* inside padding for the hover div */
                margin: 0;
                width: auto;/* will fill the whole image */
                border-radius: 5px 5px 5px 5px;
            }
            .imgteaser a:hover .desc h3 {
                display: block;
                margin-bottom: 5px;
                font-size:1.2em;
            }
            .imgteaser a .desc {
                display: none; 
            }
            .imgteaser a:hover .more { 
                visibility: hidden;
            }

           
        </style>

</head>
<body>

<div class="parallax-window" data-parallax="scroll" data-image-src="bg/mp7blur.jpg" data-android-fix="true">
    










<div class="navbar navbar-default navbar-static-top nav navbar-inverse col-md-12" data-spy="affix" data-offset-top="197" >
            <div class="container">
                <div class="navbar-header ">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><span>JobsForAll</span></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                    <ul class="nav navbar-nav navbar-right ">
                        <li>    <a href="html/signin_emp.php">Sign in - employer</a>    </li>
                        <li>    <a href="html/signin_seeker.php">Sign in - jobseeker</a>    </li>
                        <li class="active"> <a href="index.php">Sign up<br></a>     </li>
                    </ul>
                </div>
            </div>
</div>
        <div class="section">
            <div class="container">
                <div class="row">
                    
                        <h1 class="text-center">REGISTER WITH US!</h1>
                    
                </div>
                <br>
                <ul class="hidden-xs nav nav-justified nav-tabs">
                    <li class="active" role="presentation">
                        <a href="#user" aria-controls="user" role="tab" data-toggle="tab" style="color: #000; font-weight: bolder; ">ARE YOU LOOKING FOR A JOB?</a>
                    </li>
                    <li role="presentation">
                        <a href="#business" aria-controls="business" role="tab" data-toggle="tab" style="color: #000; font-weight: bolder; ">DO YOU OWN A BUSINESS?</a>
                    </li>
                    <!-- <li role="presentation">
                        <a href="#event" aria-controls="event" role="tab" data-toggle="tab">Event</a>
                    </li> -->
                </ul>

                <ul class="hidden-lg hidden-md hidden-sm nav nav-tabs col-xs-12">
                    <li class="active" role="presentation">
                        <a href="#user" aria-controls="user" role="tab" data-toggle="tab" style="color: #000; font-weight: bolder; ">NEED A JOB?</a>
                    </li>
                    <li role="presentation">
                        <a href="#business" aria-controls="business" role="tab" data-toggle="tab" style="color: #000; font-weight: bolder; ">OWN A BUSINESS?</a>
                    </li>
                 <!--    <li role="presentation">
                        <a href="#event" aria-controls="business" role="tab" data-toggle="tab">Event</a>
                    </li> -->
                </ul>
<div class="tab-content">
<div role="tabpanel" class="tab-pane fade in active" id="user">
<div class="row">

<form role="form" method="POST" action="php/signupseeker.php"  enctype="multipart/form-data" >
<hr>
<div class="row ">
        <div class="col-md-5"></div>
            <div class="imgteaser ">
                <a data-toggle="modal" data-target="#myModal">
                <img id="profileImg" src="img/profileseeker_icon.jpg" class="img img-circle img-responsive" alt="user" width="200" height="200">
                <span class="desc">
                <span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
                </span>
                </a>
            </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Upload Image Profile</h4>
                </div>
                
                <div class="modal-body">
                
                    <input type="file" name="picture1" accept="image/*" onchange="loadFile(event);">
                    <center>
                    <img id="output2" src="img/profileseeker_icon.jpg" class="img-circle" alt="user" width="300" height="300"/>
                    </center>
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
                    <button type="button" onclick="changeImage();" data-dismiss="modal" class="btn btn-primary" >Save changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>                                  

</div>


                <hr>

                <h3 style="text-align: center;">PERSONAL DETAILS</h3>

                <hr>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="inputName">First Name</label>
                            <input class="form-control" id="inputName" placeholder="Enter name" type="text"
                            name="fname">
                        </div>

                        <div class="form-group col-md-6"">
                            <label class="control-label" for="inputName">Last Name</label>
                            <input class="form-control" id="inputName" placeholder="Enter name" type="text"
                            name="lname">
                        </div>                                                                        <div class="form-group col-md-6"">
                            <label class="control-label" for="inputTel">Phone number</label>
                            <input class="form-control" id="inputTel" placeholder="Enter Phone number" type="text"
                            name="mobile">
                        </div>
                                    <!-- <hr> -->
                        <div class="form-group col-md-6"">
                            <label class="control-label" for="inputEmail1">Email address</label>
                            <input class="form-control" id="inputEmail1" placeholder="Enter email" type="email"
                            name="email">
                        </div>


                <hr>

                <h3 style="text-align: center;">EDUCATION</h3>

                <hr>
                <h4 style="text-align: center;">Senior Secondary </h4>

<div class="form-group col-md-4 ">
                            <label class="control-label" for="inputEmail1">Year of Completion of 12th
                            <select class="form-control" id="year" 
                            name="ssc_year">
                            <option>1975</option><option>1976</option><option>1977</option><option>1978</option><option>1979</option><option>1980</option><option>1981</option><option>1982</option><option>1983</option><option>1984</option><option>1985</option><option>1986</option><option>1987</option><option>1988</option><option>1989</option><option>1990</option><option>1991</option><option>1992</option><option>1993</option><option>1994</option><option>1995</option><option>1996</option><option>1997</option><option>1998</option><option>1999</option><option>2000</option><option>2001</option><option>2002</option><option>2003</option><option>2004</option><option>2005</option><option>2006</option><option>2007</option><option>2008</option><option>2009</option><option>2010</option><option>2011</option><option>2012</option><option>2013</option><option>2014</option><option>2015</option><option>2016</option>
        </select>
                        </div>





<div class="form-group col-md-4">
                            <label class="control-label" for="Stream">Stream
                            <select class="form-control" id="stream" placeholder="Enter Stream" type="text"
                            name="stream">
                            <option>Science</option><option>Commerce</option><option>Arts</option>
          </select>
                        </div>






                         <div class="form-group col-md-4" >
          <label for="percent">Percentage</label>
          <input type="number" class="form-control" name="ssc_percent"/>
        </div>



<hr>    
                <h4 style="text-align: center;">Graduation </h4>




<div class="form-group col-md-6"  >
        <label class="control-label" for="grad">Year of Completion of Graduation
                            <select class="form-control" id="year" placeholder="Enter Year of Completing Graduation"
                            name="grad_year">
          <option>1975</option><option>1976</option><option>1977</option><option>1978</option><option>1979</option><option>1980</option><option>1981</option><option>1982</option><option>1983</option><option>1984</option><option>1985</option><option>1986</option><option>1987</option><option>1988</option><option>1989</option><option>1990</option><option>1991</option><option>1992</option><option>1993</option><option>1994</option><option>1995</option><option>1996</option><option>1997</option><option>1998</option><option>1999</option><option>2000</option><option>2001</option><option>2002</option><option>2003</option><option>2004</option><option>2005</option><option>2006</option><option>2007</option><option>2008</option><option>2009</option><option>2010</option><option>2011</option><option>2012</option><option>2013</option><option>2014</option><option>2015</option><option>2016</option>
        </select>
        </div>








            <div class="form-group col-md-6" id="ingrad2">
          <label for="percent" class="control-label">Percentage</label>
          <input type="number" class="form-control" name="grad_percent"/>
        </div>




<hr>





        <h2 style="text-align: center;">Work</h2>
        <hr>
  <div class="form-group col-md-6" id="inssc2">
          <label for="work">Type of Work</label>
          <select type="text" class="form-control" name="work" placeholder="Choose Stream" >
          <option>accounting</option><option>sanitary</option><option>field</option>
          </select>
        </div>





<div class="form-group col-md-6">
    <label>Experience</label>
    <input class="form-control" type="text" name="experience" maxlength="2">
</div> 


<hr>


                    <div class="form-group col-md-6">
                        <label class="control-label" for="inputPassword1">Password</label>
                        <input class="form-control" id="inputPassword1" placeholder="Password" type="password"
                        name="password">

                    </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="inputConfirmPassword1">Confirm Password</label>
                            <input class="form-control" id="inputConfirmPassword1" placeholder="Confirm Password" type="password"
                            name="con_password">
                        </div>
                                     <hr><center><button  type="submit" class="btn btn-primary">Submit</button></center>
                                    
                                </form>
                            
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="business">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <form role="form" method="POST" action="php/signupemp.php"  enctype="multipart/form-data" >
                                    <hr>
                                    <div class="row">
                                    <div class="col-md-5"></div>
                                        <div class="imgteaser">

                                             <a data-toggle="modal" data-target="#myModal3">
                                                <img id="profileImg3" src="img/profileemp_icon.jpg" class="img-circle" alt="user" width="200" height="200">
                                                <span class="desc">
                                                    <span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabe3">Upload Image Profile</h4>
      </div>
      <div class="modal-body">
         <!--  <input type="hidden" name="_token" value="7jTDX8wl9P5Ymxg4rGLKmxTAzGEONTG5GDuHwfVh"> -->
          <input type="file" name="picture" accept="image/*" onchange="loadFile3(event)"/>
          <center>
            <img id="output" src="img/profileemp_icon.jpg" class="img-circle" alt="user" width="300" height="300"/>
          </center>
          <script>
            var loadFile3 = function(event) {
              var output = document.getElementById('output');
              output.src = URL.createObjectURL(event.target.files[0]);
            };
            var changeImage3 = function(){
              var profileImg3 = document.getElementById('profileImg3');
              var output = document.getElementById('output');
              profileImg3.src = output.src;
            }
          </script>                       
      </div>
      <div class="modal-footer">
        <button type="button" onclick="changeImage3()" data-dismiss="modal" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
            </div>
        </div>
    </div>  

</div>

<hr>

    <h3 style="text-align: center;">YOUR COMPANY's DETAILS</h3>

                <hr>


                            <div class="form-group">
                                <label class="control-label" for="inputStore">Company Name</label>
                                <input class="form-control" id="inputStore" placeholder="Enter Company name" type="text"
                                name="organization_name">
                            </div>



<div class="form-group">
                            <label class="control-label" for="establish_year">Establishment Year</label>
<select class="form-control" name="establish_year">
<option>1975</option><option>1976</option><option>1977</option><option>1978</option><option>1979</option><option>1980</option><option>1981</option><option>1982</option><option>1983</option><option>1984</option><option>1985</option><option>1986</option><option>1987</option><option>1988</option><option>1989</option><option>1990</option><option>1991</option><option>1992</option><option>1993</option><option>1994</option><option>1995</option><option>1996</option><option>1997</option><option>1998</option><option>1999</option><option>2000</option><option>2001</option><option>2002</option><option>2003</option><option>2004</option><option>2005</option><option>2006</option><option>2007</option><option>2008</option><option>2009</option><option>2010</option><option>2011</option><option>2012</option><option>2013</option><option>2014</option><option>2015</option><option>2016</option><option>2017</option><option>2018</option><option>2019</option><option>2020</option><option>2021</option><option>2022</option>
                                 </select>
</div>






                    <div class="form-group">
                            <label class="control-label" for="work">Type of Work</label>
                            <!-- <div class="dropdown"> -->
                              
                              <select class="form-control" name="work">
                                <option>accounting</option>
                                <option>sanitary</option>
                                <option>field</option>
                                 </select>       <!--           
                            </div> -->
                        </div>

                            <div class="form-group">
                                <label class="control-label" for="inputDetail">Detail</label>
                                <textarea class="form-control" placeholder="Enter detail" name="organization_des" rows="5" id="inputDetail"></textarea>
                            </div>



<h3 style="text-align: center;">YOUR DETAILS</h3>

                            <div class="form-group col-md-6">
                                <label class="control-label" for="inputName">First Name</label>
                                <input class="form-control" id="inputName" placeholder="Enter name" type="text"
                                name="fname">
                            </div>




                            <div class="form-group col-md-6">
                                <label class="control-label" for="inputName">Last Name</label>
                                <input class="form-control" id="inputName" placeholder="Enter Last name" type="text"
                                name="lname">
                            </div>


                            <div class="form-group col-md-6">
                                <label class="control-label" for="inputPhone">Phone number</label>
                                <input class="form-control" id="inputPhone" placeholder="Enter Phone number" type="text" name="mobile">
                            </div>




                            <div class="form-group col-md-6">
                            <label class="control-label" for="inputEmail1">Email address</label>
                            <input class="form-control" id="inputEmail1" placeholder="Enter email" type="email"
                            name="email">
                        </div>




                            <div class="form-group">
                                <label class="control-label" for="inputAddress">Address</label>
                                <input class="form-control" placeholder="Enter address" name="address"  id="inputAddress"
                                name="address"></input>
                            </div>


                                    
                        



                        <div class="form-group col-md-6">
                            <label class="control-label" for="inputPassword1">Password</label>
                            <input class="form-control" id="inputPassword1" placeholder="Password" type="password"
                            name="password">
                        </div>




                        <div class="form-group col-md-6">
                            <label class="control-label" for="inputConfirmPassword1">Confirm Password</label>
                            <input class="form-control" id="inputConfirmPassword1" placeholder="Confirm Password" type="password"
                            name="con_password">
                        </div>


                                    
<!-- <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#galleryModal"> Gallery</button>
<div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="myModalLabel">Upload Gallery</h4>
</div>
<div class="modal-body">
<input type="hidden" name="_token" value="7jTDX8wl9P5Ymxg4rGLKmxTAzGEONTG5GDuHwfVh">
<div class="form-group">
<label class="col-md-4 control-label">Picture</label>
<div class="dropzone" id="my-awesome-dropzone" style="font-size: 1.5em;">
<h3 class="dropzone-previews ui"></h3>    
<div class="fallback">
<input name="file" type="file" class="form-control" accept="image/*" />
</div>
</div>
<br>
<button type="button" class="btn btn-success btn-block" id="btnUpload">Upload</button> 
</div>
</div>
<div class="modal-footer">
<button type="submit" class="btn btn-primary">Save changes</button>
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
</div>
</div>
</div>
</div>-->
                                   
                                    <hr><center><button  type="submit" class="btn btn-primary">Submit</button></center>
                                </form>
                               
                            </div>
                        </div>
                    </div>









</div>


</body>
</html>