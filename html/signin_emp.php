<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head><body>
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
              <a href="#">Sign in - employer</a>
            </li>
<li >
              <a href="signin_seeker.php">Sign in - jobseeker</a>
            </li>
            <li>
              <a href="../index.php">Sign up</a>
            </li>
          </ul>
        </div>
      </div>
    </div>






  <style>
        * {
            box-sizing: border-box;
        }




        #container{
            position:relative;

            height: 500px;
            width: 500px;
            margin: 0 auto;
        }


        #myInput {
            background-image: url('/css/searchicon.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #myTable {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
            font-size: 18px;
        }

        #myTable th, #myTable td {
            text-align: left;
            padding: 12px;
        }

        #myTable tr {
            border-bottom: 1px solid #ddd;
        }

        #myTable tr.header, #myTable tr:hover {
            background-color: #f1f1f1;
        }
   
        * {
            box-sizing: border-box;
        }

        #myInput {
            background-image: url('/css/searchicon.png');
            background-position: 10px 12px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #myUL {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        #myUL li a {
            border: 1px solid #ddd;
            margin-top: -1px; /* Prevent double borders */
            background-color: #f6f6f6;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block
        }

        #myUL li a.header {
            background-color: #e2e2e2;
            cursor: default;
        }

        #myUL li a:hover:not(.header) {
            background-color: #eee;
        }

body{

            background-image: url("../bg/searchemp2blur.png");
            background-color: #000;
background-size:cover;
//filter : blur(5px);
        }
    </style>




     
    
      <div class="container" id="container">
              <h2 style="text-align:center;">         SIGN IN WITH US TO SEARCH FOR EMPLOYEES!</h2>
            <hr>



        
            <form class="form-horizontal" role="form" method="post" action="../php/loginemp.php">
            <br>
              
              
                  <label for="inputEmail3" class="control-label">Mobile</label>
                
                  <input type="text" class="form-control" id="mobile" placeholder="mobile" name="mobile">
                
                  <label for="inputPassword3" class="control-label">Password</label>
                
                  <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
               
                    <label>
                      <input type="checkbox">Remember me</label>
               
                  <button type="submit" class="btn btn-block btn-primary">Sign in</button>
               
            </form>
          </div>
        
        

</body></html>