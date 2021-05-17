<?php
//2º Exemplo de OCP (Open Close Principle)

class Frete {

    private $empresa;
 
    public  function__construct(string $empresa)
    {
        $this -> empresa = $empresa;
    }
    public function calcular()
    {
        //Ferindo OCP
        if ( $this->empresa == 'Correios'){
        
        $logistica = new Correios;
    }
        //Lógica
    
        elseif ( $this->empresa =='TotalExpress' ) 
    {
        //Lógica
    }
        elseif ($this->empresa == 'DHL') 
    {
        //Lógica
    }
        else
    {
        return false;
    }

}

}

    interface EmpresaDeLogistica 
    {

        public function setPeso();
        public function setDestino();
        public function setOrigem();
        public function setTamanho();
        public function calcular();
    }
    class Correios implements EmpresaDeLogistica
    {
        //Lógica
    }
    class TotalExpress implements EmpresaDeLogistica
    {
        //Lógica
    }
 class DHL implements EmpresaDeLogistica
    {
        //Lógica
    }

    //REFATORANDO PARA ATENDERMOS AO OCP.
class Frete {
        private $empresa;

        public function__construct (EmpresaDeLogistica $empresa) 
    {
            $this->empresa = $empresa;
    }
       public function calcular()
        {
             //Logica com os metodos definidos na interface
        }
}
//3ª EXEMPLO DE OCP ( OPEN CLOSE PRINCIPLE)

class Negativação{

    private $devedor;

    public function__construct(Devedor $devedor)
    {
            $this->devedor = $devedor;
    }
    public function enviar(string $orgaoNegativador)
    {
        if ($orgaoNegativador == 'Serasa'){
            //Lógica
        }
        else if ($orgaoNegativador == 'SPC Brasil') {
            //Lógica
        }
        else 
        {
            return 'Erro, órgão negativador não suportado';
        }
    }
}
//Refatorando para atendermos ao OCP

interface OrgaoNegativador
    {
    public function enviarRemessaInclusao();
    public function enviarRemessaExclusao();
    public function receberRetorno();
    }

    class Serasa implements OrgaoNegativador {
        public funtion enviarRemessaInclusao()
        {
            //Lógica
        }
        public function enviarRemessaExclusao()
        {
            //Lógica
        }
        public function receberRetorno()
        {
            //Lógica
        }
    }
    class SPCBrasil implements OrgaoNegativador {
        public funtion enviarRemessaInclusao()
        {
            //Lógica
        }
        public function enviarRemessaExclusao()
        {
            //Lógica
        }
        public function receberRetorno()
        {
            //Lógica
        }
    }
    class BoaVista implements OrgaoNegativador {
        public funtion enviarRemessaInclusao()
        {
            //Lógica
        }
        public function enviarRemessaExclusao()
        {
            //Lógica
        }
        public function receberRetorno()
        {
            //Lógica
        }
    }
    class Negativacao {
        private $devedor;

        public function__construct(Devedor $devedor)
        {
            $this->devedor = $devedor;
        }
        public function enviar (OrgaoNegativador $orgao)
        {
            //Lógica
        }
    }
   /*     class Main {
            public function restricao()
            {
                $negativacao = new Negativacao;

                $negativacao->enviar($orgao);
            }
        }
    */

