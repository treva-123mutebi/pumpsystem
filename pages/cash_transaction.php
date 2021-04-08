<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
if(empty($_SESSION['branch'])):
header('Location:../index.php');
endif;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home | <?php include('../dist/includes/title.php');?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../plugins/select2/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <script src="../dist/js/jquery.min.js"></script>
    
    <script language="JavaScript">
    <!--javascript:window.history.forward(1);//--></script>
    <style>
      .line{
width: 112px;
height: 47px;
border-bottom: 1px solid black;
position: absolute;
}
    </style>
 </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-<?php echo $_SESSION['skin'];?> layout-top-nav" onload="myFunction()">
    <div class="wrapper">
      <?php include('../dist/includes/header.php');?>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              <a class="btn btn-lg btn-warning" href="home.php">Back</a>
              
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">Daily Fuel Sale</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="row">
	      <div class="col-md-9">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Register Daily Fuel  Sale</h3>
                </div>
                <div class="box-body">
                  <!-- Date range -->
                  <form method="post" action="transaction_add.php">
				  <div class="row" style="min-height:400px">
					
					 
							<!--<label for="date">Select Item</label>-->
							 
								
								<?php
                  $branch=$_SESSION['branch'];

                  $shift_id=$_REQUEST['shift_id'];
                  $nosal_id = $_REQUEST['nosal_id'];
                  $date = $_REQUEST['date'];
                  //$date = date("Y-m-d H:i:s");
								  
								?>
										<input type="hidden" class="form-control" name="shift_id" value="<?php echo $shift_id;?>" required> 
                    <?php
                    if($shift_id == 1){
                     $shift="Day Shift";
                    }else if($shift_id == 2) {
                      $shift="Night Shift";
                    }
                    else {
                      $shift="Invalid Selection";
                    }
                    ?>
                    <label for="date"><strong style="color:brown; "><?php echo $shift;?></strong></label>
                     <input type="hidden" class="form-control" name="nosal_id" value="<?php echo $nosal_id;?>" required> 
                                
                    <input type="hidden" class="form-control" name="date" value="<?php echo $date;?>" required> 
                      <?php ?>
								
						    <!--<input type="hidden" class="form-control" name="cid" value="<?php echo $cid;?>" required>   -->
						
				
					<div class=" col-md-2">
						<div class="form-group">
							<label for="date">Open Meter</label>
							<div class="input-group">
              <?php
              //include 'dbcon.php';
              $query2=mysqli_query($con,"select closemeter from  lastclosingmeter where  nosal_id='$nosal_id'  ORDER BY closemeter DESC LIMIT 0,1  ")or die(mysqli_error($con));
              $result = mysqli_fetch_array($query2);
              $op1 = $result['closemeter'];
              //while($row=mysqli_fetch_array($query)){
              ?>
                <input readonly value="<?php echo $op1; ?>" type="number" step="any" class="form-control pull-right" id="date" name="openmeter" placeholder="Quantity" tabindex="2" value="1" min="1"   required>
              <?php ?>
							</div><!-- /.input group -->
						</div><!-- /.form group -->
           </div>
           <div class=" col-md-2">
						<div class="form-group">
							<label for="date">Close Meter</label>
							<div class="input-group">
              <?php
              $query=mysqli_query($con,"select * from product where branch_id='$branch'")or die(mysqli_error($con));
              //while($row=mysqli_fetch_array($query)){
              ?>
                <input type="number" step="any" class="form-control pull-right" id="date" name="closemeter"  tabindex="2"  min="1"   required>
              <?php ?>
							</div><!-- /.input group -->
						</div><!-- /.form group -->
           </div>
           <div class=" col-md-2">
						<div class="form-group">
							<label for="date">R.t.t</label>
							<div class="input-group">
              <?php
              $query=mysqli_query($con,"select * from product where branch_id='$branch'")or die(mysqli_error($con));
              //while($row=mysqli_fetch_array($query)){
              ?>
                <input type="number" step="any" class="form-control pull-right" id="date" name="rtt" placeholder="R.T.T" tabindex="2" value="0"    required>
              <?php ?>
							</div><!-- /.input group -->
						</div><!-- /.form group -->
           </div>
           <div class=" col-md-2">
						<div class="form-group">
							<label for="date">Current Price</label>
							<div class="input-group">
              <?php
              $query=mysqli_query($con,"select * from product where branch_id='$branch'")or die(mysqli_error($con));
              //while($row=mysqli_fetch_array($query)){
              ?>
                <input type="number" step="any" class="form-control pull-right" id="date" name="unitprice"  tabindex="2"  min="1"   required>
              <?php ?>
							</div><!-- /.input group -->
						</div><!-- /.form group -->
           </div>
           
					<div class="col-md-2">
						<div class="form-group">
							<label for="date"></label>
							<div class="input-group">
								<button class="btn btn-lg btn-primary" type="submit" tabindex="3" name="addtocart">+</button>
							</div>
						</div>	
					</form>	
					</div>

          
   
					<div class="col-md-12">
          <br/><b> Daily Fuel  Sale History</b>
          <div class="line"></div><br/><br/>
          <br/>
          <br/><strong> Morning Shift </strong>

                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      <th>Date</th>
                       <th>Pump Number</th>
                         <th>Nosal Number</th>
                         <th>Fuel type</th>
                         <th>Open Meter</th>
                         <th>Close Meter</th>
                         <th>R.T.T</th>
                        <th>Litre Sold</th>
                        <th>Unit Price</th>
                                            
                        <th>Payment</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
		
		$query=mysqli_query($con,"select * from dailysales natural join pumps natural join nosals  natural join stationproducts natural join shifts where shift_id='1'  ORDER BY date ASC")or die(mysqli_error());
			$grand=0;
		while($row1=mysqli_fetch_array($query)){
				$id=$row1['dailysales_id'];
				//$total= $row['qty']*$row['price'];
			//	$grand=$grand+$total;
		
?>
                      <tr >
                      <td style="text-align:center; font-size:10px;"><?php echo date("M d, Y",strtotime($row1['date']));?></td> 
                                            <td><?php echo $row1['pumpnumber'];?></td>
                                            <td><?php echo $row1['nosalnumber'];?></td>
                                            <td><?php echo $row1['stationprod_name'];?></td>
                                            <td><?php echo $row1['openmeter'];?></td>
                                            <td><?php echo $row1['closemeter'];?></td>
                                           <td><?php echo $row1['rtt'];?></td>
                                            <td><?php echo $row1['litressold'];?></td>
                                            <td><?php echo $row1['unitprice'];?></td>
                                            
                                           

                                            <td><?php echo $row1['total'];?></td>
                        <td>
							
							<a href="#updateordinance<?php echo $row['temp_trans_id'];?>" data-target="#updateordinance<?php echo $row['temp_trans_id'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i class="glyphicon glyphicon-edit text-blue"></i></a>

              <a href="#delete<?php echo $row['temp_trans_id'];?>" data-target="#delete<?php echo $row['temp_trans_id'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i class="glyphicon glyphicon-trash text-red"></i></a>
              
						</td>
                      </tr>
					  <div id="updateordinance<?php echo $row['temp_trans_id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
	  <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Update Stock - Out Details</h4>
              </div>
              <div class="modal-body">
			  <form class="form-horizontal" method="post" action="transaction_update.php" enctype='multipart/form-data'>
					<input type="hidden" class="form-control" name="cid" value="<?php echo $cid;?>" required>  	
					<input type="hidden" class="form-control" id="price" name="id" value="<?php echo $row['temp_trans_id'];?>" required>  
				<div class="form-group">
					<label class="control-label col-lg-3" for="price">Qty</label>
					<div class="col-lg-9">
					  <input type="text" class="form-control" id="price" name="qty" value="<?php echo $row['qty'];?>" required>  
					</div>
				</div>
				
              </div><br>
              <div class="modal-footer">
		            <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
			  </form>
            </div>
			
        </div><!--end of modal-dialog-->
 </div>
 <!--end of modal-->  
<div id="delete<?php echo $row['temp_trans_id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Delete Item</h4>
              </div>
              <div class="modal-body">
        <form class="form-horizontal" method="post" action="transaction_del.php" enctype='multipart/form-data'>
          <input type="hidden" class="form-control" name="cid" value="<?php echo $cid;?>" required>   
          <input type="hidden" class="form-control" id="price" name="id" value="<?php echo $row['temp_trans_id'];?>" required>  
        <p>Are you sure you want to remove <?php echo $row['prod_name'];?>?</p>
        
              </div><br>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Delete</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
        </form>
            </div>
      
        </div><!--end of modal-dialog-->
 </div>
 <!--end of modal-->  
<?php }?>					  
                    </tbody>
                    
                  </table>
                  <br/><br/>

                  <strong> Night Shift </strong>
                  <table class="table table-bordered table-striped">
                  <thead>
                      <tr>
                      <th>Date</th>
                       <th>Pump Number</th>
                         <th>Nosal Number</th>
                         <th>Fuel type</th>
                         <th>Open Meter</th>
                         <th>Close Meter</th>
                         <th>R.T.T</th>
                        <th>Litre Sold</th>
                        <th>Unit Price</th>
                                            
                        <th>Payment</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
		
		$query=mysqli_query($con,"select * from dailysales natural join pumps natural join nosals  natural join stationproducts natural join shifts where shift_id='1'  ORDER BY date ASC")or die(mysqli_error());
			$grand=0;
		while($row1=mysqli_fetch_array($query)){
				$id=$row1['dailysales_id'];
				//$total= $row['qty']*$row['price'];
			//	$grand=$grand+$total;
		
?>
                      <tr >
                      <td style="text-align:center; font-size:10px;"><?php echo date("M d, Y",strtotime($row1['date']));?></td> 
                                            <td><?php echo $row1['pumpnumber'];?></td>
                                            <td><?php echo $row1['nosalnumber'];?></td>
                                            <td><?php echo $row1['stationprod_name'];?></td>
                                            <td><?php echo $row1['openmeter'];?></td>
                                            <td><?php echo $row1['closemeter'];?></td>
                                           <td><?php echo $row1['rtt'];?></td>
                                            <td><?php echo $row1['litressold'];?></td>
                                            <td><?php echo $row1['unitprice'];?></td>
                                            
                                           

                                            <td><?php echo $row1['total'];?></td>
                        <td>
							
							<a href="#updateordinance<?php echo $row['temp_trans_id'];?>" data-target="#updateordinance<?php echo $row['temp_trans_id'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i class="glyphicon glyphicon-edit text-blue"></i></a>

              <a href="#delete<?php echo $row['temp_trans_id'];?>" data-target="#delete<?php echo $row['temp_trans_id'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i class="glyphicon glyphicon-trash text-red"></i></a>
              
						</td>
                      </tr>
					  <div id="updateordinance<?php echo $row['temp_trans_id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
	  <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Update Stock - Out Details</h4>
              </div>
              <div class="modal-body">
			  <form class="form-horizontal" method="post" action="transaction_update.php" enctype='multipart/form-data'>
					<input type="hidden" class="form-control" name="cid" value="<?php echo $cid;?>" required>  	
					<input type="hidden" class="form-control" id="price" name="id" value="<?php echo $row['temp_trans_id'];?>" required>  
				<div class="form-group">
					<label class="control-label col-lg-3" for="price">Qty</label>
					<div class="col-lg-9">
					  <input type="text" class="form-control" id="price" name="qty" value="<?php echo $row['qty'];?>" required>  
					</div>
				</div>
				
              </div><br>
              <div class="modal-footer">
		            <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
			  </form>
            </div>
			
        </div><!--end of modal-dialog-->
 </div>
 <!--end of modal-->  
<div id="delete<?php echo $row['temp_trans_id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Delete Item</h4>
              </div>
              <div class="modal-body">
        <form class="form-horizontal" method="post" action="transaction_del.php" enctype='multipart/form-data'>
          <input type="hidden" class="form-control" name="cid" value="<?php echo $cid;?>" required>   
          <input type="hidden" class="form-control" id="price" name="id" value="<?php echo $row['temp_trans_id'];?>" required>  
        <p>Are you sure you want to remove <?php echo $row['prod_name'];?>?</p>
        
              </div><br>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Delete</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
        </form>
            </div>
      
        </div><!--end of modal-dialog-->
 </div>
 <!--end of modal-->  
<?php }?>					  
                    </tbody>
                    
                  </table>
                </div><!-- /.box-body -->

				</div>	
               
                  
                  
				</form>	
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
            
            <div class="col-md-3">
              <div class="box box-primary">
               
                <div class="box-body">
                  <!-- Date range -->
          <form method="post" name="autoSumForm" action="review_add.php">
				  <div class="row">
					 <div class="col-md-12">
						  
						  <!--<div class="form-group">
							<label for="date">Total</label>
							
								<input type="text" style="text-align:right" class="form-control" id="total" name="total" placeholder="Total" 
								value="<?php echo $grand;?>" onFocus="startCalc();" onBlur="stopCalc();"  tabindex="5" readonly>
							
						  </div><!-- /.form group -->
						  <div class="form-group">
							<!--<label for="date">Discount</label>
							
								<input type="text" class="form-control text-right" id="discount" name="discount" value="0" tabindex="6" placeholder="Discount Amount" onFocus="startCalc();" onBlur="stopCalc();">-->
							<input type="hidden" class="form-control text-right" id="cid" name="cid" value="<?php echo $cid;?>">
						  </div><!-- /.form group -->
						  <div class="form-group">
							<!--<label for="date">Total Amount </label>-->
							
								<!--<input type="text" style="text-align:right" class="form-control" id="amount_due" name="amount_due" placeholder="Amount Due" value="<?php echo number_format($grand,2);?>" readonly>-->
							
						  </div><!-- /.form group -->
              
						 
              <!--div class="form-group" id="tendered">
                <label for="date">Cash Received</label><br>
                <input type="text" style="text-align:right" class="form-control" onFocus="startCalc();" onBlur="stopCalc();"  id="cash" name="tendered" placeholder="Cash Tendered" value="0">
              </div><!-- /.form group -->
              <!--<div class="form-group" id="change">
                <label for="date">Balance</label><br>
                <input type="text" style="text-align:right" class="form-control" id="changed" name="change" placeholder="Change">
              </div><!-- /.form group -->
					</div>
					
					

				</div>	
               
                  
        <!--<button class="btn btn-lg btn-block" id="daterange-btn" type="reset"  tabindex="8">
                        <a href="review_add.php">Send to</a>
                      </button>-->
                      <!--<button class="btn btn-lg btn-block btn-primary" id="daterange-btn" name="cash" type="submit"  tabindex="7">
                        View Daily Fuel  Sale Reports
                      </button>-->
					  <button class="btn btn-lg btn-block" id="daterange-btn" type="reset"  tabindex="8">
                        <a  style="font-size:12px;"href="#">View Daily Fuel  Sale Reports</a>
                      </button>
              
				</form>	
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
			
			
          </div><!-- /.row -->
	  
            
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <?php include('../dist/includes/footer.php');?>
    </div><!-- ./wrapper -->
	<script>
  
    
      $("#cash").click(function(){
          $("#tendered").show('slow');
          $("#change").show('slow');
      });

    $(function() {

      $(".btn_delete").click(function(){
      var element = $(this);
      var id = element.attr("id");
      var dataString = 'id=' + id;
      if(confirm("Sure you want to delete this item?"))
      {
	$.ajax({
	type: "GET",
	url: "temp_trans_del.php",
	data: dataString,
	success: function(){
		
	      }
	  });
	  
	  $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
	  .animate({ opacity: "hide" }, "slow");
      }
      return false;
      });

      });
    </script>
	
	<script type="text/javascript" src="autosum.js"></script>
    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<script src="../dist/js/jquery.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../plugins/select2/select2.full.min.js"></script>
    <!-- SlimScroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
    
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,x,
          "info": true,
          "autoWidth": false,
        });
      });
    </script>
     <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>
  </body>
</html>
