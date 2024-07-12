<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Controllers\Auth\SessionController;

use App\Models\UserModel;

class RegisterController extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data = [
            'title' => 'Signup page'
        ];
        return view('auth/register', $data);
    }

    public function register()
    {
        helper(['form']);
        $rules = [
            'name'          => 'required|min_length[2]|max_length[50]',
            'username'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'confirmpassword'  => 'matches[password]'
        ];

        if ($this->validate($rules)) {
            $user = new userModel();
            $data = [
                'name'     => $this->request->getVar('name'),
                'username'     => $this->request->getVar('username'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];

            $user->save($data);
            $authSession = new SessionController();
            $authSession->authorised($data);

            return redirect()->to('/');
        } else {
            $data['validation'] = $this->validator;
            echo view('auth/register', $data);
        }
    }
}
