<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        echo "GG";
        Customer::factory()->count(25)->hasInvoices(10)->create(); 
        Customer::factory()->count(100)->hasInvoices(5)->create(); 
        Customer::factory()->count(100)->hasInvoices(3)->create(); 
        Customer::factory()->count(5)->create(); 
    }
}
