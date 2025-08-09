<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>


<?php

$dayofweek = date("w");

switch($dayofweek){
    case 1 : 
        echo "<p>Monday</p>";
        break;
    case 2 : 
        echo "<p>tuesday</p>";
        break;
    case 3 : 
        echo "<p>wednesday</p>";
        break;
    case 4 : 
        echo "<p>Thursday</p>";
        break;
    case 5 : 
        echo "<p>Friday</p>";
        break;
    case 6 : 
        echo "<p>Saturday</p>";
        break;
    case 7 : 
        echo "<p>Sunday</p>";
        break;
}

?>
</body>
</html>