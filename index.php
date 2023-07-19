<?php

session_start();

include __DIR__ . '/includes/functions.php';

$password = $_GET['password'] ?? null;

$radio = $_GET['radio'] ?? '';

$font = $_GET['font'] ?? '';

$number = $_GET['number'] ?? '';

$symbol = $_GET['symbol'] ?? '';

if (isset($password) && $password) {
    header("location:includes/result.php");
    $new_password = get_random_Password($password, $radio);
    $_SESSION['password'] = $new_password;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Document' ?></title>
</head>

<body>
    <main>
        <h1>Crea la tua Password</h1>
        <form action="">
            <input type="number" name="password" value="<?= $password ?>">
            <label for="yes">SI</label>
            <input type="radio" name="radio" id="yes" value="si">
            <label for="no">NO</label>
            <input type="radio" name="radio" id="no" value="">
            <label for="font">LETTERE</label>
            <input type="checkbox" name="font" id="font">
            <label for="number">NUMERI</label>

            <input type="checkbox" name="number" id="number">
            <label for="symbol">SIMBOLI</label>

            <input type="checkbox" name="symbol" id="symbol">
            <button type="submit">Invia</button>
            <button type="reset">Reset</button>
        </form>

    </main>
</body>

</html>