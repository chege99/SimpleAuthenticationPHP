<?php
  $page_title = 'users';
  include('./php/session.php');
  include('./components/header.php');
?>

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
                  <h4 class="card-title text-center">User Details</h4>
                </div>
                <div class="card-body">
                  <form>
                  
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">First Name</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">User Type</label>
                          <select class="category form-control" >
                              <option>Administrator</option>
                              <option>User</option>
                          </select>
                        </div>
                      </div>


                    </div>
                    

                    <button type="submit" class="btn btn-primary pull-right">Save</button>
                    
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