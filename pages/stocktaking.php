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
    <title>Product | <?php include('../dist/includes/title.php');?></title>
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
    <style>
      
    </style>
 </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-<?php echo $_SESSION['skin'];?> layout-top-nav">
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
              <li class="active">Stock Taking</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="row">
	      <div class="col-md-4">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Stock Taking</h3>
                </div>
                <div class="box-body">
                  <!-- Date range -->
                  <form method="post" action="stocktaking_add.php" enctype="multipart/form-data">
  
                  <div class="form-group">
                    <label for="date">Select Item</label>
                    <div class="input-group col-md-12">
                    <select style="font-size:12px" class="form-control select2" name="pc_code" tabindex="1" autofocus required>
								<?php
                  $branch=$_SESSION['branch'];
                  
                 
								  include('../dist/includes/dbcon.php');
									 $query2=mysqli_query($con,"select * from productcode natural join pdsubcat natural join stproducts   order by pc_id")or die(mysqli_error());
									    while($row=mysqli_fetch_array($query2)){
								?>
										<option  value="<?php echo $row['pc_id'];?>"><?php echo $row['product_name']." ".$row['sc_name'].""." ".$row['pc_code']." "." Qty Available(".$row['prod_qty'].")";?></option>
                      <?php }?>
								</select>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
		  
                  <div class="form-group">
                    <label for="date">Quantity Counted</label>
                    <div class="input-group col-md-12">
                      <input type="number" step="any" class="form-control pull-right" id="date" name="qtycounted" placeholder="Quantity" required>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  <div class="form-group">
                    <label for="date">Date</label>
                    <div class="input-group col-md-12">
                      <input type="date" class="form-control pull-right" id="date" name="date" placeholder="Quantity" required>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                 
                
                  <div class="form-group">
                    <div class="input-group">
                      <button class="btn btn-primary" id="daterange-btn" name="">
                        Save
                      </button>
					  <div><br/></div><input type="reset" class="btn" id="daterange-btn" value="clear"/>
                        
                    </div>
                  </div><!-- /.form group -->
				</form>	
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
            
            <div class="col-xs-8">
              <div class="box box-primary">
    
                <div class="box-header">
                  <h3 class="box-title">Stock Taking History</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Product Code</th>
                        <th>Product</th>
                        <th>Quantity Counted</th>
                        <th>Quantity Available</th>
                        <th>Difference</th>
                        
				        <th>Date </th>
                      </tr>
                    </thead>
                    <tbody>
<?php
		$branch=$_SESSION['branch'];
		$query=mysqli_query($con,"select * from stocktaking natural join productcode natural join pdsubcat natural join stproducts natural join supplier  order by date desc ")or die(mysqli_error());
		while($row=mysqli_fetch_array($query)){
      $id=$row['stocktaking_id'];
      //$total= $row['qty']*$row['price'];
      //$grand=$grand+$total;
		
?>
                      <tr>
                        <td><?php echo $row['pc_code'];?></td>
                        <td><?php echo $row['product_name'];?> <?php echo $row['sc_name'];?></td>
                        <td><?php echo $row['qty_counted'];?></td>
                        
                       <td><?php echo $row['qty_available'];?></td>
                       <td><?php echo $row['difference'];?></td>
                       
                        <td><?php echo date("M d, Y",strtotime($row['date']));?></td>
                      
                      </tr>
                   
<?php }?>					  
                    </tbody>
                    <tfoot>
                      <tr>
                       
                        
                        
                      </tr>					  
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
 
            </div><!-- /.col -->
			
			
          </div><!-- /.row -->
	  
            
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <?php include('../dist/includes/footer.php');?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
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
          "ordering": true,
          "info": true,
          "autoWidth": false
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
