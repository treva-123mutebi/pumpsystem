  <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Station Pump Nosal <i class = "fa fa-building"></i></h2>
                    <ul class="nav navbar-right panel_toolbox"> 
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" action = "add_nosal.php" method = "POST" enctype = "multipart/form-data">
                      <div class="form-group">
                       
                        <div class="col-md-9 col-sm-9 col-xs-9">
                        <label>Enter Nosal Number</label><br/>
                        </div>
                      </div>
                      <div class="form-group">
                        
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" name = "nosalnumber" required>
                          <span class="fa fa-building form-control-feedback right" aria-hidden="true"required ></span>
                        </div>
                      </div>
					   <div class="col-md-9 col-sm-9 col-xs-9">
                        <label>Select Pump Number</label><br/>
						<select  name = "pumpid" class = "form-control">
						 	<?php	
									include 'dbcon.php';								
										$query1=mysqli_query($con,"select * from pumps ORDER BY pumpid ASC")or die(mysqli_error($con));
										while ($row1=mysqli_fetch_array($query1)){
											$id=$row1['pumpidid'];
							?>
							<option value = "<?php echo $row1['pumpid'];?>"><?php echo $row1['pumpnumber'];?></option>	
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