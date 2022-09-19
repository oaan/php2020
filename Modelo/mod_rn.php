<?php
class mod_rn{
    private $HCL;
    private $FN;
    private $NOM;
    private $AM;
    private $OS;
    private $AFILIADO;
    private $HEPB;
    function __construct($HCL, $FN, $NOM, $AM, $OS, $AFILIADO, $HEPB) {
        $this->HCL = $HCL;
        $this->FN = $FN;
        $this->NOM = $NOM;
        $this->AM = $AM;
        $this->OS = $OS;
        $this->AFILIADO = $AFILIADO;
        $this->HEPB = $HEPB;
    }
    public function getHCL() {
        return $this->HCL;
    }

    public function getFN() {
        return $this->FN;
    }

    public function getNOM() {
        return $this->NOM;
    }

    public function getAM() {
        return $this->AM;
    }

    public function getOS() {
        return $this->OS;
    }

    public function getAFILIADO() {
        return $this->AFILIADO;
    }

    public function getHEPB() {
        return $this->HEPB;
    }

    public function setHCL($HCL) {
        $this->HCL = $HCL;
        return $this;
    }

    public function setFN($FN) {
        $this->FN = $FN;
        return $this;
    }

    public function setNOM($NOM) {
        $this->NOM = $NOM;
        return $this;
    }

    public function setAM($AM) {
        $this->AM = $AM;
        return $this;
    }

    public function setOS($OS) {
        $this->OS = $OS;
        return $this;
    }

    public function setAFILIADO($AFILIADO) {
        $this->AFILIADO = $AFILIADO;
        return $this;
    }

    public function setHEPB($HEPB) {
        $this->HEPB = $HEPB;
        return $this;
    }



   
}

