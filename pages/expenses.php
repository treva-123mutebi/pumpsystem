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
              <li class="active">Daily Expenses</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="row">
	      <div class="col-md-9">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Register Expenses</h3>
                </div>
                <div class="box-body">
                  <!-- Date range -->
                  <form method="post" action="expensesadd.php">
				  <div class="row" style="min-height:400px">
					
					 
							<!--<label for="date">Select Item</label>-->
							 
								
								<?php
                  $branch=$_SESSION['branch'];

                 
                  //$date = date("Y-m-d H:i:s");
								  
								?>
									
                      <?php ?>
								
						    <!--<input type="hidden" class="form-control" name="cid" value="<?php echo $cid;?>" required>   -->
						
				
           <div class=" col-md-4">
           <div class="form-group">
                    <label for="date">Enter Expense Name</label>
                    <div class="input-group col-md-12">
                    <input type="text"  class="form-control pull-right" id="date" name="expense_name"  tabindex="2"   required>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
		  
           </div>
           
           
           <div class=" col-md-2">
						<div class="form-group">
							<label for="date">Amount (UGX)</label>
							<div class="input-group">
              <?php
              $query=mysqli_query($con,"select * from product where branch_id='$branch'")or die(mysqli_error($con));
              //while($row=mysqli_fetch_array($query)){
              ?>
                <input type="number" step="any" class="form-control pull-right" id="date" name="amount"  tabindex="2"  min="1"   required>
              <?php ?>
							</div><!-- /.input group -->
						</div><!-- /.form group -->
           </div>
           <div class=" col-md-2">
						<div class="form-group">
							<label for="date">Date</label>
							<div class="input-group">
              <?php
              $query=mysqli_query($con,"select * from product where branch_id='$branch'")or die(mysqli_error($con));
              //while($row=mysqli_fetch_array($query)){
              ?>
                <input type="date" step="any" class="form-control pull-right" id="date" name="date"  tabindex="2"  min="1"   required>
              <?php ?>
							</div><!-- /.input group -->
						</div><!-- /.form group -->
           </div>
           
					<div class="col-md-2">
						<div class="form-group">
							<br/><br/> <br/><label for="date"></label>
							<div class="input-group">
								<button class="btn btn-lg btn-primary" type="submit" tabindex="3" name="addtocart">+</button>
							</div>
						</div>	
					</form>	
					</div>

          
   
					<div class="col-md-12">
          <br/><b> </b>
          <div class="line"></div><br/><br/>
          <br/>
          <br/><strong> Expenses History </strong>

                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      <th>Date</th>
                                            <th>Expense</th>
                                            <!--<th>Nosal Number</th>-->
                                            <th>Amount (UGX)</th>
                                            <!--<th>Open Meter</th>
                                            <th>Close Meter</th>-->
                                            <!--<th>R.T.T</th>-->
                                            <!--<th>Litre In</th>
                                            <th>Unit Price</th>
                                            
                                            <th>Payment</th>-->
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
		
		$query=mysqli_query($con,"select * from expenses  ORDER BY date desc")or die(mysqli_error());
			$grand=0;
		while($row1=mysqli_fetch_array($query)){
				$id=$row1['expenses_id'];
				//$total= $row['qty']*$row['price'];
			//	$grand=$grand+$total;
		
?>
                      <tr style="font-size: 10px;" >
                      <td style="text-align:center; font-size:10px;"><?php echo date("M d, Y",strtotime($row1['date']));?></td> 
                      
                                            <td><?php echo $row1['expense_name'];?></td>
                                            <td><?php echo $row1['amount'];?></td>
                                            <!--<td><?php echo $row1['litresin'];?></td>
                                            <td><?php echo $row1['unitprice'];?></td>
                                            <td><?php echo $row1['payment'];?></td>-->
                        <td>
							
							<a href="#updateordinance<?php echo $row1['expenses_id'];?>" data-target="#updateordinance<?php echo $row1['expenses_id'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i class="glyphicon glyphicon-edit text-blue"></i></a>

              <a href="#delete<?php echo $row1['expenses_id'];?>" data-target="#delete<?php echo $row1['expenses_id'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i class="glyphicon glyphicon-trash text-red"></i></a>
              
						</td>
                      </tr>
					  <div id="updateordinance<?php echo $row1['expenses_id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
	  <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Update Expense Details</h4>
              </div>
              <div class="modal-body">
			  <form class="form-horizontal" method="post" action="expenses_update.php" enctype='multipart/form-data'>
					<input type="hidden" class="form-control" name="cid" value="<?php echo $cid;?>" required>  	
					<input type="hidden" class="form-control" id="price" name="id" value="<?php echo $row1['expenses_id'];?>" required>
          
          
          <br/><br/>
				
				<div class="form-group">
					<label class="control-label col-lg-3" for="price">Expense Name</label>
					<div class="col-lg-9">
					  <input type="text" class="form-control" id="price" name="expense_name" value="<?php echo $row1['expense_name'];?>" required>  
					</div>
				</div>
        <br/>
        <br/>
        <div class="form-group">
					<label class="control-label col-lg-3" for="price">Amount</label>
					<div class="col-lg-9">
					  <input type="text" class="form-control" id="price" name="amount" value="<?php echo $row1['amount'];?>" required>  
					</div>
				</div>
        <br/>
        <br/>
        <div class="form-group">
					<label class="control-label col-lg-3" for="price">Date</label>
					<div class="col-lg-9">
					  <input type="text" class="form-control" id="price" name="date" value="<?php echo date("M d, Y",strtotime($row1['date']));?>" readonly required>  
					</div>
				</div>
				
              </div>
              <br/><br/><br>
              <div class="modal-footer">
		            <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
			  </form>
            </div>
			
        </div><!--end of modal-dialog-->
 </div>
 <!--end of modal-->  
<div id="delete<?php echo $row1['expenses_id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Delete Item</h4>
              </div>
              <div class="modal-body">
        <form class="form-horizontal" method="post" action="expense_del.php" enctype='multipart/form-data'>
          <input type="hidden" class="form-control" name="cid" value="<?php echo $cid;?>" required>   
          <input type="hidden" class="form-control" id="price" name="id" value="<?php echo $row1['expenses_id'];?>" required>  
        <p style="color:red"' >Are you sure you want to delete <?php echo $row1['expense_name'];?>  Expense for <?php echo date("M d, Y",strtotime($row1['date']));?> ?</p>
        
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
                        <a  style="font-size:12px;"href="expensesreport.php">View Expenses Reports</a>
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
