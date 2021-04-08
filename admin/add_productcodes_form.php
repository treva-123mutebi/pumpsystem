<div class="x_panel">
                  <div class="x_title">
                    <h2>Add  Product Code <i class = "fa fa-building"></i></h2>
                    <ul class="nav navbar-right panel_toolbox"> 
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" action = "add_productcode.php" method = "POST" enctype = "multipart/form-data">
                    <div class="form-group">
                       
                       <div class="col-md-9 col-sm-9 col-xs-9">
                       <label>Select Product Sub Category</label><br/>
                       </div>
                     </div>
                     <div class="form-group">
                       
                       
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <select  name = "sc_id" class = "form-control">
              <?php	
                 include 'dbcon.php';								
                   $query1=mysqli_query($con,"select * from pdsubcat natural join stproducts ORDER BY sc_id ASC")or die(mysqli_error($con));
                   while ($row1=mysqli_fetch_array($query1)){
                     $id=$row1['stpd_id'];
             ?>
             <option value = "<?php echo $row1['sc_id'];?>"><?php echo $row1['product_name'];?> --> <?php echo $row1['sc_name'];?></option>	
             <?php } ?>																 
            </select>
                         <span class="fa form-control-feedback right" aria-hidden="true"></span>
                       </div>
                     </div>
                      <div class="form-group">
                       
                        <div class="col-md-9 col-sm-9 col-xs-9">
                        <label>Enter Product Code</label><br/>
                        </div>
                      </div>
                      <div class="form-group">
                        
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name = "pc_code" required>
                          <span class="fa fa-building form-control-feedback right" aria-hidden="true"required ></span>
                        </div>
                      </div>
                      <div class="form-group">
                       
                        <div class="col-md-9 col-sm-9 col-xs-9">
                        <label>Enter Unit Price</label><br/>
                        </div>
                      </div>
                      <div class="form-group">
                        
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="number" step="any" class="form-control" name = "unitprice" required>
                          <span class="fa fa-building form-control-feedback right" aria-hidden="true"required ></span>
                        </div>
                      </div>
                      <div class="form-group">
                       
                        <div class="col-md-9 col-sm-9 col-xs-9">
                        <label>Enter Re order Level</label><br/>
                        </div>
                      </div>
                      <div class="form-group">
                        
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="number" step="any" class="form-control" name = "reorderlevel" required>
                          <span class="fa fa-building form-control-feedback right" aria-hidden="true"required ></span>
                        </div>
                      </div>
                      <div class="form-group">
                       
                       <div class="col-md-9 col-sm-9 col-xs-9">
                       <label>Select Supplier</label><br/>
                       </div>
                     </div>
                      <div class="form-group">
                       
                       
                       <div class="col-md-6 col-sm-6 col-xs-9">
                        <select  name = "supplier_id" class = "form-control">
              <?php	
                 include 'dbcon.php';								
                   $query1=mysqli_query($con,"select * from supplier ORDER BY supplier_id ASC")or die(mysqli_error($con));
                   while ($row1=mysqli_fetch_array($query1)){
                     $id=$row1['supplier_id'];
             ?>
             <option value = "<?php echo $row1['supplier_id'];?>"><?php echo $row1['supplier_name'];?></option>	
             <?php } ?>																 
            </select>
                         <span class="fa form-control-feedback right" aria-hidden="true"></span>
                       </div>
                     </div>
                      
                      
                      
                      
                      
                     
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                        
                          <button name = "" class="btn btn-block btn-success"><i class = "fa fa-save"></i> Save</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>