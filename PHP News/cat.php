<?php
session_start();
include_once "app.php";
app::init();

$db = new Database();
$cat = new catRepository($db);

$c = $cat->getCat();


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
<header>
    <?php include "header.php" ?>
</header>
<main style="margin: 0 15rem">
    <table class="table">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Název</th>
            <?php if (isset($_SESSION["user"]["name"])): ?>
            <th scope="col">Akce</th>
            <?php endif; ?>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($c as $cc): ?>
            <tr>
                <th scope="row"></th>
                <td><a href="catDetail.php?id=<?= $cc["id"] ?>"><?= $cc["name"] ?></a></td>
                <?php if (isset($_SESSION["user"]["name"])): ?>
                <td><a href="catEdit.php?id=<?= $cc[">Upravit</a>
                <a href="catDel.php?id=<?= $cc[">Smazat</a></td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <!--<ul>
    <?php /*foreach ($c as $cc):*/ ?>
    <li>
        <a href="catDetail.php?id=<? /*= $cc["id"]*/ ?>"><? /*= $cc["name"]*/ ?></a>
        <a href="editCat.php?id=<? /*= $cc["id"]*/ ?>">Upravit</a>
       <a href="delCat.php?id=<? /*= $cc["id"]*/ ?>">Smazat</a>
    </li>
    <?php /*endforeach; */ ?>
    </ul>-->
    <?php if (isset($_SESSION["user"]["name"])): ?>
    <a href="addCat.php" class="btn btn-outline-dark" style="margin: 10px">Přidat kategorii</a>
    <?php endif; ?>
</main>
</body>
</html>
