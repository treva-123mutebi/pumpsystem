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
                        <h1>Record Daily Purchases</h1>
                    </div>
                </div>                
                <!--BLOCK-SECTION -->
                <!--END-BLOCK SECTION -->
                <br/>
<hr style="border-top: 1px dotted #f00;color: #fff;background-color: #fff;height: 1px;width:100%;">
                 <div class="row">
                 <div class="col-lg-12">
<form role="form" method="post" action="sales_add_new.php">
                                     <table style="width: 60% "><tr>
                                     <td> 
                                     <div class="form-group">
							<label style="font-size: small;" for="date">Select Fuel type</label>
							 
								<select class="form-control select2" name="shift_id" tabindex="1" autofocus required>
								<?php	
									include 'dist/includes/dbcon.php';								
										$query1=mysqli_query($con,"select * from shifts ORDER BY shift_id ASC")or die(mysqli_error($con));
										while ($row1=mysqli_fetch_array($query1)){
											$id=$row1['shift_id'];
							?>
										<option value="<?php echo $row1['shift_id'];?>"><?php echo $row1['shift_details'];?></option>
								  <?php }?>
								</select>
                                <span class="fa form-control-feedback right" aria-hidden="true"></span>
						  </div><!-- /.form group --> 
                                       
                                     </td>
                                     <td> 
                                     <div class="form-group">
							<label style="font-size: small;" for="date">Select Supplier</label>
							 
								<select class="form-control select2" name="pumpid" tabindex="1" autofocus required>
								<?php	
									include 'dist/includes/dbcon.php';								
										$query1=mysqli_query($con,"select * from pumps ORDER BY pumpid ASC")or die(mysqli_error($con));
										while ($row1=mysqli_fetch_array($query1)){
											$id=$row1['pumpid'];
							?>
										<option value="<?php echo $row1['pumpid'];?>"><?php echo $row1['pumpnumber'];?></option>
								  <?php }?>
								</select>
                                <span class="fa form-control-feedback right" aria-hidden="true"></span>
						  </div><!-- /.form group --> 
                                       
                                     </td>
                                    

                                     
                                       
                                       <tr></tr>

                                      
                                       
                                      <td>
                                            <label>Unit price</label>
                                            <input type="number" min="1" step="any" class="form-control" name="unitprice" id="desc"> 
                                      </td>
                                      <td>
                                            <label>Litres Bought in</label>
                                            <input type="number" min="1" step="any" class="form-control" name="unitprice" id="desc"> 
                                      </td>
                                     
                                      
                                     
                                      
                                      </tr>
                                      <tr>
                                      <tr>
                                      
                                     

                                      </tr></table>  
                                       
                         
                                        
                                       
                         <input class="btn btn-primary btn-lg " type="submit" name="submit" value="submit" >
                                        
                                       
                                   
                                    </form>
                                    
                                    <div style="margin-top:40px" class="panel panel-default">
                        
                        <h2>Purchase History</h2>
                           
                        <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                   
                                        <tr>
                                            <th>Date</th>
                                            <th>Supplier</th>
                                            <!--<th>Nosal Number</th>-->
                                            <th>Fuel type</th>
                                            <!--<th>Open Meter</th>
                                            <th>Close Meter</th>-->
                                            <!--<th>R.T.T</th>-->
                                            <th>Litre In</th>
                                            <th>Unit Price</th>
                                            
                                            <th>Payment</th>
                                           
                                        </tr>
                                       
                                    </thead>
                                    <?php	
									include 'dbcon.php';								
										$query1=mysqli_query($con,"select * from dailysales natural join pumps natural join stationproducts natural join shifts where shift_id='1'  ORDER BY date ASC")or die(mysqli_error($con));
										while ($row1=mysqli_fetch_array($query1)){
											$id=$row1['dailysales_id'];
											
									?>  
                                    <tr style="font-size: 10px;">

                                            <td><?php echo $row1['date'];?></td> 
                                            <td><?php echo $row1['pumpnumber'];?></td>
                                            <td><?php echo $row1['nosalnumber'];?></td>
                                            <td><?php echo $row1['stationprod_name'];?></td>
                                            <td><?php echo $row1['openmeter'];?></td>
                                            <td><?php echo $row1['closemeter'];?></td>
                                            <!--<td><?php echo $row1['rtt'];?></td>
                                            <td><?php echo $row1['litressold'];?></td>
                                            <td><?php echo $row1['unitprice'];?></td>
                                           

                                            <td><?php echo $row1['total'];?></td>
                                            <td></td>
                                            <td><?php echo $row1['pcopenmeter'];?></td>
                                            <td><?php echo $row1['pcclosemeter'];?></td>
                                            <td><?php echo $row1['pcrtt'];?></td>
                                            <td><?php echo $row1['pclitressold'];?></td>
                                            <td><?php echo $row1['pcunitprice'];?></td>
                                           

                                            <td><?php echo $row1['pctotalpayment'];?></td>
                                           

<td><a href="">
    <span style="font-size: 1.5em" class="glyphicon glyphicon-edit"></span></a></td>
<td><a href="">
    <span  style="font-size: 1.5em" class="glyphicon glyphicon-remove-circle"></span></a></td>-->
                                        </tr>   
                                        <?php }?>                                
                                </table>
                                <br/><br/>
                                
                            
                       
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
