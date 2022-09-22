<?php
require './Config/config.php';
include './Includes/over-all-header.html';
include './Includes/nav.php';

?>
<main class="container">
    <h1>Agregar Recien Nacido</h1>
    <div class="alert bg-light border border-white shadow round col-8 mx-auto p-4">
        <form action="agregarIngreso.php" method="post">

            <div class="form-group">
<!--                <label for="HCL">Historia Clinica:</label>
                <input type="text" name="HCL" value="8660"
                       id="HCL" class="form-control">-->
                
                <label for="NOM">Nombre:</label>
                <input type="text" name="NOM" value="Oscar"
                       id="NOM" class="form-control">
                
                <label for="AP">Apellido Paterno:</label>
                <input type="text" name="AP" value="Angarita"
                       id="AP" class="form-control">
                
                <label for="OS">Obra Social:</label>
                <input type="text" name="OS" value="OSDE"
                       id="OS" class="form-control">
                
                <label for="AFILIADO">Nro de Afiliado:</label>
                <input type="text" name="AFILIADO" value="1"
                       id="AFILIADO" class="form-control">
            </div>
            
            <button class="btn btn-dark">Agregar Recien Nacido</button>
            <a href="adminIngresos.php" class="btn btn-outline-secondary">
                Volver a panel Ingreso
            </a>
        </form>
    </div>
</main>
<?php
include './Includes/footer.php';
?>
