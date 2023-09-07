<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customerList = [
            'name' => 'Customer 1',
            'name' => 'Customer 2',
        ];

        // clean table before insert
        Customer::truncate();

        foreach ($customerList as $customerData) {
            Customer::create($customerData);
        }
    }
}
