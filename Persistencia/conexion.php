<?php

class conexion {

    private $cn = null;

    public function getConecta() {
        $this->cn = mysqli_connect('localhost', 'oscar', 'emiliano', 'Neo2011');
        return $this->cn;
        }
    public function __construct() {
        $this->cn = mysqli_connect('localhost', 'oscar', 'emiliano', 'Neo2011');
    }

    public function listado() {
        $sql = "SELECT HCL,"
                . "DATE(FN)FN,"
                . "UPPER(CONCAT_WS(',',NOM,AM))NOMBRES,"
                . "OS,AFILIADO,HEPB FROM P "
                . "ORDER BY HCL DESC "
                . "LIMIT 10";
        $rs = mysqli_query($this->cn, $sql);
        while ($rns = mysqli_fetch_array($rs)) {
            $rn[] = $rns;
        }
        return $rn;
    }

    public function genera() {
        $sql = "SELECT HCL FROM P "
                . "ORDER BY HCL DESC "
                . "LIMIT 1";
        $rs = mysqli_query($this->cn, $sql);
        $fila = mysqli_fetch_row($rs);
        return substr($fila[0], -4) + 1;
    }

    public function busca(mod_rn $objRN) {
        $sql = "SELECT HCL,DATE(FN)FN,NOM,AM,OS,AFILIADO,HEPB FROM P "
                . "WHERE HCL='{$objRN->getHCL()}'";
        $rs = mysqli_query($this->cn, $sql);
        $rn = mysqli_fetch_array($rs);
        if ($rn)echo "<script>alert('Se Encontro el Recien Nacido')</script>"; else echo "<script>alert('No se encontro al Recien Nacido')</script>";
        return $rn;
    }

    public function registra(mod_rn $objRN) {
        $sql = "INSERT INTO P VALUES("
                . "'{$objRN->getHCL()}',"
                . "'{$objRN->getFN()}',"
                . "'{$objRN->getNOM()}',"
                . "'{$objRN->getAM()}',"
                . "'{$objRN->getOS()}',"
                . "'{$objRN->getAFILIADO()}',"
                . "'{$objRN->getHEPB()}')";
        $rs=mysqli_query($this->cn, $sql);
        
    }

    public function actualiza(mod_rn $objRN) {
        $sql = "UPDATE P SET "
                . "HCL='{$objRN->getHCL()}',"
                . "FN='{$objRN->getFN()}',"
                . "NOM='{$objRN->getNOM()}',"
                . "AM='{$objRN->getAM()}',"
                . "OS='{$objRN->getOS()}',"
                . "AFILIADO='{$objRN->getAFILIADO()}',"
                . "HEPB='{$objRN->getHEPB()}' "
                . "WHERE HCL='{$objRN->getHCL()}'";
        $rs = mysqli_query($this->cn, $sql);
    }

    function elimina(mod_rn $objRN) {
        $sql = "DELETE FROM P "
                . "WHERE HCL='{$objRN->getHCL()}'";
        $rs = mysqli_query($this->cn, $sql);
    }

}
