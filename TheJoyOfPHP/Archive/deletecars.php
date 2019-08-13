<html>
<head>
    <title>Misho's Used cars</title>
</head>
<body>
<h1>Misho's Used Cars Delete Entries</h1>
<?php
include "db.php";
$vin = $_GET['VIN'];
$query = "DELETE FROM INVENTORY WHERE VIN = '$vin'";
echo "$query<BR>";
/* Try to execute the DELETE against the database */

if ($result = $mysqli->query($query)) {
    echo "The vehicle with VIN $vin has been deleted.";
} else {
    echo "Sorry,, a vehicle with VIN $vin cannot be found." . mysqli_error() . "<br>";
}
$mysqli->close()
?>
</body>


</html>