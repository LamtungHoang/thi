<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\sales;
use App\Models\statuses;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            StatusesSeeder::class,
            SalesSeeder::class
        ]);
    }
}
