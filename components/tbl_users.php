<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title text-center" style="text-transform: uppercase;">
        USER Product Listing
      </h4>
      <p class="card-category text-center"> List of user's Products</p>
      </div>
      <div class="card-body">

<!-- user_id,firstname,lastname,email,password,is_admin -->
      <div class="table-responsive">
        <table class="table">
            <thead class=" text-primary">
              <th>
                ID
              </th>
              <th>
                Full Name
              </th>
              <th>
                Email
              </th>
              <th>
                User Type
              </th>
              <th>
                Actions
              </th>
            </thead>
            <tbody>


              <?php
              require_once('./php/dbcon.php');
                $query="
                    SELECT * FROM tbl_users
                ";
                
                $result = mysqli_query($link,$query) or die(mysqli_error());

                while($row=mysqli_fetch_array($result)){
                   $user_id=$row['user_id'];
                   $firstname=$row['firstname'];
                   $lastname=$row['lastname'];
                   $email=$row['email'];
                   $is_admin=$row['is_admin'];     
                ?>
                <tr>
                      <td>
                        <?php echo $user_id; ?>
                      </td>
                      <td>
                        <?php echo $firstname." ".$lastname; ?>
                      </td>
                      <td>
                        <?php echo $email; ?>
                      </td>
                      <td class="text-primary">
                        <?php 
                            echo ($is_admin == 0) ? 'User' : 'Administrator'; 
                        ?>
                      </td>
                      <td>
                             <a href="">
                              <i class="material-icons">edit</i>
                            </a>
                             <a href="">
                              <i class="material-icons">delete</i>
                            </a>
                      </td>
                  </tr>

              <?php
                }
              ?>
            </tbody>
          </table>
      </div>

    </div>
  </div>
</div>
