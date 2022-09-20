<?php
//session_start();
//var_dump($_SESSION["user"]["name"] . " " . $_SESSION["user"]["surname"]);
require_once "app.php";
app::init();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Clean Blog - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
          type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
          rel="stylesheet" type="text/css"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet"/>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="index.php">PHP news</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php">Domů</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="cat.php">Kategorie</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="author.php">Autoři</a></li>
                <?php if (isset($_SESSION["user"]["name"])): ?>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="articleAdmin.php">Administrace
                            článků</a></li>
                <?php endif ?>
                <li class="px-lg-3 py-3 py-lg-2" style="color: white; font-size: 1.75rem; font-weight: 800; letter-spacing: 0.0625rem"> | </li>
                <?php if (!isset($_SESSION["user"]["name"])): ?>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="login.php">Přihlásit se</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="AuthorRegister.php">registrovat se</a>
                    </li>
                <?php endif ?>
                <?php if (isset($_SESSION["user"]["name"])): ?>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="logout.php">Odhlásit se</a></li>
                <?php endif ?>
                <li class="px-lg-5 py-3 py-lg-4"
                    style="color: white; font-size: 0.75rem;font-weight: 800; letter-spacing: 0.0625rem; text-transform: uppercase">
                    <?php if (isset($_SESSION["user"])): ?>
                        <?= $_SESSION["user"]["name"] . " " . $_SESSION["user"]["surname"] ?>
                    <?php else: ?>
                        uzivatel nepřihlasen
                    <?php endif; ?>

                </li>

            </ul>
        </div>
    </div>
</nav>

<header class="masthead" style="background-image: url('')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>PHP news</h1>
                    <span class="subheading">All news about PHP</span>
                </div>
            </div>
        </div>
    </div>
</header>



</body>
</html>
