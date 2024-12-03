<?php

class Autenticacion {

    /* Verifica las credenciales del usuario, y de ser correcto gurda los datos en uns sesion */

    public function log_in(string $usuario, string $password){

        //Instanciar la clase usuario con el metodo 
        $datosUsuario = (new Usuario())->usuario_x_username($usuario);

        //Comprobaciones si el usuario existe , comprobar si la contraseña es correcta

        if($datosUsuario){
                if(password_verify($password, $datosUsuario->getPassword() )){
                       $datosLogin['username'] = $datosUsuario->getNombre_usuario(); 
                       $datosLogin['id'] = $datosUsuario->getId();
                       $_SESSION['loggedIn'] = $datosLogin;
                       return TRUE;
                }else {
                    (new Alerta())->add_alerta("danger" , "El password ingresado no es correcto");
                    return FALSE;
                }
        }else {
            (new Alerta())->add_alerta("warning" , "El usuario ingresado no existe en la base de datos");
            return FALSE;
        }
    }
    
    //Metodo Logout

    public function log_out(){
            if(isset($_SESSION['loggedIn'])){
                unset($_SESSION['loggedIn']);
            }
    }


// Verificar si el usuario esta logeado

    public function verify() {
        if(isset($_SESSION['loggedIn'])){
            return True;
        }else {
            header('Location: index.php?sec=login');
        }
    }



}











?>
