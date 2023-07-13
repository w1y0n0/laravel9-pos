<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Administrator',
                'username' => 'admin',
                'password' => bcrypt('12345'),
                'level' => 1,
                'email' => 'admin@labsiproject.com'
            ],
            [
                'name' => 'Kasir',
                'username' => 'kasir',
                'password' => bcrypt('12345'),
                'level' => 2,
                'email' => 'kasir@labsiproject.com'
            ],
            [
                'name' => 'Pimpinan',
                'username' => 'pimpinan',
                'password' => bcrypt('12345'),
                'level' => 3,
                'email' => 'pimpinan@labsiproject.com'
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
