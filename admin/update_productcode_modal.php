<div id = "update<?php echo $id;?>" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
					 <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Edit  Product Code</h4>
                        </div>
                        <div class="modal-body">
                         <form method = "POST" action = "update_productcode.php"> 
						   <input type="hidden" name="pc_id" value="<?php echo $id;?>">
								<label>Product Sub Code</label>
									<input type="text" name = "pc_code" class="form-control" value = "<?php echo $row1['pc_code'];?>">
									<br/>	
                  <label>Unit Price</label>
									<input type="text" name = "unitprice" class="form-control" value = "<?php echo $row1['unitprice'];?>">
									<br/>	
                  <label>Re order LeveL</label>
									<input type="text" name = "reorderlevel" class="form-control" value = "<?php echo $row1['reorderlevel'];?>">
									<br/>	
                  <label>Product Quantity</label>
									<input type="text" name = "prod_qty" class="form-control" value = "<?php echo $row1['prod_qty'];?>">
									<br/>
                  <label>Supplier</label>
									<select name = "supplier_id" class = "form-control">
										<option value = "<?php echo $row1['supplier_id'];?>"><?php echo $row1['supplier_name'];?></option>
										<option></option>
										<?php	
											include 'dbcon.php';								
										$query4=mysqli_query($con,"select * from supplier")or die(mysqli_error($con));
										while ($row2=mysqli_fetch_array($query4)){
											$id=$row2['supplier_id'];
										?>
										<option value = "<?php echo $row2['supplier_id'];?>"><?php echo $row2['supplier_name'];?></option>
										<?php } ?>
										
									</select>
									<br/>								
								
								
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button  name = "update" class="btn btn-primary">Save changes</button>
						</form>
						</div>
                        <div class="modal-footer">
                          
                        </div>
                      </div>
                    </div>
				</div>