<?php

class adminControls {

    public function admin() {
        if (!isset($_SESSION['user']) && $_SESSION['user']['role'] !== "ROLE_ADMIN") {
            header('Location: /');
        }
        require_once __DIR__. '../../../templates/admin.php';
    }
}