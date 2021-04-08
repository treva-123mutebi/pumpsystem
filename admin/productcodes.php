
<?php include 'header.php';?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
       <?php include 'main_sidebar.php';?>

        <!-- top navigation -->
       <?php include 'top_nav.php';?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main"> 
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class = "col-md-4 col-lg-4 col-xs-4">
						<?php include 'add_productcodes_form.php';?>
					</div>
					<div class = "col-md-8 col-lg-8 col-xs-8">
						<div class = "x-panel">
						 <table id="datatable" class="table table-striped table-bordered">
							 <thead>
								<tr>
									<th>Product</th>
									<th>Sub Category</th>
                                    <th>Product Code</th>
                                    <th>Unit Price</th>
                                    <th>Re order Level</th>
                                    <th>Quantity</th>
									<th>Supplier name</th>
									<th> Update </th>
																	
								</tr>
							 </thead>
							 <tbody>
									<?php	
									include 'dbcon.php';								
										$query1=mysqli_query($con,"select * from productcode natural join pdsubcat natural join stproducts natural join supplier ORDER BY pc_id ASC")or die(mysqli_error($con));
										while ($row1=mysqli_fetch_array($query1)){
											$id=$row1['pc_id'];
											
									?>  
								<tr>
									<td><?php echo $row1['product_name'];?></td>
									<td><?php echo $row1['sc_name'];?></td>
                                    <td><?php echo $row1['pc_code'];?></td>
                                    <td><?php echo $row1['unitprice'];?></td>
                                    <td><?php echo $row1['reorderlevel'];?></td>
                                    <td><?php echo $row1['prod_qty'];?></td>
									<td><?php echo $row1['supplier_name'];?></td>
									
									<td>
										<a href="#update<?php echo $id;?>" class="btn btn-success btn-xs" data-toggle = "modal" data-target="#update<?php echo $id;?>"><i class = "fa fa-pencil"></i> Edit</a>
										
									</td>
																
								</tr>
										<?php include 'update_productcode_modal.php';?>
								<?php }?>
							 </tbody>								
						 </table>
						</div>
					</div>
				</div>
			</div>
        </div>
		
		
		
		
		
		
		
		
				
		
		
		
		
		
		
		
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Sales and Inventory System <a href="#"></a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

	<?php include 'datatable_script.php';?>
    <!-- /gauge.js -->
  </body>
</html>
