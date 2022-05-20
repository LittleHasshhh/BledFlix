<?php

require_once '../src/controller/usersControls.php';
require_once '../src/controller/cateControls.php';
require_once '../src/controller/errorControls.php';


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
    case "/logOut":
        $controller = new usersControls();
        $controller->logOut();
        break;
    case '/main':
        $controller = new cateControls();
        $controller->cateList();
        break;
    default:
        $controller = new errorControls();
        $controller->error404();
        break;
    
}