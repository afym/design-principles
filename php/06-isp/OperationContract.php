<?php

interface OperationContract {
    public function authAction();
    public function listAction();
    public function addAction();
    public function editAction();
    public function createAction();
}