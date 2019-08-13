<html>
<head>
    <title>Misho's Cars</title>
    <h1>Update Entry</h1>
</head>
<body>
<?php
include "db.php";

$vin = $_GET['VIN'];
$VIN_new = mysqli_real_escape_string($mysqli, $_POST['VIN']);
$Make_new = mysqli_real_escape_string($mysqli, $_POST['Make']);
$Model_new = mysqli_real_escape_string($mysqli, $_POST['Model']);
$Price_new = mysqli_real_escape_string($mysqli, $_POST['Price']);

// Build an SQL Query using the above values

$query = "UPDATE INVENTORY
SET Make = '$Make_new', Model = '$Model_new',ASKING_PRICE = '$Price_new$Price_new'
WHERE VIN = $VIN)";

//Print the Query to the browser
echo($query . "<br>");

// Connection moved so the input can be checked for SQL Injection - $mysqli = new mysqli('localhost', 'root', '', 'cars2');
/* Check Connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


echo "Connected Successfully to MySQL <BR>";

// Select a database to work with
$mysqli->select_db("cars2");
Echo("Selected the Cars2 Database.<br>");

/* Try to insert the new car into the database */
if ($result = $mysqli->query($query)) {
    echo "<p>You have successfully entered $Make $Model into the database</p>";
} else {
    echo "Error entering $VIN into the Database:" . mysqli_error() . "<br>";
}
$mysqli->close() ?>
</body>
</html>