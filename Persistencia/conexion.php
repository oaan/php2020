<?php

class conexion {

    private $cn = null;

    public function __construct() {
        $this->cn = mysqli_connect('localhost', 'oscar', 'emiliano', 'Neo2011');
    }

    public function listado() {
        $sql = "SELECT HCL,DATE(FN)FN,UPPER(CONCAT_WS(',',NOM,AM))NOMBRES,OS,AFILIADO,HEPB FROM P ORDER BY HCL DESC LIMIT 10";
        $rs = mysqli_query($this->cn, $sql);
        while ($rns = mysqli_fetch_array($rs)) {
            $rn[] = $rns;
        }
        return $rn;
    }

    public function genera() {
        $sql = "SELECT HCL FROM P ORDER BY HCL DESC LIMIT 1";
        $rs = mysqli_query($this->cn, $sql);
        $fila = mysqli_fetch_row($rs);
        return 'C' . str_pad((substr($fila[0], -4) + 1), -4, '0', STR_PAD_LEFT);
    }

    public function busca(mod_rn $objRN) {
        $sql = "SELECT * FROM P WHERE HCL='{$objRN->getHCL()}'";
        $rs = mysqli_query($this->cn, $sql);
        $rn = mysqli_fetch_array($rs);
        return $rn;
    }

    public function registra(mod_rn $objRN) {
        $sql = "INSERT INTO P(HCL,FN,NOM,AM,OS,AFILIADO,HEPB)VALUES("
                . "'{$objRN->getHCL()}','{$objRN->getFN()}','{$objRN->getNOM()}',"
                . "'{$objRN->getAM()}','{$objRN->getOS()}','{$objRN->getAFILIADO()}',"
                . "'{$objRN->getHEPB()}'";
        $rs = mysqli_query($this->cn, $sql);
    }

    public function actualiza(mod_rn $objRN) {
        $sql = "UPDATE P SET HCL='{$objRN->getHCL()}',"
                . "FN='{$objRN->getFN()}',NOM='{$objRN->getNOM()}',AM='{$objRN->getAM()}',OS='{$objRN->getOS()}',"
                . "'{$objRN->getAFILIADO()}','{$objRN->getHEPB()}' WHERE HCL='{$objRN->getHCL()}'";
        $rs = mysqli_query($this->cn, $sql);
    }

    public function elimina(mod_rn $objRN) {
        $sql = "DELETE FROM P WHERE HCL='{$objRN->getHCL()}'";
        $rs = mysqli_query($this->cn, $sql);
    }

}
