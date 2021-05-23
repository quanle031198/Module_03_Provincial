<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer  = new Customer();
        $customer->id = 1;
        $customer->name = 'Trung';
        $customer->email = 'Trung@gmail.com';
        $customer->city_id = 1;
        $customer->save();

        $customer  = new Customer();
        $customer->id = 2;
        $customer->name = 'Nam';
        $customer->email = 'Nam@gmail.com';
        $customer->city_id = 1;
        $customer->save();

        $customer  = new Customer();
        $customer->id = 3;
        $customer->name = 'Hoa';
        $customer->email = 'Hoa@gmail.com';
        $customer->city_id = 2;
        $customer->save();
        
        $customer  = new Customer();
        $customer->id = 4;
        $customer->name = 'Hang';
        $customer->email = 'Hang@gmail.com';
        $customer->city_id = 2;
        $customer->save();
    }
}
