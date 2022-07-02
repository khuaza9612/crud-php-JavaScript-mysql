<?php
// archivo de ayuda

    function redirect($url){// nos va a direccionar para donde queramos
        echo "<script type='text/javascript'>".
            "window.location.href='$url'".
            "</script>";
    }
    function dd($var){  
        //Esta funcion nos permite detener una ejecucion y mostrar una informacion sea de una variable o un vector lo que necesitemos//
        //Cuando se detiene una ejecucion?, cuando se tiene que verificar si la informacion que se esta enviando desde el formulario esta llegando a la parte del controlador//
        //Para que o por que ? para verificar que la informacion que se requiere llegue para poderla insertar en la base de datos.//
        
        echo "<pre>";
        die(print_r($var));//matamos la ejecucion 
    }
    function getUrl($modulo,$controlador,$funcion,$parametros=false,$pagina=false){// direccionamiento 

        //modulo=carpeta->controller
        //controlador=archivo->modulo
        //funcion=metodo o funcion -> archivo controlador

           //modulo=carpeta->controller
        //controlador=archivo->modulo
        //funcion=metodo o funcion -> archivo controlador

        if ($pagina==false){
            $pagina="index";
        }

        $url="$pagina.php?modulo=$modulo&controlador=$controlador&funcion=$funcion";
        
        if($parametros!=false){
            foreach($parametros as $key => $value){
                $url.="&$key=$value";
            }
        }

        return $url;
    }

       
    
    function resolve(){// nos va a verificar si existe el modulo,el control,la funcion
        $modulo=ucwords($_GET['modulo']);
        $controlador=ucwords($_GET['controlador']);
        $funcion=$_GET['funcion'];
       

        if(is_dir("../controller/$modulo")){
            // is_dir= validamos si existe la carpeta 
            // todo archivo controlador debe tener le nombre del modulo seguido de la palabra Controller
            //controlador: UsuarioController.php
            if(file_exists("../controller/$modulo/".$controlador."Controller.php")){
                include_once "../controller/$modulo/".$controlador."Controller.php";
                // controlador lo incluiomos para ver q la funcion exista 
                //nombreClase=nombre archivo
                $nombreClase=$controlador."Controller";
                $objClase=new $nombreClase();// es importante porque atravez de este valido si la funcion existe o no

                if(method_exists($objClase,$funcion)){
                    $objClase->$funcion();
                }else{
                    echo "La funcion especificada no existe";
                }
            }else{
                echo "El controlador especificado no existe";
            }
        }else{
            echo "El modulo especificado no existe";
        }
    }
    function validate($texto){

        $noValidos="?¿#$%&@/()=|°¬;,:.-_{}[]+*~";
        $cont=0;
        for ($i=0; $i <strlen($texto); $i++){
            for($k=0; $k <strlen($noValidos); $k++){
                if ($texto[$i]==$noValidos[$k]){
                    $cont++;
                }
            }
        }
        if ($cont==0){
            return true;
        }else{
            return false;
        }
    }

?>