<?php
require './vendor/autoload.php';

use App\controllers\Home;
use App\controllers\database;
use app\common\lib\ReturnData;
use App\controllers\product;

$Home = new Home();
$Home->index();
$hello = new database();
echo $hello->_construct();
echo "<br>";
$product = new product(1, 'nguyenhuuphat', 20);
$product->getName();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>heloooo</h1>
</body>

</html>