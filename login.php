<?php
  $page_title="Login";
	include('./components/header.php');
?>

<body>
  <div class="wrapper ">
    <div class="main-panel login">

      <div class="content">
        <div class="container col-md-4 col-sm-10 col-xs-12 ">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title text-center">Login</h4>
                     <p class="card-category">
                       <!-- response -->
                     </p>
                </div>
                <div class="card-body">
                 
                  <form action="./php/authentication.php" method="POST">

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" name="email" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" name="password" class="form-control">
                        </div>
                      </div>
                    </div>

                   <div class="d-flex justified">
                      <button type="reset" class="btn btn-default pull-right">Reset</button>
                      <button type="submit" name="login" class="btn btn-primary pull-right">Login</button>
                   </div>
                    <div class="clearfix"></div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


<?php
	include('./components/footer.php');
?>