<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['sturecmsaid']==0)) {
  header('location:logout.php');
  } else{
   
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>GoTODA Dashboard</title>

    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="vendors/chartist/chartist.min.css">
    <link rel="stylesheet" href="css/style.css">

   
  </head>
  <body>
    <div class="container-scroller">
     <?php include_once('includes/header.php');?>
      <div class="container-fluid page-body-wrapper">
        <?php include_once('includes/sidebar.php');?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="d-sm-flex align-items-baseline report-summary-header">
                          <h5 class="font-weight-semibold">Report Summary</h5> <span class="ml-auto">Updated Report</span> <button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>
                        </div>
                      </div>
                    </div>

                    <div class="row report-inner-cards-wrapper">

                    <!-- ADMINS -->
                      <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text">
                           <?php                    
                            $sql1 ="SELECT * from  tbl_admin";
                            $query1 = $dbh -> prepare($sql1);
                            $query1->execute();
                            $results1=$query1->fetchAll(PDO::FETCH_OBJ);
                            $totclass=$query1->rowCount();
                          ?>
                          <span class="report-title">Admin</span>
                          <h4><?php echo htmlentities($totclass);?></h4>
                          <a href="manage-admin.php"><span class="report-count"> View Admins</span></a>
                        </div>
                        <div class="inner-card-icon bg-success">
                          <i class="icon-user"></i>
                        </div>
                      </div>

                    <!-- OPERATORS -->
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <?php 
                            $sql2 ="SELECT * from  tbl_operators";
                            $query2 = $dbh -> prepare($sql2);
                            $query2->execute();
                            $results2=$query2->fetchAll(PDO::FETCH_OBJ);
                            $totstu=$query2->rowCount();
                          ?>
                          <span class="report-title">Operators</span>
                          <h4><?php echo htmlentities($totstu);?></h4>
                          <a href="manage-operators.php"><span class="report-count"> View Operators</span></a>
                        </div>
                        <div class="inner-card-icon bg-danger">
                          <i class="icon-user"></i>
                        </div>
                      </div>

                    <!-- DRIVERS   -->
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <?php 
                            $sql3 ="SELECT * from  tbl_drivers";
                            $query3 = $dbh -> prepare($sql3);
                            $query3->execute();
                            $results3=$query3->fetchAll(PDO::FETCH_OBJ);
                            $totnotice=$query3->rowCount();
                          ?>
                          <span class="report-title">Drivers</span>
                          <h4><?php echo htmlentities($totnotice);?></h4>
                          <a href="manage-divers.php"><span class="report-count"> View Drivers</span></a>
                        </div>
                        <div class="inner-card-icon bg-warning">
                          <i class="icon-user"></i>
                        </div>
                      </div>

                    <!-- MEMBERS   -->
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <?php 
                            $sql4 ="SELECT * from  tbl_members";
                            $query4 = $dbh -> prepare($sql4);
                            $query4->execute();
                            $results4=$query4->fetchAll(PDO::FETCH_OBJ);
                            $totpublicnotice=$query4->rowCount();
                          ?>
                          <span class="report-title">Members</span>
                          <h4><?php echo htmlentities($totpublicnotice);?></h4>
                          <a href="manage-members.php"><span class="report-count"> View Members</span></a>
                        </div>
                        <div class="inner-card-icon bg-primary">
                          <i class="icon-user"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>         
          </div>

         <?php include_once('includes/footer.php');?>
        </div>
      </div>
    </div>
  
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/moment/moment.min.js"></script>
    <script src="vendors/daterangepicker/daterangepicker.js"></script>
    <script src="vendors/chartist/chartist.min.js"></script>
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <script src="js/dashboard.js"></script>
  </body>
</html><?php }  ?>