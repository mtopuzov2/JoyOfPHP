<html>
<header>
    <h1>Misho's Farm</h1>
</header>
<body>
<?php
date_default_timezone_set("EET");
if (date("l") == 'Monday') {
    echo "Sorry, we are closed today.";
} elseif (date("F" == 'July' or 'August')) {
    echo "We are open from 10 AM to 7 PM.";
} else {
    echo "We are open from 10 AM to 6 PM.";
}
?>
</body>
</html>