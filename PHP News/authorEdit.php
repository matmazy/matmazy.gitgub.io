<?php
session_start();
include "app.php";
app::init();

$db = new Database();
$au = new authorsRepository($db);

$id = $_GET["id"];
$author = $au->getAuthor($id);

if (isset($_POST["name"], $_POST["name"], $_SESSION["user"])){
    $au->editAuthor(
        $id,
        $_POST["name"],
        $_POST["surname"]
    );
    header("Location: author.php");
    die;
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
            <input type="text" name="name" value="<?= $author["name"]?>" required >
        </label>
    </div>
    <div>
        <label>
            Name:
            <input type="text" name="surname" value="<?= $author["surname"]?>" required >
        </label>
    </div>
    <div>
        <button class="btn-outline-dark">Uložit</button>
    </div>
</form>
</body>
</html>
