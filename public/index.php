<?php
session_start();

require_once '../core/routeur.php';

$routeur = new routeur();
$routeur->dispatch($_SERVER['REQUEST_URI']);
?>
