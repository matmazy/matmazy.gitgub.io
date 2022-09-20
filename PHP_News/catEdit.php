<?php
session_start();
include_once "app.php";
app::init();

$db = new Database();
$ca = new catRepository($db);

$id = $_GET["id"];
$cat = $ca->getOneCat($id);

if (isset($_POST["name"], $_SESSION["user"])) {
    $ca->editCat(
        $_GET["id"],
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
<?php include "header.php" ?>

<form action="" method="post">
    <div>
        <label>
            Name:
            <input type="text" name="name" value="<?= $cat["name"] ?>" required>
        </label>
    </div>
    <div>
        <button class="btn-outline-dark">Uložit</button>
    </div>
</form>
</body>
</html>

