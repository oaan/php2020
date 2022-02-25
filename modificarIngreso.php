<?php
    require './Config/config.php';
    require './Clases/Conexion.php';
    require './Clases/Ingreso.php';
    $Ingreso=new Ingreso();
    $chequeo=$Ingreso->modificarIngreso();
    include './Includes/over-all-header.html';
    include './Includes/nav.php';
?>
<main class="container">
    <h1>Modificacion de Recien Nacido</h1>
        
    <?php 
        $css='danger';
        $mensaje='No se pudo modificar el recien nacido';
        if ($chequeo) {
            $css='success';
            $mensaje='Recien Nacido: '.$Ingreso->getNOM().' modificado correctamente'; 
        }
    ?>
    <div class="alert alert- <?= $css ?> shadow-sm p-4 col-6 mx-auto">
    <?= $mensaje?>
        <a href="adminIngresos.php" class="btn btn-outline-secondary ml-4">
            Volver al panel
        </a>
    </div>
    
    
</main>

<?php    include './Includes/footer.php'; ?>