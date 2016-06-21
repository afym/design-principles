<?php

require_once './OperationContract.php';

class UserController implements OperationContract
{

    public function authAction()
    {
        throw new Exception("No add action implemented ...");
    }

    public function addAction()
    {
        return "use add ...";
    }

    public function createAction()
    {
        return "create add ...";
    }

    public function editAction()
    {
        return "edit add ...";
    }

    public function listAction()
    {
        return "list add ...";
    }

}
