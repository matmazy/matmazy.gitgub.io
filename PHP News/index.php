<?php
session_start();
//var_dump($_SESSION);

require_once "app.php";
app::init();

$db = new Database();
$ar = new ArticleRepository($db);

$articles = $ar->getArticles();


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/indexstyle.css">
    <title>Document</title>
</head>
<body>

<header>
    <?php include "header.php" ?>
</header>

<main class="">
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                <?php
                    $i=0;
                foreach ($articles as $a):

                        //else
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
                                <a href="authorDetail.php?id=<?= $a["authorId"] ?>"> <?= $a["aName"] ?> </a>
                                <?= $date ?>
                                <a href="catDetail.php?id=<?= $a["catId"] ?>"><?= $a["kName"] ?> </a>
                            </p>
                        </div>
                    <?php endforeach; ?>
                <!-- Divider-->
                <hr class="my-4"/>

            </div>
        </div>
    </div>


    <!--<h2>Články</h2>
    <h4>Nenovější zprávy z IT</h4>
    <?php /*foreach ($articles as $a):
        if ($a["id"] <= 5):
            $text = $db->trimtext($a["text"], 0, 500);
            */ ?>
            <div class="article">
                <a href="article.php?id=<? /*= $a["id"]*/ ?>"

                    <h3><? /*= $a["title"] */ ?></h3>
                    <p><? /*= $a["dateAdd"] . " " . $a["aName"] */ ?></p>
                    <p><? /*= $text */ ?></p>

                    číst dál </a>
            </div>

        --><?php /*endif; endforeach; */ ?>
</main>

</body>
</html>
