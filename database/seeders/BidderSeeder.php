<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bidder;

class BidderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $bidders = [
            ['last_name' => 'Smith', 'first_name' => 'John', 'address' => '123 Main St, New York', 'email' => 'john.smith@example.com'],
            ['last_name' => 'Johnson', 'first_name' => 'Emily', 'address' => '456 Elm St, Los Angeles', 'email' => 'emily.johnson@example.com'],
            ['last_name' => 'Williams', 'first_name' => 'Michael', 'address' => '789 Pine St, Chicago', 'email' => 'michael.williams@example.com'],
            ['last_name' => 'Brown', 'first_name' => 'Sarah', 'address' => '101 Maple St, Houston', 'email' => 'sarah.brown@example.com'],
            ['last_name' => 'Davis', 'first_name' => 'James', 'address' => '202 Oak St, Miami', 'email' => 'james.davis@example.com'],
        ];

        foreach ($bidders as $bidder) {
            Bidder::create($bidder);
        }
    }
}
