<?php
include './src/includes/head.php';
include './src/includes/header.php';
?>



<?php
$num1 = 7;
$num2 = 15;
$str = " TODAY I.S MY SUC.CESS DAY ANd it wi.ll be an awesome. one for me.";
$personalInfo = array("name" => "2", "Age" => "22", "city" => "5");
$moreInfo = array("state" => "7", "weight" => "52", "from" => "8");
$cars = array("bmw", "benz", "mazda");
$randomNum = rand(0, 100) / 10;
$numbers = array(8, 2, 68, 6, 61, 8, 9, 7234, 654, 87, 87);
$panc = 0;
$time = time() - 86400 * 30;

function add()
{
    $GLOBALS['x'] = $GLOBALS['num1'] + $GLOBALS['num2'];
}
add();
echo $x;
echo "<br>";
echo "the highest value is :" . min($numbers) . " and the min value is " . max($numbers) . "<br>";
echo "<br>";

echo  $name = $_FILES['file']['name'] . " <br>";
echo "<br>";
echo  $type = $_FILES['file']['type'] . " <br>";
echo "<br>";
echo  $loc = $_FILES['file']['tmp_name'] . " <br>";
echo "<br>";
echo  $er = $_FILES['file']['error'] . " <br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";




?>

<form action="./src/includes/uplod.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="submit">submit</button>
</form>

<?php
include './src/includes/footer.php';
?>