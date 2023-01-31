<?php

class ErrorFound extends Controller{

    function __construct()
    {
/*         parent::__construct(); */
/*         $this->mensaje = "Error al cargar el recurso"; */
/*         $this->view->render('error/index'); */
/*         echo "<p> Error al cargar </p>"; */
    }

    function index(){
        $mensaje = "Error al cargar el recurso";
        $this->render('error/index');
    }

}

?>