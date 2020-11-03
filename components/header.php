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

    .actions{
      display: flex;
    }
    .action-link{
      border:  none;
      background-color: transparent;
    }
  </style>
</head>

<body>
  <div class="wrapper ">

<?php
  if($page_title != "Login"){
    include('./components/sidenav.php');
  }
?>
