<?php
    require_once "conexion.php";

    class ModeloUsuarios{
        
        //este método sirve para mostrar los usuarios a la hora de ingresar.
        static public function MdlMostrarUsuarios($tabla,$item,$valor){

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            $stmt->bindParam(":".$item,$valor,PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();
            $stmt->close();
            $stmt = null;
        }


        //este método permite ingresar los datos a la base de datos.
        static public function mdlIngresarUsuario ($tabla,$datos){

            //$id_usuario = NULL;
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (cve_socio,nombres,usuario,email_p,email,contraseña,celular,foto,estado,tipo_usuario,ultimo_login) VALUES (:cve,:names,:user,:ep,:correo,:pass,:cel,:photo,:stat,:types,:dates)");

            //$stmt -> bindParam(":id_user", $id_usario,PDO::PARAM_STR);
            $stmt -> bindParam(":cve", $datos["cve_socio"],PDO::PARAM_STR);
            $stmt -> bindParam(":names", $datos["nombres"],PDO::PARAM_STR);
            $stmt -> bindParam(":user", $datos["usuario"],PDO::PARAM_STR);
            $stmt -> bindParam(":ep", $datos["email_p"],PDO::PARAM_STR);
            $stmt -> bindParam(":correo", $datos["email"],PDO::PARAM_STR);
            $stmt -> bindParam(":pass", $datos["contraseña"],PDO::PARAM_STR);
            $stmt -> bindParam(":cel", $datos["celular"],PDO::PARAM_STR);
            $stmt -> bindParam(":photo", $datos["foto"],PDO::PARAM_STR);
            $stmt -> bindParam(":stat", $datos["status"],PDO::PARAM_STR);
            $stmt -> bindParam(":types", $datos["tipo_usuario"],PDO::PARAM_STR);
            $stmt -> bindParam(":dates", $datos["fecha"],PDO::PARAM_STR);
            
            if($stmt->execute()){
                       
                    return "ok";
            }else{
                    
                    return "error";
    
            }
    
            $stmt->close();
            $stmt = null;
        }

        static public function MdlCambiarPassword($tabla,$item,$item2,$datos){
            //Update usuarios Set contraseña = 'sistemas123' Where id_usuario ='2'
            $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item = :contra  WHERE $item2 = :id");

            $stmt -> bindParam(":id", $datos["id_usuario"],PDO::PARAM_STR);
            $stmt -> bindParam(":contra", $datos["contraseña"],PDO::PARAM_STR);
            
            if($stmt->execute()){  

                return "ok";

            }else{
                
                return "error";
            }

            $stmt->close();
            $stmt = null;
        }

    }