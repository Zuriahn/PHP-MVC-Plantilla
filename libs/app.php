<?php
require_once 'controllers/errorfound.php';
class App{

    function __construct()
    {

        $url = isset($_GET['url']) ? $_GET['url'] : null;

        $url = rtrim($url, '/');

        $url = explode('/', $url);

        if(empty($url[0])){
            $fileController = 'controllers/home.php';
            require_once $fileController;
            $controller = new Home();
            $controller->index();
            return false;
        }

        $fileController = 'controllers/' . $url[0] . '.php';

        if(file_exists($fileController)){
            require_once $fileController;
            $controller = new $url[0]();

            $nparam = sizeof($url);

            if($nparam > 1){
                if(!method_exists($controller, $url[1])){
                    $controller = new ErrorFound();
                    $controller->index();
                }else{
                    if($nparam > 2){
                        $param = [];
                        for($i = 2; $i<$nparam; $i++){
                            array_push($param, $url[$i]);
                        }
                        $controller->{$url[1]}($param);
                    }else{
                        $controller->{$url[1]}();
                    }
                }
            }else{
                $controller->index();
            }

        }else{
            $controller = new ErrorFound();
            $controller->index();
        }
    }

}

?>