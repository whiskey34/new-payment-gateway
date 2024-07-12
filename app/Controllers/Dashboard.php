<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();

        $authorised = $session->get('isLoggedIn') ? true : false;

        $data = [
            'title' => 'Dashboard',
            'authorised' => $authorised

        ];
        return view('pages/dashboard', $data);
    }
}
