<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

use App\Models\UserModel;

class UserSeed extends Seeder
{
    public function run()
    {
        $userModel = new UserModel();

        $data = [
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'username' => 'admin',
            'password' => password_hash('12345678', PASSWORD_DEFAULT), // Hashing the password
        ];

        $userModel->insert($data);
    }
}
