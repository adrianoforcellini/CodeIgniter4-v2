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

    public function delete($id)
    {
        if ($this->userModel->delete($id)) {
            return view('users', ['users' =>  $this->userModel->findAll()]);
        } else {
            echo "Houve algum erro. Tente novamente";
        }
    }



    public function insert()
    {
        if ($this->userModel->save($_POST)) {
            echo "Usuário Salvo";
        } else {
            echo "Houve alguma falha ao tentar salvar usuário";
        }
    }
    public function edit()
    {
        if ($this->userModel->update($_POST['id'],$_POST['editUser'])) {
            echo "Usuário Salvo";
        } else {
            echo "Houve alguma falha ao tentar salvar usuário";
        }
    }
}
