<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['sturecmsaid']==0)) {
  header('location:logout.php');
  } else{
   // Code for deletion
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$sql="delete from tbl_operators where ID=:rid";
$query=$dbh->prepare($sql);
$query->bindParam(':rid',$rid,PDO::PARAM_STR);
$query->execute();
 echo "<script>alert('Data deleted');</script>"; 
  echo "<script>window.location.href = 'manage-operators.php'</script>";     


}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>Manage Operators</title>

    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="./vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="./vendors/chartist/chartist.min.css">
    <link rel="stylesheet" href="./css/style.css">
   
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
                          <a href="manage-drivers.php"><span class="report-count"> View Drivers</span></a>
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
          

          <div class="content-wrapper">
             <div class="page-header">
              <h3 class="page-title"> Operators </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Manage Operators</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                      <h4 class="card-title mb-sm-0">Manage Operators</h4>
                      <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Operators</a>
                    </div>
                    <div class="table-responsive border rounded p-1">
                      <table class="table">
                        <thead>
                          <tr>
                            <th class="font-weight-bold">#</th>
                            <th class="font-weight-bold">Operator ID</th>
                            <th class="font-weight-bold">Class</th>
                            <th class="font-weight-bold">Name</th>
                            <th class="font-weight-bold">Gender</th>
                            <th class="font-weight-bold">Email</th>
                            <th class="font-weight-bold">Register Date</th>
                            <th class="font-weight-bold">Action</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                           <?php
                            if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }

        $no_of_records_per_page = 15;
        $offset = ($pageno-1) * $no_of_records_per_page;
       $ret = "SELECT ID FROM tbl_operators";
$query1 = $dbh -> prepare($ret);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$total_rows=$query1->rowCount();
$total_pages = ceil($total_rows / $no_of_records_per_page);
$sql="SELECT tbl_operators.OperatorID,tbl_operators.ID as sid,tbl_operators.OperatorName,tbl_operators.Gender,tbl_operators.OperatorEmail,tbl_operators.DateofAdmission,tblclass.ClassName,tblclass.Section from tbl_operators join tblclass on tblclass.ID=tbl_operators.OperatorClass LIMIT $offset, $no_of_records_per_page";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>   
                          <tr>
                           
                            <td><?php echo htmlentities($cnt);?></td>
                            <td><?php  echo htmlentities($row->OperatorID);?></td>
                            <td><?php  echo htmlentities($row->ClassName);?> <?php  echo htmlentities($row->Section);?></td>
                            <td><?php  echo htmlentities($row->OperatorName);?></td>
                            <td><?php  echo htmlentities($row->Gender);?></td>
                            <td><?php  echo htmlentities($row->OperatorEmail);?></td>
                            <td><?php  echo htmlentities($row->DateofAdmission);?></td>
                            <td>
                              <div><a href="edit-operators-detail.php?editid=<?php echo htmlentities ($row->sid);?>"><i class="icon-eye"></i></a>
                                                || <a href="manage-operators.php?delid=<?php echo ($row->sid);?>" onclick="return confirm('Do you really want to Delete ?');"> <i class="icon-trash"></i></a></div>
                            </td> 
                          </tr><?php $cnt=$cnt+1;}} ?>
                        </tbody>
                      </table>
                    </div>
                    <div align="left">
    <ul class="pagination" >
        <li><a href="?pageno=1"><strong>First></strong></a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>"><strong style="padding-left: 10px">Prev></strong></a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>"><strong style="padding-left: 10px">Next></strong></a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>"><strong style="padding-left: 10px">Last</strong></a></li>
    </ul>
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
    <script src="./vendors/chart.js/Chart.min.js"></script>
    <script src="./vendors/moment/moment.min.js"></script>
    <script src="./vendors/daterangepicker/daterangepicker.js"></script>
    <script src="./vendors/chartist/chartist.min.js"></script>
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <script src="./js/dashboard.js"></script>
  </body>
</html><?php }  ?>