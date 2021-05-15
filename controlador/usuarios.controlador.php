<?php
    class ControladorUsuarios{
        
        static public function ctrCrearUsuario(){
            //var_dump($_POST['nuevoNombre']);
            if(isset($_POST['nuevoNombre'])){
                    
                if( preg_match('/^[a-zA-Z0-9áéíóúüñÁÉÍÓÚÜÑ]+$/',$_POST['nuevoNombre'])&&
                    preg_match('/^[a-zA-Z0-9_-]+$/',$_POST['nuevaPass'])){

                        //print_r($_POST);
                        
                        $tabla = "usuarios";
                        $datos = array(
                                       "cve_socio" => $_POST['claveuser'],
                                       "nombres"=> $_POST['nuevoNombre'],
                                       "usuario"=> $_POST['nuevoUsuario'],
                                       "email_p"=>  $_POST['nuevoEmailP'],
                                       "email"=>  $_POST['nuevoEmail'],
                                       "contraseña"=>  $_POST['nuevaPass'],
                                       "celular"=>  $_POST['nuevoCel'],
                                       "foto"=>  $_POST['nuevaFoto'],
                                       "status"=> $_POST['status'],
                                       "tipo_usuario"=>  $_POST['nuevoTipo'],
                                       "fecha" => $_POST['fechaingreso']);
                                       
                        $respuesta = ModeloUsuario::mdlIngresarUsuario($tabla,$datos);
                        
                        if($respuesta == "ok"){

                            echo '<script>
                            Swal.fire({
                                    title: "Success!",
                                    text: "¡Cambiaste tu contraseña correctamente!",
                                    icon: "success",
                                    confirmButtonText: "Ok"
                            });
                            </script>';
                            
                        }else{

                            echo ("<script>
                            Swal.fire({
                                    title: 'Error!',
                                    text: '¡No puedes usar caracteres especiales!',
                                    icon: 'error',
                                    confirmButtonText: 'Ok'
                            });
                            </script>");
                        }
                    }else{
                        echo '<script>
                        Swal.fire({
                                title: "Error!",
                                text: "¡Oops...Algo salio intentalo de nuevo más tarde!",
                                icon: "error",
                                confirmButtonText: "Ok"
                        });
                        </script>';
                    }    
                                
            }
        }
        
        static public function ctrIngresar(){

            if(isset($_POST['correo'])){ 
                if(preg_match('/^[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}+$/', $_POST['correo']) && 
                   preg_match('/^[a-zA-Z0-9_-]+$/', $_POST['pass'])){
                       $tabla = "usuarios";
                       $item = "email";
                       $valor = $_POST['correo'];
                       $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla,$item,$valor);
                        
                       if($respuesta['email'] == $_POST['correo'] && $respuesta['contraseña'] == $_POST['pass']){
                                if($respuesta['tipo_usuario'] == 'Admin'){
                                    $_SESSION['iniciarSesion'] = 'ok';
                                    $_SESSION['usuario'] = $respuesta;
                                    echo '<script>
                                                window.location = "Admin";
                                    </script>';
                                }else if($respuesta['tipo_usuario'] == 'Colegiado'){
                                    $_SESSION['iniciarSesion'] = 'ok';
                                    $_SESSION['usuario'] = $respuesta;
                                    echo '<script>
                                                window.location = "inicio";
                                    </script>';

                                }else{
                                    echo '<script>
                                                window.location = "login";
                                    </script>';
                                }    
                        
                       }else{
                           echo("<div class='alert alert-danger'>Error al ingresar al sistema</div>");
                       }
                   }
            }
        }

        static public function ctrCambiarpass(){
            
            if(isset($_POST['newpass'])){ 
                if(preg_match('/^[a-zA-Z0-9_-]+$/', $_POST['newpass'])){
                       $tabla = "usuarios";
                       $item = "contraseña";
                       $item2 = "id_usuario";
                       $datos = array("id_usuario" => $_POST['iduser'],
                                    "contraseña"=> $_POST['newpass']);
                       
                       $respuesta = ModeloUsuarios::MdlCambiarPassword($tabla,$item,$item2,$datos);
                        
                       if($respuesta == "ok"){

                            echo '<script>
                            Swal.fire({
                                    title: "Success!",
                                    text: "¡Cambiaste tu contraseña correctamente!",
                                    icon: "success",
                                    confirmButtonText: "Ok"
                            });
                            </script>';
                            
                        }else{

                            echo ("<script>
                            Swal.fire({
                                    title: 'Error!',
                                    text: '¡No puedes usar caracteres especiales!',
                                    icon: 'error',
                                    confirmButtonText: 'Ok'
                            });
                            </script>");
                        }    
                                
                       }else{
                                echo '<script>
                                Swal.fire({
                                        title: "Error!",
                                        text: "¡Oops...Algo salio intentalo de nuevo más tarde!",
                                        icon: "error",
                                        confirmButtonText: "Ok"
                                });
                                </script>';
                       }
            }
        }

        public static function ctrConsultaridUsuario(){
            
        }
    }