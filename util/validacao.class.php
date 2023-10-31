<?php
class Validacao{

    public static function testarNome($valor){
        $exp='/^[a-zA-Z]{3,50}$/';
        if(preg_match($exp,$valor) ){
            return true;
        }else{
            return false;
        }//fecha o else
    }//fecha o método

    public static function testarSenha($valor){
        $exp='/^[0-9]{4,8}$/';
        if(preg_match($exp,$valor) ){
            return true;
        }else{
            return false;
        }//fecha o else
    }//fecha o método

    public static function testarCpf($valor){
        $exp='/^([0-9]{11})$/';
        if(preg_match($exp,$valor) ){
            return true;
        }else{
            return false;
        }//fecha o else
    }//fecha o método

    public static function retirarEspacos($valor){
        return trim($valor);
    }

    public static function escaparAspas($valor){
        return addslashes($valor);
    }
}//fecha a classe validacao
?>