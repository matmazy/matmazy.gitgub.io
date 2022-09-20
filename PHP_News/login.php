<?php
session_start();
require_once "app.php";
app::init();

$db = new Database();
$au = new authorsRepository($db);

if(isset($_POST["email"],$_POST["password"])){
    $user = $au->getOneAuthor($_POST["email"]);
var_dump($user["password"]);
    if ($user === false) {
        header('Location: login.php?e=notValid');
        die('chybne prihlasovaci udaje');
    }
    if (!password_verify($_POST['password'], $user['password'])) {
        header('Location: login.php?e=notValid');
        die('chybne prihlasovaci udaje');
    }

    $_SESSION['user'] = $user;

    header('Location: index.php');

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
<header>
    <?php include "header.php" ?>
</header>

<main>
    <h1 style="margin: 1rem 40rem;">Login</h1>

    <form method="post" style="margin: 1rem 40rem;">
        <label style="margin: 1rem;">
            email:
            <input type="email" name="email">
        </label>
        <label style="margin: 1rem;">
            Heslo:
            <input type="password" name="password">
        </label>
        <button class="btn btn-outline-dark">Přihlásit se</button>
    </form>

    <strong>
        <?php if (isset($_GET['e']) && $_GET['e'] === 'notValid'): ?>
            Byly zadány chybné přihlašovací údaje.
        <?php endif; ?>
    </strong>

</main>

</body>
</html>
