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
    <div id="wrap">
        <!-- HEADER SECTION -->
        <div id="top">
            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <header class="navbar-header">
 <a href="index.php" class="navbar-brand"><label style=" color:#00F">KARWAN FILLING STATION, SINAWAN <span style="color:red; padding-left:100px">01-01-2021</span></label></a>
                  </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">
                    <!-- MESSAGES SECTION -->
                  <li><a href="logout.php"><i class="icon-signout"></i> Logout </a></li>
                      
                    <!--END ADMIN SETTINGS -->
                </ul>
            </nav>
        </div>
        <!-- END HEADER SECTION -->       <div id="left">
            <div class="media user-media well-small">
               

                <div class="media-body">
                    <h5 class="media-heading">Logged in as <span style="color:red">admin</span></h5>
                </div>
                <br>
            </div>
            <ul id="menu" class="collapse">
               
                 <li class="panel active"><a href="index.php"><i class="icon-table"></i> Home </a> </li>
               
               <!--  <li><a href="income_head.php"><i class="icon-tasks"> </i> Create Accounts</a></li>-->
           
               <!--<li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                        <i class="icon-table"></i> Vouchers
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          
                    </a>
                    <ul class="collapse" id="pagesr-nav">
                        <li><a target="_blank"  href="add_stock.php"><i class="icon-angle-right"></i> Journal Vouchers </a></li>
                         <li><a target="_blank"  href="crv.php"><i class="icon-angle-right"></i> CRV </a></li>
                          <li><a target="_blank"  href="cpv.php"><i class="icon-angle-right"></i> CPV </a></li>
                           <li><a target="_blank"  href="brv.php"><i class="icon-angle-right"></i> BRV </a></li>
                            <li><a target="_blank"  href="bpv.php"><i class="icon-angle-right"></i> BPV </a></li>
                          
                      
                    </ul>
                </li>-->
                
                
               <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#sale">
                        <i class="icon-table"></i> Sale
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          
                    </a>
                    <ul class="collapse" id="sale">
                        <li><a href="sale.php"><i class="icon-angle-right"></i> Fuel Sale </a></li>
                        <li><a href="customer_sale.php"><i class="icon-angle-right"></i> Customers Sale </a></li>
                         <li><a href="invt_sale.php"><i class="icon-angle-right"></i> Lubricants Sale </a></li>
                        
                    
                       
                        
                       
                        
                    </ul>
                </li>
                 
               
                <!-- <li><a href="maintenance"><i class="icon-tasks"> </i>Maintenance</a></li>-->
             
                 
                 <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#invent">
                        <i class="icon-table"></i> Purchase
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          
                    </a>
                    <ul class="collapse" id="invent">
                   
                    <li><a href="purchase.php"><i class="icon-angle-right"></i> Lubricants Purchase </a></li>
                    <li><a href="used_sale.php"><i class="icon-angle-right"></i> Fuel Purchase </a></li>
                   
                   
                    </ul>
                </li>
                
                
                 <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#exp">
                        <i class="icon-table"></i> Expences
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          
                    </a>
                    <ul class="collapse" id="exp">
                    <li><a href="add_exp.php"><i class="icon-angle-right"></i> Add Expences </a></li>
                    <li><a href="exp_heads.php"><i class="icon-angle-right"></i> Expence Heads </a></li>
                   
                    </ul>
                </li>
                
                  <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#period">
                        <i class="icon-table"></i> Periodical Report
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          
                    </a>
                    <ul class="collapse" id="period">
                    <li><a href="fuel_sale_report.php"><i class="icon-angle-right"></i> Fuel Sale Report </a></li>
                    <li><a href="fuel_purchase_report.php"><i class="icon-angle-right"></i> Fuel Purchase Report </a></li>
                    <li><a href="cash_rcvd_report.php"><i class="icon-angle-right"></i> Cash Rcv Report </a></li>
                    <li><a href="lube_sale_report.php"><i class="icon-angle-right"></i> Lube Sale Report</a></li>
                    <li><a href="purchase_report.php"><i class="icon-angle-right"></i> Lube Purchase Report </a></li>
                    <li><a href="exp_report.php"><i class="icon-angle-right"></i> Expence Report </a></li>
                    <li><a href="tank_report.php"><i class="icon-angle-right"></i> Tank Reading Reports </a></li>
                   
                    </ul>
                </li>
             
             <!-- <li><a href="cash_rcv.php"><i class="icon-tasks"> </i> Cash Rcv</a></li>-->
              <li><a href="payments.php"><i class="icon-tasks"> </i> Payments</a></li>
              <li><a href="recoveries.php"><i class="icon-tasks"> </i> Recoveries</a></li>
              <li><a href="capital.php"><i class="icon-tasks"> </i> Capital</a></li>
              <li><a href="tanks.php"><i class="icon-tasks"> </i> Tank Readings</a></li>
              <li><a href="bank_transaction.php"><i class="icon-tasks"> </i> Bank Transaction</a></li>
              
             
             <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#hr">
                        <i class="icon-table"></i> HR
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          
                    </a>
                    <ul class="collapse" id="hr">
                    <li><a href="hr.php"><i class="icon-angle-right"></i> Employees </a></li>
                    <li><a href="pay_record.php"><i class="icon-angle-right"></i> Issue Pay </a></li>
                    
                    <li><a href="pay_history.php"><i class="icon-angle-right"></i> Pay Report</a></li>
                   
                    <li><a href="whole_pay_history.php"><i class="icon-angle-right"></i> Whole Pay Record </a></li>
                    <li><a href="create_pay.php"><i class="icon-angle-right"></i> Create Pay</a></li>
                
                   
                    </ul>
                </li>
             
                 
               
                                
                 <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#dash">
                        <i class="icon-table"></i> Dashboard
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          
                    </a>
                    <ul class="collapse" id="dash">
                   <li><a href="change_date.php"><i class="icon-angle-right"></i> Change Date </a></li>
                   <li><a href="fuel_types.php"><i class="icon-angle-right"></i> Fule Types </a></li>
                    <!-- <li><a href="job_natures.php"><i class="icon-angle-right"></i> Add Nosels </a></li>-->
                    <li><a href="bank.php"><i class="icon-angle-right"></i> Banks </a></li>
                    <li><a href="vehicles.php"><i class="icon-angle-right"></i> Vehicles </a></li>
                    <li><a href="parts.php"><i class="icon-angle-right"></i> Lubricants </a></li>
                    <li><a href="vendors.php"><i class="icon-angle-right"></i> Vendors </a></li>
                    <li><a href="customers.php"><i class="icon-angle-right"></i> Customers </a></li>
                    <!--<li><a href="settings.php"><i class="icon-angle-right"></i> Settings </a></li>-->
                    <li><a href="reception.php"><i class="icon-angle-right"></i> Users </a></li>
                   
                    </ul>
                </li>
             
                                
                 
                 
            </ul>
        </div>	
   
   
    
