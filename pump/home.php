<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php session_start();
if(empty($_SESSION['id'])):
header('Location:index.php');
endif;
if(empty($_SESSION['branch'])):
header('Location:index.php');
endif;
?>
<?php
include('dist/includes/dbcon.php');

$branch=$_SESSION['branch'];
$query=mysqli_query($con,"select * from branch where branch_id='$branch'")or die(mysqli_error($con));
  $row=mysqli_fetch_array($query);
           $branch_name=$row['branch_name'];
?>
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths"><head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author">
    <!--<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css">-->
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="assets/css/MoneAdmin.css">
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css">
    <link href="assets/css/layout2.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    
</head>
    <!-- END HEAD -->
<body class="padTop53 " style="" data-new-gr-c-s-check-loaded="14.992.0" data-gr-ext-installed="">
    <!-- MAIN WRAPPER -->
    <div id="wrap">
        <!-- HEADER SECTION -->
        <?php
include('dist/includes/top.php');
?>
        
        
<?php
include('dist/includes/left.php');
?>
        <!-- END HEADER SECTION -->       
          <div id="content">
            <div class="inner" style="min-height: 700px;">
                
                 
                  <!--END BLOCK SECTION -->

                 <div class="row">
                  <div class="col-lg-10">
                  <h1 style="
  text-shadow: 6px 6px 4px red; font-size:3vw; padding:2vw 2vw 2vw 7vw">Mopetro fueling Station</h1>
  <table class="table table-striped table-bordered table-hover" style=" margin-left:40px">
                                    <thead>
                                        <tr>
                                           
                                            <th>Name</th>
                                           <th>P Price</th> 
                                            <th>S Price</th> 
                                          
                                        </tr>
                                    </thead>
                                   
                                                                               
                                            <tbody><tr><td>HSD</td>
                                           
                                            <td>125.0000</td> <td>128.6000</td> 
         
                                        </tr>                                           
                                            <tr><td>Lube</td>
                                           
                                            <td>0.0000</td> <td>0.0000</td> 
         
                                        </tr>                                           
                                            <tr><td>PMG</td>
                                           
                                            <td>115.0000</td> <td>117.6000</td> 
         
                                        </tr>                                   
                                </tbody></table>
                                <label><strong>UPCOMING PAYMENTS</strong></label>
                                <table class="table table-striped table-bordered table-hover" style=" margin-left:40px">
                                    <thead>
                                        <tr>
                                           
                                            <th>Vendor</th>
                                            <th>Purchase Date</th> 
                                            <th>Payment Date</th> 
                                            <th>Amount</th> 
                                            
                                          
                                        </tr>
                                    </thead>
                                   
                                                                               
                                            <tbody><tr><td>PSO</td>
                                           
                                            <td>03-07-2020</td> 
                                            <td>31-07-2020</td>
                                            <td>8050000</td> 
         
                                        </tr>                                           
                                            <tr><td>PSO</td>
                                           
                                            <td>03-07-2020</td> 
                                            <td>24-07-2020</td>
                                            <td>2875000</td> 
         
                                        </tr>                                           
                                            <tr><td>SPEEDY</td>
                                           
                                            <td>01-06-2020</td> 
                                            <td>02-08-2020</td>
                                            <td>0</td> 
         
                                        </tr>                                           
                                            <tr><td>PSO</td>
                                           
                                            <td>01-06-2020</td> 
                                            <td>31-07-2020</td>
                                            <td>250000</td> 
         
                                        </tr>                                           
                                            <tr><td>PSO</td>
                                           
                                            <td>07-01-2020</td> 
                                            <td>10-04-2020</td>
                                            <td>1125000</td> 
         
                                        </tr>                                           
                                            <tr><td>PSO</td>
                                           
                                            <td>07-01-2020</td> 
                                            <td>15-04-2020</td>
                                            <td>0</td> 
         
                                        </tr>                                           
                                            <tr><td>PSO</td>
                                           
                                            <td>07-01-2020</td> 
                                            <td>09-04-2020</td>
                                            <td>0</td> 
         
                                        </tr>                                           
                                            <tr><td>SHELL</td>
                                           
                                            <td>01-01-2020</td> 
                                            <td>01-01-2020</td>
                                            <td>602857</td> 
         
                                        </tr>                                           
                                            <tr><td>SHELL</td>
                                           
                                            <td>01-01-2020</td> 
                                            <td>01-01-2020</td>
                                            <td>969854</td> 
         
                                        </tr>                                   
                                </tbody></table>
                    </div>
                </div>
            </div>
        </div>
        <?php
include('dist/includes/right.php');
?>    
              </div>
    <div id="footer">
        <p>© Admin &nbsp; &nbsp;</p>
    </div>    <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- END BODY -->
</body></html>