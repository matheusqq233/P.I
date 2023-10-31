<?php
    class Usuario{
        //Atributos
        private $idUsuario;
        private $nome;
        private $senha;
        private $telefone;
        private $email;
        private $cpf;
        private $data;

        //Construtor
        public function __construct(){
            

        }//fecha o construtor

        public function usuario(){

        }

        public function __get($atrib) {
            return $this->$atrib;
        }

        public function __set($atrib, $valor) {
            $this->$atrib = $valor;
        }

        public function __toString(){
            return '<br>Código: '.$this->idUsuario. 
                   '<br>Nome: '.$this->nome. 
                   '<br>Senha: '.$this->senha.
                   '<br>Telefone: '.$this->telefone; 
                   '<br>Email: '.$this->email; 
                   '<br>CPF: '.$this->cpf; 
                   '<br>Data: '.$this->data; 
        }
    }//fecha a classe Usuario
?>