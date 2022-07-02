<?php
include_once '../model/Naves/NavesModel.php';
class NavesController{
    public function getInsert(){
        
        include_once '../view/Naves/insert.php';
    }

    public function postInsert(){
        $obj=new NavesModel(); // en este objeto  accedemos a todas las funcionalidades
        // que el navesmodel hereda del master model
        
        $tipo=$_POST['tipo'];
        $nombre=$_POST['nombre'];
        $combustible=$_POST['combustible'];
        $imagen=$_FILES['imagen']['name'];
            $ruta="img/$imagen";

            move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
        $id=$obj->autoincrement("naves","id");
        $sql="INSERT INTO naves VALUES ($id,'$nombre','$combustible','$tipo',
        '$ruta')";
        $ejecutar=$obj->insert($sql);

         if ($ejecutar) {
             redirect(getUrl("Naves","Naves","consult"));
         }else{
             echo "Ups, ha ocurrido un error";
         }
    
    }

    public function consult(){
       
            $obj=new NavesModel();

            $sql="SELECT * FROM naves";
            $naves=$obj->consult($sql);
            include_once '../view/Naves/consult.php';
        }

    
 public function getDelete(){
            $obj=new NavesModel();

            $id=$_GET['id'];
            $sql="SELECT * FROM naves WHERE id=$id";
            $naves=$obj->consult($sql);
            include_once '../view/Naves/delete.php';
        }
    public function postDelete(){
            $obj=new NavesModel();

            $id=$_POST['id'];
           
            $sql="DELETE FROM naves WHERE id=$id";
            $ejecutar=$obj->delete($sql);

            if($ejecutar){
                redirect(getUrl("Naves","Naves","consult"));
            }else{
                echo "Ups, ha ocurrido un error";
            }
        }

        public function filtro(){
            $obj=new NavesModel();

            $buscar=$_POST['buscar'];

            $sql="SELECT * FROM naves WHERE (naves.nombre LIKE '%$buscar%' or naves.tipo  LIKE '%$buscar%' )";

            $naves=$obj->consult($sql);

            include_once '../view/Naves/filtro.php';
        }

    }

       


