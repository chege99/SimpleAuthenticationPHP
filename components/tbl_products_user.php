<!-- 
product_id,category,prod_name,prod_buying_price,prod_selling_price,prod_quantity,prod_units_of_measure,prod_description -->

<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title text-center" style="text-transform: uppercase;">
        USER Product Listing
      </h4>
      <p class="card-category text-center"> List of user's Products</p>
      </div>
      <div class="card-body">

      <div class="table-responsive">
        <table class="table">
            <thead class=" text-primary">
              <th>
                ID
              </th>
              <th>
                Product Name
              </th>
              <th>
                Category
              </th>
              <th>
                Cost (BP)
              </th>
              <th>
                Price (SP)
              </th>
              <th>
                Stock
              </th>
              <th>
               Units of measure
              </th>
              <th>
               Description
              </th>
              <th>
                Actions
              </th>
            </thead>
            <tbody>


              <?php
              require_once('./php/dbcon.php');
                $query="
                  SELECT * FROM 
                      tbl_products 
                  LEFT JOIN 
                      tbl_categories 
                  ON 
                      tbl_products.category_id = tbl_categories.category_id
                  WHERE owner_user_id = '".$_SESSION['sess_id']."'
                ";

                // die($query);
                
                $result = mysqli_query($link,$query) or die(mysqli_error());

                while($row=mysqli_fetch_array($result)){
                   $product_id =$row['product_id']; 
                   $category =$row['category']; 
                   $owner_user_id =$row['owner_user_id']; 
                   $prod_name =$row['prod_name']; 
                   $prod_buying_price =$row['prod_buying_price']; 
                   $prod_selling_price =$row['prod_selling_price']; 
                   $prod_quantity =$row['prod_quantity']; 
                   $prod_units_of_measure =$row['prod_units_of_measure']; 
                   $prod_description =$row['prod_description']; 
                ?>
                <tr>
                      <td>
                        <?php echo $product_id; ?>
                      </td>
                      <td>
                        <?php echo $prod_name; ?>
                      </td>
                      <td>
                        <?php echo $category; ?>
                      </td>
                      <td class="text-primary">
                        $ <?php echo $prod_buying_price; ?>
                      </td>
                      <td class="text-primary">
                        $ <?php echo $prod_selling_price; ?>
                      </td>
                      <td>
                          <?php echo $prod_quantity; ?>
                      </td>
                      <td>
                             <?php echo $prod_units_of_measure; ?>
                      </td>
                      <td>
                             <?php echo $prod_description; ?>
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
