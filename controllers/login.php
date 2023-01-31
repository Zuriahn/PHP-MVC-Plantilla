<?php
require_once 'models/ModelUsuario.php';
    class Login extends Controller{

        function index(){
            
            if($_SERVER['REQUEST_METHOD'] == 'POST'){


            }else{
                $this->render('login/index');
            }
            
        }

    }

    ?>