<script>
$(function() {
 $( "#datepicker" ).datepicker();
 $( "#datepicker" ).datepicker( "option", "dateFormat", "dd-mm-yy" );
  });
  $(function() {
 $( "#datepicker2" ).datepicker();
 $( "#datepicker2" ).datepicker( "option", "dateFormat", "dd-mm-yy" );
  });
  
  </script>
        <div id="content">
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Fuel Inventory</h1>
                    </div>
                </div>
                  <div class="row">
                    <div class="col-lg-12">
                        <div style="text-align: center;">
                        </div>
                    </div>
                </div>
                  <!--END BLOCK SECTION -->
   <hr style="border-top: 1px dotted #f00;color: #fff;background-color: #fff;height: 1px;width:100%; ">
 <!-- CHART & CHAT  SECTION -->
                 <div class="row">
                 
                                    
                                    <div class="col-lg-12">
                                          
       <table class="table table-striped table-bordered table-hover">
          <tbody><tr>
          <td width="05%"><strong>Sr.</strong></td>
          <td width="15%"><strong>Fuel Type</strong></td>
          <td width="25%"><strong>QTY</strong></td>
          <td width="10%"><strong>QTY VALUE</strong></td>
          </tr>
                     
                     <tr>
          <td>1</td>
          <td>1R1</td>
          <td>0</td>
          <td>0</td>
         
          </tr>
                    <tr>
          <td>2</td>
          <td>4R1</td>
          <td>0</td>
          <td>0</td>
         
          </tr>
                    <tr>
          <td>3</td>
          <td>4R2</td>
          <td>-1</td>
          <td>-0</td>
         
          </tr>
                    <tr>
          <td>4</td>
          <td>10R2</td>
          <td>-1</td>
          <td>-0</td>
         
          </tr>
                    </tbody></table>
          <br>
           <a target="_blank" href="print_docs/print_invent.php" class="btn btn-success">PRINT</a>               
                     </div>
                    
                </div>
                 
 <!-- CHART & CHAT  SECTION -->
                 <div class="row">
                 <div class="col-lg-12">
                 <div id="show_invoices">
                
                 
          </div>
                     </div>
                </div>
                
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
    </div>    <!--END FOOTER -->
    
  <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- END BODY -->
</body></html>