<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'                 => 1,
                'name'               => 'Admin',
                'email'              => 'admin@admin.com',
                'password'           => '$2y$10$XSYKHzRVMcSF2.h9I5Ckxuj6xaXZ8J9IiNNLviAo446qkKiLe2FvC',
                'remember_token'     => null,
                'approved'           => 1,
                'verified'           => 1,
                'verified_at'        => '2020-05-01 19:50:59',
                'verification_token' => '',
            ],
        ];

        User::insert($users);

    }
}
