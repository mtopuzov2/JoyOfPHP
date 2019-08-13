<html>
<head>
    <title>Misho's Used Cars</title>
</head>
<body>
<h1>Update Car Entry</h1>
<form>
    <form action="modify.php" method="post">
        VIN: <input type="VIN" name="text"><br/><br/>
        Make:<input name="Make" type="text"/><br/><br/>
        Model:<input name="Model" type="text"/><br/><br/>
        Price:<input name="Price" type="text"/><br/><br/>
        <input name="Submit1" type="submit" value="submit"/><br/>
        &nbsp;
    </form>

    <?php
    include 'db.php';
    echo '$vin'
//    $query = "DELETE FROM INVENTORY WHERE VIN='$vin'";
//    echo "$query <BR>";
    /* Try to execute the delete against the database */

/*    if ($result = $mysqli->query($query)) {
        echo "The vehicle with VIN $vin has been deleted from the Database.";
    } else {
        echo "Sorry, a vehicle with VIN of $vin cannot be found." . mysqli_error() . "<br>";
    }
    $mysqli->close()*/
    ?>
</body>
</html>



