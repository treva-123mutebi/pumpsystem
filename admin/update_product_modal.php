<div id = "update<?php echo $id;?>" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
					 <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Edit  Product</h4>
                        </div>
                        <div class="modal-body">
                         <form method = "POST" action = "update_product.php"> 
						   <input type="hidden" name="stpd_id" value="<?php echo $id;?>">
								<label>Product Name</label>
									<input type="text" name = "product_name" class="form-control" value = "<?php echo $row1['product_name'];?>">
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