<?php


    class Connection{
        //encapsulamiento
        private $server;
        private $user;
        private $password;
        private $port;
        private $database;
        private $link;

        function __construct(){
            // metodo ejecutar de primero cuando se invoque la clase
            $this->setConnect();
            $this->connect();

        }
        private function setConnect(){
            require_once 'conf.php';

            $this->server=$server;
            $this->user=$user;
            $this->password=$password;
            $this->port=$port;
            $this->database=$database;
        }

        private function connect(){
            //server-user-password-database
            $this->link=mysqli_connect($this->server,$this->user,$this->password,$this->database);
        
            if($this->link){
               // echo"¡Conexion Exitosa!";
            }else{
                mysqli_error($this->link);
            }
        }
        public function getConnect(){       
                //El metodo get es para retornar la conexion

            return $this->link;
        }
        public function close(){
            mysqli_close($this->link);
        }

    }

?>