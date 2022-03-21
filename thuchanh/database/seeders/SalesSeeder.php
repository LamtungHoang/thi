<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\sale;

class SalesSeeder extends Seeder
{
    public function run()
    {
        // Sale::factory(3)->create();
        $sell= new Sale();
        $sell->name = "cơ sở hà đông";
        $sell->phone ="0982299123";
        $sell->email = "lamtung@gmail.com";
        $sell->address ="Ha Dong";
        $sell->name_sell ="Hoàng Lâm Tùng";
        $sell->status_id= 1;
        $sell->save();


        $sell= new Sale();
        $sell->name = "cơ sở tạ hiện";
        $sell->phone ="0982299321";
        $sell->email = "tuanmo@gmail.com";
        $sell->address ="hung yen";
        $sell->name_sell ="mỡ Tuấn";
        $sell->status_id = 2;
        $sell->save();
    }
}
