<html>
<head>
    <title>Car Saved</title>
</head>
<body bgcolor="#FFFFFF" text="#000000">

<?php
// Capture the values posted to this php program from the text fields in the form
$mysqli = new mysqli('localhost', 'root', '', 'cars2');$mysqli = new mysqli('localhost', 'root', '', 'cars2');
$VIN = mysqli_real_escape_string($mysqli,$_POST['VIN']);
$Make = mysqli_real_escape_string($mysqli,$_POST['Make']);
$Model = mysqli_real_escape_string($mysqli,$_POST['Model']);
$Price = mysqli_real_escape_string($mysqli,$_POST['Price']);

// Build an SQL Query using the above values

$query = "INSERT INTO inventory
(VIN,Make,Model,ASKING_PRICE)
VALUES 
('$VIN','$Make','$Model','$Price')";

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
$mysqli->close();
?>
</body>
</html>