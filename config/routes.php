<?php

require_once '../src/controller/usersControls.php';
require_once '../src/controller/errorControls.php';
require_once '../src/controller/adminControls.php';
require_once '../src/controller/accountControls.php';


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
    case "/admin":
        $controller = new adminControls();
        $controller->admin();
        break;
    case "/add":
        $controller = new adminControls();
        $controller->add();
        break;
    case "/edite":
        $controller = new adminControls();
        $controller->edit();
        break;
    case "/categorie":
        $controller = new usersControls();
        $controller->oneCategorie();
        break;
    case "/search":
        $controller = new usersControls();
        $controller->searchFilm();
        break;
    case "/sup":
        $controller = new adminControls();
        $controller->sup();
        break;
    case "/account":
        $controller = new accountControls();
        $controller->accountPage();
        break;
    case "/accountUpdate":
        $controller = new accountControls();
        $controller->accountUpdate();
        break;
    default:
        $controller = new errorControls();
        $controller->error404();
        break;
    
}