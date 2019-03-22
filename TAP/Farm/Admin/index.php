<?php
include '../../includes/DB_Connect.php';
include '../../Cows/viewproduction.php';
$product=new ViewData();
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="twitter:" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../../CSS/style.css">
    <link rel="stylesheet" href="../../CSS/tableStylying.css">

    <link rel="stylesheet" href="../../CSS/bootstrap.min.css">
<!--
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

    <script src="../../js/library/bootstrap.min.js"></script>
    <script src="../../js/library/jquery-3.3.1.min.js"></script>
    <script src="../../js/library/vue.min.js"></script>



    <!-- Table sorter Javascript file -->
    <script src="../../js/sorttables.js"></script>
    <!-- TableSorter -->


    <title>Admin</title>
  </head>
  <body>
   <div id="wrapper">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
        <div class="row">
          <div id="profile">
              <center><img src="dave.jpg" alt=""></center>
                  <p><span style="color: green">Name:</span> Otieno David Odinga <br>
                     <span style="color: green">Title :</span>Manager </p>
          </div>
        </div>
        <ul class="sidebar-nav">
              <li id="products_analysis"><a> <span id="menu-icon"><i class="fas fa-chart-bar"></i></span>  Productions</a></li>
              <li id="employees"><a> <span id="menu-icon"><i class="fas fa-users menu-icon"></i></span>  Employees</a></li>
              <li id="settings"><a> <span id="menu-icon"><i class="fas fa-cog menu-icon"></i></span>  Settings</a></li>
              <li id="user_profile"><a> <span id="menu-icon"><i class="fas fa-user menu-icon"></i></span> Profile</a></li>
        </ul>
      </div>
      <!-- Sidebar -->

      <!-- Page content-->
      <div  id="page-content-wrapper">
        <div class="container-fluid">

          <div class="row">
            <div class="col-lg-12">

              <div class="row"  id="header">
                <div class="col-sm-1 col-md-1">
                    <div     id="menu-toggle">
                       <span id="breadcrump"></span>
                       <span id="breadcrump"></span>
                       <span id="breadcrump"></span>
                    </div>
                </div>

                 <!-- department heading -->
                <div class="col-sm-11 col-md-11 col-lg-11">
                   <center><h1>{{admin_title}}</h1></center>
                </div>
                <!-- department heading -->

              </div>

              <div class="row" id="production">
                <div class="col-sm-12 col-md-6" id="milking_cow">

                  <div class="col-md-12">
                    <center>
                      <h3>Production  Data</h3>
                    </center>

                    <div class="table-responsive">
                      <?php $product->viewEmployees() ;?>
                    </div>

                   </div>

                   <div class="col-md-12" id="table">
                     <center>
                       <h3>Cows producing milk</h3>
                     </center>
                     <div class="table-responsive">
                       <?php $product->loadDairy();?>
                     </div>
                    </div>

                </div>
                <!-- products view -->

               <!-- statistics pane -->
                <div class="col-sm-12 col-md-5  offset-md-1" id="statistics">
                   <h1>Analysis</h1>


                </div>
                <!-- statistics pane -->

              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- Page content-->

   </div>

   <script src="../../js/Ajaxloader.js"></script>
   <script src="../../js/vueApp.js"></script>

  </body>
</html>
