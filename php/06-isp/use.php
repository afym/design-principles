<?php

require_once './AuthController.php';
require_once './UserController.php';

$authController = new AuthController();

if ($authController->authAction()) {
    $userController = new UserController();
    echo "A : {$userController->addAction()}\n";
    echo "B : {$userController->editAction()}\n";
    echo "C : {$userController->listAction()}\n";

    try {
        echo "D : {$userController->authAction()}\n";
    } catch (Exception $e) {
        echo "ERROR : {$e->getMessage()} \n";
    }
}