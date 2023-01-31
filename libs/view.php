<?php

    class View{

        function __construct()
        {
/*             echo "<p> Controlador View </p>"; */
        }

        function render($view){
            require 'views/' . $view . '.php';
        }

    }