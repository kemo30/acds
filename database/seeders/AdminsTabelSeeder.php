<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminsTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'kemo mohamed',
            'email' => 'k@test.net',
            'password' => Hash::make('123456789'),
            'super_admin'=> true,
            
        ]);
    }
}
