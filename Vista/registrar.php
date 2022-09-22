<html>
    <head>
        <title>registrar.php</title>
        <link rel="stylesheet" href="../miEstilo.css"/>
    </head>
    <body>
        <header>
            <?php
            include './encabezado.php';
            include '../Persistencia/conexion.php';
            $objCN = new conexion();
            ?>

        </header>
        <section>
            <br><br><br>
            <h3>Registro de Recien Nacido</h3>
            <br>
            <form action="../Controlador/con_rn.php" method="POST">
                <table>
                    <tr>
                        <td>Historia Clinica</td>
                        <td>
                            <input type="text" name="txtHCL" value="<?php echo $objCN->genera(); ?>" readonly/>
                        </td>
                    </tr>
                    <tr>
                        <td>Fecha de Nacimiento</td>
                        <td>
                            <input type="text" name="txtFN" value="2022/07/11"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Nombres</td>
                        <td>
                            <input type="text" name="txtNOM" value="Oscar Alberto"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Apellido Materno</td>
                        <td>
                            <input type="text" name="txtAM" value="Roberts"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Obra Social</td>
                        <td>
                            <input type="text" name="txtOS" value="OSDE"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Numero Afiliado</td>
                        <td>
                            <input type="text" name="txtAFILIADO" value="929299"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Vacuna Hep B</td>
                        <td>
                            <input type="checkbox" name="chkHEPB" value="-1" checked="checked"/>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="btnRegistrar" value="Registrar"/>
                        </td>
                    </tr>
                </table>
            </form>
        </section>
        <footer>
            <br>
            <?php include './pie.php'; ?>
            <br>
        </footer>
    </body>
</html>
