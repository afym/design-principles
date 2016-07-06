<?php

require_once './CreateContract.php';
require_once './UpdateContract.php';
require_once './ListContract.php';
require_once './DeleteContract.php';
require_once './AuthController.php';
require_once './UserController.php';

$authController = new AuthController();

if ($authController->authenticateAction()) {
    $userController = new UserController();
    echo "A : {$userController->deleteAction()}\n";
    echo "B : {$userController->updateAction()}\n";
    echo "C : {$userController->listAction()}\n";
    echo "Done! \n";
}