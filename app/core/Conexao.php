<?php
namespace app\core;

use Exception;
use PDOException;

class Conexao{
    private static $conexao = null;
    
    public static function getConexao(){
        try{
            if(!self::$conexao){
                self::$conexao = new \PDO("mysql:dbname=".CONF_BD["BANCO"].";host=".CONF_BD["SERVIDOR"],CONF_BD["USUARIO"],CONF_BD["SENHA"]);
                self::$conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                self::$conexao->exec("SET NAMES " . CONF_BD["CHARSET"]);
            }           
            return self::$conexao; 
        }catch (PDOException $e){
            throw new Exception("Erro ao tentar conectar com o banco.<br/>".$e->getMessage());
        }
    }
}
