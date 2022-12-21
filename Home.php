<?php

include_once("Connection/Connection.php");
$con = connection();

// $sql = "SELECT * FROM student_info ORDER BY ID DESC";
// $students = $con->query($sql) or die($con->error);
// $row = $students->fetch_assoc();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waves</title>
    <link rel="stylesheet" href="">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-xl navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Waves</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBasic"
                aria-controls="navbarBasic" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse show" id="navbarBasic">
                <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                </ul>
                <span>
                    <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                        <li>
                            <a class="nav-link" href="Logout.php">Logout</a>
                        </li>
                    </ul>
                </span>
            </div>
        </div>
    </nav>
    <main>
        <h5>Hello, Gabriel!</h5>
        <h1>Test Commit</h1>
    </main>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>