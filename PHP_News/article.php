<?php
session_start();
require_once "app.php";
app::init();

$id = $_GET["id"];

$db = new Database();
$ar = new ArticleRepository($db);

$article = $ar->getArticle($id);
?>
<?php
if (isset($_POST["print"])):?>
    <script>
        window.print();
    </script>
<?php endif; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<header>
    <?php include "header.php" ?>
</header>
<main>
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">

                    <?php $date = date("d/m/Y H:i:s", strtotime($article["dateAdd"])); ?>
                    <h1><?= $article["title"] ?></h1>
                    <?php if (isset($_SESSION["user"]["id"]) === $article["authorId"]): ?>
                        <a href="articleEdit.php?id=<?= $id ?>">Upravit</a>
                        <a href="articleDel.php?id=<?= $id ?>">Smazat</a>
                    <?php endif; ?>
                    <h4>
                        <?= $date, " " ?>
                        <a href="authorDetail.php?id=<?= $article["authorId"] ?>"><?= $article["aName"] ?> </a>
                        <a href="catDetail.php?id=<?= $article["id"] ?>"><?= $article["kName"] ?> </a>
                    </h4>

                    <form method="post">
                        <button name="print" class="btn btn-outline-dark">Vytisknout</button>
                    </form>

                    <p><?= $article["text"] ?></p>

                </div>
            </div>
        </div>
    </article>
</main>
</body>
</html>
