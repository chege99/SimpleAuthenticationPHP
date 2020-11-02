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
            <a class="btn btn-primary pull-right" style="color:white" href="./single_user.php" >Add New User</a>

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
    
          <?php
            include ('./components/tbl_users.php');
          ?>

        </div>
      </div>


<?php
  include('./components/footer.php');
?>