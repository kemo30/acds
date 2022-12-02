<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminFactory extends Factory
{

    protected $model = Admin::class;
   
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make('123456789'),
            'super_admin'=> false,
            'remember_token' => Str::random(16),
        ];
    }
}
