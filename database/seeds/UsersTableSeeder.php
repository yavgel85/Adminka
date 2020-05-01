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
                'password'           => '$2y$10$N6ell4i8Vv5Pq4qxtdtQHuVUQn6cNb2VRV5ghlbrXV.ro4nR/tbYC',
                'remember_token'     => null,
                'approved'           => 1,
                'verified'           => 1,
                'verified_at'        => '2020-05-01 20:46:16',
                'verification_token' => '',
            ],
        ];

        User::insert($users);

    }
}
