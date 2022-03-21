<?php

namespace Database\Seeders;

use App\Models\status;
use Illuminate\Database\Seeder;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses= new Status();
        $statuses->name = "Hoạt Động";
        $statuses->save();

        $statuses= new Status();
        $statuses->name = "Ngưng Hoạt Động";
        $statuses->save();
    }
}
