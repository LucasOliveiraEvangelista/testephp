<?php
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

    class Conn {    
        public static $host = "Localhost";
        public static $usuario = "id18087051_lucas";
        public static $senha = "ncbGSGZ^^bxdD6G(";
        public static $banco = "id18087051_ponto";
        private static $Connect = null;
        
        private static function Conectar() {
            try {
                if(self::$Connect == null):
                    self::$Connect = new PDO('mysql:host='.self::$host.';dbname='.self::$banco, self::$usuario, self::$senha,  array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                endif;          
            } catch (Exception $ex) {
                echo 'Mensagem: ' . $ex->getMessage();
                die;
            }       
            return self::$Connect;
        }
        
        public function getConn() {
            return self::Conectar();
        }
        
    }


?>