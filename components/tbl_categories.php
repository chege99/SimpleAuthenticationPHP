<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title text-center" style="text-transform: uppercase;">
        Category Listing
      </h4>
      </div>
      <div class="card-body">

      <div class="table-responsive">
        <table class="table">
            <thead class=" text-primary">
              <th>
                ID
              </th>
              <th>
                Category Name
              </th>
              <th>
                Actions
              </th>
            </thead>
            <tbody>


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
                <tr>
                      <td>
                        <?php echo $category_id; ?>
                      </td>
                      <td>
                        <?php echo $category; ?>
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
