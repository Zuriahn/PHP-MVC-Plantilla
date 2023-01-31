<?php 

function redirectPage($view){
    header(('location: ' . constant('ROUTE_URL') .$view));
}