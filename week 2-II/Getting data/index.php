<?php
print_r($_GET);
print_r($_POST);
$firstname = $_GET['first'];
$lastname = $_GET['last'];
echo $firstname;
echo $lastname;
echo htmlspecialchars($_GET['first']); //helps to stop attacks from XSS
echo $lastname;
$firstname = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING); //sanitize the script
$lastname = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING);
if (!empty($firstname) && !empty($lastname)) {
    echo $firstname;
    echo $lastname;
} else {
    echo "missing data";
}

if (isset($_GET['first']) && isset($_GET['last'])) {
    $firstname = $_GET['first'];
    $lastname = $_GET['last'];
    if (!empty($firstname) && !empty($lastname)) {
        echo htmlspecialchars($firstname);
        echo htmlspecialchars($lastname);
    } else {
        echo "missing data";
    }
} else {
    echo "Not set!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting Data</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <h1>Web Forms Processor</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <label for="first">First Name :</label>
        <input type="text" id="first" name="first" autocomplete="off">
        <label for="last">Last Name :</label>
        <input type="text" id="last" name="last" autocomplete="off">
        <div>
            <button type="submit">Submit</button>
            <button type="submit" formmethod="post">Submit using POST</button>
            <button type="reset">Reset</button>
        </div>
    </form>
</body>

</html>