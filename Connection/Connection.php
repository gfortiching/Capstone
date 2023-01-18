<?php
function connection()
{
    $host = "localhost";
    $username = "root";
    $password = "/S@IM59VXlGnvp]g";
    $database = "toda_dashboard";

    $con = new mysqli($host, $username, $password, $database);

    if ($con->connect_error) {
        echo $con->connect_error;
    } else {
        return $con;
    }
}

?>