<?php 

require_once('../conexion/conexion.php');

class Cliente {

    private $db;

    public $identification = 123454;
    public $name = "David";
    public $mobile = "46546464";
    public $email = 'drv404@hotmail.com';


    public function __construct() {
         $this->db = Conectar::conexion();
    }

    public function crear_cliente() {

        $query = "INSERT INTO tbl_customer (`identification`, `name`, `mobile`, `email`) VALUES (
                '1454654',
                'david',
                '46546464',
                'drv404@hotmail.com'    
            )      
            ";

        $result = $this->db->query($query);

        if($result) {
            return true;
        }else {
            return false;
        }

    }
    


}


?>