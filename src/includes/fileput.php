<?php
include './head.php';
include './header.php';
?>
<?php


if (isset($_POST['submit'])) {
    $myfile = fopen("input/file.txt", "a");
    $txt = "my name is harry and a i am " . $_POST['age'] . "\n";
    fwrite($myfile, $txt);
    fclose($myfile);
}
?>
<form action="fileput.php" method="post">

    <input type="text" name="age">
    <input type="submit" name="submit">
</form>


<?php
include './footer.php';
?>