<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Users extends BaseController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        return view('users', ['users' =>  $this->userModel->findAll()]);
    }

    public function delete()
    {
        $this->userModel->delete($_POST['id']);
    }



    public function insert()
    {
        $this->userModel->save($_POST);
    }
    public function edit()
    {
        $this->userModel->update($_POST['id'], $_POST['editUser']);
    }
}
