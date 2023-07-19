<?php
session_start();

$new_password = $_SESSION['password'];
?>

<!DOCTYPE html>
<html lang="en">

<?php include __DIR__ . '/head.php'  ?>


<body>
    <div>
        <div>
            <h1>La tua password è : <?= $new_password ?></h1>
        </div>
        <a href="../index.php">Genera una nuova password</a>
    </div>
</body>

</html>