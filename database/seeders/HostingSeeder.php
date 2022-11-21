<?php

namespace Database\Seeders;

use App\Models\Hosting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HostingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hosting::create([
            'hosting_name' =>'Namechep',
            'description' =>'Best Hosting Company',
        ]);
        Hosting::create([
            'hosting_name' =>'Web Host BD',
            'description' =>'Best Hosting Company BD',
        ]);
    }
}