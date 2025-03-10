<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    protected $helpers = ['form', 'url'];
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new \App\Models\UserModel();
    }

    public function index()
    {
        $data = [
            // 'users' => $this->userModel->findAll() ?? 0,
            'users' =>  0,
        ];

        return view('pages/users/index', $data);
    }
}
