<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$tOjMG5sqMtAmep0gMS9UxetoGrV/WIRizPv0E5F4skX0tHtpEObZ.',
                'remember_token' => null,
                'approved'       => 1,
            ],
        ];

        User::insert($users);

    }
}
