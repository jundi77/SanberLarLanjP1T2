<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // pass: testtest
        DB::table('users')->insert([
            [
                'name' => 'guest',
                'email' => 'guest@gmail.com',
                'password' => '$2y$10$sQyG3PK3mQMtBcaeFMciU.Y0W2xunuZHV/dUXqEoBKLgUxpse0NZO',
                'role_id' => 'guest'
            ],
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => '$2y$10$sQyG3PK3mQMtBcaeFMciU.Y0W2xunuZHV/dUXqEoBKLgUxpse0NZO',
                'role_id' => 'admin'
            ],
            [
                'name' => 'root',
                'email' => 'root@gmail.com',
                'password' => '$2y$10$sQyG3PK3mQMtBcaeFMciU.Y0W2xunuZHV/dUXqEoBKLgUxpse0NZO',
                'role_id' => 'superadmin'
            ]
        ]);
    }
}
