<?php
session_start();

$new_password = $_SESSION['password'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <div>
            <h1>La tua password è : <?= $new_password ?></h1>
        </div>
        <a href="../index.php">Genera una nuova password</a>
    </div>
</body>

</html>