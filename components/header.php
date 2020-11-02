<!doctype html>
<html lang="en">

<head>
  <title>
  <?php
    echo ucwords($page_title);
  ?> 
</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <style type="text/css">
    
    .main-panel.login{
      float: none;
      width: 100%;
    }
    .d-flex.justified{
      justify-content: space-around;
    }
    
    .footer {
      padding: 0 0;
    }
    .hidden{
      display: none;
    }
  </style>
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          Hi There,
        </a>
         <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          Welcome to my
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Simple Catalog
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          
          <li class="nav-item
                    <?php echo ($page_title == 'dashboard') ? 'active':'' ; ?>
                    ">
            <a class="nav-link" href="./dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Products</p>
            </a>
          </li>

            <li class="nav-item
                    <?php echo ($page_title == 'categories') ? 'active':'' ; ?>
                    ">
            <a class="nav-link" href="./categories.php">
              <i class="material-icons">library_books</i>
              <p>Categories</p>
            </a>
          </li>

          <li class="nav-item
                    <?php echo ($page_title == 'users') ? 'active':'' ; ?>
                    ">
            <a class="nav-link" href="./users.php">
              <i class="material-icons">person</i>
              <p>Users</p>
            </a>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="./php/logout.php">
              <i class="material-icons">login</i>
              <p>Logout</p>
            </a>
          </li>

          <!-- your sidebar here -->
        </ul>
      </div>
    </div>