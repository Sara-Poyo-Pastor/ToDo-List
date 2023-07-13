<?php
require_once  'config/dbConfig.php';
include('controller/todoListController.php');

/**
 *  Declaro la variable que mostrara la pagina principal
 */
$function = "index";

/**
 * Recibo como parametro las diferentes llamadas a los metodos del Backend
 */
if (isset($_GET['function']) && !empty($_GET['function'])) 
{
    $function = $_GET['function'];
}

/**
 *  Instanciando el objeto que accederá a los datos
 */
$obj = new TodoListController();

if (method_exists('TodoListController', $function)) 
{
    $obj->$function();
} else {
    echo 'Function not found';
}
?>