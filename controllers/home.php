<?php

class Home extends Controller{

    function __construct()
    {
/*         parent::__construct(); */
        /* $this->view->render('home/index'); */
/*         echo "<p> Home controlador </p>"; */
    }

    function index(){
        $this->render('home/index');
    }

    function show(){
        $this->render('home/show');
    }

}

?>