<div id = "update<?php echo $id;?>" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
					 <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Edit Storage Unit Name</h4>
                        </div>
                        <div class="modal-body">
                         <form method = "POST" action = "update_storageunit.php"> 
						   <input type="hidden" name="stunit_id" value="<?php echo $id;?>">
								<label>Name</label>
									<input type="text" name = "storageunitname" class="form-control" value = "<?php echo $row1['storageunitname'];?>">
									<br/>				
                  <label>Capacity</label>
									<input type="text" name = "capacity" class="form-control" value = "<?php echo $row1['capacity'];?>">
									<br/>
                  <br/>
								<label>Fuel Type</label>
									<select name = "prod_id" class = "form-control">
										<option value = "<?php echo $row['prod_id'];?>"><?php echo $row['stationprod_name'];?></option>
										<option></option>
										<?php	
											include 'dbcon.php';								
										$query4=mysqli_query($con,"select * from stationproducts")or die(mysqli_error($con));
										while ($row1=mysqli_fetch_array($query4)){
											$id3=$row1['prod_id'];
										?>
										<option value = "<?php echo $row1['prod_id'];?>"><?php echo $row1['stationprod_name'];?></option>
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