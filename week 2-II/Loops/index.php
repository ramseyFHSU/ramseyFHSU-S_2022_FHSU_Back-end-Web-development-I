<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>

<body>
    <?php
    $counter = 0;
    //while Loop
    while ($counter < 5) {
        echo $counter . "<br>";
        $counter++;
    }
    //for loop 
    $message = null;
    for ($counter = 10; $counter > 0; $counter--) {
        $message .= $counter . "<br>";
    }
    echo $message;

    // while loop in array 
    $arr = array('Sam', "john", "doe", "paul");
    while ($counter < count($arr)) {
        echo $arr[$counter] . "<br>";
        $counter++;
    }
    // for loop in array
    for ($counter = 0; $counter < count($arr); $counter++) {
        echo $arr[$counter] . "<br>";
    }
    ?>
</body>

</html>