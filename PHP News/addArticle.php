<?php
session_start();
require_once "app.php";
app::init();

$db = new Database();
$ar = new ArticleRepository($db);
$au = new AuthorsRepository($db);
$cat = new CatRepository($db);

$authors = $au->getAuthors();
$cats = $cat->getCat();

if (isset($_POST["title"], $_POST["text"])) {
    $ar->addArticle(
        $_POST["title"],
        $_POST["text"],
        $_POST["authorId"],
        $_POST["catId"]
    );
    header('location:index.php');
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
    <link rel="stylesheet" href="css/articleEA.css">

    <script src="tinymce/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '#default'
        });
    </script>

</head>
<body>
<header>
    <?php include "header.php" ?>
</header>
<mamin>
    <div>
        <h2>Přidat článek</h2>
        <form action="" method="post">
            <div>
                <label>
                    Název:
                    <input type="text" name="title" required>
                </label>
            </div>
            <div>
                <label>
                    <!--Text:-->
                    <textarea type="textarea" name="text" id="default" required>Hello, World!</textarea>

                </label>
            </div>
            <div>
                <label>
                    Autor:
                    <select name="authorId" id="">
                        <?php foreach ($authors as $a): ?>
                            <option value="<?= $a["id"] ?>">
                                <?= $a["aName"] ?>
                            </option>

                        <?php endforeach; ?>
                    </select>

                </label>
            </div>
            <div>
                <label>
                    Kategorie:
                    <select name="catId" id="">
                        <?php foreach ($cats as $c): ?>
                            <option value="<?= $c["id"] ?>">
                                <?= $c["name"] ?>
                            </option>

                        <?php endforeach; ?>
                    </select>

                </label>
            </div>
<!--            <div>-->
<!--                <label>-->
<!--                              <input type="checkbox" name="published" value="1" >-->
<!--                    <input type="hidden" name="id" value="--><?///*= $id */?><!--">-->
<!--                    --><?php ///*if ($article["published"] == 1): */?>
<!--                        <input type="radio" name="published" id="0" value="0"/>-->
<!--                        <label for="0">neviditelný</label>-->
<!---->
<!--                        <input type="radio" name="published" id="1" value="1" checked/>-->
<!--                        <label for="1">viditelný</label>-->
<!--                    --><?php ///*elseif ($article["published"] >= 1): */?>
<!--                        <input type="radio" name="published" id="0" value="0" checked/>-->
<!--                        <label for="0">neviditelný</label>-->
<!---->
<!--                        <input type="radio" name="published" id="1" value="1"/>-->
<!--                        <label for="1">viditelný</label>-->
<!--                    --><?php ///*endif; */?>
<!--                </label>-->
<!--            </div>-->
            <div>
                <button>Uložit</button>
            </div>
        </form>

        <script>
            tinymce.init({
                selector: 'default',  // change this value according to your HTML
                plugin: 'a_tinymce_plugin',
                a_plugin_option: true,
                a_configuration_option: 500,

            });
        </script>
    </div>
</mamin>
</body>
</html>
