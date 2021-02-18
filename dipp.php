<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <title>Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <link href="assets/css/layout2.css" rel="stylesheet" />
   
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <style>
    fieldset {
      overflow: hidden
    }
    
    .some-class {
      float: left;
      clear: none;
    }
    
    label {
      float: left;
      clear: none;
      display: block;
      padding: 0px 1em 0px 8px;
    }
    
    input[type=radio],
    input.radio {
      float: left;
      clear: none;
      margin: 2px 0 0 2px;
    }
    </style>
    
</head>
    <!-- END HEAD -->
<body class="padTop53 " >
    <!-- MAIN WRAPPER -->
    <div id="wrap" >
        <!-- HEADER SECTION -->
        <?php
include('dist/includes/top.php');
?>
        <!-- END HEADER SECTION --> 
        <?php
include('dist/includes/left.php');
?>    
        <link rel="stylesheet" type="text/css" href="tayyab/css/config.css" />
<script type="text/javascript" src="tayyab/js/s/jquery12.js"></script>
<script type="text/javascript" src="tayyab/js/s/global_plugins_scripts.js"></script>
<div id="content">    
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Record Daily Tank Readings</h1>
                    </div>
                </div>                
                <!--BLOCK-SECTION -->
                <!--END-BLOCK SECTION -->
                <br/>
<hr style="border-top: 1px dotted #f00;color: #fff;background-color: #fff;height: 1px;width:100%;">
                 <div class="row">
                 <div class="col-lg-12">
