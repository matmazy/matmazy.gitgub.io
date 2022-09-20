<?php
session_start();
include_once "app.php";
app::init();

$id = $_GET["id"];

$db= new Database();
$cat = new catRepository($db);
try {
    if (isset($_SESSION["user"])){
        $cat->delCat($id);
    }

}catch (PDOException $e){
    echo "<p style='color:darkred; margin: 10rem 45rem'>Nelze smazat kategorii která obsahuje nějaké články</p>";
}
header("Location: cat.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
<br>
<a href="cat.php" class="btn-outline-dark" style="margin: 3rem 45rem">Zpět na katerorie</a>
</body>
</html>


