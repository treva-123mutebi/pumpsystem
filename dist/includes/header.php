<?php
//session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
date_default_timezone_set("Asia/Manila"); 
?>
<?php
include('../dist/includes/dbcon.php');

$branch=$_SESSION['branch'];
$query=mysqli_query($con,"select * from branch where branch_id='$branch'")or die(mysqli_error($con));
  $row=mysqli_fetch_array($query);
           $branch_name=$row['branch_name'];
?>

      <header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header" style="padding-left:20px">
              <a href="home.php" class="navbar-brand"><b><i class="glyphicon glyphicon-home"></i> <?php echo $branch_name;?> </b></a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <!-- Messages: style can be found in dropdown.less-->
				  <li class="">
                
                    <a href="log.php" class="dropdown-toggle">
                      <i class="glyphicon glyphicon-list-alt"></i>
                      History Log
                    </a>
                  </li>
                  <li class="">
                
                
              </li>
                  <!-- Notifications Menu -->
                  <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="glyphicon glyphicon-refresh text-red"></i>
                      <span class="label label-danger">
                      <?php 
                      $query=mysqli_query($con,"select COUNT(*) as count from productcode where prod_qty<=reorderlevel")or die(mysqli_error());
                			$row=mysqli_fetch_array($query);
                			echo $row['count'];
                			?>	
                      </span>
                    </a>--
                    <ul class="dropdown-menu">
                      <li class="header">You have <?php echo$row['count'];?> products that needs reorder</li>
                      <li>
                        <!-- Inner Menu: contains the notifications -->
                        <ul class="menu">
                        <?php
                        $queryprod=mysqli_query($con,"select * from productcode natural join pdsubcat natural join stproducts where prod_qty<=reorderlevel")or die(mysqli_error());
			  while($rowprod=mysqli_fetch_array($queryprod)){
			?>
                          <li><!-- start notification -->
                            <a href="#">
                              <i class="glyphicon glyphicon-refresh text-red"></i> <?php echo $rowprod['product_name'];?>.<?php echo $rowprod['sc_name'];?> <?php echo $rowprod['pc_code'];?>
                            </a>
                          </li><!-- end notification -->
                          <?php }?>
                        </ul>
                      </li>
                      <li class="footer"><a href="stockin.php">Restock Items</a></li>
                    </ul>
                  </li>
                  <!-- Tasks Menu -->
				   <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <!--<a href="#" class="dropdown-toggle" data-toggle="#">
                      <i class="glyphicon glyphicon-wrench"></i> Maintenance
                      
                    </a>-->
                    <ul class="dropdown-menu">
                      <li>
                        <!-- Inner Menu: contains the notifications -->
                        <ul class="menu">
						  <li><!-- start notification -->
                            <a href="category.php">
                              <i class="glyphicon glyphicon-user text-green"></i> Items
                            </a>
                          </li><!-- end notification -->
						              <li><!-- start notification -->
                            <a href="customer.php">
                              <i class="glyphicon glyphicon-user text-green"></i> Customer
                            </a>
                          </li><!-- end notification -->
                          <li><!-- start notification 
                            <a href="creditor.php">
                              <i class="glyphicon glyphicon-user text-green"></i> Credit Applicants
                            </a>-->
                          </li><!-- end notification -->
						  <li><!-- start notification -->
                            <a href="product.php">
                              <i class="glyphicon glyphicon-cutlery text-green"></i> Product
                            </a>
                          </li><!-- end notification -->
						 
						  <li><!-- start notification -->
                            <a href="supplier.php">
                              <i class="glyphicon glyphicon-send text-green"></i> Supplier
                            </a>
                          </li><!-- end notification -->
                         
						 
                        </ul>
                      </li>
                     
                    </ul>
                  </li>
                  <!-- Tasks Menu -->
				   <!-- Tasks Menu -->
				   <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <!--<a href="supp_new.php">
                      <i class="glyphicon glyphicon-list text-green"></i> Clear Credit
                      
                    </a>-->
                    <ul class="dropdown-menu">
                      <li>
                      </li>
                     
                    </ul>
                  </li>
                  <!-- Tasks Menu -->
				   <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="glyphicon glyphicon-stats text-red"></i> Report
                     
                    </a>
                    <ul class="dropdown-menu">
                     <li>
                        <!-- Inner Menu: contains the notifications -->
                        <ul class="menu">
                        
                          <li><!-- start notification -->
                            <a href="inventory.php">
                              <i class="glyphicon glyphicon-ok text-green"></i>Product Inventory Report
                            </a>
                          </li><!-- end notification -->
                          <li><!-- start notification -->
                            <a href="fuelpurchasesreport.php">
                              <i class="glyphicon glyphicon-ok text-green"></i>Fuel Purchases Report
                            </a>
                          </li><!-- end notification -->
						            <li><!-- start notification -->
                         <a href="sales.php">
                              <i class="glyphicon glyphicon-usd text-blue"></i>Fuel Sale Report
                            </a>
                          </li><!-- end notification -->
					    <li><!-- start notification -->
                         <a href="tankreadings.php">
                              <i class="glyphicon glyphicon-th-list text-redr"></i>Tank Reading Report
                            </a>
                          </li><!-- end notification -->
                          <li><!-- start notification -->
                         <a href="itemreport.php">
                              <i class="glyphicon glyphicon-th-list text-redr"></i>Product Sale Report
                            </a>
                          </li><!-- end notification -->
                          <li><!-- start notification -->
                         <a href="itemreport.php">
                              <i class="glyphicon glyphicon-th-list text-redr"></i>Product Purchase Report
                            </a>
                          </li><!-- end notification -->
						  <li><!-- start notification 
                         <a href="income.php">
                              <i class="glyphicon glyphicon-th-list text-redr"></i>Branch Income
                            </a>-->
                          </li><!-- end notification -->
                          <li><!-- start notification -->
                         <a href="#">
                             <!-- <i class="glyphicon glyphicon-usd text-blue"></i>-->
                            </a>
                          </li><!-- end notification -->
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <!-- Tasks Menu -->
				  <li class="">
                    <!-- Menu Toggle Button -->
                    <a href="profile.php" class="dropdown-toggle">
                      <i class="glyphicon glyphicon-cog text-orange"></i>
                      <?php echo $_SESSION['name'];?>
                    </a>
                  </li>
                  <li class="">
                    <!-- Menu Toggle Button -->
                    <a href="logout.php" class="dropdown-toggle">
                      <i class="glyphicon glyphicon-off text-red"></i> Logout 
                      
                    </a>
                  </li>
                  
                </ul>
              </div><!-- /.navbar-custom-menu -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>