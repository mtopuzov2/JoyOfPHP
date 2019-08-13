<html>
<head>
    <title>Misho's Used Cars</title>
</head>
<body>
<h1>Misho's Used Cars</h1>
<?php
include 'db.php';
$vin = $_GET['VIN'];
$query = "DELETE FROM INVENTORY WHERE VIN='$vin'";
echo "$query <BR>";
/* Try to execute the delete against the database */

if ($result = $mysqli->query($query)) {
    echo "The vehicle with VIN $vin has been deleted from the Database.";
} else {
    echo "Sorry, a vehicle with VIN of $vin cannot be found.". mysqli_error() . "<br>";
}
$mysqli->close()
?>

</body>
</html>