<?php
$password = $_GET['password'] ?? null;

function get_random_Password($length_password)
{
    $alphabet_characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890-!£$%&?@#';
    $password = []; //remember to declare $pass as an array
    $alphabet_Length = strlen($alphabet_characters) - 1; //put the length -1 in cache
    for ($i = 0; $i < $length_password; $i++) {
        $single_character = rand(0, $alphabet_Length);
        $password[] = $alphabet_characters[$single_character];
    }
    return implode($password); //turn the array into a string
}

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