<?php
require_once "app.php";
app::init();

$id = $_GET["id"];

$db= new Database();
$ar= new ArticleRepository($db);

$ar->delArticle($id);

header("Location: index.php");