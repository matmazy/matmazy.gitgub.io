<?php
session_start();
include_once "app.php";
app::init();

$catId = $_GET["id"];

$db = new Database();
$ar = new ArticleRepository($db);
$au =new catRepository($db);

$category = $au->GetOneCat($catId);
$article = $ar->getCatArticle($catId);
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
<?php include "header.php"?>

<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            <h1 style="margin: 3rem 0; text-decoration: underline; text-align: center"><?= $category["name"]?></h1>
            <?php
            foreach ( $article as $a):
                    $text = $db->trimtext($a["text"], 0, 200);
                    $date = date("d/m/Y H:i:s", strtotime($a["dateAdd"]));
                    ?>
                    <div class="post-preview">
                        <a href="article.php?id=<?= $a["id"] ?>">
                            <h2 class="post-title"><?= $a["title"] ?></h2>
                            <h3 class="post-subtitle"><?= $text ?></h3>
                        </a>
                        <p class="post-meta">
                            Autor:
                            <a href="authorDetail.php?id=<?= $a["authorId"] ?>"> <?=$a["aName"]?> </a>
                            <?=$date?>
                            <a href="catDetail.php?id=<?= $a["catId"]?>"><?= $a["kName"]?> </a>
                        </p>
                    </div>
                <?php endforeach; ?>
            <!-- Divider-->
            <hr class="my-4"/>

        </div>
    </div>
</div>


<?php /*foreach ($article as $a):
    $text = $db->trimtext($a["text"], 0, 500);
    $date = date("d/m/Y H:i:s", strtotime($a["dateAdd"]));
    */?><!--
    <?php /*foreach ($article as $b):
    if ($b["id"]==$a["authorId"]):*/?>
        <a href="article.php?id=<?/*= $b["id"] */?>"
    <?php /*endif; endforeach;*/?>
    <div class="article">
        <h3><?/*= $a["title"] */?></h3></a>
        <p>
            <?/*= $date . " " */?>
            <a href="authorDetail.php?id=<?/*=$a["authorId"]*/?>"><?/*=$a["name"]. " " . $a["surname"]. " "*/?></a>
            <a href="catDetail.php?id=<?/*=$a["catId"]*/?>"><?/*=$a["kName"]*/?></a>
        </p>
        <p><?/*= $text */?></p>
    </div>
    číst dál


--><?php /*endforeach; */?>

</body>
</html>
