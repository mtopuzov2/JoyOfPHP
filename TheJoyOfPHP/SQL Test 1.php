<?php
/**
 * Joy of PHP sample code
 * Demonstrate how to create a database, create a table and insert records
 */

$db_name = 'cars2';
$mysqli = new mysqli('localhost', 'root', '');


if (!$mysqli) {
    die('Could not connect:' . mysqli_error($mysqli));
}
echo('Connected Successfully to the MySQL Database.<BR>');

/*Create table does not return a result set*/
if ($mysqli->query("CREATE DATABASE $db_name") == TRUE) {
    echo "<P>Database $db_name was created.</P>>";
} else {
    echo "Error creating $db_name database" . mysqli_error($mysqli) . "<br>";
}

// Select a database to work with
$mysqli->select_db($db_name);
Echo("Selected the $db_name database.");

$query = "CREATE TABLE INVENTORY
(
VIN varchar (17) PRIMARY KEY,
YEAR INT,
Make varchar (50),
Model varchar (100),
TRIM varchar (50),
EXT_COLOR varchar (50),
INT_COLOR varchar (50),
ASKING_PRICE DECIMAL (10,2),
SALE_PRICE DECIMAL (10,2),
PURCHASE_PRICE DECIMAL (10,2),
MILEAGE int,
TRANSMISSION varchar (50),
PURCHASE_DATE DATE,
SALE_DATE DATE 
)";

//echo "<p>***********</p>";
//echo $query;
//echo "<p>***********</p>";
if ($mysqli->query($query) === TRUE) {
    echo "Database Table 'INVENTORY' was created succesfully.<\P>";
} else {
    echo "<p>Error: </p>" . mysqli_error();
}
// Dates are stored in MySQL as 'YYYY-MM-DD' Format
$query = "INSERT INTO `$db_name`.`INVENTORY`
(`VIN`,`YEAR`,`Make`,`Model`,`TRIM`,`EXT_COLOR`,`INT_COLOR`,`ASKING_PRICE`,`SALE_PRICE`,`PURCHASE_PRICE`,`MILEAGE`,`TRANSMISSION`,`PURCHASE_DATE`,`SALE_DATE`)
VALUES 
('5FNYF4H91CB054036','2012','Honda','Pilot','Touring','White Diamond Perl','Leather','37807',NULL,'34250','7076','Automatic','2012-11-08',NULL);";


if ($mysqli->query($query) === TRUE) {
    echo "<p>Honda Pilot inserted into the inventory table.</p>";
} else {
    echo "<p>Error inserting Honda Pilot:</p>" . mysqli_error($mysqli);
    echo "<p>***********</p>";
    echo $query;
    echo "<p>***********</p>";
}

//Insert Dodge Durango
$query = "INSERT INTO `$db_name`.`INVENTORY`
(`VIN`,`YEAR`,`Make`,`Model`,`TRIM`,`EXT_COLOR`,`INT_COLOR`,`ASKING_PRICE`,`SALE_PRICE`,`PURCHASE_PRICE`,`MILEAGE`,`TRANSMISSION`,`PURCHASE_DATE`,`SALE_DATE`)
VALUES 
('LAKSDFJ234LASKRF2','2009','Dodge','Durango','SLT','Silver','Black','2700',NULL,'200','144000','4WD Automatic','2012-12-05',NULL);";


if ($mysqli->query($query) === TRUE) {
    echo "<p>Dodge Durango inserted into the inventory table.</p>";
} else {
    echo "<p>Error inserting Dodge Durango:</p>" . mysqli_error($mysqli);
    echo "<p>***********</p>";
    echo $query;
    echo "<p>***********</p>";
}
$mysqli->close();








