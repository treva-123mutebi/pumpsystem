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
        <?php
include('dist/includes/top.php');
?>
        <!-- END HEADER SECTION --> 
        <?php
include('dist/includes/left.php');
?>    
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
                        <h1>Vehicle Base Report</h1>
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
                                   <table>
                                   <tbody><tr>
                                   <td>
                                            <label>From Date</label>
                                            <input type="text" class="form-control hasDatepicker" id="datepicker" required="" name="date">
                                            </td>
                                    <td>
                                            <label>To Date</label>
                                            <input class="form-control hasDatepicker" type="text" id="datepicker2" required="" name="date"></td>
                                  <td> <label>Customer</label><br>
                                            <select id="customer" name="customer" onchange="load_cat()" class="form-control chzn-select">
                                           <option value="">Customer</option>
                                                                                       <option value="105">Umair Rafiq</option>
                                                                                       <option value="104">AL MUSLIM KANDAA</option>
                                                                                       <option value="103">NAEEM AFZAL</option>
                                                                                       <option value="102">RAO YAMEEN</option>
                                                                                       <option value="100">HAJI BASHEER</option>
                                                                                       <option value="99">NAZAR BASHEER</option>
                                                                                       <option value="98">ABU BAKAR</option>
                                                                                       <option value="97">FARHAN SHAH</option>
                                                                                       <option value="96">BAHRIA TOWN</option>
                                                                                       <option value="95">FATIMA E</option>
                                                                                       <option value="94">NRSB</option>
                                                                                       <option value="92">RANA RIYASAT</option>
                                                                                       <option value="91">RANA ZAFFAR</option>
                                                                                       <option value="90">HAJI YOUNAS</option>
                                                                                       <option value="89">HAJI IQBAL</option>
                                                                                       <option value="88">HAJI ABID</option>
                                                                                       <option value="87">MAZHAR BASHEER</option>
                                                                                       <option value="86">MIAN RASHEED</option>
                                                                                       <option value="85">SHELL CARD</option>
                                                                                       <option value="84">Wapda</option>
                                                                                       <option value="82">kapco</option>
                                                                                       <option value="24">PSO Card</option>
                                            </select></td>
                                            <td>
                                            <label>Vehicle</label>
                                            <select id="veh" name="veh" class="form-control">
                                           <option value="">Select vehicle</option>
                                            </select> 
                                             </td>
                                             <td>
                                             <label style="color:white">Add</label><br>
                                            <a href="#" onclick="loadcat22()" class="btn btn-primary">GENERATE</a>
                                         </td></tr></tbody></table>
                                            <hr style="border-top: 1px dotted #f00;color: #fff;background-color: #fff;height: 1px;width:100%; ">
                                             
                                             
                                           
                                           
                                        
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
    <script>
function loadcat22() {
var from= $('#datepicker').val();
var to= $('#datepicker2').val();
var customer= $('#customer').val();
var veh= $('#veh').val();
$.ajax({
      type : 'POST',
      data : {from:from,to:to,customer:customer,veh:veh},
      url  : 'fetch_veh_report.php',
      success : function(success){
	 $('#show_invoices').html(success)
	
	 }
     });

 }
 
 
 
	 </script>
      <script>
function load_cat() {
var id1= $('#customer').val();
$.ajax({
      type : 'POST',
      data : {customer:id1},
      url  : 'fetch_vehicles_s.php',
      success : function(success){
	 $('#veh').html(success)
	
	 }
     });
 }
 
 
 
	 </script>
  <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
   

    <!-- END BODY -->
<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">February</span>&nbsp;<span class="ui-datepicker-year">2021</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2021"><a class="ui-state-default" href="#">1</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2021"><a class="ui-state-default" href="#">2</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2021"><a class="ui-state-default" href="#">3</a></td><td class=" ui-datepicker-days-cell-over  ui-datepicker-current-day ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="1" data-year="2021"><a class="ui-state-default ui-state-highlight ui-state-active ui-state-hover" href="#">4</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2021"><a class="ui-state-default" href="#">5</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2021"><a class="ui-state-default" href="#">6</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2021"><a class="ui-state-default" href="#">7</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2021"><a class="ui-state-default" href="#">8</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2021"><a class="ui-state-default" href="#">9</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2021"><a class="ui-state-default" href="#">10</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2021"><a class="ui-state-default" href="#">11</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2021"><a class="ui-state-default" href="#">12</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2021"><a class="ui-state-default" href="#">13</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2021"><a class="ui-state-default" href="#">14</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2021"><a class="ui-state-default" href="#">15</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2021"><a class="ui-state-default" href="#">16</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2021"><a class="ui-state-default" href="#">17</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2021"><a class="ui-state-default" href="#">18</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2021"><a class="ui-state-default" href="#">19</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2021"><a class="ui-state-default" href="#">20</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2021"><a class="ui-state-default" href="#">21</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2021"><a class="ui-state-default" href="#">22</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2021"><a class="ui-state-default" href="#">23</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2021"><a class="ui-state-default" href="#">24</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2021"><a class="ui-state-default" href="#">25</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="1" data-year="2021"><a class="ui-state-default" href="#">26</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2021"><a class="ui-state-default" href="#">27</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="1" data-year="2021"><a class="ui-state-default" href="#">28</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div></body></html>