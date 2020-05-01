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
                'password'           => '$2y$10$3cJGsFM/iXNhdMxFuAHIF.0ZEDPAtw54heO0z9SXynLG.BVX3NFHG',
                'remember_token'     => null,
                'approved'           => 1,
                'verified'           => 1,
                'verified_at'        => '2020-05-01 20:06:16',
                'verification_token' => '',
            ],
        ];

        User::insert($users);

    }
}
