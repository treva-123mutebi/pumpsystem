<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths"><head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="assets/css/MoneAdmin.css">
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css">
    <link href="assets/css/layout2.css" rel="stylesheet">
   
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    
</head>
    <!-- END HEAD -->
<body class="padTop53 " style="" data-new-gr-c-s-check-loaded="14.993.0" data-gr-ext-installed="">
    <!-- MAIN WRAPPER -->
    <?php
include('dist/includes/top.php');
?>
        <!-- END HEADER SECTION --> 
        <?php
include('dist/includes/left.php');
?>    <link rel="stylesheet" type="text/css" href="tayyab/css/config.css">
<script type="text/javascript" src="tayyab/js/s/jquery12.js"></script>
<script type="text/javascript" src="tayyab/js/s/global_plugins_scripts.js"></script>
<div id="content">    
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>New Expense </h1>
                    </div>
                </div>                
                <!--BLOCK-SECTION -->
                <!--END-BLOCK SECTION -->
<hr style="border-top: 1px dotted #f00;color: #fff;background-color: #fff;height: 1px;width:100%;">
                 <div class="row">
                 <div class="col-lg-12">
<form role="form" method="post" action="action_files/exp_add_new.php">
                                     <table style="width: 60% "><tbody><tr>
                                    

                                     


                                       <td>
                                            <label>Amount</label>
                                  <input type="text" class="form-control" required="" name="amount" id="price">
                                       </td>
                                       
                                      
                                         <td>
                                            <label>Description</label>
                                            <input type="text" class="form-control" name="desco" id="desc"> 
                                      </td>
                                     
                                      
                                      </tr></tbody></table>  
                                       
                         
                                        
                                       
                         <input class="btn btn-primary btn-lg " type="submit" name="submit" value="submit">
                                        
                                       
                                   
                                    </form>
                                    
                                    <div class="panel panel-default">
                        
                        
                           
         <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sr</th>
                                            <th>Head</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Description</th>
                                            
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                   
                                                                                <tbody><tr><td>1</td> 
                                            <td>Meals</td>
                                            <td>500.0000</td>
                                            <td>01-01-2021</td>
                                            <td>lunch</td>
                                           

<td><a href="edit_exp.php?id=105">
    <span style="font-size: 1.5em" class="glyphicon glyphicon-edit"></span></a></td>
<td><a href="action_files/delete_exp.php?id=105">
    <span style="font-size: 1.5em" class="glyphicon glyphicon-remove-circle"></span></a></td>
                                        </tr>                                   
                                </tbody></table>
                            
                       
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
        <div id="right">  
            <div class="well well-small">
                <ul class="list-unstyled">
                
                  <a href="cash.php" class="btn btn-success btn-block">Cash</a>
                  <a href="cash_flow.php" class="btn btn-success btn-block">Cash Flow</a>
                 <!--<a href="p_vouchers.php" class="btn btn-success btn-block">PRINT VOUCHERS</a>
                 <a href="all_vouchers.php" class="btn btn-success btn-block">All Vouchers</a>-->
                 
                                  <!-- <a href="all_vouchers_d.php" class="btn btn-success btn-block">VOUCHERS DGK</a>
                 <a href="all_vouchers_t.php" class="btn btn-success btn-block">VOUCHERS TAUNSA</a>
                 <a href="all_vouchers_k.php" class="btn btn-success btn-block">VOUCHERS KA</a>-->
                                  
              <a href="fuel_inventory.php" class="btn btn-success btn-block">Inventory</a>
              
             
                
                <!-- <a href="ledgers.php" class="btn btn-success btn-block">LEDGERS</a>-->
                 <a href="trial.php" class="btn btn-success btn-block">Trial Balance</a>
                 <a href="balance_sheet.php" class="btn btn-success btn-block">Balance Sheet</a>
                 
 <!--<a href="inc_report.php" class="btn btn-success btn-block">Income & Expenses</a>
                 <a href="cap_exp.php" class="btn btn-success btn-block">Anual Report</a>
                 <a href="daily.php" class="btn btn-success btn-block">Monthly Report</a>-->
                
                <!-- <a href="newreport.php" class="btn btn-success btn-block">New Report</a>
                 <a href="fee_income.php" class="btn btn-success btn-block">Income FROM NEN</a>
                 <a href="fincome.php" class="btn btn-success btn-block">Fee Income</a>
                 <a href="feepen.php" class="btn btn-success btn-block">Fee Nen + Pen</a>
                 <a href="cincome.php" class="btn btn-success btn-block">Combine Report </a>   -->  
                      
                 <a href="stock_general.php" class="btn btn-success btn-block">Stock General Report</a>
                 <a href="profit_inventory.php" class="btn btn-success btn-block">Inventory Flow</a>
                 <a href="f_profit_inventory.php" class="btn btn-success btn-block">Fuel Profit &amp; Loss</a>
                 <a href="l_profit_inventory.php" class="btn btn-success btn-block">Lube Profit &amp; Loss</a>
                 <a href="profit_loss_new.php" class="btn btn-success btn-block">Profit &amp; Loss</a>
                 <a href="veh_report.php" class="btn btn-success btn-block">Veh Base Report</a> 
                 <a href="bank_ledgers.php" class="btn btn-success btn-block">Bank Statement</a>
               <!--  <a href="profit_loss.php" class="btn btn-success btn-block">***Profit & Loss</a>-->
                 <a href="roznamcha_e.php" class="btn btn-success btn-block">Roznamcha</a>
                 <a href="roznamcha.php" class="btn btn-success btn-block">Sale Roznamcha</a>
                  
                 <a href="customers_account.php" class="btn btn-success btn-block">Customers Account</a>
                 <a href="vendors_account.php" class="btn btn-success btn-block">Vendors Account</a>
                 <a href="rec.php" class="btn btn-success btn-block">Receivables</a>
                 <a href="pay.php" class="btn btn-success btn-block">Payables</a>
                 <a href="payment_report.php" class="btn btn-success btn-block">Payment Report</a>
                 <a href="recovery_report.php" class="btn btn-success btn-block">Recovery Report</a>
                 <a href="logout.php" class="btn btn-danger btn-block">LOGOUT</a>
                 
                
             
                </ul>
            </div>
            
            
            
        
           
           
            </div>
                  
         <!-- END RIGHT STRIP  SECTION -->
    </div>

    <!--END MAIN WRAPPER -->
    <div id="footer">
        <p>© Admin &nbsp; &nbsp;</p>
    </div>   
    <!--END FOOTER -->



   <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script type="text/javascript" src="tayyab/js/bottom_scripts.js"></script>


</body></html>