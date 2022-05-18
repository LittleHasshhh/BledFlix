<?php

// permet de rediriger l'utilisateur selon une adress personaliser
class routeur {

    public function dispatch(string $uri = '/'){
        $position = strpos($uri, '?');

        if ($position) {
            $uri = substr($uri, 0, $position);
            
        }
        if ($uri !== '/') {
            $lastChar = substr($uri, -1, iconv_strlen($uri));

            if ($lastChar === '/') {
                $uri = substr($uri, 0, iconv_strlen($uri) - 1);
            }
        }
        require_once '../config/routes.php';
    }

}