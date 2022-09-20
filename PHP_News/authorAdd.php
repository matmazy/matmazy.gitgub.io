<?php
include "app.php";
app::init();

$db = new Database();
$au = new authorsRepository($db);


/*if (isset($_POST["name"], $_POST["surname"])){
    $au->addAuthor(
        $_POST["name"],
        $_POST["surname"]
    );
    header("Location: author.php");
    die;
}*/
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
            <input type="text" name="name" required >
        </label>
    </div>
    <div>
        <label>
            Surname:
            <input type="text" name="surname" required >
        </label>
    </div>
    <div>
        <button>Uložit</button>
    </div>
</form>
</body>
</html>

