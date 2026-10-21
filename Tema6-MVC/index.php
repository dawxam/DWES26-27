<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once "./controller/VideojuegoController.php";

    $controller = new VideojuegoController();
    
    $action = $_GET['action'] ?? 'index';
    $id = $_GET['id'] ?? null;

    if ($action == 'create') {
        $controller->create();
    }elseif ($action == 'delete' && $id) {
        $controller->delete($id);
    }elseif ($action == 'edit' && $id) {
        $controller->edit($id);
    } else {
        $controller->index();
    }
?>