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
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waves</title>
    <link rel="stylesheet" href="styles/nav.css">
    <link rel="stylesheet" href="styles/login.css">
</head>

<body>
    <main class="main">
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
</body>

</html>