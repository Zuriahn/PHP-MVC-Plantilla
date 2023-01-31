<?php

    class Controller{

        function __construct()
        {
/*             echo "<p> Controlador base </p>"; */
/*             $this->view = new View(); */
        }

/*         function model($model){
            require_once 'models/'. $model . '.php';

            return new $model();
        } */

        function render($view, $data= []){
            if(file_exists('views/' . $view . '.php')){
                require_once 'views/' . $view . '.php';
            }else{
                die('La vista no existe');
            }
        }

    }