<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = 
            ['id'=>'1',
            'username' => 'karim',
            'password' => bcrypt('123456'),];
    
    
        Admin::create($admin);
    }
}
