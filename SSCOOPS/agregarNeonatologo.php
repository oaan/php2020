<?php
require './Config/config.php';
require './Clases/Conexion.php';
require './Clases/Neonatologo.php';
$Neonatologo = new Neonatologo();
$chequeo = $Neonatologo->agregarNeonatologo();
include './Includes/over-all-header.html';
include './Includes/nav.php';
?>
<main class="container">
    <h1>Ingreso de Neonatologo</h1>
    <?php
    $css = 'danger';
    $mensaje = 'No se pudo agregar el Neonatologo';
    if ($chequeo) {
        $css = 'success';
        $mensaje = 'Neonatologo... ' . $Neonatologo->getNeonatologo() . ' agregado correctamente.';
    }
    ?>
    <div class="alert alert-<?= $css ?> shadow-sm p-4 col-6 mx-auto">
        <?= $mensaje ?>
        <a href="adminNeonatologo.php" class="btn btn-outline-secondary ml-4">
            Volver al panel
        </a>
    </div>

</main>
<?php
include './Includes/footer.php';
?>