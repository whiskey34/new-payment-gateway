<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Controllers\Auth\SessionController;

use App\Models\UserModel;

class LoginController extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data = [
            'title' => 'Login Page'
        ];
        return view('auth/login', $data);
    }

    public function login()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = new UserModel();
        $data = $user->where('email', $email)->first();

        if ($data) {
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if ($authenticatePassword) {
                $authSession = new SessionController();
                $authSession->authorised($data);
                return redirect()->route('/');
            } else {
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->back()->withInput();
            }
        } else {
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->back()->withInput();
        }
    }

    public function logout()
    {
        $authSession = new SessionController();
        $authSession->unauthorised();
        return redirect()->to('/login');
    }
}
