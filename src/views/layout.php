<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MVC</title>
</head>
<body>
    <header>
        <h1>PHP MVC</h1>
        <a href="index.php/uzivatele/registrovat">Registrace</a>
        <a href="index.php/uzivatele/prihlasit">Přihlášení</a>
    </header>
    <main>
        <?php require_once "router.php"; ?>
    </main>
    <footer>
        &copy; Jakub Šenkýř, 2020
    </footer>
</body>
</html>