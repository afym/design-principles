<?php

require_once './OperationContract.php';

class AuthController implements OperationContract
{

    public function authAction()
    {
        // get user credentials
        // validate user 
        return true;
    }

    public function addAction()
    {
        throw new Exception("No add action implemented ...");
    }

    public function createAction()
    {
        throw new Exception("No add action implemented ...");
    }

    public function editAction()
    {
        throw new Exception("No add action implemented ...");
    }

    public function listAction()
    {
        throw new Exception("No add action implemented ...");
    }

}
