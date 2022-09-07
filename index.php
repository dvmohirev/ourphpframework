<?php
/*if (isset($_GET['path'])){
    switch ($_GET['path']){
        case 'hello':{
            echo 'Hello!';
            break;
        }
        case 'message':{
            echo 'message';
            break;
        }
    }
}*/
/*echo '<h2>Путь запроса, переданный в точку входа:</h2>';
echo $_GET['path'];*/
require_once "vendor/autoload.php";

use Framework\Routing\Request;
use Framework\Routing\Router;

require_once "vendor/autoload.php";
echo (new Router(new Request()))->getContent();