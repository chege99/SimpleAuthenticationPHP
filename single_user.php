<?php
  $page_title = 'users';
  include('./php/session.php');

  if($_SESSION['is_admin']!=1){
    //if user is not admin, redirect to dashboar
    header('location: ./dashboard.php');
  }

  include('./components/header.php');
?>


<?php
if(isset($_POST['save_details'])){
    $user_id = filter_var($_POST['user_id'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);


}

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
                  <form action="./php/exec_user.php" method="POST">
                  
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">First Name</label>
                          <input type="text" name="firstname" class="form-control">
                        </div>
                      </div>
                      
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" name="lastname" class="form-control">
                        </div>
                      </div>
                      
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="text" name="email" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" name="password" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">User Type</label>
                          <select class="category form-control" name="is_admin">
                              <option value="1">Administrator</option>
                              <option value="0">User</option>
                          </select>
                        </div>
                      </div>



                    </div>
                    

                    <button type="submit" name="save_details" class="btn btn-primary pull-right">Save</button>
                    
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