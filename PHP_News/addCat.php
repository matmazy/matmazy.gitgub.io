<?php
session_start();
include_once "app.php";
app::init();

$db= new Database();
$cat = new catRepository($db);

if (isset($_POST["name"], $_SESSION["user"]["name"])){
    $cat->addCat(
        $_POST["name"]
    );
    header("Location: cat.php");
    die();
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/editAC.css">
</head>
<body>
<?php include "header.php"?>

<form action="" method="post">
    <div class="">
        <label>
            Name:
            <input type="text" name="name" required>
        </label>
    </div>
    <div>
        <button class="btn btn-outline-dark">Uložit</button>
    </div>
</form>
</body>
</html>
