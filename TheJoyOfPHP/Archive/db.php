<?php
$mysqli = new mysqli('localhost', 'root', '', 'cars2');$mysqli = new mysqli('localhost', 'root', '', 'cars2');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$mysqli->select_db("cars2");