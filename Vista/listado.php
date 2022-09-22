<html>
    <head>
        <title>listado.php</title>
        <link rel="stylesheet" href="../miEstilo.css"/>
    </head>
    <body>
        <header>
            <?php
            include './encabezado.php';
            ?>
        </header>
        <br><br><br>
        <h3>Listado</h3>
        <br>
        <?php
        //metodos de conexion
        include '../Persistencia/conexion.php';
        $objCN = new conexion();
        //invocamos el metodo que lista los pacientes
        $rn = $objCN->listado();
        ?>
        <table border="1" width="700" cellspacing="1" cellpadding="1">
            <tr>
                <td>HCL</td>
                <td>FN</td>
                <td>NOM</td>
                <td>OS</td>
                <td>AFILIADO</td>
                <td>HEPB</td>
            </tr>
            <?php
            foreach ($rn as $rns) {
                ?>
                <tr>
                    <td><?php echo $rns[0]; ?></td>
                    <td><?php echo $rns[1]; ?></td>
                    <td><?php echo $rns[2]; ?></td>
                    <td><?php echo $rns[3]; ?></td>
                    <td><?php echo $rns[4]; ?></td>
                    <td><?php echo $rns[5]; ?></td>
                </tr>
            <?php } ?>

        </table>
    </body>
</html>
