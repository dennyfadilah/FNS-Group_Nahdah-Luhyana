<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    public function login()
    {
        return view('pages/auth/login');
    }

    public function loginHandler()
    {
        $userModel = new \App\Models\UserModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $userModel->where('email', $email)->first();

        if (!$user) {
            return redirect()->back()->withInput()->with('errors', ['email' => 'Email not found']);
        }

        if (!password_verify($password, $user['password'])) {
            return redirect()->back()->withInput()->with('errors', ['password' => 'Password is incorrect']);
        }

        $data = [
            'id' => $user['id'],
            'email' => $user['email'],
            'name' => $user['firstname'] . ' ' . $user['lastname'],
            'role' => $user['role'],
            'isLoggedIn' => true
        ];

        session()->set($data);
        session()->regenerate();

        return redirect()->to('/');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
