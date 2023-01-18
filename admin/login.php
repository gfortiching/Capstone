<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $sql = "SELECT ID FROM tbl_admin WHERE UserName=:username and Password=:password";
  $query = $dbh->prepare($sql);
  $query->bindParam(':username', $username, PDO::PARAM_STR);
  $query->bindParam(':password', $password, PDO::PARAM_STR);
  $query->execute();
  $results = $query->fetchAll(PDO::FETCH_OBJ);
  if ($query->rowCount() > 0) {
    foreach ($results as $result) {
      $_SESSION['sturecmsaid'] = $result->ID;
    }

    if (!empty($_POST["remember"])) {
      //COOKIES for username
      setcookie("user_login", $_POST["username"], time() + (10 * 365 * 24 * 60 * 60));
      //COOKIES for password
      setcookie("userpassword", $_POST["password"], time() + (10 * 365 * 24 * 60 * 60));
    } else {
      if (isset($_COOKIE["user_login"])) {
        setcookie("user_login", "");
        if (isset($_COOKIE["userpassword"])) {
          setcookie("userpassword", "");
        }
      }
    }
    $_SESSION['login'] = $_POST['username'];
    echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
  } else {
    echo "<script>alert('Invalid Details');</script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>Login Page</title>
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="../styles/navigation.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=PT+Sans&display=swap" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg p-0">
    <div class="navigation">
      <div class="d-flex justify-content-between d-lg-none">
        <a class="order-0" href="index.php"><img class="logo me-5" src="Images/GoToda.png" alt="GoToda" /></a>
        <button class="navbar-toggler text-white border-0 order-1 me-3" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarBasic" aria-controls="navbarBasic" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fa-solid fa-bars"></i>
        </button>
      </div>
      <div class="collapse navbar-collapse hidden" id="navbarBasic">
        <ul class="navbar-nav pt-sans">
          <li class="d-none d-lg-inline">
            <a class="order-0" href="../index.php"><img class="logo me-5" src="../Images/GoToda.png" alt="GoToda" /></a>
          </li>
          <li class="nav-item hover m-0 me-lg-5 mt-3 mt-lg-0" onclick="Hero()">
            <a class="order-0" href="../index.php">Home</a>
          </li>
          <li class="nav-item ms-lg-auto m-0 me-lg-5 mt-3 mt-lg-0 d-none d-lg-inline">
            <b>
              <?php if (!isset($_SESSION)) {
                session_start();
              }

              if (isset($_SESSION["user_login"])) {
                echo "Hello, " . $_SESSION['user_login'] . "!";
              } else {
                echo "Welcome, Guest!";
              } ?>
            </b>
          </li>
        </ul>
        </span>
      </div>
    </div>
  </nav>

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row flex-grow">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <img src="Images/GoToda.png">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" id="login" method="post" name="login">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" placeholder="enter your username"
                    required="true" name="username" value="<?php if (isset($_COOKIE["user_login"])) {
                      echo $_COOKIE["user_login"];
                    } ?>">
                </div>
                <div class="form-group">

                  <input type="text" class="form-control form-control-lg" placeholder="enter your password"
                    name="password" required="true" value="<?php if (isset($_COOKIE["userpassword"])) {
                      echo $_COOKIE["userpassword"];
                    } ?>">
                </div>
                <div class="mt-3">
                  <button class="btn btn-success btn-block loginbtn" name="login" type="submit">Login</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" id="remember" class="form-check-input" name="remember" <?php if (isset($_COOKIE["user_login"])) { ?> checked <?php } ?> /> Keep me Signed in </label>
                  </div>
                  <a href="forgot-password.php" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <a href="../index.php" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="icon-social-home mr-2"></i>Back Home </a>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
</body>

</html>