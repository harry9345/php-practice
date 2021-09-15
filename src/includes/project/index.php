<!DOCTYPE html>
<?php
require_once './includes/dataBase.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>salam</h1>
    <?php

    $sql = "SELECT * FROM users ";
    $result = mysqli_query($con, $sql);
    $row = mysqli_num_rows($result);

    if ($row > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['users'] . "<br>";
        }
    } else {
        echo "no result found";
    }

    ?>

</body>

</html>