<?php
class Router {
    public static function route($url) {
        $url = explode('/', $url);
        $controllerName = ucfirst($url[0]) . 'Controller';
        $action = isset($url[1]) ? $url[1] : 'index';

        // Set default controller jika tidak ada controller yang ditentukan
        if (empty($url[0])) {
            $controllerName = 'HomeController';
            $action = 'index';
        }

        // Memuat controller dan action yang sesuai
        $controllerPath = "../app/controllers/" . $controllerName . ".php";
        if (file_exists($controllerPath)) {
            require_once $controllerPath;
            $controller = new $controllerName();
            if (method_exists($controller, $action)) {
                $controller->$action();
            } else {
                echo "Error: method $action not found in $controllerName.";
            }
        } else {
            echo "Error: controller $controllerName not found.";
        }
    }
}
