<?php
session_start();
include "app.php";
app::init();

$db = new Database();
$ar = new authorsRepository($db);

$authors = $ar->getAuthors();

//var_dump($_SESSION["user"]);

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
<main style="margin: 0 15rem">
    <table class="table">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Jméno</th>
            <?php /*foreach ($authors as $a): */?>
            <?php/* if (isset($_SESSION["user"]["name"])===$a["name"]):*/ ?>
            <th scope="col">Akce</th>
            <?/*php endif; endforeach; */?>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($authors as $a):?>

            <tr>
                <th scope="row"></th>
                <td><a href="authorDetail.php?id=<?= $a["id"] ?>"><?= $a["aName"] ?></a></td>
                <?php if (isset($_SESSION["user"]["id"])==$a["id"]): ?>
                <td><a href="authorEdit.php?id=<?= $a["id"] ?>">Upravit</a>
                    <a href="authorDel.php?id=<?= $a["id"] ?>">Smazat</a></td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php if (isset($_SESSION["user"]["name"])): ?>
<!--    <a href="authorAdd.php" class="btn btn-outline-dark" style="margin: 10px">Přidat Autora</a>-->
    <?php endif; ?>
</main>
</body>
</html>
