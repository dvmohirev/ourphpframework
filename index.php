<?php
if (isset($_GET['path'])){
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
}
