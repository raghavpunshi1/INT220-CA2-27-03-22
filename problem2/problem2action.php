<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $age=$_REQUEST['age'];
    echo "<h1>AGE = $age </h1><br>";
    $min = 26;
    $max = 56;

    if (filter_var($age, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
        echo("<h1>Age is not valid<h1>");
    } 
    else {
    echo("<h1>Age is valid</h1>");
    }
   ?>
</body>
</html>