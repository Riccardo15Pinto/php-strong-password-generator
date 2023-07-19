<?php
session_start();
include __DIR__ . '/includes/functions.php';
$password = $_GET['password'] ?? null;
if (isset($password)) {
    header("location:includes/result.php");
    $new_password = get_random_Password(intval($password));
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
            <button type="submit">Invia</button>
        </form>

    </main>
</body>

</html>