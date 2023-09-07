<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userList = [
            [
                'email' => 'user1@mail.com',
                'customer_id' => 1,
                'created' => '2021-01-01',
            ],
            [
                'email' => 'user2@mail.com',
                'customer_id' => 1,
                'created' => '2021-01-01',
            ],
            [
                'email' => 'user3@mail.com',
                'customer_id' => 1,
                'created' => '2021-01-01',
            ],
            [
                'email' => 'user4@mail.com',
                'customer_id' => 1,
                'created' => '2021-01-15',
            ],
            [
                'email' => 'user5@mail.com',
                'customer_id' => 1,
                'created' => '2021-04-01',
            ],
            [
                'email' => 'user6@mail.com',
                'customer_id' => 1,
                'created' => '2021-05-01',
            ],
            [
                'email' => 'user7@mail.com',
                'customer_id' => 1,
                'created' => '2019-01-01',
            ],
            [
                'email' => 'user8@mail.com',
                'customer_id' => 1,
                'created' => '2021-03-03',
            ],
            [
                'email' => 'user9@mail.com',
                'customer_id' => 1,
                'created' => '2020-12-22',
            ],
            [
                'email' => 'user10@mail.com',
                'customer_id' => 1,
                'created' => '2020-12-01',
            ],
        ];

        // clean table before insert
        User::truncate();

        foreach ($userList as $userData) {
            User::create($userData);
        }
    }
}
