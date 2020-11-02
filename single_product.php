<?php
  $page_title = 'dashboard';
  include('./php/session.php');
  include('./components/header.php');
?>


<!-- 

category_id,
prod_name,
prod_buying_price,
prod_selling_price,
prod_quantity,
prod_units_of_measure,
prod_description

category_id,owner_user_id,prod_name,prod_buying_price,prod_selling_price,prod_quantity,prod_units_of_measure,prod_description -->
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">person</i>
                    Active User : 

                    <?php 
                        echo $_SESSION['fullname'];
                    ?>
                    (
                      <?php 
                         echo ($_SESSION['is_admin']==0) ? 'User' : 'Administrator';
                      ?>
                    )
                </a>
              </li>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->
    
           <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title text-center">Product Details</h4>
                </div>
                <div class="card-body">
                  
                  <form action="./php/exec_product.php" method="POST">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                          <label class="bmd-label-floating">Product Name</label>
                          <input type="text" class="form-control" id="prod_name" name="prod_name">
                        </div>
                      </div>

                       <div class="col-md-4">
                        <div class="form-group">
                       
                          <label class="bmd-label-floating">Category</label>
                        
                          <select class="category form-control" name="category_id">

                              <?php
                                  
                                  require_once('./php/dbcon.php');
                                  
                                  $query="
                                    SELECT * FROM tbl_categories
                                  ";
                                  
                                  $result = mysqli_query($link,$query) or die(mysqli_error());

                                  while($row=mysqli_fetch_array($result)){
                                     
                                     $category_id = $row['category_id']; 
                                     $category = $row['category']; 

                              ?>

                                 <option value="<?php echo $category_id; ?>"><?php echo $category; ?></option>

                              <?php
                                }
                              ?>

                          </select>
                        </div>
                      </div>

                    </div>


                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Cost (Buying Price)</label>
                          <input type="text" class="form-control" name="prod_buying_price">
                        </div>
                      </div>
                       <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Price (Selling Price)</label>
                          <input type="text" class="form-control" name="prod_selling_price">
                        </div>
                      </div>
                       <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Quantity</label>
                          <input type="text" class="form-control" name="prod_quantity">
                        </div>
                      </div>
                        <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Units of Measure (eg: Kgs, Litres)</label>
                          <input type="text" class="form-control" name="prod_units_of_measure">
                        </div>
                    </div>
                    </div>
                  
                 

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="form-group">
                            <label class="bmd-label-floating">Brief description of the product</label>
                            <textarea class="form-control" rows="3" name="prod_description"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right" name="save_product">Save</button>
                    <div class="clearfix"></div>
                  </form>

                </div>
              </div>
            </div>


        </div>
      </div>


<?php
  include('./components/footer.php');
?>