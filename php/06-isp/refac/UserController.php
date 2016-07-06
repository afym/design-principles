<?php

class UserController implements 
    CreateContract, 
    UpdateContract, 
    ListContract, 
    DeleteContract    
{

    public function createAction()
    {
        return "use create ...";
    }

    public function deleteAction()
    {
        return "use delete ...";
    }

    public function listAction()
    {
        return "use list ...";
    }

    public function updateAction()
    {
        return "use update ...";
    }

}
