<?php

if (!isset($_SESSION)) {
    session_start();

    // echo "Login";
}

include_once("Connection/Connection.php");
$con = connection();


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user_accounts WHERE Username = '$username' AND Password = '$password'";

    $user = $con->query($sql) or die($con->error);
    $row = $user->fetch_assoc();
    $total = $user->num_rows;

    if ($total > 0) {
        $_SESSION["UserLogin"] = $row["Username"];
        $_SESSION["Access"] = $row["Access"];

        // echo $_SESSION["UserLogin"];
        echo header("Location: index.php");
    } else {
        echo "Please login to continue.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waves</title>
    <link rel="stylesheet" href="styles.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg p-0">
        <div class="navigation">
            <button class="navbar-toggler text-white border-0 p-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarBasic" aria-controls="navbarBasic" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse hidden" id="navbarBasic">

                <ul class="navbar-nav">
                    <li class="nav-item me-0 me-lg-5">
                        <a class="hover" href="index.php">GoToda</a>
                    </li>
                    <li class="nav-item">
                        <a class="hover" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="hover" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="hover" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="hover" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item ms-lg-auto me-5 d-none d-lg-inline">
                        <b>
                            <?php if (!isset($_SESSION)) {
                                session_start();
                            }

                            if (isset($_SESSION["UserLogin"])) {
                                echo "Hello, " . $_SESSION['UserLogin'] . "!";
                            } else {
                                echo "Welcome, Guest!";
                            } ?>
                        </b>
                    </li>

                    <li class="nav-item ms-lg-0 log">
                        <?php if (isset($_SESSION['UserLogin'])) { ?>
                            <a class="hover" href="logout.php">Logout</a>
                        <?php } else { ?>
                            <a class="hover" href="login.php">Login</a>
                        <?php } ?>
                    </li>
                </ul>
                </span>
            </div>
        </div>
    </nav>
    <main class="main landing">
        <form class="login" action="" method="post">
            <h1>Login</h1>
            <fieldset>
                <label>Username</label>
                <input type="text" name="username" id="username">
                <label>Password</label>
                <input type="text" name="password" id="password">
                <button type="submit" name="login">Login</button>
            </fieldset>
        </form>
    </main>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b8b5c0695c.js" crossorigin="anonymous"></script>
</body>

</html>