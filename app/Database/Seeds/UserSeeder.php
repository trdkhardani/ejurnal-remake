<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UsersModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user = new UsersModel();

        $user->insertBatch([
            [
                "username" => "author",
                "role" => "author",
                "email" => "author@gmail.com",
                "password" => password_hash("author", PASSWORD_BCRYPT)
            ],
            [
                "username" => "editor",
                "role" => "editor",
                "email" => "editor@gmail.com",
                "password" => password_hash("editor", PASSWORD_BCRYPT)
            ],
            [
                "username" => "reviewer",
                "role" => "reviewer",
                "email" => "reviewer@gmail.com",
                "password" => password_hash("reviewer", PASSWORD_BCRYPT)
            ]
        ]);
    }
}
