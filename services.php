<?php

include_once("Connection/Connection.php");
$con = connection();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waves</title>
    <link rel="stylesheet" href="styles/nav.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/landing.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg p-0">
        <div class="navigation">
            <button class="navbar-toggler border-0 p-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarBasic" aria-controls="navbarBasic" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse hidden" id="navbarBasic">

                <ul class="navbar-nav">
                    <li class="nav-item me-0 me-lg-5">
                        <a href="#">Waves</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item ms-lg-auto">
                        <span class="me-5"><b>
                                <?php if (!isset($_SESSION)) {
                                session_start();
                            }

                            if (isset($_SESSION["UserLogin"])) {
                                echo "Hello, " . $_SESSION['UserLogin'] . "!";
                            } else {
                                echo "Welcome Guest";
                            } ?>
                            </b></span>
                        <?php if (isset($_SESSION['UserLogin'])) { ?>
                            <a href=" logout.php">Logout</a>
                            <?php } else { ?>
                            <a href="login.php">Login</a>
                            <?php } ?>
                    </li>
                </ul>
                </span>
            </div>
        </div>
    </nav>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b8b5c0695c.js" crossorigin="anonymous"></script>
</body>

</html>