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
}

//Refatorar sem ferir o principio de responsabilidade única
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
                //Implementação
            }
        class exportarDadosPlanilha extends ExportaDados
               {

            public function exportarParaPlanilha()
                {
                //Implementação
                }
        }
//FIM DO EXEMPLO 1

class Relatorio{

    private $dados;

    public  function setDados(array $dados)
        {

        }
    public function exportarParaPdf() // Ferindo o principio de responsabilidade unica.
        {
        //Implementação
        }
    public function exportarParaCsv() // Ferindo o principio de responsabilidade unica.
        {
        //Implementação
        }
}
//Refatorar sem ferir o principio de responsabilidade unica.

class Relatorio {

    private $dados;

    public function setDados(array $dados)
        {

        }   
}

class ExportaDados
        {
    //Implementação
        }

class exportarDadosPdf extends ExportaDados{

    public function exportar()
        {
    //Implementação
        }
}

class ExportaDadosCsv extends ExportaDados
        {

        public function exportar()
            {
            //Implementação 
            }
}


//FIM DO EXEMPLO 2

//EXEMPLO III
 
class Post{

    private $titulo;

    public function setTitulo(string $titulo)
        {
        //Implementação
        }
    public function gerarUrlAmigavel() //Ferindo o principio de responsabilidade unica.
        {
           //Implementação
        }
    public function buscarPostSemelhante() //Ferindo o principio de responsabilidade unica.
    {
        //Implementação
    }
}

//Refatorar sem ferir o principio de resposabilidade única.

class Post {

    private $titulo;

    public function setTitulo(string $titulo)
        {
        //Implementação
        }
}

class Url {

    public function gerarUrlAmigavel()
        {
            //Implementação
        }
}

class Busca 
    {
        //Implementação
    }
class BuscaPorSemelhanca extends Busca {

    public function buscar()
        {
            //  Implementação
        }

}


//FIM DO EXEMPLO III

