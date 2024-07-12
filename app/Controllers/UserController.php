<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    public function index()
    {
        $session = session();
        
        // Check if the user is logged in
        $authorised = $session->get('isLoggedIn') ? true : false;
        
        $data = [
            'title' => 'My Profile',
            'authorised' => $authorised
        ];

        return view('pages/user/profile', $data);
    }
}
