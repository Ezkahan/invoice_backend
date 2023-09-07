<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Session;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sessionList = [
            [
                'user_id' => 1,
                'activated' => null,
                'appointment' => '2021-01-22',
            ],
            [
                'user_id' => 2,
                'activated' => '2021-01-01',
                'appointment' => '2021-01-01',
            ],
            [
                'user_id' => 2,
                'activated' => '2021-02-01',
                'appointment' => null,
            ],
            [
                'user_id' => 4,
                'activated' => '2021-01-15',
                'appointment' => null,
            ],
            [
                'user_id' => 4,
                'activated' => '2021-01-16',
                'appointment' => null,
            ],
            [
                'user_id' => 4,
                'activated' => '2021-03-01',
                'appointment' => '2021-01-30',
            ],
            [
                'user_id' => 4,
                'activated' => null,
                'appointment' => '2021-01-30',
            ],
            [
                'user_id' => 8,
                'activated' => '2021-03-03',
                'appointment' => '2021-03-03',
            ],
            [
                'user_id' => 9,
                'activated' => null,
                'appointment' => '2021-12-22',
            ],
            [
                'user_id' => 10,
                'activated' => '2021-12-01',
                'appointment' => null,
            ],
            [
                'user_id' => 10,
                'activated' => '2021-12-02',
                'appointment' => null,
            ],
            [
                'user_id' => 10,
                'activated' => '2021-12-03',
                'appointment' => null,
            ],
            [
                'user_id' => 10,
                'activated' => null,
                'appointment' => '2021-12-04',
            ],
            [
                'user_id' => 3,
                'activated' => '2021-01-01',
                'appointment' => null,
            ],
            [
                'user_id' => 5,
                'activated' => null,
                'appointment' => '2021-04-01',
            ],
            [
                'user_id' => 5,
                'activated' => '2021-04-01',
                'appointment' => null,
            ],
        ];

        // clean table before insert
        Session::truncate();

        foreach ($variable as $key => $value) {
            Session::create($sessionData);
        }
    }
}
