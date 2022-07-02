<?php

    //En este archivo es donde nosotros tenemos todas las funciones con las
    //cuales nosotros vamos a manipular la informacion en la base de datos.
    //if (!$result) { echo mysqli_error($this->getConnect());}

    include_once '../lib/conf/connection.php';
// MANIPULAR BASE DE DATOS
// ESTE MODELO LO LLAMAMOS EN EL CONTROLADOR PORQUE POR CADA CONTROLADOR UN MODELO


    class MasterModel extends connection{
        // metodos
        public function insert($sql){
            $result=mysqli_query($this->getConnect(),$sql);
            return $result;
        }

        public function consult($sql){
            $result=mysqli_query($this->getConnect(),$sql);
            return $result;
        }

        public function update($sql){
            $result=mysqli_query($this->getConnect(),$sql);
            return $result;
        }

        public function delete($sql){
            $result=mysqli_query($this->getConnect(),$sql);
            return $result;
        }
        public function autoincrement($table,$field){
            $sql="SELECT MAX($field) FROM $table";
            $result=$this->consult($sql);
            $id=mysqli_fetch_row($result);

            return $id[0]+1;
        }

    }
?>
