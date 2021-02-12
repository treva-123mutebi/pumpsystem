  <div class="x_panel">
                  <div class="x_title">
                    <h2>Enter Initial Meter reading <i class = "fa fa-building"></i></h2>
                    <ul class="nav navbar-right panel_toolbox"> 
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" action = "add_initialm.php" method = "POST" enctype = "multipart/form-data">
                      <div class="form-group">
                       
                        <div class="col-md-9 col-sm-9 col-xs-9">
                        <label>Enter Date</label><br/>
                        </div>
                      </div>
                      <div class="form-group">
                        
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="date" class="form-control"  required>
                          <span class="fa fa-building form-control-feedback right" aria-hidden="true"required ></span>
                        </div>
                      </div>
                      <div class="form-group">
                       
                        <div class="col-md-9 col-sm-9 col-xs-9">
                        <label>Enter Initial Meter Reading </label><br/>
                        </div>
                      </div>
                      <div class="form-group">
                        
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input  name="closemeter" type="number" step="any" min="0" class="form-control"  required>
                          <span class="fa fa-building form-control-feedback right" aria-hidden="true"required ></span>
                        </div>
                      </div>
					   <div class="col-md-9 col-sm-9 col-xs-9">
                        <label>Select Pump Nosal</label><br/>
						<select  name = "nosal_id" class = "form-control">
						 	<?php	
									include 'dbcon.php';								
										$query1=mysqli_query($con,"select * from nosals ORDER BY nosal_id ASC")or die(mysqli_error($con));
										while ($row1=mysqli_fetch_array($query1)){
											$id=$row1['nosal_id'];
							?>
							<option value = "<?php echo $row1['nosal_id'];?>"><?php echo $row1['nosalnumber'];?></option>	
							<?php } ?>																 
						 </select>
                          <span class="fa form-control-feedback right" aria-hidden="true"></span>
                        </div>
                        
                     
                     
                     
                      
                      
                      
                     
                      <div class="ln_solid"></div>

                      <tr><div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                        
                          <br/><br/><button name = "" class="btn btn-block btn-success"><i class = "fa fa-save"></i> Save</button>
                        </div>
                      </div></tr>

                    </form>
                  </div>
                </div>