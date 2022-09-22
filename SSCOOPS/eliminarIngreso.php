<?php
require './Config/config.php';
require './Clases/Conexion.php';
require './Clases/Ingreso.php';
$Ingreso = new Ingreso();
$chequeo = $Ingreso->eliminarIngreso();
var_dump($chequeo);
include './Includes/over-all-header.html';
include './Includes/nav.php';
?>
<main class="container">
    <h1>Borrado de Recien Nacido</h1>

    <?php
    $css = 'danger';
    $mensaje = 'No se pudo eliminar la región';
    if ($chequeo) {
        $css = 'success';
        $mensaje = 'Región: ' . $Ingreso->getNOM() . ' eliminada corectamente.';
    }
    ?>
    <div class="alert alert-<?= $css ?> shadow-sm p-4 col-6 mx-auto">
        <?= $mensaje ?>
        <a href="adminIngresos.php" class="btn btn-outline-secondary ml-4">
            volver a panel
        </a>
    </div>

</main>

<?php
include 'includes/footer.php';
?>