<form role="form" method="post" action="dippadd.php">
                                     <table style="width: 60% ">
                                     <tr>
                                     <td> 
                                     <div class="form-group">

                                     <?php
                                $stunit_id=$_REQUEST['stunit_id'];
                                
                                
                                $date = $_REQUEST['date'];
                                $start= strtotime($date);
                                $mysqldate = date( 'Y-m-d H:i:s', $start );
                                
                                
                                ?>
                                <input type="hidden" class="form-control" name="stunit_id" value="<?php echo $stunit_id;?>" required> 
                                
                                
                                <input type="hidden" class="form-control" name="date" value="<?php echo $date;?>" required> 
                                <?php ?>
							
						             </div><!-- /.form group --> 
                                       
                                     </td>
                                     </tr>
                                     <?php
                                    include 'dbcon.php'; 
                                    $query=mysqli_query($con,"select  closinginvoice from lastclosinginvoice  where stunit_id='$stunit_id' ORDER BY lastclosinginvoice_id DESC LIMIT 1")or die(mysqli_error());
                                    $row=mysqli_fetch_array($query);
                                    //$price=$row['prod_price'];
                                    //$lastcummdiff=$row['cummdiff'];

                                    $closinginvoice=$row['closinginvoice'];

                                    $query2=mysqli_query($con,"select  lastdipp from lastclosinginvoice  where stunit_id='$stunit_id' ORDER BY lastclosinginvoice_id DESC LIMIT 1")or die(mysqli_error());
                                    $row2=mysqli_fetch_array($query2);


                                    $lastdipp=$row2['lastdipp'];
                                    
                                    
                                    
                                    
                                    
                                    ?>
                                     

                                       <td>
                                            <label>Open Invoice</label>
                                    <input readonly value="<?php echo $closinginvoice ?>" type="number" min="1" step="any" class="form-control" required name="openinvoice" id="price">
                                       </td>
                                       <td>
                                            <label>Dipp Morn</label>
                                  <input readonly value="<?php echo $lastdipp ?>" type="number" min="1" step="any" class="form-control" required name="dippmorn" id="price">
                                       </td>
                                       
                                      
                                         <td>
                                            <label>Dipp Evening</label>
                                            <input required type="number" min="1" step="any" class="form-control" name="dippeven" id="desc"> 
                                      </td>
                                      <?php
                                      include 'dbcon.php';

                                      //totallitressold
                                      $query2=mysqli_query($con,"select prod_id from storageunits  where stunit_id='$stunit_id' ")or die(mysqli_error());
                                      $row2=mysqli_fetch_array($query2);
                                      $prod_id = $row2['prod_id'];

                                      $query3=mysqli_query($con,"select SUM(litressold) as totallitressold from dailysales where prod_id='$prod_id' and date='$mysqldate' ")or die(mysqli_error());
                                      $row3=mysqli_fetch_array($query3);
                                      $totallitressold=$row3['totallitressold'];

                                      $query4=mysqli_query($con,"select SUM(litresin) as totalpurchases from purchase where stunit_id='$stunit_id' and date='$mysqldate' ")or die(mysqli_error());
                                      $row4=mysqli_fetch_array($query4);
                                      $purchases=$row4['totalpurchases'];





                                      $p = ($closinginvoice)-($totallitressold);
                                      $cp = $p + $purchases;
                                      ?>
                                      
                                      <td>
                                            <label>Closing Invoice</label>
                                            <input required readonly value="<?php echo $cp ?>" type="number" min="1" step="any" class="form-control" name="closeinvoice" id="desc"> 
                                      </td>
                                      <!--<td>
                                            <label>Total litres sold</label>
                                            <input required readonly value="<?php echo $totallitressold ?>" type="number" min="1" step="any" class="form-control" name="closeinvoice" id="desc"> 
                                      </td>-->
                                      
                                      
                                     
                                      
                                     
                                      
                                      </tr>
                                      </table>  
                                       
                         
                                        
                                       
                         <input class="btn btn-primary btn-lg " type="submit" name="submit" value="submit" >
                                        
                                       
                                   
                                    </form>
                                    
                                    <div style="margin-top:40px" class="panel panel-default">
                        
                        <h2>Daily  Tank PMS  Readings history </h2>
                           
                        <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                   
                                        <tr>
                                            <th>Date</th>
                                            <th>tank</th>
                                            <!--<th>Nosal Number</th>-->
                                            <th>Fuel type</th>
                                            <th>Open Invoice</th>
                                            <th>Dipp Morn</th>
                                            <th>Diff</th>
                                            <th>Dipp Evening</th>
                                            <th>Closing Invoice</th>
                                            <th>Cumm Diff</th>
                                            <th>Daily Diff</th>
                                            <th>Reorder Level</th>
                                           <!-- <th>Unit Price</th>
                                            
                                            <th>Payment</th>
                                            <th><b>Price Change</b></th>
                                            <th>Open Meter</th>
                                            <th>Close Meter</th>
                                            <th>R.T.T</th>
                                            <th>Litre Sold</th>
                                            <th>Unit Price</th>
                                            <th>Payment</th>
                                            <th>Edit</th>-->
                                            <th>Delete</th>
                                        </tr>
                                       
                                    </thead>
                                    <?php	
									include 'dbcon.php';								
										$query1=mysqli_query($con,"select * from tankreadings natural join storageunits natural join stationproducts where stunit_id='2' ORDER BY date ASC")or die(mysqli_error($con));
										while ($row1=mysqli_fetch_array($query1)){
											$id=$row1['tankreading_id'];
											
									?>  
                                    <tr style="font-size: 10px;">

                                            <td><?php echo date("M d, Y",strtotime($row1['date']));?></td> 
                                            <td><?php echo $row1['storageunitname'];?></td>
                                            <td><?php echo $row1['stationprod_name'];?></td>
                                            <td><?php echo $row1['openinvoice'];?></td>
                                            <td><?php echo $row1['dippmorn'];?></td>
                                            <td><?php echo $row1['morndiff'];?></td>
                                            <td><?php echo $row1['dippeven'];?></td>
                                            <td><?php echo $row1['closinginvoice'];?></td>
                                            <td><?php echo $row1['cummdiff'];?></td>
                                            <td><?php echo $row1['dailydiff'];?></td>
                                            <td><?php echo $row1['reorderlevel'];?></td>
                                          
                                           

<!--<td><a href="">
    <span style="font-size: 1.5em" class="glyphicon glyphicon-edit"></span></a></td>-->
    <td><a href="deletedipp.php?id=<?php echo $id ?>">
    <span  style="font-size: 1.5em" class="glyphicon glyphicon-remove-circle"></span></a></td>
                                        </tr>   
                                        <?php }?>                                
                                </table>
                                <br/><br/>
                                <h2>Daily  Tank AGO  Readings history </h2>
                           
                        <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                   
                                        <tr>
                                            <th>Date</th>
                                            <th>tank</th>
                                            <!--<th>Nosal Number</th>-->
                                            <th>Fuel type</th>
                                            <th>Open Invoice</th>
                                            <th>Dipp Morn</th>
                                            <th>Diff</th>
                                            <th>Dipp Evening</th>
                                            <th>Closing Invoice</th>
                                            <th>Cumm Diff</th>
                                            <th>Daily Diff</th>
                                            <th>Reorder Level</th>
                                           <!-- <th>Unit Price</th>
                                            
                                            <th>Payment</th>
                                            <th><b>Price Change</b></th>
                                            <th>Open Meter</th>
                                            <th>Close Meter</th>
                                            <th>R.T.T</th>
                                            <th>Litre Sold</th>
                                            <th>Unit Price</th>
                                            <th>Payment</th>
                                            <th>Edit</th>
                                            <th>Delete</th>-->
                                        </tr>
                                       
                                    </thead>
                                    <?php	
									include 'dbcon.php';								
										$query1=mysqli_query($con,"select * from tankreadings natural join storageunits natural join stationproducts where stunit_id='3' ORDER BY date ASC")or die(mysqli_error($con));
										while ($row1=mysqli_fetch_array($query1)){
											$id=$row1['tankreading_id'];
											
									?>  
                                    <tr style="font-size: 10px;">

                                            <td><?php echo date("M d, Y",strtotime($row1['date']));?></td> 
                                            <td><?php echo $row1['storageunitname'];?></td>
                                            <td><?php echo $row1['stationprod_name'];?></td>
                                            <td><?php echo $row1['openinvoice'];?></td>
                                            <td><?php echo $row1['dippmorn'];?></td>
                                            <td><?php echo $row1['morndiff'];?></td>
                                            <td><?php echo $row1['dippeven'];?></td>
                                            <td><?php echo $row1['closinginvoice'];?></td>
                                            <td><?php echo $row1['cummdiff'];?></td>
                                            <td><?php echo $row1['dailydiff'];?></td>
                                            <td><?php echo $row1['reorderlevel'];?></td>
                                          
                                           

<!--<td><a href="">
    <span style="font-size: 1.5em" class="glyphicon glyphicon-edit"></span></a></td>-->
<td><a href="deletedipp.php?id=<?php echo $id ?>">
    <span  style="font-size: 1.5em" class="glyphicon glyphicon-remove-circle"></span></a></td>
                                        </tr>   
                                        <?php }?>                                
                                </table><br/>
                                <h2>Daily  Tank BIK  Readings history </h2>
                           
                        <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                   
                                        <tr>
                                            <th>Date</th>
                                            <th>tank</th>
                                            <!--<th>Nosal Number</th>-->
                                            <th>Fuel type</th>
                                            <th>Open Invoice</th>
                                            <th>Dipp Morn</th>
                                            <th>Diff</th>
                                            <th>Dipp Evening</th>
                                            <th>Closing Invoice</th>
                                            <th>Cumm Diff</th>
                                            <th>Daily Diff</th>
                                            <th>Reorder Level</th>
                                           <!-- <th>Unit Price</th>
                                            
                                            <th>Payment</th>
                                            <th><b>Price Change</b></th>
                                            <th>Open Meter</th>
                                            <th>Close Meter</th>
                                            <th>R.T.T</th>
                                            <th>Litre Sold</th>
                                            <th>Unit Price</th>
                                            <th>Payment</th>
                                            <th>Edit</th>
                                            <th>Delete</th>-->
                                        </tr>
                                       
                                    </thead>
                                    <?php	
									include 'dbcon.php';								
										$query1=mysqli_query($con,"select * from tankreadings natural join storageunits natural join stationproducts where stunit_id='4' ORDER BY date ASC")or die(mysqli_error($con));
										while ($row1=mysqli_fetch_array($query1)){
											$id=$row1['tankreading_id'];
											
									?>  
                                    <tr style="font-size: 10px;">

                                            <td><?php echo date("M d, Y",strtotime($row1['date']));?></td> 
                                            <td><?php echo $row1['storageunitname'];?></td>
                                            <td><?php echo $row1['stationprod_name'];?></td>
                                            <td><?php echo $row1['openinvoice'];?></td>
                                            <td><?php echo $row1['dippmorn'];?></td>
                                            <td><?php echo $row1['morndiff'];?></td>
                                            <td><?php echo $row1['dippeven'];?></td>
                                            <td><?php echo $row1['closinginvoice'];?></td>
                                            <td><?php echo $row1['cummdiff'];?></td>
                                            <td><?php echo $row1['dailydiff'];?></td>
                                            <td><?php echo $row1['reorderlevel'];?></td>
                                          
                                           

<!--<td><a href="">
    <span style="font-size: 1.5em" class="glyphicon glyphicon-edit"></span></a></td>-->
    <td><a href="deletedipp.php?id=<?php echo $id ?>">
    <span  style="font-size: 1.5em" class="glyphicon glyphicon-remove-circle"></span></a></td>
                                        </tr>   
                                        <?php }?>                                
                                </table>
                               
                       
                    </div>
                                </div>
                 
                     
                </div>
                 <!--END CHAT & CHAT SECTION -->
                 <!-- COMMENT AND NOTIFICATION  SECTION -->
                
                <!-- END COMMENT AND NOTIFICATION  SECTION -->
                
                 <!--  STACKING CHART  SECTION   -->
                
                 <!--END STACKING CHART SCETION  -->

                 <!--TABLE, PANEL, ACCORDION AND MODAL  -->
                          
                 <!--TABLE, PANEL, ACCORDION AND MODAL  -->

                
            </div>

        </div>
        <!--END PAGE CONTENT -->
        
        <?php
include('dist/includes/right.php');
?>    
         <!-- END RIGHT STRIP  SECTION -->
    </div>

    <!--END MAIN WRAPPER -->
    <div id="footer">
        <p>&copy; Admin &nbsp; &nbsp;</p>
    </div>   
    <!--END FOOTER -->



   <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script type="text/javascript" src="tayyab/js/bottom_scripts.js"></script>
</body>
</html>
