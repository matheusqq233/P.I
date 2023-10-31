<?php
include '../persistencia/conexaobanco.class.php';
class UsuarioDAO{
    private $conexao=null;

    public function __construct(){
        $this->conexao = ConexaoBanco::getInstancia();
    }//fecha o construtor

    public function cadastrarUsuario($u){
        try{
            $stat = $this->conexao->prepare("insert into usuario(idUsuario,nome,senha, telefone, email, cpf, data)values(null,?,?,?,?,?,?)" );

            $stat->bindValue(1,$u->login);
            $stat->bindValue(2,$u->senha);
            $stat->bindValue(3,$u->telefone);
            $stat->bindValue(4,$u->email);
            $stat->bindValue(5,$u->cpf);
            $stat->bindValue(6,$u->data);

            $stat->execute();

            //Encerrando a conexao
            $this->conexao=null;
            
        }catch(PDOException $e){
            echo 'Erro ao cadastrar usuário';
        }//fecha o catch
    }//fecha o método

    public function buscarUsuario(){
        try{
            $stat = $this->conexao->query("select * from usuario" );

            $array = array();
            $array =$stat->fetchAll(PDO::FETCH_CLASS, 'usuario');

            //Encerrando a conexao
            $this->conexao=null;
            return $array;
            
        }catch(PDOException $e){
            echo 'Erro ao buscar usuário!';
        }//fecha o catch
    }//fecha o método

        //Método deletarUsuario
        public function deletarUsuario($idUsuario){
            try{
                $stat = $this->conexao->prepare("delete from usuario where idUsuario=?");
    
                $stat->bindValue(1,$idUsuario);
                
                $stat->execute();
    
                $this->conexao=null;
            }catch(PDOException $e){
                echo 'Erro ao deletar usuário!';
            }
        }
    
        //Método verificarUsuario
        public function verificarUsuario($u){
            try{
                $stat = $this->conexao->query("select * from usuario where nome='$u->nome' and senha='$u->senha' ");
    
                $usuario = $stat->fetchObject('usuario');
    
                $this->conexao=null;
                return $usuario;
    
            }catch(PDOException $e){
                echo 'Erro ao verificar usuário!';
            }
        }
        
    //Método Buscar
    public function buscar($query){
        try{
            $stat = $this->conexao->query("select * from usuario ".$query);
            $array = $stat->fetchAll(PDO::FETCH_CLASS, 'usuario');
            $this->conexao = null;
            return $array;
        }catch(PDOException $e){
            echo 'Erro ao buscar com filtro'
        }
    }//fecha o método buscar

    //Método Alterar
}//fecha a classe UsuarioDAO
?>