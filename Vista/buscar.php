<html>
    <head>
        <title>buscar.php</title>
        <link rel="stylesheet" href="../miEstilo.css"/>
    </head>
    <body>
        <header>
            <?php
            include './encabezado.php';
            include '../Controlador/con_rn.php';
            //agregamos metodos
            $objCN = new conexion();
            ?>
        </header>
        <section>
            <br>
            <br>
            <br>
            <h3>Busqueda de RN por HCL</h3>
            <?php
            //objeto de modelo
            $objRN = new mod_rn($HCL, $FN, $NOM, $AM, $OS, $AFILIADO, $HEPB);
            //metemos la hcl
            $objRN->setHCL($_POST['txtHCL']);
            $rn = $objCN->busca($objRN);
            ?>
            <form method="post">
                <table>
                    <tr>
                        <td>Historia </td>
                        <td>
                            <input type="text" name="txtHCL" value="<?php echo $_POST['txtHCL']; ?>"/>
                            <input type="submit" name="btnBuscar" value="Buscar"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Fecha Nacimiento</td>
                        <td><input type="text" name="txtFN" value="<?php echo $rn[1]; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nombres</td>
                        <td><input type="text" name="txtNOM" value="<?php echo $rn[2]; ?>"></td>
                    </tr>
                    <tr>
                        <td>Apellido Materno</td>
                        <td><input type="text" name="txtAM" value="<?php echo $rn[3]; ?>"></td>
                    </tr>
                    <tr>
                        <td>Obra Social</td>
                        <td><input type="text" name="txtOS" value="<?php echo $rn[4]; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nro Afiliado</td>
                        <td><input type="text" name="txtAFILIADO" value="<?php echo $rn[5]; ?>"></td>
                    </tr>
                    <tr>
                        <td>Vacuna HEP B</td>
                        <td><input type="checkbox" name="chkHEPB" value="<?php echo $rn[6]; ?>"></td>
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
