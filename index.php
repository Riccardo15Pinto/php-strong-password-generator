<?php

session_start();

include __DIR__ . '/includes/functions.php';

$password = $_GET['password'] ?? null;

$radio = $_GET['radio'] ?? '';

$font = $_GET['font'] ?? '';

$number = $_GET['number'] ?? '';

$symbol = $_GET['symbol'] ?? '';

if (isset($password) && $password && $password > 0) {
    header("location:includes/result.php");
    $new_password = get_random_Password($password, $radio, $font, $number, $symbol);
    $_SESSION['password'] = $new_password;
}

?>

<!DOCTYPE html>
<html lang="en">

<?php include __DIR__ . '/includes/head.php'  ?>

<body>
    <main class="container m-auto p-5">
        <h1 class="text-primary">Crea la tua Password</h1>
        <form action="">
            <input type="number" name="password" value="<?= $password ?>">
            <div>
                <h3>Desideri non avere caratteri che si ripetano?</h3>
                <label for="yes">SI</label>
                <input type="radio" name="radio" id="yes" value="si">
                <label for="no">NO</label>
                <input type="radio" name="radio" id="no" value="">
            </div>
            <div>
                <h3>Desideri non avere lettere maiuscole?</h3>
                <label for="yes">SI</label>
                <input type="radio" name="font" id="yes" value="si">
                <label for="no">NO</label>
                <input type="radio" name="font" id="no" value="">
            </div>
            <div>
                <h3>Desideri non avere numeri?</h3>
                <label for="yes">SI</label>
                <input type="radio" name="number" id="yes" value="si">
                <label for="no">NO</label>
                <input type="radio" name="number" id="no" value="">
            </div>
            <div>
                <h3>Desideri non avere caratteri speciali?</h3>
                <label for="yes">SI</label>
                <input type="radio" name="symbol" id="yes" value="si">
                <label for="no">NO</label>
                <input type="radio" name="symbol" id="no" value="">
            </div>
            <div>
                <button type="submit" class="btn btn-primary m-2">Invia</button>
                <button type="reset" class="btn btn-warning m-2">Reset</button>
            </div>
        </form>

    </main>
</body>

</html>