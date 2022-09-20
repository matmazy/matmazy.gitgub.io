<?php
session_start();
include_once "app.php";
app::init();

$db = new Database();
$ar = new ArticleRepository($db);

$articles = $ar->getArticlesABC();

if (isset($_POST["published"])) {
    $ar->isPublished(
        $_POST["published"],
        $_POST["id"]
    );
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
<?php include_once "header.php" ?>
<style>th, td{ padding: 0.5rem }</style>
<main style="margin: 0 10rem">

    <?php if (isset($_SESSION["user"]["name"])): ?>
    <a href="addArticle.php" class="btn btn-outline-dark">Přidat článek</a>
    <?php endif;?>

    <table>
        <thead>
        <tr>
            <th class="col"></th>
            <th class="col">Title</th>
            <th class="col">Info</th>
            <th class="col">Text</th>
            <th class="col">Akce</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($articles as $a):
            $text = $db->trimtext($a["text"], 0, 100);
            $date = date("d/m/Y H:i:s", strtotime($a["dateAdd"]));


            ?>
            <tr>
                <th scope="row"></th>
                <td>
                    <a href="article.php?id=<?= $a["id"] ?>">
                        <h3><?= $a["title"] ?></h3>
                    </a>
                </td>
                <td>
                    <p>
                        <a href="authorDetail.php?id=<?= $a["authorId"] ?>"> <?= $a["aName"] ?> </a>
                        <?= $date ?>
                        <a href="catDetail.php?id=<?= $a["catId"] ?>"><?= $a["kName"] ?> </a>
                    </p>
                </td>
                <td>
                    <a href="article.php?id=<?= $a["id"] ?>">
                        <p><?= $text ?></p>
                    </a>
                </td>
                <td>
                    <?php if ($_SESSION["user"]["id"]===$a["authorId"]): ?>
                    <a href="articleEdit.php?id=<?= $a[">Upravit</a>
                    <a href="articleDel.php?id=<?= $a[">Smazat</a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>


    <!-- <?php /*foreach ($articles as $a):
        $text = $db->trimtext($a["text"], 0, 500);
        $date = date("d/m/Y H:i:s", strtotime($a["dateAdd"]));
        */ ?>
        <div class="article">
            <a href="article.php?id=<? /*= $a["id"] */ ?>">

                <h3><? /*= $a["title"] */ ?></h3>
                <a href="articleEdit.php?id=<? /*= $a[">Upravit</a>
                <a href="delArticle.php?id=<? /*= $a["id"] */ ?>">Smazat</a>
                <p><? /*= $date . " " . $a["aName"] */ ?></p>
                <p><? /*= $text */ ?></p>

                číst dál </a>
        </div>
    --><?php /*endforeach; */ ?>

</main>

</body>
</html>
