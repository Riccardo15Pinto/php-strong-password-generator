<?php
$password = $_GET['password'] ?? null;

include __DIR__ . '/includes/functions.php';

if (isset($password)) {

    $new_password = get_random_Password(intval($password));
}





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <?php if (isset($new_password)) : ?>
            <div>
                <h1>La tua password è : <?= $new_password ?></h1>
            </div>
        <?php endif ?>
        <form action="">
            <input type="number" name="password" value="<?= $password ?>">
            <button type="submit">Invia</button>
        </form>

    </main>
</body>

</html>