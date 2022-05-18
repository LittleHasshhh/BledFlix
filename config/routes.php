<?php

require_once '../src/controller/usersControls.php';


switch ($uri) {
    case '/':
        $controller = new usersControls();
        $controller->login();
        break;
    default:
        //$controller = new errorControls();
        //$controller->error404();
        break;
}