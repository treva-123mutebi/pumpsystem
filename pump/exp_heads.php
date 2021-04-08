<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths"><head><style class="vjs-styles-defaults">
      .video-js {
        width: 300px;
        height: 150px;
      }

      .vjs-fluid {
        padding-top: 56.25%
      }
    </style>
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
    <div id="wrap">
        <!-- HEADER SECTION -->
        <?php
include('dist/includes/top.php');
?>
        <!-- END HEADER SECTION --> 
        <?php
include('dist/includes/left.php');
?>    
        <div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Expense Heads </h1>
                    </div>
                </div>
                
                 <!--BLOCK SECTION -->
                
                  <!--END BLOCK SECTION -->
   <hr style="border-top: 1px dotted #f00;color: #fff;background-color: #fff;height: 1px;width:100%; ">


                   <!-- CHART & CHAT  SECTION -->
                 <div class="row">
                 <div class="col-lg-12">
                
<form role="form" method="post" action="action_files/exp_head_actions.php">
                                     <table><tbody><tr>
                                     <td>   
                                        <label>Head Name</label>
                                        <input type="text" class="form-control" name="name" required="" id="required2"> 
                                       </td>
									   
									    <td>   
                                        <label>Urdu</label>
                                        <input type="text" class="form-control" name="urdu" required="" id="required2"> 
                                       </td>
                                    
                                     
                                      </tr></tbody></table>  
                                       
                         
                                        
                                       
                         <input class="btn btn-primary btn-lg " type="submit" name="submit" value="submit">
                                        
                                       
                                   
                                    </form>
                                    
                                    <div class="panel panel-default">
                        
                        
                           
         <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sr</th>  
                                            <th>Name</th> <th>Urdu</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                   
                                                                            
                                            <tbody><tr><td>1</td> 
											<td>Meals</td>
											<td>Roti Exp.Zameer Shah</td>
                                           
  <td><a href="edit_exp_heads.php?id=20"><span style="font-size: 1.5em" class="glyphicon glyphicon-edit"></span></a></td>
   <td><a href="action_files/delete_exp_heads.php?id=20"><span style="font-size: 1.5em" class="glyphicon glyphicon-remove-circle"></span></a></td>
                                        </tr>                                        
                                            <tr><td>2</td> 
											<td>TANKI INAAM</td>
											<td>TANKI INAAM</td>
                                           
  <td><a href="edit_exp_heads.php?id=19"><span style="font-size: 1.5em" class="glyphicon glyphicon-edit"></span></a></td>
   <td><a href="action_files/delete_exp_heads.php?id=19"><span style="font-size: 1.5em" class="glyphicon glyphicon-remove-circle"></span></a></td>
                                        </tr>                                        
                                            <tr><td>3</td> 
											<td>NEWS PAPER</td>
											<td>NEWS PAPER</td>
                                           
  <td><a href="edit_exp_heads.php?id=18"><span style="font-size: 1.5em" class="glyphicon glyphicon-edit"></span></a></td>
   <td><a href="action_files/delete_exp_heads.php?id=18"><span style="font-size: 1.5em" class="glyphicon glyphicon-remove-circle"></span></a></td>
                                        </tr>                                        
                                            <tr><td>4</td> 
											<td>GHORI SECURTY</td>
											<td>GHORI SECURTY</td>
                                           
  <td><a href="edit_exp_heads.php?id=17"><span style="font-size: 1.5em" class="glyphicon glyphicon-edit"></span></a></td>
   <td><a href="action_files/delete_exp_heads.php?id=17"><span style="font-size: 1.5em" class="glyphicon glyphicon-remove-circle"></span></a></td>
                                        </tr>                                        
                                            <tr><td>5</td> 
											<td>SABIR PARCHAISE</td>
											<td>SABIR PARCHAISE</td>
                                           
  <td><a href="edit_exp_heads.php?id=16"><span style="font-size: 1.5em" class="glyphicon glyphicon-edit"></span></a></td>
   <td><a href="action_files/delete_exp_heads.php?id=16"><span style="font-size: 1.5em" class="glyphicon glyphicon-remove-circle"></span></a></td>
                                        </tr>                                        
                                            <tr><td>6</td> 
											<td>KHAIRAT</td>
											<td>KHAIRAT</td>
                                           
  <td><a href="edit_exp_heads.php?id=15"><span style="font-size: 1.5em" class="glyphicon glyphicon-edit"></span></a></td>
   <td><a href="action_files/delete_exp_heads.php?id=15"><span style="font-size: 1.5em" class="glyphicon glyphicon-remove-circle"></span></a></td>
                                        </tr>                                        
                                            <tr><td>7</td> 
											<td>LESS</td>
											<td>LESS</td>
                                           
  <td><a href="edit_exp_heads.php?id=14"><span style="font-size: 1.5em" class="glyphicon glyphicon-edit"></span></a></td>
   <td><a href="action_files/delete_exp_heads.php?id=14"><span style="font-size: 1.5em" class="glyphicon glyphicon-remove-circle"></span></a></td>
                                        </tr>                                        
                                            <tr><td>8</td> 
											<td>Tank Wapsi</td>
											<td>ٹینک واپسی</td>
                                           
  <td><a href="edit_exp_heads.php?id=13"><span style="font-size: 1.5em" class="glyphicon glyphicon-edit"></span></a></td>
   <td><a href="action_files/delete_exp_heads.php?id=13"><span style="font-size: 1.5em" class="glyphicon glyphicon-remove-circle"></span></a></td>
                                        </tr>                                        
                                            <tr><td>9</td> 
											<td>PUMP GENERATOR</td>
											<td>پمپ جنریٹر</td>
                                           
  <td><a href="edit_exp_heads.php?id=12"><span style="font-size: 1.5em" class="glyphicon glyphicon-edit"></span></a></td>
   <td><a href="action_files/delete_exp_heads.php?id=12"><span style="font-size: 1.5em" class="glyphicon glyphicon-remove-circle"></span></a></td>
                                        </tr>                                        
                                            <tr><td>10</td> 
											<td>Tanki Exp</td>
											<td>ٹانکی کرایہ</td>
                                           
  <td><a href="edit_exp_heads.php?id=11"><span style="font-size: 1.5em" class="glyphicon glyphicon-edit"></span></a></td>
   <td><a href="action_files/delete_exp_heads.php?id=11"><span style="font-size: 1.5em" class="glyphicon glyphicon-remove-circle"></span></a></td>
                                        </tr>                                        
                                            <tr><td>11</td> 
											<td>entertainment</td>
											<td>انٹر ٹینمنٹ</td>
                                           
  <td><a href="edit_exp_heads.php?id=9"><span style="font-size: 1.5em" class="glyphicon glyphicon-edit"></span></a></td>
   <td><a href="action_files/delete_exp_heads.php?id=9"><span style="font-size: 1.5em" class="glyphicon glyphicon-remove-circle"></span></a></td>
                                        </tr>                                        
                                            <tr><td>12</td> 
											<td>Food</td>
											<td>کھانا وغیرہ</td>
                                           
  <td><a href="edit_exp_heads.php?id=8"><span style="font-size: 1.5em" class="glyphicon glyphicon-edit"></span></a></td>
   <td><a href="action_files/delete_exp_heads.php?id=8"><span style="font-size: 1.5em" class="glyphicon glyphicon-remove-circle"></span></a></td>
                                        </tr>                                        
                                            <tr><td>13</td> 
											<td>persoonal withdraw</td>
											<td>ذاتی اخراجات</td>
                                           
  <td><a href="edit_exp_heads.php?id=7"><span style="font-size: 1.5em" class="glyphicon glyphicon-edit"></span></a></td>
   <td><a href="action_files/delete_exp_heads.php?id=7"><span style="font-size: 1.5em" class="glyphicon glyphicon-remove-circle"></span></a></td>
                                        </tr>                                        
                                            <tr><td>14</td> 
											<td>misc exp</td>
											<td>متفرق اخراجات</td>
                                           
  <td><a href="edit_exp_heads.php?id=6"><span style="font-size: 1.5em" class="glyphicon glyphicon-edit"></span></a></td>
   <td><a href="action_files/delete_exp_heads.php?id=6"><span style="font-size: 1.5em" class="glyphicon glyphicon-remove-circle"></span></a></td>
                                        </tr>                                        
                                            <tr><td>15</td> 
											<td>electricity bills</td>
											<td>بجلی بل</td>
                                           
  <td><a href="edit_exp_heads.php?id=4"><span style="font-size: 1.5em" class="glyphicon glyphicon-edit"></span></a></td>
   <td><a href="action_files/delete_exp_heads.php?id=4"><span style="font-size: 1.5em" class="glyphicon glyphicon-remove-circle"></span></a></td>
                                        </tr>                                        
                                            <tr><td>16</td> 
											<td>rent testing</td>
											<td>کرایہ</td>
                                           
  <td><a href="edit_exp_heads.php?id=3"><span style="font-size: 1.5em" class="glyphicon glyphicon-edit"></span></a></td>
   <td><a href="action_files/delete_exp_heads.php?id=3"><span style="font-size: 1.5em" class="glyphicon glyphicon-remove-circle"></span></a></td>
                                        </tr>                                        
                                            <tr><td>17</td> 
											<td>salary</td>
											<td>تنخواہ</td>
                                           
  <td><a href="edit_exp_heads.php?id=2"><span style="font-size: 1.5em" class="glyphicon glyphicon-edit"></span></a></td>
   <td><a href="action_files/delete_exp_heads.php?id=2"><span style="font-size: 1.5em" class="glyphicon glyphicon-remove-circle"></span></a></td>
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


</body></html>