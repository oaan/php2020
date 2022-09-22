<?php
require './Config/config.php';
require './Clases/Conexion.php';
require './Clases/Neonatologo.php';
$Neonatologo = new Neonatologo();
$chequeo = $Neonatologo->eliminarNeonatologo();
include './Includes/over-all-header.html';
include './Includes/nav.php';
?>
<main class="container">
    <h1>Borrado de Neonatologo</h1>

    <?php
    $css = 'danger';
    $mensaje = 'No se pudo eliminar Neonatologo';
    if ($chequeo) {
        $css = 'success';
        $mensaje = 'Neonatologo: ' . $Neonatologo->getNeonatologo() . ' eliminada corectamente.';
    }
    ?>
    <div class="alert alert-<?= $css ?> shadow-sm p-4 col-6 mx-auto">
        <?= $mensaje ?>
        <a href="adminNeonatologo.php" class="btn btn-outline-secondary ml-4">
            volver a panel
        </a>
    </div>

</main>

<?php
include 'includes/footer.php';
?>