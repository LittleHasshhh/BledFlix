<?php

require_once '../src/controller/usersControls.php';


switch ($uri) {
    case '/':
        $controller = new usersControls();
        $controller->login();
        break;
    case '/create':
        $controller = new usersControls();
        $controller->create();
        break;
    case '/main':
        $controller = new usersControls();
        $controller->mainPage();
        break;
    default:
        //$controller = new errorControls();
        //$controller->error404();
        break;
}