<?php 
//SOLID
//Single Responsibility

class Usuario{

    private $nome;

    public funtion setNome()
    {
            //implementação
    }
    public function getNome()
    {
             //implementação
    }
    public function enviarEmail()
    {
              //implementação
    }
    public function exportarParaPlanilha() //Ferindo o principio de responsabilidade unica.
    {
             //implementação
    }

    class Usuario {
        private $nome;

        public function setNome()
        {
            //implementação
        }
        public function getNome()
        {
            //implementação
        }
    }
        class email {

            public function enviarEmail()
            {
                //implementação
            }
        }
        class ExportarDados
        {

        }
        class exportarParaPlanilha extends
}