<?php
require './Config/config.php';
include './Includes/over-all-header.html';
include './Includes/nav.php';

?>
<main class="container">
    <h1>Agregar Neonatologo</h1>
    <div class="alert bg-light border border-white shadow round col-8 mx-auto p-4">
        <form action="agregarNeonatologo.php" method="post">

            <div class="form-group">
               
                <label for="Neonatologo">Neonatologo:</label>
                <input type="text" name="Neonatologo" value="Angarita"
                       id="Neonatologo" class="form-control">
                
                <label for="Apellido">Apellido:</label>
                <input type="text" name="Apellido" value="Angarita Roberts"
                       id="Apellido" class="form-control">

                <label for="MP">MP:</label>
                <input type="text" name="MP" value="2583"
                       id="MP" class="form-control">

                <label for="MN">MN:</label>
                <input type="text" name="MN" value="2583"
                       id="MN" class="form-control">
            </div>
            
            <button class="btn btn-dark">Agregar Neonatologo</button>
            <a href="adminNeonatologo.php" class="btn btn-outline-secondary">
                Volver a panel Ingreso
            </a>
        </form>
    </div>
</main>
<?php
include './Includes/footer.php';
?>
