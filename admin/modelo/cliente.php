<?php 

require_once('../conexion/conexion.php');

class Cliente {

    public $db;

    public function __construct() {
         $this->db = Conectar::conexion();    
    }


    public function crear_cliente($request) {

        $query_s = "SELECT * FROM tbl_customer WHERE `identification` = " . $request['identification'];
        $resul = $this->db->query($query_s);
        
        if($resul->num_rows == 0) {
            
            $query = 'INSERT INTO tbl_customer (`identification`, `name`, `mobile`, `email`) VALUES (
                "'.$request['identification'].'",
                "'.$request['name'].'",
                "'.$request['mobile'].'",
                "'.$request['email'].'"
            )';

            $resul = $this->db->query($query);
            
            if($resul) {
                return true;
            } else {
                return false;
            }

        }else {
            return array(
                "status" => "error",
                "msg"    => "ya existe",
            );
        }

    }


    public function listar_clientes() {
        $query = "SELECT * FROM tbl_customer";
        return $this->db->query($query);
    }

    public function eliminar_cliente($id) {
        $query = "DELETE FROM tbl_customer WHERE id =".$id;
        $resul = $this->db->query($query);

        if($resul) {
            return true;
        }else {
            return false;
        }
    }

    public function buscar_cliente($id) {
        $query = "SELECT * FROM tbl_customer WHERE id =".$id;
        return $this->db->query($query);
    }


    public function buscar_cliente_cedula($cedula) {
        $query = "SELECT * FROM tbl_customer WHERE `identification` =".$cedula;
        return $this->db->query($query);
    }


    public function editar_cliente($request) {
        $query = ("
            UPDATE tbl_customer SET   
                `identification`    =    '".$request['identification']."',
                `name`              =    '".$request['name']."',
                `mobile`            =    '".$request['mobile']."',
                `email`             =    '".$request['email']."'
            WHERE  `id` = ".$request['id']."
        ");

        
        $resul = $this->db->query($query);

        if($resul) {
            return true;
        } else {
            return false;
        }

    }

}


?>