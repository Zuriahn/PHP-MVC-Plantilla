<?php
require_once 'models/ModelUsuario.php';
class Usuario extends Controller{

    function __construct()
    {
/*         parent::__construct(); */
/*         echo "<p> Usuario controlador </p>"; */
    }

    function index(){
        $user = new ModelUsuario();
        $data = $user->getUsers();
        $this->render('usuario/index', $data);
    }

    function insertar(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $user = new ModelUsuario();

            $data_request = [
                "id_user" => trim($_POST['id_user']),
                "user_email" => trim($_POST['user_email']),
                "user_name" => trim($_POST['user_name']),
                "first_name" => trim($_POST['first_name']),
                "last_name" => trim($_POST['last_name']),
                "user_password" => trim($_POST['user_password']),
                "rol" => trim($_POST['rol']),
                "user_date" => trim($_POST['user_date']),
                "gender" => trim($_POST['gender']),
                "private" => trim($_POST['private'])
            ];

            if($user->insertUser($data_request)){
                redirectPage('usuario');
            }else{
                die('something go wrong...');
            }

        }else{
            $this->render('usuario/insertar');  
        }
    }

    function mostrar($params =[]){
        echo implode($params);
        $this->render('usuario/mostrar');
    }

}

?>