<html>
<head>
    <title>Misho's Used cars</title>
    <h1>Misho's Used Cars Edit Entries</h1>
    <form action="SubmitCar.php" method="post">
        VIN:<input name="VIN" type="text"/><br/>
        <br/>
        Make:<input name="Make" type="text"/><br/>
        <br/>
        Model:<input name="Model" type="text"/><br/>
        <br/>
        Price:<input name="Price" type="text"/><br/>
        <br/>
        <input name="Submit1" type="submit" value="Change"/><br/>
        &nbsp;
    </form>
</head>
<body>

<?php
include "db.php";
$vin = $_GET['VIN'];
$query = "SELECT * FROM INVENTORY WHERE VIN = '$vin'";
/* Try to query the Database */
if ($result = $mysqli->query($query)) {
    // Don't do anything if successful
} else {
    echo "Sorry, a vehicle with VIN $vin cannot be found." . mysqli_error() . "<br>";
}
// Loop through the returned row of the query
while ($result_ar = mysqli_fetch_assoc($result)) {
    $year = $result_ar['YEAR'];
    $make = $result_ar['Make'];
    $model = $result_ar['Model'];
    $trim = $result_ar['TRIM'];
    $color = $result_ar['EXT_COLOR'];
    $interior = $result_ar['INT_COLOR'];
    $mileage = $result_ar['MILEAGE'];
    $transmission = $result_ar['TRANSMISSION'];
    $price = $result_ar['ASKING_PRICE'];
}

echo "Current Entries for <b>$year $make $model.</b></p>";
echo "<p>Asking Price: $price </p>";
echo "<p>Exterior Color: $color </p>";
echo "<p>Interior Color: $interior</p>";
echo "<p>Mileage: $mileage </p>";
echo "<p>Transmission: $transmission</p>";


$mysqli->close()
?>
</body>


</html>