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
            'users' => $this->userModel->findAll() ?? 0,
        ];

        return view('pages/users/index', $data);
    }

    public function create()
    {
        $firstname = $this->request->getPost('firstname');
        $lastname = $this->request->getPost('lastname');
        $email = $this->request->getPost('email');
        $role = $this->request->getPost('role');
        $password = $this->request->getPost('password');
        $confirmPassword = $this->request->getPost('confirmPassword');
        $avatar = $this->request->getFile('avatar');

        $data = [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'role' => $role,
            'password' => $password,
            'confirmPassword' => $confirmPassword,
            'avatar' => $avatar,
        ];

        if ($this->userModel->save($data)) {
            return redirect()->to('/users')->with('success', 'User created successfully');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->userModel->errors());
        }
    }

    public function edit($id)
    {
        $user = $this->userModel->find($id);

        $firstname = $this->request->getPost('firstname');
        $lastname = $this->request->getPost('lastname');
        $email = $this->request->getPost('email');
        $role = $this->request->getPost('role');
        $password = $this->request->getPost('password');
        $confirmPassword = $this->request->getPost('confirmPassword');
        $avatar = $this->request->getFile('avatar');

        $data = [
            'id' => $id,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'role' => $role,
            'password' => $password,
            'confirmPassword' => $confirmPassword,
            'avatar' => $avatar,
        ];

        $data = array_filter($data, function ($value) {
            return !empty($value);
        });

        if ($user && $user['email'] === $data['email']) {
            unset($data['email']);
        }

        if ($this->userModel->save($data)) {
            return redirect()->to('/users')->with('success', 'User updated successfully');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->userModel->errors());
        }
    }

    public function delete($id)
    {
        if ($this->userModel->delete($id)) {
            return redirect()->to('/users')->with('success', 'User deleted successfully');
        } else {
            return redirect()->to('/users')->with('errors', 'User not found');
        }
    }
}
