<?php

if (isset($_POST['submit'])) {
    echo "<h1>salam</h1>";
    $file = $_FILES['file'];
    $name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];

    $tempEx = explode('.', $name);


    $fileEx = strtolower(end($tempEx));

    $isAlowed = array('jpg', 'jpeg', 'png' . 'pdf');


    // 0 is no error 1 is error
    if (in_array($fileEx, $isAlowed)) {
        if ($error === 0) {
            if ($size < 300000) {
                echo "<h1>naridi dobare baba</h1>";
                $newFileName = uniqid('', true) . "." . $fileEx;
                $fileDest = "includes/" . $newFileName;
                move_uploaded_file($tmp_name, $fileDest);
                header("Location: index.php?uploadedsuccess");
            } else {
                echo "the file is too big";
            }
        } else {

            echo "sorry ther was an error";
        }
    } else {
        echo "your file type is not accepted";
    }
} else {
    echo "<h1>ridi baba</h1>";
}
