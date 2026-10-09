<?php
include 'header.php';

if ($_POST['edad'] < 18) {
    echo "Error: Tienes que ser mayor de 18 años.";
    exit;
}

if (!file_exists('imagenes')) {
    mkdir('imagenes');
}

$ruta_foto = 'imagenes/' . $_FILES['foto']['name'];
move_uploaded_file($_FILES['foto']['tmp_name'], $ruta_foto);

$precio = 0;
$entrada = $_POST['tipo_entrada'];

if ($entrada == 'General') {
    $precio = 50;
}
if ($entrada == 'VIP') {
    $precio = 120;
}
if ($entrada == 'Super VIP') {
    $precio = 180;
}

$suplemento = 0;
$dias_elegidos = "Ninguno";

if (isset($_POST['dias'])) {
    $suplemento = count($_POST['dias']) * 10;
    $dias_elegidos = implode(", ", $_POST['dias']);
}

$total = $precio + $suplemento;
?>

<div class="container">
    <div class="card">
        <h1>Pase Digital</h1>

        <img src="<?php echo $ruta_foto; ?>" width="150" style="border-radius: 10px;">

        <p><strong>Nombre:</strong> <?php echo $_POST['nombre']; ?></p>
        <p><strong>Correo:</strong> <?php echo $_POST['correo']; ?></p>
        <p><strong>Edad:</strong> <?php echo $_POST['edad']; ?></p>
        <p><strong>Pase:</strong> <?php echo $entrada; ?></p>
        <p><strong>Días:</strong> <?php echo $dias_elegidos; ?></p>
        <p><strong>Método de pago:</strong> <?php echo $_POST['metodo_pago']; ?></p>

        <h2>Total: <?php echo $total; ?> €</h2>

        <a href="index.php" class="btn" style="text-align: center; display: block; text-decoration: none;">Volver</a>
    </div>
</div>
</body>
</html>