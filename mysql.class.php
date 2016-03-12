<?
define('USERNAME','root');
define('PASSWORD','');
define('DSN',"mysql:host=localhost;dbname=project1");



class DB {

     private static $_instance;

     public function &pdo_connection(){
        if(!self::$_instance){
            try {
                self::$_instance = new PDO(DSN,USERNAME,PASSWORD);
                self::$_instance->setAttribute(PDO::ATTR_PERSISTENT, true);
                self::$_instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $est) {
                die("pdo connection error!". $est->getMessage() ."<br/>");
            }
        }
        return self::$_instance;
    }
    private function  __construct() {
    }
    private function __clone() {}
}
?>