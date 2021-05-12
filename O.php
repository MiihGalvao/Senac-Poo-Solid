<?php
//Exemplo de OCP (Open Close Principle)

class Frete {

    private $empresa;
 
    public  function__construct(string $empresa){
        $this -> empresa = $empresa;
    }
    public function calcular()
    {
if ( $this->empresa == 'Correios'){
        
    $logistica = new Correios;
    }

}elseif ( $this->empresa =='TotalExpress' ) {

}elseif ($this->empresa == 'DHL') {

}
else{
    return false;
}

}

interface EmpresaDeLogistica {

    public function setPeso();
    public function setDestino();
    public function setOrigem();
    public function setTamanho();
    public function calcular();
}
    class Correios implements EmpresaDeLogistica {

    }
    class TotalExpress implements EmpresaDeLogistica{

    }
    class DHL implements EmpresaDeLogistica{

    }
    class Frete {
private $empresa;

public function construct (EmpresaDeLogistica $empresa){
    
}

    }