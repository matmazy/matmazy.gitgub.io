<?php
require_once "app.php";
app::init();

$db = new Database();
$au = new authorsRepository($db);

if (isset($_POST["email"], $_POST["password"])){
    $au->addAuthor(
        $_POST["name"],
        $_POST["surname"],
        $_POST["email"],
        $_POST["password"]
    );
    header("Location: index.php");
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
</head>
<body>
<?php include "header.php" ?>
<form action="" method="post" style="margin: 1rem 40rem;">
    <div>
        <label>
            Name:
            <input type="text" name="name" required>
        </label>
    </div>
    <div>
        <label>
            Surname:
            <input type="text" name="surname" required>
        </label>
    </div>
    <div>
        <label>
            Email:
            <input type="text" name="email" required>
        </label>
    </div>
    <div>
        <label>
            Password:
            <input type="password" name="password" required>
        </label>
    </div>
    <div>
        <button class="btn btn-outline-dark">Uložit</button>
    </div>
</form>
</body>
</html>
<style>
    form>div{
        margin: 1rem;
    }
</style>