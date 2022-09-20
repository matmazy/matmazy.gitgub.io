<?php
include "app.php";
app::init();

$db = new Database();
$au = new authorsRepository($db);
$ar = new ArticleRepository($db);

$id = $_GET["id"];
/*$article = $ar->getArticles();

foreach ($article as $a)
{
    if($a["authorId"]>0)
    {
        echo "Nejde odstranit autora, který má články";
        header("Location: author.php");
        die();
    }
}
spl_autoload_register(function ($c)
{echo "Nejde odstranit autora, který má články"; };*/

try {
    if (isset($_SESSION["user"])){
        $au->delAuthor($id);
    }
}catch (PDOException $e){
    echo "<p style='color:darkred; margin: 10rem 45rem'>Nelze smazat autora který má nějaké články</p>";
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
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
<br>
<a href="cat.php" class="btn-outline-dark" style="margin: 3rem 45rem">Zpět na autory</a>
</body>
</html>

<!--

$au->delAuthor($id);

header("Location: author.php");-->
