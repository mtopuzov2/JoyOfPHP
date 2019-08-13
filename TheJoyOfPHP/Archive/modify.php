<html>
<head>
    <title>Misho's Used Cars</title>
</head>
<body>
<h1>Misho's Used Cars</h1>
<?php
include 'db.php';
$VIN = mysqli_real_escape_string($mysqli,$_POST['VIN']);
$Make = mysqli_real_escape_string($mysqli,$_POST['Make']);
$Model = mysqli_real_escape_string($mysqli,$_POST['Model']);
$Price = mysqli_real_escape_string($mysqli,$_POST['Price']);
$mysqli->select_db("cars2");
Echo("Selected the Cars2 Database.<br>");
$query = "UPDATE inventory
SET VIN = '$vin',  Make = $make, Model = '$Model', ASKING_PRICE = '$Price'
WHERE VIN='$vin'";
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
