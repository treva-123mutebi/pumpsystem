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
                        <h1>Record Product Stock In</h1>
                    </div>
                </div>                
                <!--BLOCK-SECTION -->
                <!--END-BLOCK SECTION -->
                <br/>
<hr style="border-top: 1px dotted #f00;color: #fff;background-color: #fff;height: 1px;width:100%;">
                 <div class="row">
                 <div class="col-lg-12">
<form role="form" method="post" action="stockin.php">
                                     <table style="width: 60% ">
                                     <tr>
                                     <td><label>Select Date</label>
                                    <input required type="date"  class="form-control" required name="date" id="price"><br/><br/>
                                    </td> </tr>
                                     <tr>
                                     <td> 
                                     <div class="form-group">
							<label style="font-size: small;" for="date">Select Supplier</label>
							 
								<select class="form-control select2" name="shift_id" tabindex="1" autofocus required>
								<?php	
									include 'dist/includes/dbcon.php';								
										$query1=mysqli_query($con,"select * from supplier ORDER BY supplier_id ASC")or die(mysqli_error($con));
										while ($row1=mysqli_fetch_array($query1)){
											$id=$row1['supplier_id'];
							?>
										<option value="<?php echo $row1['supplier_id'];?>"><?php echo $row1['supplier_name'];?></option>
								  <?php }?>
								</select>
                                <span class="fa form-control-feedback right" aria-hidden="true"></span>
						  </div><!-- /.form group --> 
                                       
                                     </td>
                                     
                                    

                                     
                                       <tr>
                                       <tr>
                                     <td> 
                                     <!-- /.form group --> 
                                       
                                     </td>
                                    

                                     
                                       <tr>
                                       </tr>
                                       <tr><br/><br/></tr>
                                       <tr></tr>

                                       
                                       
                                      
                                         <!--<td>
                                            <label>R.T.T</label>
                                            <input type="text" class="form-control" name="rtt" id="desc"> 
                                      </td>-->
                                      
                                      <!--<td>
                                            <label>litres sold</label>
                                            <input type="number" min="1" step="any" class="form-control" name="litressold" id="desc"> 
                                      </td>-->
                                      
                                     <!-- <td>
                                            <label>Unit price</label>
                                            <input type="number" min="1" step="any" class="form-control" name="unitprice" id="desc"> 
                                      </td>-->
                                     
                                      
                                     
                                      
                                      </tr>
                                      <tr>
                                      <tr>
                                      <!--<td>
                                      <br/><br/>
                                      
                                      <div class="form-group">
                                      <fieldset>
                                      <label>Price Change</label>
                                            <div class="some-class">
                                                <!--<label class="radio inline"> 
                                                    <input type="radio" class="radio" name="pricechange" value="no" checked>
                                                    <span> No </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="pricechange" value="yes">
                                                    <span>Yes</span> 
                                                </label>-->
                                                <!--<input type="radio" class="radio" name="pricechange" value="no" id="y" checked />
        <label for="y">No</label>
        <input type="radio" class="radio" name="pricechange" value="yes" id="z" />
        <label for="z">Yes</label>
                                            </div>
                                            </fieldset>    
                                        </div>
                                    </div>
                                      </td>-->
                                      </tr>
                                     <!-- <td>
                                            <label>Open meter</label>
                                  <input type="number" min="1" step="any" class="form-control"  name="pcopenmeter" id="price">
                                       </td>
                                       <td>
                                            <label>Close meter</label>
                                  <input type="number" min="1" step="any" class="form-control"  name="pcclosemeter" id="price">
                                       </td>
                                       
                                      
                                         <td>
                                            <label>R.T.T</label>
                                            <input type="text" class="form-control" name="pcrtt" id="desc"> 
                                      </td>
                                      
                                      <td>
                                            <label>litres sold</label>
                                            <input type="number"  step="any" class="form-control" name="pclitressold" id="desc"> 
                                      </td>
                                      
                                      <td>
                                            <label>Unit price</label>
                                            <input type="number" min="1"  step="any" class="form-control" name="pcunitprice" id="desc"> 
                                      </td>
                                     

                                      </tr>--></table>  
                                       
                         
                                        
                                       
                         <br/><input class="btn btn-primary btn-lg " type="submit" name="submit" value="submit" >
                                        
                                       
                                   
                                    </form>
                                    
                                    <div style="margin-top:40px" class="panel panel-default">
                        
                        
                                
                       
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
